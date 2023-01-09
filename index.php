<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($_SESSION): ?>
        <title>Авторизован: <?php echo $_SESSION['username'] ?></title>
    <?php else: ?>
        <title>Главная</title>
    <?php endif ?>
</head>
<body>

    <?php if ($_SESSION): ?>
        <h1>Привет, <?php echo $_SESSION['username'] ?>! Ваша почта: <?php echo $_SESSION['email'] ?></h1>
        <a href="logout.php">Выйти с аккаунта</a>
    <?php else: ?>
        <a href="login.php">Войти</a>
        <a href="register.php">Создать аккаунт</a>
    <?php endif ?>
</body>
</html>