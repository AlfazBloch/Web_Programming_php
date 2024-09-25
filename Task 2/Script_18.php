<?php
    //guess the random number between 1 to 10
    $random = rand(1,10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="number">Guess a number(1-10):</label>
        <input type="text" id="number" name="number"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php

    if(isset($_GET['submit'])){
        $number = $_GET['number'];

        if($number == $random){
            echo "<script>alert('You guessed it right 😊');</script>";
        }else{
            echo "<script>alert('You guessed it wrong 🥹');</script>";
        }
    }

?>