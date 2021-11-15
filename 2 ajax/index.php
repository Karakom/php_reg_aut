<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <form>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        </p>
        <p class="msg none">Lorem ipsum dolor sit amet.</p>
        <button type="submit" class="login-btn">Войти</button>

        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!

    </form>

    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>