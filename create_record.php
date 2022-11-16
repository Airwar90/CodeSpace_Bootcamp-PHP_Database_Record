<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<?php

if ($_SERVER['REQUEST_METHOD']	==	'POST') {
	#looks for the php file that enstablishes the connection to the server
	require('connect_db.php');
	#inizialize error array
	$errors = array();
	#checks if ID field is completed
	if(empty($_POST['id'])) {
		$errors[] = 'Enter ID number';}
	else {
	#escapes special characters in a string for use in an SQL query
	$id = mysqli_real_escape_string($link, trim($_POST['id']));}
	
	#checks if first_name field is completed
	if(empty($_POST['first_name'])) {
		$errors[] = 'Enter First Name';}
	else {
	#escapes special characters in a string for use in an SQL query
	$fn = mysqli_real_escape_string($link, trim($_POST['first_name']));}
	
	#checks if last_name field is completed
	if(empty($_POST['last_name'])) {
		$errors[] = 'Enter Last Name';}
	else {
	#escapes special characters in a string for use in an SQL query
	$ln = mysqli_real_escape_string($link, trim($_POST['last_name']));}
	
	#checks if user already exists
		#if error array is empty meaning all fields where filled correctly
	if(empty($errors)) {
		#variable that stores the query to chech the id input
		$q = "SELECT id FROM my_table WHERE id='$id'";
		#sends the query to the db?
		$r = mysqli_query($link, $q);
		if(mysqli_num_rows($r) != 0) $errors[] = 'User already registered';
	}
	#on success stores the input data into my_table
		#if error array is empty meaning all fields where filled correctly
	if(empty($errors)) {
		$q = "INSERT INTO my_table(id, first_name, last_name) VALUES('$id', '$fn', '$ln')";
		$r = mysqli_query($link, $q);
		if($r) {echo '<p>Record added successfully</p>';}		
		#close database connection
		mysqli_close($link);
		exit();
	}
	
}

?>

</body>
</html>