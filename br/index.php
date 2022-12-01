<?php
session_start();
  
$zalogowany = $_SESSION['isUserLogged'];
  if ($zalogowany) header('Location: dashboard.php');
  

  $_output = file_get_contents('theme/page.html');
  $_form = file_get_contents('theme/login-form.html');
  echo str_replace(
        ['<!--main-->', '<!--title-->'],
        [$_form,'fakturka test'],
        $_output
    
     
      );
