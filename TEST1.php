<?php
$name=$_POST['name'];
$phone_no=$_POST['phone_no'];
$con=mysqli_connect('localhost','root','oneclout','tutor');

$query="INSERT INTO admission(name, phone_no) VALUES ('$name','$phone_no')";

/*if(mysqli_connect_errno($con)){
	echo "failed to connect";
}
    else {echo "Data Inserted. Successfuly!<br>
    Name = $name<br>
    Phone no = $phone_no";
}*/
mysqli_query($con,"SELECT * FROM admission");
mysqli_query($con,"INSERT INTO admission(name, phone_no) VALUES('$name','$phone_no')");
?>
