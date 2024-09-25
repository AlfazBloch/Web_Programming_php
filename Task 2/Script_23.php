<?php
    $number1 = 15;
    $number2 = 13;
    $number3 = 63;

    if($number1 > $number2){
        if($number1 > $number3){
            echo "<h1><br>Largest number is $number1<h1>";
        }else{
            echo "<h1><br>Largest number is $number3</h1>";
        }
    }else{
        if($number2 > $number3){
            echo "<h1><br>Largest number is $number2</h1>";
        }else{
            echo "<h1><br>Largest number is $number3</h1>";
        }
    }
?>