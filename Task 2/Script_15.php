<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="number1">Number 1:</label>
        <input type="text" id="number1" name="number1"><br>
        <label for="number2">Number 2:</label>
        <input type="text" id="number2" name="number2"><br>
        <label for="number3">Number 3:</label>
        <input type="text" id="number3" name="number3"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php

    if(isset($_GET['submit'])){
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $number3 = $_GET['number3'];

        if($number1 > $number2){
            if($number1 > $number3){
                echo "Largest $number1";
            }else{
                echo "Largest $number3";
            }
        }else{
            if($number2 > $number3){
                echo "Largest $number2";
            }else{
                echo "Largest $number3";
            }
        }
    }

?>

