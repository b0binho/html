<?php
require_once 'check_login.inc.php';
require_once ('usersRepository.php');
const secondsInMinute = 60;
const secondsInHour = 60*secondsInMinute;
const secondsInDay = 24*secondsInHour;

if (isCorrectUser($_REQUEST['login'], $_REQUEST['password'])) setcookie(COOKIE_NAME, 1, 
time() + secondsInDay);
header("Location:index.php");
/*}else {
    echo '<strong style="color:red; font-weight: bold">błędne dane logowania </strong><br>';
}*/
?>