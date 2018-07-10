<?php
include ("connect.php");

$productID = $_POST['firstName'];
$customerID = 1;
$paymentMethod = $_POST['firstName'];
$cardNumber = $_POST['cardNumber'];
$securityCode = $_POST['secCode'];
$shippingAddress = $_POST['address'];
$shippingState = $_POST['state'];
$shippingCity = $_POST['city'];
$shippingZipCode = $_POST['zip'];

$sql = "INSERT INTO purchases ( productID, customerID, paymentMethod, cardNumber, securityCode, shippingAddress, shippingState, shippingCity, shippingZipCode) VALUES ('$productID','$customerID','$paymentMethod', '$cardNumber','$securityCode','$shippingAddress','$shippingState','$shippingCity','$shippingZipCode')";



if (!mysqli_query($conn,$sql)) {
    echo "NOT INSERTED";
}

else{
 echo "Inserted";
}

header( "refresh:2;url=index.php" );

$conn->close();
?>
