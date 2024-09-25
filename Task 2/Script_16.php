<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">
        <label for="s">Enter a sentenace:</label>
        <input type="text" id="s" name="s"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
    //count vowels in a string

    if(isset($_GET['submit'])){
        $count = 0;
        $s = $_GET['s'];
        $s =  strtoupper($s);
        for($i=0;$i<strlen($s);$i++){
            if($s[$i] == "A" || $s[$i] == "E" || $s[$i] == "I" || $s[$i] == "O" ||  $s[$i] == "U"){
                $count++;
            }
        }
        echo "<br>Number of vowels in \"" . $_GET['s'] . "\" : $count";
    }
?>