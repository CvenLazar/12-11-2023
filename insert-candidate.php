<?php
include('dbConnect.php');

$lname = $_REQUEST['Lname'];
$fname = $_REQUEST['Fname'];
$email = $_REQUEST['Email'];
$contact = $_REQUEST['Contact'];
$department = $_REQUEST['Department'];
$position =  $_REQUEST['Position'];
$platform =  $_REQUEST['Platform'];


$sql = "INSERT INTO candidates (lname, fname, email, contact, Department, position, platform)
 VALUES ('$lname', '$fname', '$email', '$contact', '$department', '$position', '$platform')";

if ($conn->query($sql) === TRUE) {
    header('location: successfully.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?> 