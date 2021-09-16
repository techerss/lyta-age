<?php
require_once("connection.php");

if(isset($_GET['id'])){
	$id = base64_decode($_GET['id']);

	//deleting from data base competely
	//$sql = "DELETE FROM saffs WHERE id = '$id';

	$sql2 = "UPDATE `post` SET `post_status` = 0 WHERE `post_id` = '$id'";

	$result = mysqli_query($connect, $sql2);
	if($result){
		header("location: ../public/viewarticles.php");
	}else{
		header("location: ../public/viewarticles.php");

	}
}
