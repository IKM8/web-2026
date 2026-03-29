<?php
$posts = [
    [
        'id' => 1,
        'title' => 'The Road Ahead',
        'subtitle' => 'Так красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в гор...',
        'img_modifier' => '',
        'author' => 'Ваня Денисов',
        'avatar' => 'images/avatar1.jpg',
        'image' => 'images/photo1.jpg',
        'likes' => 203,
        'date' => time(),
        'has_slider' => true,
        'images_count' => 3,
    ],
    [
        'id' => 2,
        'title' => 'Стакан с цветами',
        'subtitle' => '',
        'img_modifier' => '',
        'author' => 'Лиза Дёмина',
        'avatar' => 'images/avatar2.jpg',
        'image' => 'images/photo2.jpg',
        'likes' => 0,
        'date' => strtotime('-5 hours'),
        'has_slider' => false,
        'images_count' => 1,
    ],
];

$menuItems = [
    ['image' => 'images/menu_item1.jpg', 'alt' => 'Меню 1'],
    ['image' => 'images/menu_item2.jpg', 'alt' => 'Меню 2'],
    ['image' => 'images/menu_item3.jpg', 'alt' => 'Меню 3'],
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная — Социальная сеть</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <div class="sidebar">
            <div class="sidebar__menu">
                <?php foreach ($menuItems as $item): ?>
                    <div class="sidebar__item">
                        <img src="<?= $item['image'] ?>" alt="<?= $item['alt'] ?>" class="sidebar__icon">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="feed">
            <?php foreach ($posts as $post) { include 'post_preview.php'; } ?>
        </div>
    </div>
</body>
</html>