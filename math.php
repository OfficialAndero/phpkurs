<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
   <body>
        <form action="math.php" method="post"> <!-- action siis kuhu ja method milline post hea kuna ei pane urli infot -->
        <label>x:</label>
        <input type="text" name="x"><br>
        
        <label>y:</label>
        <input type="text" name="y"><br>
        <label>z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
   </body>
</html>
<?php  
     $x =$_POST['x'];// x on see mis on inputis ja post on see mis saadab info serverile
     $y =$_POST['y'];
     $z =$_POST['z'];
     $total = null;
     //$total = abs($x); annab maximum väärtuse näiteks -4 annab 4
     //$total = round($x); ümardab lähima täisarvuni näiteks 4.5 annab 5
     //$total = floor($x); ümardab alla näiteks 4.9 annab 4
     //$total = ceil($x); ümardab üles näiteks 4.1 annab 5
     //$total = pow($x, $y); x astendatud y-ks näiteks 2 astendatud 3-ks annab 8
     //$total = sqrt($x); sqrt square root
     //$total = max($x, $y, $z);  annab suurima väärtuse
     //$total = min($x, $y, $z);   annab väikseima arvun
     $total = pi(); // annab pi väärtuse

     echo $total;
?>

   