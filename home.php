<?php
	session_start();
	
?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "UserDB";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT ProductId, ProductName, Description, Quantity, Email, Password  FROM users WHERE email='".$_SESSION["email"]."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		?>
		<table>
			<tr>
				<th>ProductId</th>
				<th>ProductName</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Email</th>
				<th>Password</th>
			</tr>
		<?php
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["ProductId"]."</td>";
			echo "<td>".$row["ProductName"]."</td>";
			echo "<td>".$row["Description"]."</td>";
			echo "<td>".$row["Quantity"]."</td>";
			echo "<td>".$row["Email"]."</td>";
			echo "<td>".$row["Password"]."</td>";
			
			?>
			
			<?php
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}

	$conn->close();
	
	
 ?>
 <button></button>