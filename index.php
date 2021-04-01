<?php
session_start();
require_once 'connection.php';
require 'header.php';
?>
    <div class="registration">
        <div class="counter">

        </div>
        <div class="registerButtons">
            <?php
            if($_SESSION['auth']==true){
            ?>
            <a href="userPage.php">ЛИЧНЫЙ КАБИНЕТ</a><br><br>
            <a href="logout.php">ВЫЙТИ</a>
                <?php
            } else {
                ?>
            <a href="auth.php">ВОЙТИ</a><br><br>
            <a href="register.php">ЗАРЕГИСТРИРОВАТЬСЯ</a>
                <?php
            }
                ?>
        </div>
    </div>
        <div class="orderWrap">
        <div class="order"></div>
            <div class="order"></div>
            <div class="order"></div>
        </div>
<?php
require 'footer.php';
?>