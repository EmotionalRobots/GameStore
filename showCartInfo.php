<!-- Chris Anderson -->
<?php
include ("connect.php");


// $q = $_SESSION["id"];
$q = 1;

//sql to 

// echo "Session id: " . $q . "";
$sql = "SELECT * FROM cart WHERE customerID='" . $q . "'";
//SQL to get total cost of all products in customers cart
$result = mysqli_query($conn, $sql);
echo mysqli_error ($conn);
if (mysqli_num_rows($result) > 0) {

			while($row = $result->fetch_assoc()) {

	echo "<h4>" . $row['name'] . "</h4>
          <p>Quantity: " . $row['quantity'] . "</p>
          <p>Price: $" . $row['price'] . "</p>
          ";
      }
}


// $sqlTotalCost = "SELECT SUM(price) as TotalPrice FROM products WHERE productID in (SELECT productID from cart where customerID='" . $q . "'";

$sqlTotalCost = "SELECT SUM(price) as Total FROM cart WHERE customerID ='" . $q . "'";

$result = mysqli_query($conn, $sqlTotalCost);
echo mysqli_error ($conn);
if (mysqli_num_rows($result) > 0) {
	$row = $result->fetch_assoc();
	echo "<h1>TOTAL COST: $" . $row['Total'] . ".00</h1>";
}

$conn->close();
?>
