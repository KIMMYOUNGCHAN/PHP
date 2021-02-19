<!DOCTYPE html>
<html>

<body>
    <h1>string & string operator</h1>
    <?php /*스트링을 표현하는 기호는  single quoted,(''이거 작은따옴표임 인용할때사용하는기호)와 double quoted(""이거 큰따옴표로도 해도됨) 가 가장 기본적이고 중요한방법이다 퀏트?쿠옷트?*/
    echo "Hellp \"w\"orld"; /*백슬래쉬 역슬래쉬라하는데 여기 뒤쪽에있는 기호는 그순간에는 일시적으로 그역할에서 해제되고 순수한 문자로만사용됨*/
    ?>

    <h2>concatenation operator</h2>
    <?php
    echo "Hello"."world"; /*좌항의 Hello와 우항의 world라는 문자열을 결합해서 하나의 문자열로 만들어내는 결합연산자*/
    ?>

     <h2>string length function</h2>
     <?php
     echo strlen("Hello world"); /*nt strlen(인트 스트링렌) 이게 나오는데 이런걸 함수라 하는데 일단은 안배웠으니 걍한번해보자. 참고로 인트는 integer의 약자*/
     ?>
</body>

</html>
