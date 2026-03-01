<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- ülesandes siis kasutaja sisestab ringi radiuse -->
<body>
    <form action="math2ul.php" method="post">
        <label>Raadius:</label>
        <input type="text" name="radius"><br>
        <input type="submit" value="calculate">
    </form><br>
</body>
</html>
<!-- php arvutame pindala ja ümbermõõdu -->
<?php 
    $radius = $_POST['radius'];
    $circumference = null;  
    $area = null;
    $volume = null;

    $volume = (4/3) * pi() * pow($radius, 3); // ruumala siin vaja valemit aga need leiab nettist
    $volume = round($volume); // ümardame

    $area = pi() * pow($radius, 2); // pindala
    $area = round($area); // ümardame


    $circumference = 2 * pi() * $radius; // ümbermõõt
    $circumference = round($circumference); // ümardame 

    echo "Circumference =  {$circumference} cm <br>";
    echo "Area = {$area} cm² <br>";
    echo "Volume = {$volume} cm³ <br>";
    
?>