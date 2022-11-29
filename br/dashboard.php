<?php 
  $_output = file_get_contents('theme/page.html');
  echo str_replace(
        ['<!--main-->', '<!--title-->'],
        ['Faktura - andiwer','dashboard'],
        $_output
    
     
      );
