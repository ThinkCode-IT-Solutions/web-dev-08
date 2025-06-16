<?php

// check the request type
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // collect the form data
    $fullName = $_POST['fullname'];
    $emailAddress = $_POST['email'];
    $password = $_POST['pass'];
    $confirmPassword = $_POST['confirmpass'];

    // print the collected data
    echo $fullName . "<br>";
    echo $emailAddress . "<br>";
    echo $password . "<br>";
    echo $confirmPassword . "<br>";

    //let suppose the account creation is done


    // redirect the user back to home page
    header("location:../index.php?acc=true");

} else {
    echo "This system does not support GET request , use post";
}
