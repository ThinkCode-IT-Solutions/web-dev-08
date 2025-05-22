<?php
echo "<h1>Loop in PHP</h1>";
echo "<hr>";

/**
 * Loops run the code multiple time
 * usually used for iterating the array
 * 3 types of loop
 * for , while and do while loop , foreach loop
 * 3 requirements for a loop
 * initialization , condition and updating
 * use count() function to calculate array length
 * 
 */

$friends = ["Aali", "Sana", "Sadia", "Shakila","Shahzad","Amna"];

//! for loop
// for ($index = 0; $index < count($friends); $index++) {
//     echo $friends[$index];
//     echo "<br>";
// }



//! while loop
// $index = 0;
// while($index < count($friends)){
//     $element = $friends[$index];
//     echo $element;
//     echo "<br>";

//     $index++;
// }


//! do while loop
$index = 0;
do{
    $element = $friends[$index];
    echo $element;
    echo "<br>";
    $index++;
}while($index > count($friends));

