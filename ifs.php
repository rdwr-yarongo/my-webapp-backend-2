<?php
  $oper=$_GET["q"];
  $exec=exec("/var/www/html/ifs.sh $oper >/dev/null 2>&1");
  header("Location: /index.html?oper=$oper");
  die();
?>

