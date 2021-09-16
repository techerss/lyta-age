<?php 

	require_once('connection.php');
	require_once('function.php');
	

	


	$error = array();
	if (isset($_POST['submit'])) {


		$firstname = isset($_POST['firstname'])?trim($_POST['firstname']): '';

		$lastname = isset($_POST['lastname'])?trim($_POST['lastname']): '';

		$email = isset($_POST['email'])?trim($_POST['email']): '';

		$password = isset($_POST['password'])?trim($_POST['password']): '';

		$discription = isset($_POST['discription'])?trim($_POST['discription']): '';

		$profession = isset($_POST['profession'])?trim($_POST['profession']): '';

		$skill = isset($_POST['skill'])?trim($_POST['skill']): '';

		$certification = isset($_POST['certification'])?trim($_POST['certification']): '';

		$education = isset($_POST['education'])?trim($_POST['education']): '';

		$location = isset($_POST['location'])?trim($_POST['location']): '';







		

		
		if ($firstname == "" || $lastname == "" || $email == "" || $password == "" || $discription == "" || $profession == "" || $location == ''  ) {
			$error[] = urlencode("All fields are required");
		}else{
			$firstname = trimData($_POST['firstname']);
			$lastname = trimData($_POST['lastname']);
			$email = trimData($_POST['email']);
			$password = trimData($_POST['password']);
			$discription = trimData($_POST['discription']);
			$profession = trimData($_POST['profession']);
			$skill = trimData($_POST['skill']);
			$certification = trimData($_POST['certification']);
			$education = trimData($_POST['education']);
			$location = trimData($_POST['location']);



		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error[] = urlencode("Invalid email format");
		}
		if(empty($error)){
			$new_pass = password_encrypt($password);
			$firstname = mysql_prep($connect, $firstname);
			$lastname = mysql_prep($connect, $lastname);
			$email = mysql_prep($connect, $email);
			$discription = mysql_prep($connect, $discription);
			$profession = mysql_prep($connect, $profession);
			$skill = mysql_prep($connect, $skill);
			$certification = mysql_prep($connect, $certification);
			$education = mysql_prep($connect, $education);
			$location = mysql_prep($connect, $location);


			$new_pass = mysql_prep($connect, $new_pass);

			$check = "SELECT * FROM lancer WHERE email = 'email'";
			$check_result = 
			mysqli_query($connect, $check);
			if (mysqli_num_rows($check_result) == 1) {
				$exist = "user with email address already exists";
				header("location: ../public/register.php?error=".$exist);
			}else{
				$main_date = date("Y-m-d");
				$sql = "INSERT INTO lancer(first,last,email,password,date1,location,discription,profession,skills,certification,education) VALUES('$firstname', '$lastname', '$email', '$new_pass', '$main_date', '$location', '$discription', '$profession', '$skill', '$certification', '$education')";
				$result = mysqli_query($connect, $sql);
				if($result){	
					
					$success = "registeration successful";header("location: ../public/login.php?success=".$success);
					
				
				}else{
					$failed = "registeration failed"; header("location: ../public/register.php?error=".$failed);
				}
			}
		}else{
			header("location: ../public/register.php?error=".join($error, urlencode('<br>')));
		}

	}

 ?>