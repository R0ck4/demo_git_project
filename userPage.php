<?php
session_start();
require_once 'connection.php';
require_once 'userPageLogic.php';
require 'header.php';
?>
<div class="underHeader">
    <h1><?php echo("" . $_SESSION['fio']."<br>");?></h1>
    <div class="logout">
        <h2><a href="logout.php">ВЫЙТИ</a> </h2>
    </div>
</div>
<div class="try">
    <ul class="zad">
        <li class="dec"> <a href="#">Новая задача</a> </li>
        <li class="dec"> <a href="#">Решенные</a> </li>
        <li class="dec"> <a href="#">Отклоненные</a> </li>
        <li class="dec"> <a href="newOrder.php">Новая заявка</a> </li>
    </ul>



</div>
<div class="user_order_wrap">
    <div class="order_one"></div>
</div>





<?php
require 'footer.php'
?>
