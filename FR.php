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
 		.open-button {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        height: auto;
        line-height: 30px;
        width: 50px;
        }
        .design{
 			color: white;
 			border: 2px solid black;
 			width: 20%;
 			padding: 25px;
 			margin-top: 10px;
 			background-color: green; 
 		}
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
 	<table style="margin-top: 50px;" id="table">
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
     <div class="design">
    	<form action="DB.php" method="POST">
 			<h1 style="color: orange">Data Submission</h1>
 			Name:<input type= "text"  name="name" id="name"><br><br>
 			Phone No:<input type="text" name="phone_no" id="phone_no"><br><br>
 			<button class="open-button" type="submit" value="submit" onclick="addHtmlTableRow()">Submit</button>
 			<button style="background-color: red" class="open-button"type="button" onclick="closeForm()">Close</button>
 		</form>
 	 </div>
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
 	<script >
	function addHtmlTableRow()
	{
		var table = document.getElementById("table"),
		newRow=table.insertRow(table.length),
		cell1=newRow.insertCell(0),
		cell2=newRow.insertCell(1),
		name=document.getElementById("name").value;
		phone_no=document.getElementById("phone_no").value;
		cell1.innerHTML=name;
		cell2.innerHTML=phone_no;
	}
</script>