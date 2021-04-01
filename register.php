<?php
require_once "connection.php";
if (isset($_POST['register'])){

    if($_POST['password']===$_POST['confPassword']){

        if (isset($_POST['login']))
            $login=$_POST['login'];
        if (isset($_POST['password']))
            $password=$_POST['password'];
        if (isset($_POST['fio']))
            $fio=$_POST['fio'];

        $userSQL="SELECT id from users where login='".$login."'";
        $resultUser=mysqli_query($link,$userSQL);
        $userCheck=mysqli_fetch_assoc($resultUser);

        if (!$userCheck){
            $sql = "INSERT INTO users (login, password, fio) values ('$login','$password','$fio')";

            $result = mysqli_query($link, $sql);
            if ($result) {
                echo("
				<script>
					alert('Вы зарегистрированы! Выполняется перенаправление на страницу авторизации.');
					location.href='auth.php';
				</script>");
            }
            else{
                echo("
				<script>
					alert('Ошибка при регистрации!');
				</script>");
            }
        }
        else{
            echo("
			<script>
				alert('Пользователь с таким логином уже существует!');
			</script>");
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
    <title>Регистрация</title>
</head>
<body>

<a href="connection.php">Проверка подключения</a><br>
<form method="POST"><br><br>
    <label for="login">Логин</label> <input type="text" name="login" required placeholder="Логин"/><br><br>
    <label for="password">Пароль</label> <input type="password" name="password" id="password" required placeholder="Пароль"/><br><br>
    <label for="confPassword">Подтвердите пароль</label> <input type="password" name="confPassword" id="confPassword" required placeholder="Подтвердите пароль"><br><br>
    <label for="fio">Ф.И.О</label> <input type="type" name="fio" required placeholder="Фамилия Имя Отчество"/><br><br>
    <input type="submit" value="Зарегистрироватсья" name="register"/>
</form>
<a href="/">Вернуться</a>

</body>
</html>

<script>
    $("#register").click(function () {
        let valueX = $("#password").val();
        let valueY = $("#confPassword").val();
        if (valueX != valueY) {
            alert("Введенные пароли не совпадают!");
        }
    });
</script>
