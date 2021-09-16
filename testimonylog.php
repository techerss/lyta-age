<?php

	require_once('connection.php');
	require_once('function.php');

	$error = array();
	if (isset($_POST['submit'])) {
		$userid = isset($_POST['userid'])?trim($_POST['userid']): '';
		$name = isset($_POST['name'])?trim($_POST['name']): '';
		$testimonial = isset($_POST['test'])?trim($_POST['test']): '';

		


		if ($testimonial == "" || $name == "" || $userid == "") {
			$error = urlencode('All fields are required');
			header('location: ../public/testimonial.php?error='.join($error));
		}else{
			$testimonial = trimData($_POST['test']);
			$name = trimData($_POST['name']);
			$userid = trimData($_POST['userid']);

		}
	

		if (empty($error)) {
			$testimonial = mysql_prep($connect, $testimonial);
			$name = mysql_prep($connect, $name);
			$userid = mysql_prep($connect, $userid);





			$sql = "INSERT INTO testimonial (user_id, name, content) VALUES ('$userid', '$name', '$testimonial')";
			$result = mysqli_query($connect, $sql);
			if ($result) {
				$success = urlencode('successful');
				header("location: ../public/testimonial.php?success=".join($success, urlencode('<br>')));
			}else{
				$error = urlencode('failed to submit');
				header("location: ../public/testimonial.php?error=".join($error, urlencode('<br>')));
			}
		}else{
			$error = urlencode('error occured');
			header("location: ../public/testimonial.php?error=".join($error, urlencode('<br>')));
		}
	}else{
			$error = urlencode('Testimonial not submitted');
			header("location: ../public/testimonial.php?error=".join($error, urlencode('<br>')));
		}
















?>