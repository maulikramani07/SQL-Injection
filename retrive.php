
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Retrive Data</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
</head>
<body>
	<button type="button"  class="btn btn-primary">Retrive Data</button>

	<?php
include("connection.php");

$sql = "SELECT name, mobile, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='border: 1px solid black;' ><tr><th>Name</th><th>Mobile</th><th>Password</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["mobile"]." ".$row["password"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>