<?php
require_once ('usersRepository.php');

if (isCorrectUser($_REQUEST['login'], $_REQUEST['password']))  $_SESSION['isUserLogged']=1;
header("Location:index.php");
else echo '<strong style="color:red; font-weight: bold">błędne dane logowania </strong><br>';
?>