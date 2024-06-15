<?php

function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}

function dump($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function connectDB()
{
    
    $config = require(__DIR__ . '/../config/db.php');
    
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
    
    // Проверка соединения
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}

function getDBRecordsByQuery($table = 'users', $searchQuery = '')
{
    
    $conn = connectDB();
    
    $sql = "SELECT * FROM " . $table . " " . $searchQuery;
    $result = $conn->query($sql);
    
    $rows = [];
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    
    $conn->close();
    
    return $rows;
}

function getDBByQuery($query)
{
    
    $conn = connectDB();
    
    $result = $conn->query($query);
    
    $rows = [];
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    
    $conn->close();
    
    return $rows;
}


function updateDBRecord($table = 'users', $postData)
{
    $conn = connectDB();
    
    $username = $postData['user'];
    unset($postData['user']);
    $imageFields = [];
    
    // Обработка изображений
    foreach ($postData as $key => $value) {
        if (strpos($key, 'image') !== false) {
            $imageFields[$key] = $value;
            unset($postData[$key]);
        }
    }
    
    // Удаление из массива пустых значений
    $postData = array_filter($postData);
    
    // Формирование SQL-запроса
    $sql = "UPDATE $table SET " . implode('=?, ', array_keys($postData)) . '=?';
    
    // Добавление обновления полей с изображениями
    if (!empty($imageFields)) {
        foreach ($imageFields as $imageKey => $imageValue) {
            $sql .= ", $imageKey=?";
            $postData[$imageKey] = $imageValue;
        }
    }
    
    $sql .= " WHERE username=?";
    $params = array_merge(array_values($postData), [$username]);
    
    $stmt = $conn->prepare($sql);
    
    // Проверка успешности подготовки выражения
    if (!$stmt) {
        die("Error in SQL query: " . $conn->error);
    }
    
    // Используем переменные параметры для bind_param
    $types = str_repeat('s', count($params));  // Создаем строку типов параметров
    
    // Проверка успешности привязки параметров
    if (!$stmt->bind_param($types, ...$params) || !$stmt->execute()) {
        die("Error in binding/execution of parameters: " . $stmt->error);
    }
    
    $stmt->close();
    $conn->close();
    
    header("Location: /index.php?page=page-result&message=Запись успешно обновлена!");
}

function insertDBUser($table = 'users', $post)
{
    $error = false;
    $conn = connectDB();
    
    // Хеширование пароля
    $hashedPassword = md5($post['password']);
    
    // Подготовка запроса с использованием подготовленных выражений
    $sql = "INSERT INTO $table (username, password, name, phone, email) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Проверка на ошибки при подготовке запроса
    if ($stmt === false) {
        header("Location: /index.php?page=page-result&message=Ошибка при подготовке запроса: " . $conn->error);
        $error = true;
    }
    
    // Привязка параметров и выполнение запроса
    $stmt->bind_param("sssss", $post['username'], $hashedPassword, $post['name'], $post['phone'], $post['email']);
    if (!$stmt->execute()) {
        header("Location: /index.php?page=page-result&message=Ошибка при выполнении запроса: " . $stmt->error);
        $error = true;
    }
    
    // Закрытие подготовленного выражения
    $stmt->close();
    
    // Закрытие соединения
    $conn->close();
    
    if ($error) {
        exit();
    }
}

function insertDBOrder($table = 'orders', $post)
{
    $error = false;
    $conn = connectDB();
    
    // Подготовка запроса с использованием подготовленных выражений
    $sql = "INSERT INTO $table (user_id,product,qty,comment,date) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Проверка на ошибки при подготовке запроса
    if ($stmt === false) {
        header("Location: /index.php?page=page-result&message=Ошибка при подготовке запроса: " . $conn->error);
        $error = true;
    }
    
    $currentDate = date('Y-m-d');
    
    // Привязка параметров и выполнение запроса
    $stmt->bind_param("sssss", $post['user_id'], $post['product'], $post['qty'], $post['comment'], $currentDate);
    if (!$stmt->execute()) {
        header("Location: /index.php?page=page-result&message=Ошибка при выполнении запроса: " . $stmt->error);
        $error = true;
    }
    
    // Закрытие подготовленного выражения
    $stmt->close();
    
    // Закрытие соединения
    $conn->close();
    
    if ($error) {
        exit();
    }
}

