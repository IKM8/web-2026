<?php
require_once 'config.php';

$postId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$result = $conn->query("
    SELECT 
        post.subtitle,
        post.image,
        post.likes,
        post.created_at,
        user.username AS author,
        user.avatar
    FROM 
        post
    JOIN 
        user 
    ON 
        post.user_id = user.id
    WHERE 
        post.id = $postId
");

if ($result && $result->num_rows > 0) {
    $post = $result->fetch_assoc();
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
    <title>Пост — Социальная сеть</title>
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
                        <img src="images/menu_item2.jpg" alt="Профиль" class="sidebar__icon">
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
            <div class="post-page__content"><?= nl2br(htmlspecialchars($post['subtitle'])) ?></div>
            <div class="post-page__likes">
                <img src="images/like.jpg" alt="Лайк" class="post-page__like-icon">
                <span class="post-page__likes-count"><?= $post['likes'] ?></span>
            </div>
            <div class="post-page__date"><?= date('d.m.Y H:i', strtotime($post['created_at'])) ?></div>
            <a href="home.php" class="post-page__back">Назад к постам</a>
        </div>
    </div>
</body>
</html>