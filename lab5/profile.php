<?php
$user = [
    'id' => 1,
    'name' => 'Ваня Денисов',
    'bio' => 'Привет! Я системный аналитик в ACME :) Тут моя жизнь только для самых классных!',
    'avatar' => 'images/avatar1.jpg',
    'posts_count' => 43,
    'posts' => [
        ['image' => 'images/post1.jpg', 'alt' => 'Пост 1'],
        ['image' => 'images/post2.jpg', 'alt' => 'Пост 2'],
        ['image' => 'images/post3.jpg', 'alt' => 'Пост 3'],
        ['image' => 'images/post4.jpg', 'alt' => 'Пост 4'],
        ['image' => 'images/post5.jpg', 'alt' => 'Пост 5'],
        ['image' => 'images/post6.jpg', 'alt' => 'Пост 6'],
        ['image' => 'images/post7.jpg', 'alt' => 'Пост 7'],
        ['image' => 'images/post8.jpg', 'alt' => 'Пост 8'],
        ['image' => 'images/post9.jpg', 'alt' => 'Пост 9'],
    ]
];
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
                <img src="<?= $user['avatar'] ?>" alt="<?= $user['name'] ?>" class="profile__avatar">
            </div>
            
            <h1 class="profile__name"><?= $user['name'] ?></h1>
            
            <div class="profile__bio">
                <?= $user['bio'] ?>
            </div>
            
            <div class="profile__stats">
                <img src="images/image_icon.jpg" alt="Посты" class="profile__stats-icon">
                <span class="profile__stats-count"><?= $user['posts_count'] ?> поста</span>
            </div>
            
            <div class="profile__posts">
                <div class="profile__grid">
                    <?php foreach ($user['posts'] as $post): ?>
                        <div class="profile__grid-item">
                            <img src="<?= $post['image'] ?>" alt="<?= $post['alt'] ?>" class="profile__grid-image">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>