<?php
  $conn=mysqli_connect('127.0.0.1','root','','jd','3306');
	$sql='SELECT * FROM jd_order';
	$result=mysqli_query($conn,$sql);
	mysqli_query($conn,'SET NAMES utf8');
	mysqli_close($conn);
	$jsonArr=array();
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		array_push($jsonArr,$arr);
	}
	$json=json_encode($jsonArr);
	echo $json;
?>
