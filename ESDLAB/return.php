<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//Prepare Statement
$stmt = $conn->prepare("UPDATE ESDInventory SET area = 'ESD LAB', returnDate = ? WHERE serial = ? OR pcn = ?");
$stmt->bind_param("sss",$returnDate, $serial, $pcn);

$pcn = filter_input(INPUT_POST,'pcn');
$serial = filter_input(INPUT_POST,'serial');
$returnDate = filter_input(INPUT_POST,'returnDate');

$continue = true;
if(empty($returnDate)){
	echo "Please Enter The Return Date";
	$continue = false;
}

if($continue){
	$stmt->execute();
	if($stmt->affected_rows>=1){
		echo "Successfully Returned Item";
	}
	else{
		echo "Failed To Return Item. Please try entering the PCN or Serial Number again.";
	}
}
$stmt->close();
$conn->close();
?>
<html>
<body>
<a href="index.php">Click to return home</a>
</body>
</html>