<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container">
<form action="create_record.php" method="post">
ID: <input type="text" name="id" class="form-control"  
value="<?php if (isset($_POST['id'])) echo $_POST['id']; ?>  ">

<form action="create_record.php" method="post">
First Name: <input type="text" name="first_name" class="form-control"  
value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>  ">

<form action="create_record.php" method="post">
Last Name: <input type="text" name="last_name" class="form-control"  
value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>  "> <br>
<input type="submit">
</div>
<footer>
<a href="read_table.php">Read table</a> 
<a href="update_record.php">Update record</a>
<a href="delete_record.php">Delete record</a>
</footer>

</body>
</html>