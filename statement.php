<?php  
    //if statement konrollime vanust
    /*$age = 22;
    if($age >= 100){ kui vanus on suurem või võrdne 100 siis see kehtib
        echo "You are to old.";
    }
    elseif($age >= 18){
        echo "You are an adult.";
    } 
    elseif($age >= 13 && $age < 18){ kui vanus on suurem või võrdne 13 ja väiksem kui 18 siis see kehtib
        echo "You are a teenager.";
    }
    elseif($age >= 100){ kui vanus on suurem või võrdne 100 siis see kehtib
        echo "You are to old.";
    }

    else {
        echo "You are a minor.";
    }*/



    /*$adult = true;
    if($adult){ // kui adult on tõene siis see kehtib
        echo "You are an adult.";

    }
    else {
        echo "You are a minor.";
    }
    */

    //harjutus arvutame kellegi parlga
    $hours = 40;
    $rate = 15;
    $weeklyPay = null;

    if($hours <= 0){
        $weeklyPay = 0;
    }
    elseif($hours <= 40){ // kui töötunnid on väiksem või võrdne 40 siis see kehtib
        $weeklyPay = $hours * $rate;
    }

    echo "You made \${$weeklyPay} € <br>";

?>