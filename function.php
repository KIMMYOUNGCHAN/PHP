<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>


  <body>
  <h1>function</h1>
  <?php
  $str = 'Lorem ipsum dolor sit amet,
          consectetur adipisicing elit.

          sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua.';
          echo $str;  /*출력*/
   ?>

   <h2>strlen()</h2>
   <?php
   echo strlen($str); /*문자열의 길이 구하기*/
    ?>

    <h2>nl2br</h2>
    <?php
    echo nl2br($str); /*new line을 br로 바꾼다는 뜻*/
     ?>
  </body>



</html>
