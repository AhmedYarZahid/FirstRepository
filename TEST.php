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
</head>
<body>
	<form action="TEST1.php" method="POST">
	Name:<input type="text" name="name" id="name"><br><br>
	Phone No:<input type="varchar" name="phone_no" id="phone_no"><br><br>
	<button onclick="addHtmlTableRow()">Submit</button>
    </form>
	<br><br>

	<table id="table">
	<tr>
		<th>Name</th>
		<th>Phone No</th>
	</tr>
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
</body>
</html>