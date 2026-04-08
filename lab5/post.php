<?php
$posts = [
    1 => [
        'id' => 1,
        'subtitle' => '',
        'content' => 'Так красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в городке, занесенном снегом по ручку двери...»',
        'author' => 'Ваня Денисов',
        'avatar' => 'images/avatar1.jpg',
        'image' => 'images/photo1.jpg',
        'likes' => 203,
        'date' => time(),
    ],
    2 => [
        'id' => 2,
        'subtitle' => '',
        'content' => '',
        'author' => 'Лиза Дёмина',
        'avatar' => 'images/avatar2.jpg',
        'image' => 'images/photo2.jpg',
        'likes' => 0,
        'date' => strtotime('-5 hours'),
    ],
];

$menuItems = [
    ['image' => 'images/menu_item1.jpg', 'alt' => 'Меню 1'],
    ['image' => 'images/menu_item2.jpg', 'alt' => 'Меню 2'],
    ['image' => 'images/menu_item3.jpg', 'alt' => 'Меню 3'],
];

$postId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (isset($posts[$postId])) {
    $post = $posts[$postId];
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $post['title'] ?> — Социальная сеть</title>
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
        <div class="post-page">
            <div class="post-page__author">
                <img src="<?= $post['avatar'] ?>" alt="<?= $post['author'] ?>" class="post-page__avatar">
                <span class="post-page__author-name"><?= $post['author'] ?></span>
            </div>
            <?php if (!empty($post['image'])): ?>
                <img src="<?= $post['image'] ?>" alt="Фото поста" class="post-page__image">
            <?php endif; ?>
            <div class="post-page__content"><?= nl2br(htmlspecialchars($post['content'])) ?></div>
            <div class="post-page__likes">
                <img src="images/like.jpg" alt="Лайк" class="post-page__like-icon">
                <span class="post-page__likes-count"><?= $post['likes'] ?></span>
            </div>
            <div class="post-page__date"><?= date('d.m.Y H:i', $post['date']) ?></div>
            <a href="home.php" class="post-page__back">Назад к постам</a>
        </div>
    </div>
</body>
</html>