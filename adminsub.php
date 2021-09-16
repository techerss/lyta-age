<?php 

	require_once('connection.php');
	require_once('function.php');
	

	


	$error = array();
	if (isset($_POST['submit'])) {


		

		$fullname = isset($_POST['fullname'])?trim($_POST['fullname']): '';

		$email = isset($_POST['email'])?trim($_POST['email']): '';

		$password = isset($_POST['password'])?trim($_POST['password']): '';

		
		if ($fullname == "" || $email == "" || $password == ""  ) {
			$error[] = urlencode("All fields are required");
		}else{
			$fullname = trimData($_POST['fullname']);
			$email = trimData($_POST['email']);
			$password = trimData($_POST['password']);
			


		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error[] = urlencode("Invalid email format");
		}
		if(empty($error)){
			$new_pass = password_encrypt($password);
			$fullname = mysql_prep($connect, $fullname);
			$email = mysql_prep($connect, $email);
			


			$new_pass = mysql_prep($connect, $new_pass);

			
			
			$sql = "INSERT INTO admin(admin_name,admin_email,admin_password) VALUES('$fullname',  '$email', '$new_pass')";
			$result = mysqli_query($connect, $sql);
			if($result){	
				
				$success = "registeration successful";header("location: ../public/admin.php?success=".$success);
				
			
			}else{
				$failed = "registeration failed"; header("location: ../public/registeradmin.php?error=".$failed);
			}
			
		}else{
			header("location: ../public/registeradmin.php?error=".join($error, urlencode('<br>')));
		}

	}

 ?>