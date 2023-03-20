<?php 

if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $domain = "http://localhost/Segr%c3%a9Conduite/public/";
  } else {
    $domain =  "https://kekoeur.github.io/Segre-Conduite/public/";
  }

?>