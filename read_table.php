<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<?php
require('connect_db.php');
$q = "SELECT * FROM my_table;";
$r = mysqli_query ($link, $q);
if (mysqli_num_rows($r) != 0) {
	echo '
		<h1>Read Records</h1>
			<table class= "table">
			<thead>
			<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>
			</thead><tbody>';
			while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
				echo '<tr><td>'.$row["id"].'</td><td>'.$row["first_name"].'</td><td>'.$row["last_name"].'</td>';					
			}			
	echo '</tr></tbody></table></br><br>';
	
mysqli_close($link);	
}
	
?>
</body>
</html>