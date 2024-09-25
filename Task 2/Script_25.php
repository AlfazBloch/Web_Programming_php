<?php
    $num1 = 15;
    $num2 = 30;

    
    echo "Old number 1 : $num1";
    echo "<br>Old number 2 : $num2";

    $num1 = $num1 * $num2;
    $num2 = $num1 / $num2;
    $num1 = $num1 / $num2;

    echo "<br>New number 1 : $num1";
    echo "<br>New number 2 : $num2";
?>