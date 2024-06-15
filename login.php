<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];
$email = $_POST['email'];

if(empty ($login) || empty($pass) || empty($email))
{
    echo "Заполните все поля";
} else {
     $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
     $result = $conn->query($sql);

     if ($result->num_rows > 0)
     {
        while($row = $result->fetch_assoc()){
            echo "Добро пожаловать " . $row['login'];
        }
     } else {
        echo "Нет такого пользователя";
     }
}