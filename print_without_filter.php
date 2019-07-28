<?php
include("connection.php");

$name=$_POST['user'];
// $password=$_POST['pass'];

//$sql = "SELECT name, mobile, password FROM users WHERE name like '%$name%'";
$sql = "SELECT name,mobile,password FROM users WHERE name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='border: 1px solid black;' ><tr><th>Name</th><th>Mobile</th><th>Password</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr style='border: 1px solid black;'><td style='border: 1px solid black;'>".$row["name"]."</td><td style='border: 1px solid black;'>".$row["mobile"]."</td><td style='border: 1px solid black;'>".$row["password"]."</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>
