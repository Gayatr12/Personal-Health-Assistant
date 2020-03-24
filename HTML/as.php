<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "medicine";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		if(isset($_POST["name"])){
				$user_defined = $_POST["name"];
				$sql = "SELECT * FROM generic WHERE Brand_Name = '$user_defined'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo  " - Name: " . $row["Generic_Name"]. "  Price " . $row["Price"]. "<br>";

				    }

				} else {
				    echo "0 results";
				}	
		}
		$conn->close();
		?>


<form action="" method="post">
		
		Name: <input type="text" name="name"><br>
		<input type="submit" name="">


</form>

</body>
</html>