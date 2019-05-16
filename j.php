<?php
if(isset($_POST)){
	header("Content-Type:application/json; charset=UTF-8");

	$dbh=new PDO('mysql:host=localhost;dbname=tutor', 'root', '');

	$array=[
		"id"=>"",
		"name"=>$_POST['name'],
		"phone_no"=>$_POST['phone_no'],
	];

	function viewjson($dbh){
		$stmt=$dbh->prepare("SELECT * FROM admission");
		$stmt->execute();
		$arr=array();
		while($opt=$stmt->fetch()){
			$arr=$opt;
		}
		var_dump($arr);//to show array data
		echo json_encode($arr);
	}
		


	function insertmysql($dbh,$data){
		$stmt=$dbh->prepare("INSERT INTO admission VALUES (?,?,?)");
		$stmt->bindParam(1, $id);
		$stmt->bindParam(2, $name);
		$stmt->bindParam(3, $phone_no);

		//insert one row
		$id=$data['id'];
		$name=$data['name'];
		$phone_no=$data['phone_no'];
		$stmt->execute();
	}

	function formjsonmysql($dbh, $array){
		$myjson = json_encode($array);
		$obj=json_decode($myjson,true);
		insertmysql($dbh, $obj);
		viewjson($dbh);
	}


	formjsonmysql($dbh, $array);

}else{
		header('location: demo.html');
	}
?>
