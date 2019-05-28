<?php
$name=$_POST['name'];
$address=$_POST['address'];
$phone_no=$_POST['phone_no'];
$con=mysqli_connect('localhost','root','oneclout','TableData');

$query="INSERT INTO Entry(name, address, phone_no) VALUES ('$name', '$address', '$phone_no')";

mysqli_query($con, "SELECT * FROM Entry");
mysqli_query($con, "INSERT INTO Entry(name, address, phone_no) VALUES ('$name', '$address', '$phone_no')");

/*echo "<tr>";
 echo "<td>" . $name . "</td>";
 echo "<td>" . $address. "</td>";
 echo "<td>" . $phone_no . "</td>";
echo "</tr>";*/
$array=[
		"name"=>$_POST['name'],
		"address"=>$_POST['address'],
		"phone_no"=>$_POST['phone_no'],
];
echo json_encode($array);
?>
