<?php
include ("connect.php");

session_start();

$productID = $_POST['productID'];
$customerID = $_POST['customerID'];
// $customerID = $_SESSION["id"];
$quantity = $_POST['itemQuantity'];
$price = $_POST['price'];
$name = $_POST['name'];



$sql = "INSERT INTO cart (productID, customerID, quantity, price, name) VALUES ('$productID','$customerID','$quantity', '$price', '$name')";

if (!mysqli_query($conn,$sql)) {
    echo "NOT INSERTED";
}

else{
 echo "Inserted productID: " . $productID . ", CustomerID: ". $customerID . ", Quantity: ". $quantity . ", Price: " . $price . " into cart";
}

header( "refresh:2;url=index.php" );

$conn->close();
?>
