<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Sử dụng vòng lặp for</h4>
<h5>1.Hiển thị dãy số từ 1 đến 10</h5>
        <?php
        for($i = 0; $i < 10;$i++)
        {
            echo($i+1);
            if($i<10) echo" , ";
        }
        ?>
<h5>2.Tổng các số lẻ giảm dần từ 20 xuống 10</h5>
        <?php
        $tong=0;
        for($i = 19;$i>=10;$i=$i-2)
        {
            $tong=$tong+$i;
            echo($i);
            if($i>11)echo"+";
        }
        echo"=".$tong;
        ?>

<h4>Các số chia hết cho 5 từ 10 là-->50</h4>
    <?php
        for ($i = 10; $i <= 50; $i++) {
            if ($i % 5 === 0) {
                echo $i . " ; ";
            }
        }
    ?>
<h4>BẢng cửu chương</h4>
    <table border="1px">
    <tr>
        <?php
        for ($i = 2; $i <= 10; $i++) {
            echo "<td>";
            for ($j = 1; $j <= 10; $j++) {
                $result = $i * $j;
                echo $i . " x " . $j . " = " . $result . "<br/>";
            }
            echo "<td>";
        }
        ?>
    </tr>
    </table>

<h4>Bảng nhân 9</h4>
    <?php
    for($i=1;$i<=10;$i++)
    { 
        $reslt=$i*9;
        echo "9 x ".$i. "=" .$reslt. "<br/>";
    }
    ?>
</body>
</html>