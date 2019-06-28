<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Inventory";
/*require 'C:/wamp64/www/ESDLAB/PHPMailer-master/src/Exception.php';
require 'C:/wamp64/www/ESDLAB/PHPMailer-master/src/PHPMailer.php';
require 'C:/wamp64/www/ESDLAB/PHPMailer-master/src/SMTP.php';*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//Prepare Statement

$result = $conn->query('SELECT * FROM ESDInventory');
if (!$result) die('Couldn\'t fetch records');
$num_fields = mysqli_num_fields($result);
$headers = array();
while ($fieldinfo = mysqli_fetch_field($result)) {
    $headers[] = $fieldinfo->name;
}
$fp = fopen('php://output', 'w');
if ($fp && $result) {
    header('Content-Type: text/csv');
    header('Content-Disposition: inline; filename="export.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');
    fputcsv($fp, $headers);
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        fputcsv($fp, array_values($row));
    }
    die;
}
/*$email = new PHPMailer(true);
try{
$bodytext = "testing";
$email->SetFrom('anthonydtnguyen@gmail.com'); //Name is optional
$email->Subject = 'Message Subject';
$email->Body = $bodytext;
$email->AddAddress( 'anthonydtnguyen@gmail.com' );

//$file_to_attach = 'PATH_OF_YOUR_FILE_HERE';

//$email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );
$email->send();
echo"works";
}catch(Exception $e){
	echo "Message could not be sent. Mailer Error: {$email->ErrorInfo}";
}*/

?>
