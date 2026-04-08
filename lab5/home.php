<?php
$posts = [
    [
        'id' => 1,
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


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная - Социальная сеть</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="home-page">
        <div class="sidebar">
            <div class="sidebar__menu">
                <a href="home.php" class="sidebar__link">
                    <div class="sidebar__item">
                        <img src="images/menu_item1.jpg" alt="Главная" class="sidebar__icon">
                    </div>
                </a>
                <a href="profile.php" class="sidebar__link">
                    <div class="sidebar__item">
                        <img src="images/menu_item2.jpg" alt="Профилю" class="sidebar__icon">
                    </div>
                </a>
                <a href="add_post.php" class="sidebar__link">
                    <div class="sidebar__item">
                        <img src="images/menu_item3.jpg" alt="Создать пост" class="sidebar__icon">
                    </div>
                </a>
            </div>
        </div>
        <div class="feed">
            <?php foreach ($posts as $post) { include 'post_preview.php'; } ?>
        </div>
    </div>
</body>
</html>