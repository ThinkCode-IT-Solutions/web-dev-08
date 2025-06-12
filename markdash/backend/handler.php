<?php
echo "form data submitted";

    // how to check request method
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // if request method is post
        $firstName = $_POST["fname"];
        $lastName = $_POST["lname"];
        $totalMarks = $_POST["total_marks"];
        $obtainedMarks = $_POST["obtained_marks"];

        echo "First Name: $firstName <br>";
        echo "Last Name: $lastName <br>";
        echo "Total Marks: $totalMarks <br>";
        echo "Obtained Marks: $obtainedMarks <br>";

    }else{
        // if method is not post
        echo "<h1>Server does not support GET request, use POST</h1>";
    }
?>