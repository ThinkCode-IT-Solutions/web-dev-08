<?php
echo "form data submitted";

function getPercentage($obtainedMarks, $totalMarks)
{
    $percentage = ($obtainedMarks / $totalMarks) * 100;
    return $percentage;
}
// how to check request method
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // if request method is post
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $totalMarks = $_POST["total_marks"];
    $obtainedMarks = $_POST["obtained_marks"];

    echo "First Name: $firstName <br>";
    echo "Last Name: $lastName <br>";
    echo "Total Marks: $totalMarks <br>";
    echo "Obtained Marks: $obtainedMarks <br>";

    // calculate percentage

    $percentage = getPercentage($obtainedMarks, $totalMarks);

    echo "<h1>Your Percentage is $percentage%</h1>";


    // sending data back to home page after calculation

    header("location:../index.php?percentage=$percentage");
} else {
    // if method is not post
    echo "<h1>Server does not support GET request, use POST</h1>";
}
