<?php
	require_once('connection.php');
	require_once('function.php');

	$error = array();
	if(isset($_POST['submit'])){
		$email = isset($_POST['email'])?trim($_POST['email']): '';

		$password = isset($_POST['password'])?trim($_POST['password']): '';

		if($email == "" || $password == ""){
			$error[] = urlencode('All fields are required');
		}else{
			$email = trimData($_POST['email']);
			$password = trimData($_POST['password']);
		}
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error[] = urlencode('invalid email format');
		}
		if(empty($error)){
			$new_pass = password_encrypt($password);
			$email = mysql_prep($connect, $email);
			$new_pass = mysql_prep($connect, $new_pass);

			$sql = "SELECT * FROM admin WHERE admin_email = '$email' AND admin_password = '$new_pass'";
			$result = mysqli_query($connect, $sql);

			if(mysqli_num_rows($result)){
				while ($row = mysqli_fetch_assoc($result)) {
					session_start();
					$_SESSION['id'] = $row['admin_id'];
					$_SESSION['email'] = $row['admin_email'];
					
					if(isset($_SESSION['id'])){
						setcookie('freelance', base64_encode(json_encode(['email'
							=> $_SESSION['email'], 'id' => $_SESSION['id']])),
						time() + (86400 * 120), "/");
					}else{
						$failed = "email or password is inccorect";
						header('location: ../public/loginadmin.php?error='.$failed);
					}
					header('location: ../public/admin.php');
				}
			}else{
					$notfound = "email not found";
					header('location: ../public/loginadmin.php?error='.$notfound);
			}

		}else{
			header("location: ../public/loginadmin.php?error=".join($error, urlencode('<br>')));
		}
	}














?>