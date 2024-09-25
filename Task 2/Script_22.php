<?php
    define("PI",3.14);
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
        <label for="number">Enter a radius of circle:</label>
        <input type="text" id="radius" name="radius"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_GET['submit'])){
        $radius = $_GET['radius'];
        $area = PI * $radius * $radius;

        echo "<br>Area of circle with radius($radius) : $area";
    }
?>