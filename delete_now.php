<?php
require("connect_db.php");
if(isset($_GET['id'])) $id = $_GET['id'];
$sql = "DELETE FROM my_table WHERE id='$id'";
if($link->query($sql) === TRUE) { header("Location: read_table.php");}
else {echo "Error Deleting record".$link->error;}