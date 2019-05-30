<?php
$con = mysqli_connect('localhost','root','oneclout','CRUD');
$id = $_GET['id'];
mysqli_query($con, "DELETE FROM 'crudtable' WHERE id = $id");
header('location:display.php');
?>