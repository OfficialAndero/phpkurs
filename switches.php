<?php 

//switch = replacement to using many elseif statements

$grade = 'c';
switch($grade){ // grade on see mida me kontrollime
    case 'A': // kui grade on A siis see kehtib
        echo "You did great!";
        break; // break lõpetab switchi
    case 'B': // kui grade on B siis see kehtib
        echo "You did good!";
        break;
    case 'C': // kui grade on C siis see kehtib
        echo "You did okay!";
        break;
    case 'D': // kui grade on D siis see kehtib
        echo "You did poorly!";
        break;
    case 'F': // kui grade on F siis see kehtib
        echo "You failed!";
        break;
    default: // kui ükski ülalolevatest ei kehti siis see kehtib
        echo "{$grade} is not a valid grade.";
}
    


// NII NÄITAB AUTOMAATSELT MIS PÄEV TÄNA ON JA VASTAVALT SÕNUMIT
    $date = date("l"); // date funktsioon annab meile tänase päeva ja "l" tähendab, et me tahame saada päeva täisnimetust
    
    
    switch($date){
        case 'Monday':
            echo "I hate Mondays.";
            break;
        case 'Tuesday':
            echo "it is taco Tuesday."; // and so on (:
            break;
        case 'Wednesday':
            echo "The work week is half over!";
            break;
        case 'Thursday':
            echo "The weekend is almost here!";
            break;
        case 'Friday':
            echo "The weekend is here!";
            break;
        case 'Saturday':
            echo "Have a nice weekend!";    
            break;
        case 'Sunday':
            echo "Have a nice weekend!";
            break;
        default:
            echo " {$date} is not a day.";
        }
            
?>