<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php
require('connect_db.php');
$q = "SELECT * FROM	my_table;";
$r= mysqli_query($link, $q);
if (mysqli_num_rows($r) != 0)
{ 
	echo '
		<table class = "table">
		<h1>Delete Records</h1>
		<thead><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Edit</th></tr></thead>
		<tbody>';
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{	
			echo '<tr>
				<td>'.$row["id"].'</td><td>'.$row["first_name"].'</td><td>'.$row["last_name"].'</td>
				<td><div class = "alert alert-light" role= "alert">
		<a class= "btn btn-light btn-sm" href="delete_now.php?id='.$row['id'].'">Delete record</a>';
		}
}	
	mysqli_close($link);
	exit();
?>


</body>
</html>