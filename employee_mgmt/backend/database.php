<?php
// This file will be responsible for the database connection
$hostName = "localhost";
$userName  = "crindalwalt";
$password = "password";
$database = "school_lms";

$connection =  mysqli_connect($hostName,$userName,$password,$database);

// check for errors
if(!$connection){
    echo "database connection is failed";
}


?>