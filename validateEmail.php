<?php
	require_once("config.php");
	require_once('UserDAO.php');
	require_once('UserHandler.php');
	$_email = $_POST['email'];
	$Handler = new UserHandler();
	$check = $Handler->checkEmail($_email);

	if($check){
		echo "<input type = 'hidden' id = 'checkedEmail' value = 'F'>";
		echo "<p style = 'color:red'>Email is Used</p>";
	}else{
		echo "<input type = 'hidden' id = 'checkedEmail' value = 'T'>";
		echo "<img src='img/check.jpg' class = 'img1'>";
	}

?>
