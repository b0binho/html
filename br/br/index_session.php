<?php

if(isset($_SESSION['isUserLogged'])) $zalogowany = $_SESSION['isUserLogged'];
else $zalogowany = 0;
                    /////$zalogowany = $_SESSION['isUserLogged'] ?? null;
if ($zalogowany) header('Location: dashboard.php');

  $_output = file_get_contents('theme/page.html');
  $_form = file_get_contents('theme/login-form.html');
  echo str_replace(
        ['<!--main-->', '<!--title-->'],
        [$_form,'chuj'],
        $_output
    
     
      );
