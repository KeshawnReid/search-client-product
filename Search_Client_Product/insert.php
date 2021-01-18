<?php

//error_reporting (0);

$servername = "localhost"; 
$dbname = "webservices";
$username = "root"; // default username to connect to DB is root
$password = ""; // default password to connect to DB is empty, or you can also use root as


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn‐>connect_error);
}
// Capture data sent from index.php

// isset? 


//if (isset($_POST['fullName'])){
	
	$fullName = $_POST['fullName'];// get data sent from previous html form on index.php
//}

//if (isset($_POST['email'])){
	
	$email = $_POST['email'];// get data sent from previous html form on index.php
//}

$sql = "INSERT INTO users (name, email) VALUES ('$fullName', '$email')"; 

// notice single quotes around variables because data is string. For integer or numbers we will not use single quotes.

//	$partName = $_POST['partName'];
//	$price = $_POST[price];
	
//	$sql = "INSERT INTO products (pName,price) VALUES ('$partName', $price)";
	
//if ($conn->query($sql) === TRUE) {
//echo "New record created successfully";
//} else {
//echo "Error: record couldn’t be inserted";
//}
$conn->close(); // close DB connection
?>
