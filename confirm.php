<?php
	session_start();
	
	$_SESSION["email"]=$_POST["email"];
	$_SESSION["pass"]=$_POST["pass"];
	
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

	$sql = "INSERT INTO users (ProductId, ProductName, Description, Quantity, Email, Password)
	VALUES ('".$_SESSION["ProductId"]."', '".$_SESSION["ProductName"]."', '".$_SESSION["Description"]."', '".$_SESSION["Quantity"]."',  '".$_SESSION["email"]."', '".$_SESSION["pass"]."')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
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

	$sql = "SELECT ProductId, ProductName, Description, Quantity, Email, Password FROM users";
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