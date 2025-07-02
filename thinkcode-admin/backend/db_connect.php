<?php

// connecting to the database
$hostname = "localhost";
$username = "crindalwalt";
$password = "password";
$database = "thinkcode_office";


$connection = mysqli_connect($hostname,$username,$password,$database);

if (!$connection){
    die("failed to connect to the database". mysqli_connect_error());
}else{
    echo "database connection successful";
}