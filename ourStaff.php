<!-- Chris Anderson -->
<?php
include ("connect.php");

$sql = "SELECT * FROM support";
$result = mysqli_query($conn, $sql);
echo mysqli_error ($conn);
if (mysqli_num_rows($result) > 0) {
while($row = $result->fetch_assoc()) {
echo "<h3><span></span>" . $row["firstName"] . " " . $row["lastName"] . "</h3>
                    <h4>Position: " . $row["position"] ."</h4>
                    <hr>
                    <div class=\"col-lg-6\">
                    <div class=\"thumbnail\">
                    <img src=\"pictures/supportPics/" . $row["employeeID"] . ".jpg\" alt=\"\">
                    </div></div>
                    <p></p><p>" . $row["description"] . "</p>";
	}
}

$conn->close();
?>
