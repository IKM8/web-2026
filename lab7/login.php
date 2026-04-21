<?php
$error = '';
$email = '';
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (empty($email) || empty($password)) {
        $error = 'Поля обязательные';
    } else {
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход — Социальная сеть</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-page">
        <div class="hero">
            <div class="hero__content">
                <h1 class="hero__title">Войти</h1>
                <div class="hero__image-wrapper">
                    <img src="images/user-photo.jpg" alt="Человек с рюкзаком" class="hero__image">
                </div>
            </div>
        </div>
        <div class="auth">
            <?php if ($success): ?>
                <div class="auth__success">
                    Успешный вход! Добро пожаловать, <?= htmlspecialchars($email) ?>
                </div>
            <?php elseif ($error): ?>
                <div class="auth__error">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>
            
            <form class="auth__form" action="login.php" method="post">
                <div class="auth__field">
                    <label class="auth__label" for="email">Электропочта</label>
                    <input class="auth__input" type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
                    <p class="auth__hint">Введите электропочту в формате *****@***.**</p>
                </div>
                
                <div class="auth__field">
                    <label class="auth__label" for="password">Пароль</label>
                    <div class="auth__password-wrapper">
                        <input class="auth__password-input" type="password" id="password" name="password" required>
                        <img src="images/eye-off.jpg" alt="Показать пароль" class="auth__eye-icon">
                    </div>
                </div>
                
                <button class="auth__button" type="submit">Продолжить</button>
            </form>
        </div>
    </div>
</body>
</html>