<?php
require "connection.php";

if (isset($_POST['enter'])) {
    if (!empty($_POST['authLogin']) && !empty($_POST['authPassword'])); {
        $authLogin = $_POST['authLogin'];
        $authPassword = $_POST['authPassword'];
        $sql ="SELECT * FROM users WHERE login='".$authLogin."' && password='".$authPassword."'";
        $result = mysqli_query($link, $sql);
        $user = mysqli_fetch_assoc($result);
        if(!empty($user)) {
            session_start();
            $_SESSION['auth'] = true;
            $_SESSION['fio'] = $user['fio'];
            header('refresh: 0.25 http://maketProject/userPage.php');
        } else {
            echo('пользователь не найден');
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
<form method="POST">
    <label for="authLogin">Логин</label> <input type="text" name="authLogin" required placeholder="Логин"/><br><br>
    <label for="authPassword">Пароль</label> <input type="text" name="authPassword" required placeholder="Пароль"/><br><br>
    <input type="submit" value="Войти" name="enter"/>
</form>
<a href="/">Вернуться</a><br>
</body>
</html>
