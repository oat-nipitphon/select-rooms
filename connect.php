<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nattadcz_db";


// $servername = "localhost";
// $username = "nattadcz_db";
// $password = "Nattadash01";
// $dbname = "nattadcz_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
?>