<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Используйте POST метод';
    exit;
}

$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (isset($data['image'])) {
    $base64 = $data['image'];
    

    $base64 = str_replace('data:image/jpeg;base64,', '', $base64);
    $base64 = str_replace('data:image/png;base64,', '', $base64);
    $imageData = base64_decode($base64);
    if (!file_exists('static')) {
        mkdir('static');
    }
    $filename = 'image_' . time() . '.jpg';
    $filepath = 'static/' . $filename;
    file_put_contents($filepath, $imageData);

    echo 'Картинка сохранена: ' . $filepath;
} else {
    echo 'Не передана картинка';
}
?>