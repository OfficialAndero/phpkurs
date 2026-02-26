<?php
    // Arithmetic Operators
    // + - * / ** %

   

    

    $x = 10;
    $y = 5;
    $z = null;
    $z = $x + $y; // 15 kogu summa z = $x - $y lahutab
    echo $z; 

     // Increment and Decrement Operators
    // ++ --

    echo "<br>";
    // Increment and Decrement Operators
    $counter = 0;
    $counter++; // counter = counter + 1
    echo $counter; // 1

    echo "<br>";

    
    $counter = 10;
    $counter--; // counter = counter - 1
    echo $counter; 

    echo "<br>";
    $counter = 0;
    $counter+=4;
    echo $counter;

    //lahutamine ka sama aga siis minusega

    //Operators Precedence
    // () ** * / % + -
    echo "<br>";
    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total; 
?>