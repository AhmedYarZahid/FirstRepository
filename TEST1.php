<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$con=mysqli_connect('localhost','root','','will');

$query="INSERT INTO name(fname, lname) VALUES ('$fname','$lname')";

if(mysqli_connect_errno($con)){
	echo "failed to connect";
}
    else {echo "Data Inserted. Successfuly!<br>
    First Name = $fname<br>
    Last Name = $lname";
}
mysqli_query($con,"SELECT * FROM name");
mysqli_query($con,"INSERT INTO name(fname, lname) VALUES('$fname','$lname')");
?>
