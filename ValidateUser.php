<?php
	require_once("config.php");
	require_once("User.php");
	require_once("UserDAO.php");
	require_once("UserHandler.php");
	
	if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['password'])){

		$allowedExts = array("gif","jpeg","jpg", "png");
		$temp = explode(".", $_FILES['file']['name']);
		$extension = end($temp);
		if ( (($_FILES['file']['type'] == "image/gif")
			||($_FILES['file']['type'] == "image/jpeg")
			||($_FILES['file']['type'] == "image/jpg")
			||($_FILES['file']['type'] == "image/pjpeg")
			||($_FILES['file']['type'] == "image/-png")
			||($_FILES['file']['type'] == "image/png"))

			&& in_array($extension, $allowedExts)) {
			if ($_FILES['file']['error'] > 0) {
				$value = $_FILES['file']['error'];
				if($value == UPLOAD_ERR_INI_SIZE) {
					echo "<script>alert(' Image File Size Exceed');window.location.href='registration.php'</script>";
				} elseif ($value == UPLOAD_ERR_FORM_SIZE) {
					echo "<script>alert(' Image File Size Exceed in HTML');window.location.href='registration.php'</script>";
				} elseif ($value ==  UPLOAD_ERR_PARTIAL) {
					echo "<script>alert(' Image File Not Fully Uploaded!');window.location.href='registration.php'</script>";
				} elseif ($value == UPLOAD_ERR_NO_FILE) {
					echo "<script>alert(' No File is Uploaded');window.location.href='registration.php'</script>";
				} elseif ($value == UPLOAD_ERR_NO_TMP_DIR) {
					echo "<script>alert('NO directory is Uploaded');window.location.href='registration.php'</script>";
				} elseif ($value == UPLOAD_ERR_CANT_WRITE) {
					echo "<script>alert(' writing the file to disk failed');window.location.href='registration.php'</script>";
				} else {
					echo "<script>alert('Unknown File Error!');window.location.href='registration.php'</script>";
				}
			} else {

				move_uploaded_file($_FILES['file']['tmp_name'], "img/" . $_FILES['file']['name']);

					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$email = $_POST['email'];
					$pic = "img/".$_FILES['file']['name'];
					$pass = sha1($_POST['password']);
					


					$config = array(
							'fname' => $fname,
							'lname' => $lname,
							'email' => $email,
							'password' => $pass,
							'pic' => $pic
						);

					$details = new User($config);
						$_fname = $details->getFname();
						$_lname = $details->getLname();
						$_email = $details->getEmail();
						$_pass = $details->getPassword();
						$_pic = $details->getPic();

					$Query = new UserHandler();

				 	$isTrue = $Query->createUser($_fname,$_lname,$_email,$_pass, $_pic);
					 	if ($isTrue) {
					 		header("location:login.php");
					 	} else {
					 		echo "<script>alert('Error');window.location.href='registration.php'</script>";
					 	}
			}
		}else {
			echo "<script>alert('Invalid Image File');window.location.href='registration.php'</script>";	
		}

	}else{
		echo "<script>alert('Sorry Please Fill in all');window.location.href='registration.php'</script>";
	}

?>