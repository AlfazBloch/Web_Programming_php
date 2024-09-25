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
    //factorial
    if(isset($_GET['submit'])){
        $number = $_GET['number'];
        $factorial = 1;
        for($i=1;$i<=$number;$i++){
            $factorial *= $i;
        }
        echo $factorial;
    }
?>