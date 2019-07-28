<!DOCTYPE html>
<html>
<head>
	<title>Search bar</title>
</head>
<body>
	<h2 style="text-align: center;">Without Filter</h1>
	<form action="print_without_filter.php" method="POST">
	<label>Search Here: </label>
	<input type="text" name="user" placeholder="Enter User Name" style="width: 1000px">
	<!-- <input type="text" name="pass" placeholder="password"> -->
	<input type="submit" name="submit" value="Search">
	</form>
	<br>
	<br>
	<h2 style="text-align: center;">With Filter</h1>
	<form action="print_with_filter.php" method="POST">
	<label>Search Here: </label>
	<input type="text" name="user" placeholder="Enter User Name" style="width: 1000px">
	<!-- <input type="text" name="pass" placeholder="password"> -->
	<input type="submit" name="submit" value="Search">
	</form>
	<br>
	<br>
</body>
</html>

