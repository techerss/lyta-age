<?php

	require_once('connection.php');
	require_once('function.php');
	session_start();
	$id2 = $_SESSION['id'];

	
	$error = array();
	if ($_POST['action'] == 'describe') {
		
		
		$des = $_POST['des'];
	 	$userid = $_POST['userid'];


	 

	 	$des = trimData($_POST['des']);
	 	$userid = trimData($_POST['userid']);

		$userid = mysql_prep($connect, $userid);
		$des = mysql_prep($connect, $des);





		$sql5 = "UPDATE `lancer` SET  `discription` = '$des' WHERE id = $userid";
		$result5 = mysqli_query($connect, $sql5);
		if($result5){
			$success = "Discription changed";
			echo $success;
			return 0;
		}else{
			$failed = "error occoured";
			echo $failed;
			return 0;
		}
		

	}elseif ($_POST['action'] == 'skills') {
		
		$skill = $_POST['skill'];
	 	$userid = $_POST['userid'];


	 

	 	$skill = trimData($_POST['skill']);
	 	$userid = trimData($_POST['userid']);

		$userid = mysql_prep($connect, $userid);
		$skill = mysql_prep($connect, $skill);





		$sql5 = "UPDATE `lancer` SET  `skills` = '$skill' WHERE id = $userid";
		$result5 = mysqli_query($connect, $sql5);
		if($result5){
			$success = "skill added";
			echo $success;
			return 0;
		}else{
			$failed = "error occoured";
			echo $failed;
			return 0;
		}
	}elseif ($_POST['action'] == 'education') {
		$education = $_POST['education'];
	 	$userid = $_POST['userid'];


	 

	 	$education = trimData($_POST['education']);
	 	$userid = trimData($_POST['userid']);

		$userid = mysql_prep($connect, $userid);
		$education = mysql_prep($connect, $education);





		$sql5 = "UPDATE `lancer` SET  `education` = '$education' WHERE id = $userid";
		$result5 = mysqli_query($connect, $sql5);
		if($result5){
			$success = "Education added";
			echo $success;
			return 0;
		}else{
			$failed = "error occoured";
			echo $failed;
			return 0;
		}
	}elseif ($_POST['action'] == 'certification') {
		$certification = $_POST['certification'];
	 	$userid = $_POST['userid'];


	 

	 	$certification = trimData($_POST['certification']);
	 	$userid = trimData($_POST['userid']);

		$userid = mysql_prep($connect, $userid);
		$certification = mysql_prep($connect, $certification);





		$sql5 = "UPDATE `lancer` SET  `certification` = '$certification' WHERE id = $userid";
		$result5 = mysqli_query($connect, $sql5);
		if($result5){
			$success = "certification added";
			echo $success;
			return 0;
		}else{
			$failed = "error occoured";
			echo $failed;
			return 0;
		}
	}elseif (isset($_POST['upload'])) {
		if (isset($_FILES)) {
			$filename = $_FILES['file']['name'];
			$fileTemp = $_FILES['file']['tmp_name'];
			$filesize = $_FILES['file']['size'];
			$fileerror = $_FILES['file']['error'];
			$filetype = $_FILES['file']['type'];
			$fileext = explode('.', $filename);
			$fileactualext = strtolower(end($fileext));


			$allow = array('jpg', 'jpeg', 'png', 'gif', 'mp3', 'mp4', 'avi');
			
			if (in_array($fileactualext, $allow)) {
				if ($filesize < 800000) {
					$pic = uniqid('', ture).'.'.$fileactualext;
					$filedestination = 'profile/'.$pic;
					$compressedimage = compressImage($fileTemp, $filedestination, 35);
					if (empty($error)) {
						$sql6 = "UPDATE `lancer` SET  `profile` = '$pic' WHERE id = $id2 ";
						
						
							$result6 = mysqli_query($connect, $sql6);
							if ($result6) {

								$success = "picture uploaded";
								header("location: ../public/profile.php?success=".$success);
								
							}else{
								$error = "uploaded failed";
								header("location: ../public/profile.php?error=".$error);
							}

					}else{
						$error = "error uploading";
						header("location: ../public/profile.php?error=".$error);
					}

				}else{
					$error = "file too large";
					header("location: ../public/profile.php?error=".$error);
				}
			}else{
				$error = "invalid file format";
				header("location: ../public/profile.php?error=".$error);
			}
		}else{
			$error = "file not found";
			header("location: ../public/profile.php?error=".$error);
		}
		
	}else{
		$error = "error";
		header("location: ../public/profile.php?error=".$error);
	}
		
	

	




















?>