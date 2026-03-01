<?php 
    // && = true if both conditions are true
    // || = true if at least one condition is 
    // ! = true if false. false if true taugrpidi teeb ehk kui tõene utleb et vale

    // temperatuuri näide
    $temp = 25;

    if($temp >= 0 && $temp <= 30){ // kui temperatuur on suurem või võrdne 0 ja väiksem või võrdne 30 siis see kehtib
        echo "The weather is good.";
    }
    else {
        echo "The weather is bad.";
    }
        


    $temp = 15;
    $cloudy = true;

    if($temp < 0 || $temp > 30){ // kui temperatuur on väiksem kui 0 või suurem kui 30 siis see kehtib
        echo "The weather is bad.";
    }
    else {
        echo "The weather is good.";
    }

    if($cloudy){ // kui cloudy on tõene siis see kehtib
        echo "It s cloudy.";
    }

    



    // ülesanne valimised
    $age = 20;  
    $citizen = true;

    if($age >= 18 && $citizen){ // kui vanus on suurem või võrdne 18 ja kodanik on tõene siis see kehtib
        echo "You are eligible to vote.";
    }
    else {
        echo "You are not eligible to vote.";
    }
    



    //ülesanne 2 müüme filmi pileteid
    $child = false;
    $senior = false;
    $ticket = null; 

    if($child || $senior){ // kui child on tõene või senior on tõene siis see kehtib
        $ticket = 10; // lapse ja vanainimese pilet maksab 10 dollarit
    }
    else {
        $ticket = 15; // täiskasvanu pilet maksab 15 dollarit
    }
    echo "Your ticket price is \${$ticket} € <br>";
?>