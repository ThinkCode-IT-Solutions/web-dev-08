<?php
echo "registeration form is submitted";
// check the form submission type
if($_SERVER['REQUEST_METHOD']== "POST"){

    // collect the information 
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email_address'];
    $pass = $_POST['password'];
    $cpass = $_POST['confirm_pass'];


    // show the data
    echo $firstname . " <br>";
    echo $lastname . " <br>";
    echo $email . " <br>";
    echo $pass . " <br>";
    echo $cpass . " <br>";


    // check if password and confirm password matches
    if($pass === $cpass){


        // check the email uniqueness


        // account has been  created
        header("location:../../register.php?acc=done");
    }else{
        // password does not match
        header("location:../../register.php?acc=passmismatch");
    }


}





?>