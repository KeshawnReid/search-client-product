<?php
$servername = "localhost";
$dbname = "webservices";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
die("Connection failed: " . $conn->connect_error);
}


$partName = $_REQUEST['partName']; 
$ID = $_REQUEST['ID'];
$price = $_REQUEST['price'];

//$sql = "SELECT * id, pName FROM products where partName = '$partName' or ID = $ID or price = $price";


//echo $sql;exit; // debugging
$sql = "SELECT ID, pName, price FROM products where ID = $ID";
$result = $conn->query($sql);
if ($result->num_rows > 0) { 

// output data of each row
while($row = $result->fetch_assoc()) {
$ID = $row["ID"];
$displayName = $row["pName"];
$price = $row["price"];
echo " ID &nbsp;&nbsp; pName &nbsp;&nbsp; price <br>";
echo " $ID &nbsp;&nbsp; $displayName &nbsp;&nbsp; $price<br>";
}
} else {
echo "0 results found";
}
?>