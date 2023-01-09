<?php
    require_once 'classes/User.php';
    if (isset($_POST['username']) &&
        isset($_POST['password'])) {
        $user = new User();
        $user->username = $_POST['username'];
        $user->password = $_POST['password'];
        $user->loginUser();
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Имя пользователя">
        <input type="password" name="password" placeholder="Пароль">
        <button>Войти</button>
    </form>
</body>
</html>