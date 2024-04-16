<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
    임의의 정수 까지의 합과 곱
    </head>
    <body>
        <form action="" method="post">
            <label for="number">임의의 정수를 입력하세요 : </label>
            <input type="number" name="n" /><br />
            <input type="submit" value="출력" />
        </form>
        <?PHP
        $sum = 0;
        $prod = 1;
        if(isset($_POST['n']) && strlen($_POST['n']) > 0 && $_POST['n'] >= 0) {
            $n = $_POST['n'];
            for($prod=1; $prod <= $n; $prod++)
            {
                if($prod < $n)
                {
                    echo "{$prod} + ";
                    $sum = $sum + $prod;
                }
                else
                {
                    $sum = $sum +$prod;
                    echo "{$prod} = {$sum}<br/>";
                }
            }
            for($prod=1, $sum=1; $prod<= $n; $prod++)
            {

                if($prod < $n)
                {
                    echo "{$prod} * ";
                    $sum = $sum * $prod;
                }
                else
                {
                    $sum = $sum * $prod;
                    echo "{$prod} = {$sum}";
                }
            }
        }
        else{
            echo "0이상의 정수를 입력해주세요.";
        }
        ?>
    </body>
</html>