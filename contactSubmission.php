<?php
include ("connect.php");

$customerID = $_POST['customerID'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contact (customerID, name, email, message) VALUES ('$customerID','$customerID','$email','$message')";

if (!mysqli_query($conn,$sql)) {
echo "Insert Failure";
}

else{
echo "Insert successful";
}


$conn->close();
?>
