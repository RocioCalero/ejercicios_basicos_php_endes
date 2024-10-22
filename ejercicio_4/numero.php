<?php
    $num1 = $_POST ['num1'];
    $num2 = $_POST ['num2'];
    $num3 = $_POST ['num3'];
    if($num1 > $num2 && $num1 > $num3){
        echo "El" $num1 "es el mayor";
    }
    else if ($num2 > $num1 && $num2 > $num3){
        echo "El" $num2 "es el mayor";
    }
    else{
        echo "El" $num3 "es el mayor";
    }
?>