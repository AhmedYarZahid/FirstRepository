<!DOCTYPE html>
<html>
<head>
	<title>Convert data from Mysql to JSON Format using PHP</title>
</head>
<body>
<?php
$connect=mysqli_connect("localhost","root","","tutor");
$sql="SELECT * FROM admission";
$result=mysqli_query($connect,$sql);
$json_array=array();
while($row=mysqli_fetch_assoc($result))
{
	$json_array[]=$row;
}
/*echo'<pre>';
print_r($json_array);
echo'</pre>';*/
echo json_encode($json_array);
?>
