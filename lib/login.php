<?php
session_start();

include('db.php');

// Авторизация
$login = $_POST['username'];
$password = md5($_POST['password']);

$rows = getDBRecordsByQuery('users', "WHERE username='$login' AND password='$password'");

if (count($rows) === 1) {
    $_SESSION['user_id'] = $rows[0]['id'];
    $_SESSION['user'] = $rows[0]['username'];
    $_SESSION['name'] = $rows[0]['name'];
    if ($rows[0]['supervisor']) {
        $_SESSION['supervisor'] = true;
    }
    header("Location: /index.php?page=page-result&message=Вы успешно вошли в систему!");
} else {
    session_unset();
    session_destroy();
    header("Location: /index.php?page=page-result&message=Неверное имя пользователя или пароль!");
}

exit();
