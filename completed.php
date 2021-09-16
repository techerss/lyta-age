<?php

    require_once('connection.php');

    $jobid = $_POST['id'];
    $amount = $_POST['amount'];
    $job_stat = $_POST['job_stat'];

    session_start();
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $sql3 = "SELECT * FROM lancer WHERE id = '$id'";
        $result3 = mysqli_Query($connect, $sql3);
        $roww = mysqli_fetch_assoc($result3);
        $userid = $roww['id'];
      	$total = $roww['total'];
        $total_stat = $roww['total_stat'];       
        
    } 
    

    $newamount = $total + $amount;

    $sql = "UPDATE `lancer` SET `total` = '$newamount' WHERE `id` = '$userid'";			
	$result = mysqli_query($connect, $sql);
	if($result){
		$sql2 = "UPDATE `job` SET `jobstart` = 1 WHERE `id` = '$jobid'";			
		$result2 = mysqli_query($connect, $sql2);
		echo "succesfull";
	}else{
			
	}









?>