<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // data collect
    $fullname = $_POST["fullName"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $confirm_password = $_POST["confirmPass"];
    $institution = $_POST["institution"];
    $role = $_POST["role"];


    // showing the data
    echo "fullname : $fullname <br>";
    echo "Email : $email <br>";
    echo "Password: $password <br>";
    echo "Confirm Password: $confirm_password <br>";
    echo "Institute: $institution <br>";
    echo "Role: $role <br>";
    echo "<hr>";

    // check for password mismatch
    if($password === $confirm_password){
        echo "=> password matched <br>";
    }else{
        echo "=> password does not matched <br>";
    }

}else{
    die("Only POST request are allowed");
}