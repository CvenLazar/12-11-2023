<?php
$candId = $_POST['CandId'];
$studid = $_REQUEST['Studid'];
$lname = $_REQUEST['Lname'];
$fname = $_REQUEST['Fname'];
$email   = $_REQUEST['Email'];
$contact = $_REQUEST['Contact'];
$course =  $_REQUEST['Course'];
$department =  $_REQUEST['Department'];
$position=  $_REQUEST['Position'];
$platform =  $_REQUEST['Platform'];




//database connection
include('dbConnect.php');

$sql = "INSERT into candidates(studid,lname,fname,email,contact,course,department,position,platform) 
values('$studid',:Lname,:Fname,:Email,:Contact,:Course,:Department,:Position,:Platform)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":CandId",$canid);
$stmt->bindParam(":Studid",$studid);
$stmt->bindParam(":Lname",$lname);
$stmt->bindParam(":Fname",$fname);
$stmt->bindParam(":Email",$email);
$stmt->bindParam(":Contact",$contact);
$stmt->bindParam(":Course",$course);
$stmt->bindParam(":Department",$department);
$stmt->bindParam(":Position",$position);
$stmt->bindParam(":Platform",$platform);

$stmt->execute();

header('location: pending.php');
?>
