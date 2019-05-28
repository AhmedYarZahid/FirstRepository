<?php
$conn = mysqli_connect("localhost","root","oneclout","TableData");
$sql="SELECT * FROM Entry";
$records=mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
			table{
        border-collapse: collapse;
		}
		table, th, td{
			border: 1px solid black;
		}
		th,td{
			padding: 10px;
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
			 table_data += '</tr>'
			 $('#table').append(table_data);
					}
			});
			return false;
		}
	</script>
</head>
<body>
     <form>
     	Name:<input type="text" id="name">
     	<br><br>
     	Address:<input type="text" id="address">
     	<br><br>
     	Phone no:<input type="text" id="phone_no">
     	<br><br>
     	<input type="submit" value="Submit" onclick="return chk()">
     </form>
     <br>
    <table id="table">
	 <tr>
		<th>Name</th>
		<th>Address</th>
		<th>Phone No</th>
	 </tr>
	    <?php
 		 while ($Entry=mysqli_fetch_assoc($records)) {
 			echo"<tr>";
 			echo"<td>".$Entry['name']."</td>";
 			echo"<td>".$Entry['address']."</td>";
 			echo "<td>".$Entry['phone_no']."</td>";
 			echo"<tr>";

 		}
 		?>
    </table>
</body>
</html>