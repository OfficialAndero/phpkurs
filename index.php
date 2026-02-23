<?php
    // variable = a reusable container that holds data
    //  nt string,unteger,float, boolean
//string series of text    
$name = "Andero Elias";
$food = "pizza";
$email = "fake@gmail.com";

// int on whole integers
$age = 21;
$user = 2;
$quantity = 3;

// gpa = grade point avarage(float)
//floats floating point numbers
$gpa = 2.5;
$price = 4.99;
$tax_rate = 5.1;


//boolean ja need on kas true või false all olevad lihtsalt mõned näited
$employed = true;
//äkki on kasutaja offline siis false
$online = false;
$for_sale = true;
$total = null;

echo $name . "<br>";
echo "Hello {$name}<br>";
echo "You like {$food}<br>";
echo "Your email {$email}<br>";

echo"You are  {$age} years old<br>";
echo"There are {$users} online<br>";
echo"You would like to buy {$quantity} items<br>";


echo"Your gpa is: {$gpa}<br>";
echo "Your pizza is \${$price}<br>";
echo"The sales tax rate is: {$tax_rate}%<br>";

echo"Online status : {$online}<br>";

echo"You have ordered {$quantity} x {$food}<br>";
$total = $quantity * $price;
echo"Your total is: \${$total}<br>";

?>