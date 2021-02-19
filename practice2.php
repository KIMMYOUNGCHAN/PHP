<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP를 이용한 WEB SITE</title>
  </head>

  <body>
<!--5-(2)-->
<?php print (1+1); ?><br>
<?php print ('1+1'); ?><br>
<?php print 'hel\'l\'o'; ?><bR>
<?php print ('안녕'.'하세요'); ?><br>
<?php print strlen('hello'); ?><br>

<!--7-(1)-->
<?php print $_GET['place']; ?>로 여행갈 <?php print $_GET['name']; ?> 모집.<br>

<!--11-->
<?php echo var_dump(11, '11<br>') ;?>
<?php var_dump(2+1); var_dump(1==1, 1<=1, 1<1);?>

<?php if (true) {
  print '1<br>';
} ?>
<?php
if (2>1) {
  echo '2-1<br>';
} else {
  echo '2-2<br>';
} echo '3<br>';
?>

<?php
print '1sfd<br>';
$i=0;
while ($i<3) {
  print 2;
  $i=$i+1;
} ?>

<?php
$coworkers=array('egoing', 'leezche');
print $coworkers[0].'<br>';
print $coworkers[1].'<br>';
print var_dump(count($coworkers));
print (count($coworkers));
array_push($coworkers, 'gee');
var_dump($coworkers);
?>

<?php $list=scandir('./data');
      print var_dump($list);?>

<h1>Basic</h1>
    <?php
    function basic(){
      print ('Lorem 1<br>');
      print ('Lorem 1<br>');
    }
    basic();
      basic();
     ?>

<h2>Parameter</h2>
<?php function sum($left, $right){
print($left+$right);
print '<br>';
}
sum(2, 4);
sum(4, 6);
?>

<h2>return</h2>
<?php
function sum2($left, $right){
return ($left+$right);
print '안녕';
}
print (sum2(3, 5). '<br>');
file_put_contents('result2.txt', sum2(2, 4));
 ?>
  </body>
</html>
