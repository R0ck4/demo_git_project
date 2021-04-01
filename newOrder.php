<?php
require_once 'connection.php';

if(isset($_POST['sent']))

    if(isset($_POST['named'])) $named = $_POST['named'];
    if(isset($_POST['desc'])) $desc = $_POST['desc'];

    $sql = "INSERT INTO addorder (named, description) values ('$named', '$desc')";

    $result = mysqli_query($link,$sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание заявки</title>
</head>
<body>
<form method="post" enctype="multipart/form-data"><br><br>
    <label for="named">Название</label>  <input type="text" name="named" required placeholder="Название"/><br><br>
    <label for="desc">Описание</label>  <input type="text" name="desc" id="desc" required placeholder="Описание"/><br><br>
    <label for="file">Фотографии</label>  <input type="file" name="myimage" id="file"/><br><br>

    Категория  <select name="cat">
       <option>smth</option>
       <option>smth</option>
       <option>smth</option>
   </select><br><br>
    <input type="submit" name="sent" id="sent" value="ОТПРАВИТЬ"/><br><br>

</form>
</body>
</html>