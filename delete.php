<?php 
	include "db.php";
	$id=$_GET["id"];
	$sql = "DELETE FROM info WHERE id=$id" ;
	$query = mysqli_query($db_con,$sql);
	if($query){
		header("location:list.php");
	}else{
		echo "data silinmedi!!!";
	}