<?php
$conn = mysqli_connect("localhost","root","oneclout","TableData");
$sql="SELECT * FROM Entry";
$records=mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	    .button{
	    	background-color: green;
	    	text-decoration: none;
	    	color: white;
	    	border-radius: 5px;
	    	padding: 5px;
	    }
	    a:hover {
	    	background-color: lightgrey;
	    }
		table{
         border-collapse: collapse;
         width: 100%;
         background-color: lightgreen;
         border-radius: 5px;
		}
		table, th, td{
			padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-family: sans-serif;
		}
		th,td{
			padding: 10px;
		}
		form{
			margin: 20px;
			padding: 20px;
			font-family: sans-serif;
			background-color: lightgreen;
			border-radius: 5px;
		}
	</style>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript">
		function chk(){
			var name=document.getElementById('name').value;
			var address=document.getElementById('address').value;
			var phone_no=document.getElementById('phone_no').value;
			var dataString='name='+name+'&address='+address+'&phone_no='+phone_no;
			$.ajax({
				type:'post',
				url:'TD.php',
				data:dataString,
				//dataType:json,
				cache:false,
				success:function(data){
					console.log(data);
					
					//json=JSON.parse(data);
						//$('#table').append("<tr>"+response.name+"</tr>");
						//$('#address').text(response.address);
						//$('#phone_no').text(response.phone_no);
						//var $tr = $('<tr/>');
						//$tr.append($('<td/>').html(result.name));
                        //$tr.append($('<td/>').html(result.address));
                        //$tr.append($('<td/>').html(result.phone_no));
					//alert(data);
					
			var table_data = '<tr>';
			 $.each(JSON.parse(data), function(key, value){
				table_data += '<td>' + value + '</td>';
			 });
			 table_data+= '<td><a href="#" class="button">Edit</a></td>';
			 table_data+= '<td><a href="#" class="button">Delete</a></td>';

			 table_data += '</tr>'
			 $('#table').append(table_data);
					}
			});
			return false;
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#myInput").on("keyup", function(){
				var value = $(this).val().toLowerCase();
				$("#myTable tr").filter (function(){
					$(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
				});
			});
		});
	</script>
</head>
<body style="background-color: green;">
     <form>
     	Name:<input type="text" id="name">
     	<br><br>
     	Address:<input type="text" id="address">
     	<br><br>
     	Phone no:<input type="text" id="phone_no">
     	<br><br>
     	<input style="background-color: green; color:white; " type="submit" value="Submit" onclick="return chk()"><br><br>
     	<p>Type something in the input field to search the table for name, address or phone no:</p>
     	<br>
     	<input id = "myInput" type="text" placeholder="Search.." >
     </form>
    <div style="padding: 30px;">
    <table id="table">
     <thead>
	 <tr>
		<th>Name</th>
		<th>Address</th>
		<th>Phone No</th>
		<th>Edit</th>
		<th>Delete</th>
	 </tr>
	</thead>
	<tbody id = "myTable">
	    <?php
 		 while ($Entry=mysqli_fetch_assoc($records)) {?>
 			<!--echo"<tr>";
 			echo"<td>".$Entry['name']."</td>";
 			echo"<td>".$Entry['address']."</td>";
 			echo "<td>".$Entry['phone_no']."</td>";-->
 			<tr>
 				<td><?php echo $Entry['name']?></td>
 				<td><?php echo $Entry['address']?></td>
 				<td><?php echo $Entry['phone_no']?></td>
 				<td><a href="#" class="button">Edit</a></td>
 				<td><a href="#" class="button">Delete</a></td>
 			</tr>
 		<?php }
 		?>
 	  </tbody>
    </table>
</div>
</body>
</html>