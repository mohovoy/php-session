<?php
    require_once 'classes/User.php';
    if (isset($_POST['username']) &&
        isset($_POST['email']) &&
        isset($_POST['password'])) {
        $user = new User();
        $user->username = $_POST['username'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->saveUser();
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Имя пользователя">
        <input type="email" name="email" placeholder="Электронная почта">
        <input type="password" name="password" placeholder="Пароль">
        <button>Создать аккаунт</button>
    </form>
</body>
</html>