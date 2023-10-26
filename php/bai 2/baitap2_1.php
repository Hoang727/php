<?php
$so = 20;
    if ($so%3==0) {
        echo $so.' chia hết cho 3. ';
        if ($so%5==0){ 
            echo $so.' chia hết cho 5';
        }
        else {echo $so.' Không chia hết cho 5';}
    }
    else {
        echo $so.' Không chia hết cho 3';
    }
?>
