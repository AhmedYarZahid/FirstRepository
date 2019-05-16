<?php
$conn = mysqli_connect("localhost","root","","tutor");
$sql="SELECT * FROM admission";
$records=mysqli_query($conn, $sql);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Student's Data</title>
 	<style>
 		.hidden{
 			display: none;
 		}
  		table, th, td{
 			border:1px solid black;
 			border-collapse: collapse;
 		}
 	</style>
 </head>
 <body>
 	<table style="margin-top: 50px;">
 		<tr>
 			<th colspan="2">Record</th>
 		</tr>
 		<tr>
 			<th>Name</th>
 			<th>Phone no</th>
 		</tr>
 		<?php
 		while ($admission=mysqli_fetch_assoc($records)) {
 			echo"<tr>";
 			echo"<td>".$admission['name']."</td>";
 			echo "<td>".$admission['phone_no']."</td>";
 			echo"<tr>";

 		}
 		?>
 	<p>Click the button below to insert your information.</p>
 	<button onclick="openForm()">Click Me!</button>
    <div  class = "hidden"id="myForm">
 		<form action="DB.php" method = "post">
 			<h1>Data Submission</h1>

 			<label><b>Name</b></label>
 			<input type="text" name="name">

 			<label><b>Phone No</b></label>
 			<input type="text" name="phone_no">

 			<button type="submit" value="submit">Submit</button>
 			<button type="button" onclick="closeForm()">Close</button>
 		</form>
 	</div>
 		<script >
 			function openForm(){
 				document.getElementById("myForm").style.display="block";
 			}
 			function closeForm(){
 				document.getElementById("myForm").style.display="none";
 			}
 		</script>
 	</table>
 
 </body>
 </html>