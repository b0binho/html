<?php 
  require_once 'check_login.inc.php';
  if (!$zalogowany) header('Location: index.php');

  $_output = file_get_contents('theme/page.html');
  echo str_replace(
        ['<!--main-->', '<!--title-->'],
        ['dashboard<br><a href="logut.php">Wyloguj</a>','mariusz'],
        $_output
    
     
      );
