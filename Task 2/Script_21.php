<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
    //Palindrome number
    if(isset($_GET['submit'])){
        $number = $_GET['number'];

        $no = $number; 
        $reverse = 0;

        if($number == 1){
            $reverse = 1;
        }

        while($no>1){
            $r = $no % 10;
            $reverse = ($reverse * 10) +  $r;
            $no = $no / 10;
        }

        if($number == $reverse){
            echo "<br>$number is a palindrome number.";
        }else{
            echo "<br>$number is not a palindrome number.";
        }
    }
?>