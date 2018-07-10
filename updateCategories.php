<!-- Chris Anderson -->

<?php
include ("connect.php");

$q = $_REQUEST["q"];


if($q=="ALL"){
	$sql = "SELECT * FROM products WHERE system!='Nintendo 3DS'";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error ($conn);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			$a = array($row["productID"],$row["name"],$row["genre"],$row["price"],$row["system"], $row["imageURL"]);
			echo "<div class=\"col-sm-3 col-lg-3 col-md-3\">
			<div>
			<div class=\"thumbnail\">
				<img src=\"" . $row["imageURL"] . "\" alt=\"\">
				<h5 ><a id = \"" . $row["productID"] . "\"href=\"javascript:showGameInfo(" .$row["productID"] . ");\">" . $row["name"] . "</a>
				</h5>
								<h4>$" . $row["price"] . "</h4>
					
				"
				. $row["numPlayers"] .
			"<br></div>
			</div>
		</div>";
	}
}

//this is used to ensure the 3ds games appear at the end of the webpage, since these images are smaller
$sql = "SELECT * FROM products WHERE system='Nintendo 3DS'";
$result = mysqli_query($conn, $sql);
echo mysqli_error ($conn);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		$$a = array($row["productID"],$row["name"],$row["genre"],$row["price"],$row["system"], $row["imageURL"]);
			echo "<div class=\"col-sm-3 col-lg-3 col-md-3\">
			<div>
			<div class=\"thumbnail\">
				<img src=\"" . $row["imageURL"] . "\" alt=\"\">
				<h5 ><a id = \"" . $row["productID"] . "\"href=\"javascript:showGameInfo(" .$row["productID"] . ");\">" . $row["name"] . "</a>
				</h5>
								<h4>$" . $row["price"] . "</h4>
					
				"
				. $row["numPlayers"] .
			"<br></div>
			</div>
		</div>";

}
}
} 
else if($q=="PS4"){
	$sql = "SELECT * FROM products WHERE system = 'PS4'";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error ($conn);


	if (mysqli_num_rows($result) > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			$a = array($row["productID"],$row["name"],$row["genre"],$row["price"],$row["system"], $row["imageURL"]);
			echo "<div class=\"col-sm-3 col-lg-3 col-md-3\">
			<div>
			<div class=\"thumbnail\">
				<img src=\"" . $row["imageURL"] . "\" alt=\"\">
				<h5 ><a id = \"" . $row["productID"] . "\"href=\"javascript:showGameInfo(" .$row["productID"] . ");\">" . $row["name"] . "</a>
				</h5>
								<h4>$" . $row["price"] . "</h4>
					
				"
				. $row["numPlayers"] .
			"<br></div>
			</div>
		</div>";
	}
}
}

else if($q=="XBOX"){
	$sql = "SELECT * FROM products WHERE system = 'Xbox One'";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error ($conn);

	if (mysqli_num_rows($result) > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			$a = array($row["productID"],$row["name"],$row["genre"],$row["price"],$row["system"], $row["imageURL"]);
			echo "<div class=\"col-sm-3 col-lg-3 col-md-3\">
			<div>
			<div class=\"thumbnail\">
				<img src=\"" . $row["imageURL"] . "\" alt=\"\">
				<h5 ><a id = \"" . $row["productID"] . "\"href=\"javascript:showGameInfo(" .$row["productID"] . ");\">" . $row["name"] . "</a>
				</h5>
								<h4>$" . $row["price"] . "</h4>
					
				"
				. $row["numPlayers"] .
			"<br></div>
			</div>
		</div>";
	}
}
}

else if($q=="3DS"){
	$sql = "SELECT * FROM products WHERE system = 'Nintendo 3DS'";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error ($conn);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			$a = array($row["productID"],$row["name"],$row["genre"],$row["price"],$row["system"], $row["imageURL"]);
			echo "<div class=\"col-sm-3 col-lg-3 col-md-3\">
			<div>
			<div class=\"thumbnail\">
				<img src=\"" . $row["imageURL"] . "\" alt=\"\">
				<h5 ><a id = \"" . $row["productID"] . "\"href=\"javascript:showGameInfo(" .$row["productID"] . ");\">" . $row["name"] . "</a>
				</h5>
								<h4>$" . $row["price"] . "</h4>
					
				"
				. $row["numPlayers"] .
			"<br></div>
			</div>
		</div>";
	}
}

else if($q==null){
	echo " ";
} 
}
else{
	$sql = "SELECT * FROM products WHERE system = 'PC'";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error ($conn);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			$a = array($row["productID"],$row["name"],$row["genre"],$row["price"],$row["system"], $row["imageURL"]);
			echo "<div class=\"col-sm-3 col-lg-3 col-md-3\">
			<div>
			<div class=\"thumbnail\">
				<img src=\"" . $row["imageURL"] . "\" alt=\"\">
				<h5 ><a id = \"" . $row["productID"] . "\"href=\"javascript:showGameInfo(" .$row["productID"] . ");\">" . $row["name"] . "</a>
				</h5>
								<h4>$" . $row["price"] . "</h4>
					
				"
				. $row["numPlayers"] .
			"<br></div>
			</div>
		</div>";
	}
}
}

$conn->close();
?>
