<?php 

	require_once('connection.php');
	require_once('function.php');

	


	$error = array();
	if (isset($_POST['submit'])) {


		$name = isset($_POST['name'])?trim($_POST['name']): '';

		$project = isset($_POST['project'])?trim($_POST['project']): '';

		$location= isset($_POST['location'])?trim($_POST['location']): '';

		$amount = isset($_POST['amount'])?trim($_POST['amount']): '';
		
		$userid = $_POST['id'];

		





		

		
		if ($name == "" || $project == "" || $location== "" || $amount == "" ) {
			$error[] = urlencode("All fields are required");
			header("location: ../public/hireinfo.php?error=".join($error, urlencode('<br>')));
		}
		
		
		if(empty($error)){
			
			$name = mysql_prep($connect, $name);
			$project = mysql_prep($connect, $project);
			$location= mysql_prep($connect, $location);
			$amount = mysql_prep($connect, $amount);

			
			$main_date = date("Y-m-d");
			$sql = "INSERT INTO job (lancerid, name, project, locations, startdate, amount) VALUES ('$userid',
			'$name', '$project', '$location', '$main_date', '$amount')";
			$result = mysqli_Query($connect, $sql);
			if($result){
				$success = "Submission successful";header("location: ../public/hire.php?success=".$success);
			}else{
				$failed = "Submission failed"; header("location: ../public/hireinfo.php?error=".$failed);
			}
		
		}else{
			header("location: ../public/hireinfo.php?error=".join($error, urlencode('<br>')));
		}

	}

 ?>