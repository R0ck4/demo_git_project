<?php

$server = 'localhost';
$db = 'maket_project';
$username = 'mysql';
$password = 'mysql';
$link = mysqli_connect($server, $username, $password, $db);

if(!$link) {
    die ('Ошибка' . mysqli_connect_error());
}
 mysqli_set_charset($link, 'utf8');