<!DOCTYPE html>
<meta charset="UTF-8">

<html>
    <head>
        피보나치 수열 계산기
    </head>
    <body>
        <form action="" method="post">
            <label for="number">100 이하의 임의의 정수를 입력하세요 : </label>
            <input type="number" name="n" /><br />
            <input type="submit" value="출력" />
        </form>
        <?PHP
        $sum=0;
        if(isset($_POST['n']) && strlen($_POST['n']) > 0 && $_POST['n'] >= 0)
        {
            $n = $_POST['n'];
            echo "{$n}개의 피보나치 수열 : ";
            
            for ($prod = 1; $prod <= $n; $prod++)
            {
                if($prod == 1)
                {
                    echo "<br>";
                    echo "(1. 1 1)";
                    $original = 1;
                }
                else if($prod == 2)
                {
                    echo "<br>";
                    echo "(2. 1 1)";
                    $sum = 1;
                }
                else
                {
                    $backup = $sum;
                    $sum = $sum + $original;
                    if ($backup != 0) {
                       echo "<br>"; 
                        echo "({$prod}. " . ($sum / $backup) . ")";
                    } else {
                        echo "<br>";
                        echo "({$prod}. 0)";
                    }
                    $original = $backup;
                }

            }

        }  
            
        
        ?>
    </body>
</html>