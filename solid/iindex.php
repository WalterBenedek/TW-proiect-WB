<?php
$servername = "localhost";
$username = "Walter";
$password = "1234";
$dbname = "Benedek";

$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) {     // Check connection
	die("Connection failed: " . $conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $_POST['name']);

$sql = "INSERT INTO usertimes (name,date)
VALUES ('$name', CURDATE()) ON DUPLICATE KEY UPDATE
date=CURDATE()";

if ($conn->query($sql) === TRUE) {
	echo "Page saved!";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
