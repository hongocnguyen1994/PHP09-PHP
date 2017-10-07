<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "shop_php09";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (name, class, age, email)
VALUES ('Ngoc Nguyen', 'PHP09', 30, 'nguyen@gmail.com')";

if(mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>