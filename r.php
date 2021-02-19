<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>베트남여행=Du Lịch=Travel</title>
  </head>

  <body>
<?php echo date('Y년m월d일, H시i분s초'); ?>
<h1> <a href="r.php">Du Lịch</a></h1>
<ol>
  <li> <a href="r.php?site=북부지방">Miền Bắc</a></li>
  <li> <a href="r.php?site=중부지방">Miền Trung</a></li>
  <li> <a href="r.php?site=남부지방">Miền Nam</a></li>
  <li> <a href="r.php?site=기타지역">ETC</a></li>
</ol>
<h2>
<?php print $_GET['site'];?>에 <?php print file_get_contents('data/'.$_GET['site']);?>애
</h2>


  </body>
</html>
