<?php
	require_once("config.php");
	require_once("UserDAO.php");
	require_once("UserHandler.php");

	$email = $_POST['email'];
	$pass = sha1($_POST['password']);
	$Handler = new UserHandler();


	if(!empty($email) && !empty($pass)){
		$result = $Handler->loginAuthenticator($email,$pass);

		if ($result) {
			header("location:question.php");
		} else {
			echo "<script>alert('Invalid Password or Email');window.location.href='login.php'</script>";
		}
	}else{
		echo "<script>alert('Invalid Password or Email');window.location.href='login.php'</script>";
	}


?>