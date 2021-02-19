<?php
function print_title(){
  if (isset($_GET['site'])) {
    echo $_GET['site'];
  } else {
    echo '베트남여행=Du Lịch=Travel';
  }
}
function print_time(){
  echo date('Y년m월d일, H시i분s초');
}
function print_link(){
  $list = scandir('./db');
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.') {
      if($list[$i] != '..') {
        echo "<li><a href=\"practice.php?site=$list[$i]\">
        $list[$i]</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
function print_title2(){
  if (isset($_GET['site'])) {
    print $_GET['site'];
  } else {
    print 'Welcome';
  }
}
function print_contents(){
  if(isset($_GET['site'])){
    echo file_get_contents('db/'.$_GET['site']);
  }else{
    echo 'Hello.php';
  }
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="trip.css">
    <meta charset="utf-8">
    <title>
    <?php
    print_title();
     ?>
   </title>
  </head>
  <body>
    <?php
    print_time();
    ?>
    <h1><a href="practice.php">TRIP</a></h1>
    <div id="grid">
    <ol>
      <?php
        print_link();
        ?>
      </ol>
      <div id="article">
      <h2>
        <?php
        print_title2();
        ?>
      </h2>
      <?php
      print_contents();
      ?>
    </div>
  </div>
  </body>
</html>
