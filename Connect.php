<?php
$servername = "localhost";
$username = "chris";
$password = "anderson";



// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn, 'GameStore') or die(mysqli_error($conn));

//echo "Connected successfully";
?>
