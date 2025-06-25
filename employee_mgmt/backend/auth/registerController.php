<?php
echo "registeration form is submitted";
// check the form submission type
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // connecting to the database
    require "../database.php";
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
    if ($pass === $cpass) {

        // saving data to the database
        $query =  "INSERT INTO `students` ( `name`, `email`, `password`) VALUES ('$firstname', '$email', '$pass');";
        echo "<br>";
        echo $query;

        $queryRun = mysqli_query($connection, $query);

        echo "<br>";
        if ($queryRun) {
            echo "data added to the database";
        } else {
            echo "data insertion failed";
        }


        // check the email uniqueness


        // account has been  created
        // header("location:../../register.php?acc=done");
    } else {
        // password does not match
        // header("location:../../register.php?acc=passmismatch");
    }
}
