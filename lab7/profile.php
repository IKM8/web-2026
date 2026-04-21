<?php
require_once 'config.php';

$user_id = 1;

$user_result = $conn->query("
    SELECT 
        username,
        avatar,
        bio 
    FROM 
        user 
    WHERE 
        id = $user_id
");
$user = $user_result->fetch_assoc();

$count_result = $conn->query("
    SELECT 
        COUNT(*) AS count 
    FROM 
        post 
    WHERE 
        user_id = $user_id
");
$posts_count = $count_result->fetch_assoc()['count'];

$posts_result = $conn->query("
    SELECT 
        id,
        image 
    FROM 
        post 
    WHERE 
        user_id = $user_id 
    ORDER BY 
        created_at DESC
");

$posts = [];
while ($row = $posts_result->fetch_assoc()) {
    $posts[] = $row;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль - Социальная сеть</title>
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
        
        <div class="profile">
            <div class="profile__top-block"></div>
            
            <div class="profile__avatar-wrapper">
                <img src="<?= $user['avatar'] ?>" alt="<?= $user['username'] ?>" class="profile__avatar">
            </div>
            
            <h1 class="profile__name"><?= $user['username'] ?></h1>
            
            <div class="profile__bio">
                <?= $user['bio'] ?>
            </div>
            
            <div class="profile__stats">
                <img src="images/image_icon.jpg" alt="Посты" class="profile__stats-icon">
                <span class="profile__stats-count"><?= $posts_count ?> поста</span>
            </div>
            
            <div class="profile__posts">
                <div class="profile__grid">
                    <?php foreach ($posts as $post): ?>
                        <div class="profile__grid-item">
                            <img src="<?= $post['image'] ?>" alt="Пост" class="profile__grid-image">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>