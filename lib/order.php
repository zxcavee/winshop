<?php
session_start();

include('db.php');

// Регистрация
insertDBOrder('orders', $_POST);

header("Location: /index.php?page=page-result&message=Заказ успшено размещен!");

exit();
