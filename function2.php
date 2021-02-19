<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function basic(){
      print ("Lorem 1<br>");
      print ("Lorem 2<br>");
    }
    basic();
    basic();
     ?>
<h2>parameter &amp; argument</h2>
<?php
function sum($left, $right) {
print($left+$right);
echo '<br>';
}
sum(2, 4);
sum(4, 6);
 ?>
 <h2>return</h2>
 <?php
function sum2($left, $right){
  return $left+$right;
}
  print(sum2(2, 4));
  print(sum2(2, 4));
  file_put_contents('reult.txt', sum2(2, 4));
  //  email('egoing@egoing.net', sum(2, 4));
 ?>
  </body>
</html>
