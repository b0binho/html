<?php
require_once 'mysqlDb.php';
require_once 'check_login.inc.php';
if ($zalogowany) header('Location: dashboard.php');

  $_output = file_get_contents('theme/page.html');
  $_form = file_get_contents('theme/login-form.html');
  echo str_replace(
        ['<!--main-->', '<!--title-->'],
        [$_form,'chujnowo'],
        $_output
    
     
      );
