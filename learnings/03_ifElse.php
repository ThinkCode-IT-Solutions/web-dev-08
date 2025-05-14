<?php
echo "if else conditions";
$age = 24;
$license = false;



// here is the idea of the program
/**
 * It will check both the age and license terms
 */


 if($age > 0 && $age < 18 ){

    if($license){
        echo "you can drive but with care";
    }else{
        echo "you cannot drive because you are underage";
    }
    // cannot drive
 }else if ($age > 17 && $age < 80){
    if($license){
        echo "you can legally drive";
    }else{
        echo "you can drive but with a license";
    }
 }else if($age >= 80){
    if($license){
        echo "you can legally drive but you should not take care of your health";
    }else{
        echo "you cannot drive";
    }
 }else {
    // default
    echo "Invalid input";
 }
