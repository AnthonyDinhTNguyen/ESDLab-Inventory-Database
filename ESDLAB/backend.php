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
    echo "<table id = 'myTable'><tr><th onclick = 'sortTable(0)'>Manufacture&Model</th><th onclick = 'sortTable(1)'>Description</th><th onclick = 'sortTable(2)'>PCN</th><th onclick = 'sortTable(3)'>Serial#</th><th onclick = 'sortTable(4)'>Calibration Due Date</th><th onclick = 'sortTable(5)'>Location of Item</th><th onclick = 'sortTable(6)'>Last Checked Out By</th><th onclick = 'sortTable(7)'>Checked Out On</th><th onclick = 'sortTable(8)'>Returned On</th></tr>";
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
