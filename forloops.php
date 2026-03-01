<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--<form action="forloops.php" method="post">
        <label>Enter a number to count to:</label>
        <input type="text" name="counter"><br>
        <input type="submit" value="start"><br>
        -->
        <form action="forloops.php" method="post">
        <label>Enter a number to count down from:</label>
        <input type="text" name="counter"><br>
        <input type="submit" value="start"><br>
</body>
</html>


<?php 
      //alustab lugemist 10-st alla 1-ni
    
    $counter = $_POST['counter']; 
    for($i = $counter; $i > 0; $i--){  
        
    
        echo $i . " <br>";
    }
        
      //Ülesanne 1
    $counter = $_POST['counter']; // see on see mis on inputis ja post on see mis saadab info <serverile></serverile>
    for($i = 1; $i <= $counter; $i++){ // 3 1 samm equal 2 samm  mittu korda soovid et kordab 3 samm counter 
        //$i += 2 siis arvutab 2 ga
        //for($i = 10; $i > 10; $i--) siis arvutab 10-st alla -=2 arvutab 2 ga alla
        echo $i . " <br>";
    }
      
    //tutorial
    // for loop = repeat some code a certain of times
    
    for($i = 0; $i <= 5; $i++){ // 3 1 samm equal 2 samm  mittu korda soovid et kordab 3 samm counter 
        //$i += 2 siis arvutab 2 ga
        //for($i = 10; $i > 10; $i--) siis arvutab 10-st alla -=2 arvutab 2 ga alla
        echo $i . " <br>";
    }
    
?>