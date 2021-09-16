<?php

	function trimData($data){
		$data = htmlspecialchars($data);
		$data = trim($data);
		$data = stripcslashes($data);

		return $data;
	}

	function password_encrypt($pass){
		$new_pass = sha1(md5(sha1(md5($pass))));

		return $new_pass;
	}


	function mysql_prep($connect, $string){
		$escape_string = mysqli_real_escape_string($connect, $string);

		return $escape_string;
	}
	function compressImage($source, $destination, $quality){
		// get image info

		$imageinfo = getimagesize($source);
		$mime = $imageinfo['mime'];

		//creata a new image from file

		switch ($mime) {
			case 'image/jpeg':
				$image = imagecreatefromjpeg($source);
				break;
			
			case 'image/png':
				$image = imagecreatefrompng($source);
				break;

			case 'image/gif':
				$image = imagecreatefromgif($source);
				break;
			default:
				$image = imagecreatefromjpeg($source);


		}

		// save image

		imagejpeg($image, $destination, $quality);

		// return compressed image
		return $destination;
	}











?>