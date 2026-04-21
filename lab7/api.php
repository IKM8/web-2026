<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Используйте POST метод';
    exit;
}

$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (!$data) {
    echo 'Некорректный JSON';
    exit;
}

$image_path = null;

if (isset($data['image'])) {
    $base64 = $data['image'];
    $base64 = str_replace('data:image/jpeg;base64,', '', $base64);
    $base64 = str_replace('data:image/png;base64,', '', $base64);
    $imageData = base64_decode($base64);
    
    if (!file_exists('images')) {
        mkdir('images');
    }
    
    $filename = 'post_' . time() . '.jpg';
    $image_path = 'images/' . $filename;
    file_put_contents($image_path, $imageData);
    echo 'Картинка сохранена: ' . $image_path . '<br>';
}

if (isset($data['user_id']) && isset($data['subtitle'])) {
    $user_id = (int)$data['user_id'];
    $subtitle = $conn->real_escape_string($data['subtitle']);
    $likes = isset($data['likes']) ? (int)$data['likes'] : 0;
    $image_sql = $image_path ? "'$image_path'" : "NULL";
    
    $sql = "
        INSERT INTO 
            post (
            user_id, 
            subtitle, 
            image, 
            likes
            )
        VALUES (
            $user_id, 
            '$subtitle', 
            $image_sql, 
            $likes
            )
    ";
    
    if ($conn->query($sql)) {
        echo 'Пост сохранён в БД. ID: ' . $conn->insert_id;
    } else {
        echo 'Ошибка БД: ' . $conn->error;
    }
} else {
    echo 'Не переданы данные для поста (user_id, subtitle)';
}

$conn->close();
?>