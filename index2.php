<?php
	session_start();
	
	$_SESSION["ProductId"]=$_POST["ProductId"];
	$_SESSION["ProductName"]=$_POST["ProductName"];
	$_SESSION["Description"]=$_POST["Description"];
	$_SESSION["Quantity"]=$_POST["Quantity"];
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>LabTask-6</title>
</head>
<body>
	
	<form method="post" action="confirm.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td><b>Email :</b></td>
				<td><input type="email" name="email"/></td>
				
			</tr>
			<tr>
				<td><b>Password :</b></td>
				<td><input type="password" name="pass"/></td>
				
			</tr>
			

			
			<tr>
				<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
				
			</tr>
			
		</table>
		
		
		
		
		
		
		
		
		
		
		
		
	</form>
	
	
</body>
</html>