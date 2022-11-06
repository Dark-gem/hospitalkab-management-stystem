<?php
include 'connect.php';

// Get the user id
$patientid = $_REQUEST['id'];

// Database connection
$con = mysqli_connect("localhost", "root", "", "crud operation");

if ($patientid !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT * FROM crud WHERE id='$patientid'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	$name = $row["name"];

	// Get the first name
	$mobile = $row["mobile"];

    $checkup = $row["checkuptype"];
}

// Store it in a array
$result = array("$name", "$mobile","$checkup");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
