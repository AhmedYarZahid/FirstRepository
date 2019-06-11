<?php
$conn = mysqli_connect("localhost","root","oneclout","CRUD");
$sql="SELECT * FROM crudtable";
$records=mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="col-lg-12">
		<br><br>
		<h1 class="text-warning text-center">Display Table Data</h1>
		<br>
		<table class="table table-striped table-hover table-bordered"> 
			<tr class="bg-dark text-white text-center">
				<th>Id</th>
				<th>Username</th>
				<th>Password</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
	    <?php
 		 while ($crudtable=mysqli_fetch_assoc($records)) {?>
 			<!--echo"<tr>";
 			echo"<td>".$Entry['name']."</td>";
 			echo"<td>".$Entry['address']."</td>";
 			echo "<td>".$Entry['phone_no']."</td>";-->
 			<tr class="text-center">
 				<td><?php echo $crudtable['id']?></td>
 				<td><?php echo $crudtable['username']?></td>
 				<td><?php echo $crudtable['password']?></td>
 				<td><a class="btn-danger btn" href="delete.php?id=<?php echo $crudtable['id'];?>" class="text-white">Delete</a></td>
 				<td><a class="btn-primary btn" href="update.php?id=<?php echo $crudtable['id'];?>" class="text-white">Update</a></td>
 			</tr>
 		<?php }
 		?>
		</table>
	</div>
    </div>
</body>
</html>
