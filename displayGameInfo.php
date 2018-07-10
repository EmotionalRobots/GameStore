<!-- Chris Anderson -->
<?php
include ("connect.php");

$q = $_REQUEST["q"];
$customerID = "1";

$sql = "SELECT * FROM products WHERE productID='" . $q . "'";
$result = mysqli_query($conn, $sql);
echo mysqli_error ($conn);
if (mysqli_num_rows($result) > 0) {
	$row = $result->fetch_assoc();
	echo "<h2>". $row["name"] ."</h2>
<hr>
<iframe width=\"560\" height=\"315\" src=\"" . $row["trailer"] . "\" frameborder=\"3\" allowfullscreen></iframe>
                                <br>
                                <img width=\"200\" class=\"pull-right\" src=\"". $row["imageURL"] ."\" alt=\"\">
                                 <h4><p>". $row['name'] ."</p>
                                    <h4></br>Price: $". $row["price"] ."</h4>
                                 </h4>
                                 <p>". $row["description"] ."</p>
                                 <br>
                                 <p>Game Specifications: </p>
                                 Number of Players:<span>". $row["numPlayers"] ."</span><br><br>
                                 <form class=\"form-inline\" name=\"addToCartForm\" action=\"addToCart.php\" method=\"post\">
                                    <label for=\"itemQuantity\">Quantity:</label>
                                    <select name=\"itemQuantity\" class=\"form-control\">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                  </select>
                                  <input type=\"hidden\" name=\"productID\" value=\"". $row['productID'] ."\">
                                  <input type=\"hidden\" name=\"customerID\" value=\"". $customerID . "\">
                                  <input type=\"hidden\" name=\"price\" value=\"". $row['price'] . "\">
                                  <input type=\"hidden\" name=\"name\" value=\"". $row['name'] . "\">

                                  <button type=\"submit\" class=\"btn btn-default btn-sm\">
                                      <span class=\"glyphicon glyphicon-shopping-cart\"></span> Add to Cart</button>
                                  </form>";

}


$conn->close();
?>
