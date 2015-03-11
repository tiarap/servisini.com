<?php
$servername = "localhost:81";
$username = "root";
$password = "";
$dbname = "servis";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	echo "Connected successfully";

}
?>
