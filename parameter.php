<!DOCTYPE html>
<html lang="en" dir="ltr">

  <body>
안녕하세요. <?php echo $_GET['address']; ?>에 사시 <!--이 양식은 걍 약속임. 대괄호는 배열이라는건데 나중에알게될거니깐 일단 걍 넘어가자 -->
<?php echo $_GET['name']; ?>님 <!--애플리케이션의 입력값을 url을 통해 준건데 그럼 그 url에따라서 paramer.php 라고 하는 애플리케이션은 echo라고 하는
                               출력하는 명령을 통해서 그 결과를 달리하면서 출력할수있게 되는것이다 -> 이제 우리는 아무리많은 사람에게도 그주소의
                               name 값만 바꾸는걸 통해 그사람에게 인사를 할수있는 어마어마한 애플리케이션을 만들게되었다 -->
</body>

</html>