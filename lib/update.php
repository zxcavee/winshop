<?php
session_start();

include('db.php');

// Проверка, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Получение данных из формы
    $params = $_POST;

    // Обработка загрузки изображений
    $uploadDirectory = '../uploads/';
    $uploadedImages = [];

    foreach ($_FILES as $fileKey => $file) {
        if (!empty($file['name'])) {
            $originalImageName = $file['name'];
            $originalImagePath = $uploadDirectory . $originalImageName;
            $imageFileType = pathinfo($originalImagePath, PATHINFO_EXTENSION);

            // Генерация уникального имени файла, чтобы избежать перезаписи
            $imageName = uniqid($fileKey . '_') . '.' . $imageFileType;
            $imagePath = $uploadDirectory . $imageName;

            $uploadResult = move_uploaded_file($file['tmp_name'], $imagePath);

            if ($uploadResult) {
                $uploadedImages[$fileKey] = $imageName;
            }
        }
    }

    // Добавление имен файлов к параметрам
    $params = array_merge($params, $uploadedImages);

    // Обновление строки в базе данных
    updateDBRecord('users', $params);

} else {
    header("Location: /index.php");
}

exit();
