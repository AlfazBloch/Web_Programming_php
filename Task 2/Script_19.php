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
    if(isset($_GET['submit'])){
        $number = $_GET['number'];
        $flag = true;

        if($number == 1){
            $flag = false;
        }

        for($i=2;$i<$number;$i++){
            if($number%$i == 0){
                $flag = false;
            }
        }
        $s = $flag? "$number is a prime number" : "$number is not a prime number";
        echo $s;
    }
?>