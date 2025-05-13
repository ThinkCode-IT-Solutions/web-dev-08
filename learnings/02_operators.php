<?php
    echo "<h1>Operators in PHP</h1>";
/**
 * 4 Types of Operators
 * Arithematics operator (+,-,/,*,%)
 * Camparison operator (<,>,>=,<=,==,===,!=)
 * Assignment operator (=,+=,-=,*=,/=)
 * Logical operator (&&, ||, !)
 * 
 * Note: precedence 
 * 1: arithmatics
 * 
 */

// ! Arithmatic operator
$num1 = 35;
$num2 = 20;
$result = $num1 + $num2; //55
$result = $num1 - $num2;
$result = $num1 * $num2 * 0.5; //700
$result = $num1 / $num2;

// echo $result;



// ! Camparison operator
$result = $num1 < $num2;
$result = $num1 > $num2;
$result = $num1 >= $num2;
$result = $num1 <= $num2;

$age = "22";
$ageS = "22"; 
// datatype is difficult
// value is same

$result = $age == $ageS;
$result = $age === $ageS;
$result = 13 != 12;
// echo var_dump($result);



// ! Assignment operator

$num = 10;
echo $num;
echo "<br>";
$num = 20;
echo $num;
echo "<br>";
$num = $num + 10;
echo $num;
echo "<br>";
$salary = 1000;
echo $salary;
echo "<br>";
$salary = $salary + 50;
echo $salary;
echo "<br>";
$salary += 50;
echo $salary;
echo "<br>";

$salary -= 200;
echo $salary;
echo "<br>";
$salary *= 2;
echo $salary;
echo "<br>";

$salary /= 3;
echo $salary;
echo "<br>";



// ! Logical operator
$age = 12;
$language = "urdu";

$condition = $age >= 12 && $language == "urdu";
echo var_dump($condition);


$condition = $age >= 12 || $language == "english";
echo var_dump($condition);



?>