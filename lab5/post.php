<?php
$posts = [
    1 => [
        'id' => 1,
        'title' => 'The Road Ahead',
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
        'title' => 'Стакан с цветами',
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
} else {
    http_response_code(404);
    echo "<h1>Пост не найден</h1>";
    echo "<a href='home.php'>Вернуться на главную</a>";
    exit;
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
        <div class="post-page">
            <h1 class="post-page__title"><?= htmlspecialchars($post['title']) ?></h1>
            <div class="post-page__author">
                <img src="<?= $post['avatar'] ?>" alt="<?= $post['author'] ?>" class="post-page__avatar">
                <span class="post-page__author-name"><?= $post['author'] ?></span>
            </div>
            <?php if (!empty($post['image'])): ?>
                <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>" class="post-page__image">
            <?php endif; ?>
            <div class="post-page__content"><?= nl2br(htmlspecialchars($post['content'])) ?></div>
            <div class="post-page__likes">
                <img src="images/like.jpg" alt="Лайк" class="post-page__like-icon">
                <span class="post-page__likes-count"><?= $post['likes'] ?></span>
            </div>
            <div class="post-page__date"><?= date('d.m.Y H:i', $post['date']) ?></div>
            <a href="home.php" class="post-page__back">← Назад к постам</a>
        </div>
    </div>
</body>
</html>