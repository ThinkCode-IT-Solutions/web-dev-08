<?php
echo "<h1>Hello from the Switch page</h1>";

/**
 * camparison operator cannot be used
 * check only value
 */

$age = 1;
$name = "furqan";
$visible = true;




switch ($name) {
    case "aali":
        echo "you are Aali ishrat";
        break;
    case "Shahzad":
        echo "You are Shahzad and you are assigned a task for DevOps";
        break;
    case "Sadia":
        echo "you are sadia ";
        break;
    default:
        if(! $visible) {
            echo "you are not allowed";

        }else{
            echo "you are not saida , aali , shahzad";
        }
        break;
}














// switch ($age) {
//     case 1:
//         echo "you are 1 year old";
//         break;
//     case 5:
//         echo "you are 5 years old";
//         break;
//     case 10:
//         echo "you are 10 years old";
//         break;
//     default:
//         echo "value is not 1,5 or 10";
//         break;
// }
