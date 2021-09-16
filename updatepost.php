<?php
	require_once('connection.php');
	require_once('function.php');

	$error = array();
	if(isset($_POST['submit'])){
		$post_id = isset($_POST['post_id'])?trim($_POST['post_id']): '';
		$caption = isset($_POST['caption'])?trim($_POST['caption']): '';

		$content = isset($_POST['content'])?trim($_POST['content']): '';

		


		if($caption == "" || $content == ""){
			$error[] = urlencode('All fields are required');
		}else{
			$caption = trimData($_POST['caption']);
			$content = trimData($_POST['content']);
			$post_id = trimData($_POST['post_id']);

		}


		if(isset($_FILES)){
			$filename = $_FILES['file']['name'];
			$fileTmp = $_FILES['file']['tmp_name'];
			$filesize = $_FILES['file']['size'];
			$fileerror = $_FILES['file']['error'];
			$filetype = $_FILES['file']['type'];
			$fileext = explode('.', $filename);
			$fileactualext = strtolower(end($fileext));


			$allow = array('jpg', 'jpeg', 'png', 'gif', 'mp3', 'mp4', 'avi');
			if(in_array($fileactualext, $allow)){
				if($filesize < 800000){
					$pic = uniqid('', true).'.'.$fileactualext;
					$filedestination = 'image/'.$pic;
					$compressedimage = compressImage($fileTmp, $filedestination, 35);

					if(empty($error)){
						$post_id = mysql_prep($connect, $post_id);
						
						$caption = mysql_prep($connect, $caption);
						$content = mysql_prep($connect, $content);
						


						$sql = "UPDATE `post` SET  `post_image` = '$pic', `caption` = '$caption', `content` = '$content' WHERE `post_id` = '$post_id'";
						$result = mysqli_query($connect, $sql);

						if ($result) {
							$success = urlencode('post updated');
							header("location: ../public/viewarticles.php?error=".join($success, urlencode('<br>')));

						}else{
							$error = 'update unsuccessful';
						header("location: ../public/view.php?error=".$error);


						}

					}else{
							$error = "unsuccessful update";

						header("location: ../public/view.php?error=".$error);
					}

					

				}else{
					$failed = "error uplading image";
					header("location: ../public/view.php?error=".$failed);
				}

			}else{
				$failed = "File too large";
				header("location: ../public/view.php?error=".$failed);
			}
		}else{
			$failed = "invalid file format";
			header("location: ../public/view.php?error=".$failed);
		}
		
		

	}













?>

