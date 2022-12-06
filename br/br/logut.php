<?php

require_once 'check_login.inc.php';
if ($zalogowany) setcookie(COOKIE_NAME, 0, time()-100*secondsInDay);
header("Location: index.php");