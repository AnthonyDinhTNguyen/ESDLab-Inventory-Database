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

$sql = "SELECT model, description, pcn, serial, area, calibration, name, checkoutDate, returnDate FROM ESDInventory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Manufacture&Model</th><th>Description</th><th>PCN</th><th>Serial</th><th>Calibration Due Date</th><th>Location of Item</th><th>Last Checked Out By</th><th>Checked Out On</th><th>Returned On</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["model"]."</td><td>".$row["description"]."</td><td>".$row["pcn"]."</td><td>".$row["serial"]."</td><td>".$row["calibration"]."</td><td>".$row["area"]."</td><td>".$row["name"]."</td><td>".$row["checkoutDate"]."</td><td>".$row["returnDate"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
$conn->close();
}
?>
