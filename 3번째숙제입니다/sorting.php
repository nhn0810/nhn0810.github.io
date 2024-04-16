<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
        <title>Sorting</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">10이상 100이하의 임의의 정수를 입력하시오 : </label>
        <input type="number" name="n" /><br />
        <input type="submit" value="출력" />
    </form>

    <?php
        $n = $_POST['n'];

        $random = array();
        for ($i=0; $i < $n; $i++)
        {
            $random[] = rand(10, 100);
        }

        echo "생성된 숫자는 {$n}개 입니다: ";
        for ($i = 0; $i < count($random); $i++)
        {
            echo $random[$i] , " ";
        }

        sort($random);
        echo "오름차순입니다 : ";
        for ($i = 0; $i < count($random); $i++)
        {
            echo $random[$i] , " ";
        }
        ?>



</body>
</html>