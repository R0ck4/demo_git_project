<?php
require_once 'functions.php';
require_once 'connection.php';

if(isset($_FILES['file'])) {

    $check = can_upload($_FILES['file']);

    if ($check === true) {

        $upload_image = $_FILES["file"]["name"];

        $folder = "" . __DIR__ . "\\img\\";
        $folderSQL = "img/";

        move_uploaded_file($_FILES["file"]["tmp_name"], "$folder" . $_FILES["file"]["name"]);

        $sql = "INSERT INTO images (name,adress) VALUES('$upload_image','$folderSQL')";

        $result = mysqli_query($link, $sql);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Загрузка изображений на сервер</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Загрузить файл!">
</form>
</body>
</html>

