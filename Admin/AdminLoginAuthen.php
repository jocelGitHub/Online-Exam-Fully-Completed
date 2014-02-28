<?php 
	require_once('../config.php');
	require_once('AdminUserDAO.php');
	require_once('AdminUserHandler.php');

	$Handler = new AdminUserHandler();

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) && empty($password)) {
		echo "<script>alert('Fill in All!');window.location.href='AdminLogin.php'</script>";
	} else {
		$result = $Handler->loginAuthen($username, $password);
		if ($result){
			header("location:AdminHome.php");
		} else {
			echo "<script>alert('ha!');window.location.href='AdminLogin.php'</script>";
		}
	}

 ?>