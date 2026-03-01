<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="whileloops.php" method="post">
    <input type="submit" value="stop">  
</body>
</html>
<?php
    /*while loop = do some code infinitely while some  
                    condition remains true*/
    $seconds = 0;
    $running = true;
        
    while($running == true){ // kui running on tõene siis see kehtib
        
    //isset() = determine if a variable is declared and is different than null
        if(isset($_POST['stop'])){ // kui stop on klikkitud siis see kehtib
            $running = false; // siis running on vale ja loop lõpeb
        }
        else {
            $seconds++; // kui stop pole klikkitud siis seconds suureneb 1 võrra
            echo $seconds . " <br>"; // prindib seconds ja teeb reavahetuse
        }   
    
        //waint 1 second
        //$seconds++; 1 harjutus

        /*echo $seconds . " <br>";

        if($seconds > 10){
            $running = false;
        }
        */
    }
?>