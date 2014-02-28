<?php
require_once("../config.php");
require_once("AdminUserDAO.php");
require_once("AdminUserHandler.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = sha1($_POST['password']);

$Handler = new AdminUserHandler();

$results = $Handler->addUser($fname, $lname, $email, $password);

if($results){
	echo "<script>alert('Successfully Added!');window.location.href='AdminUser.php'</script>";
} else {	
	echo "<script>alert('Not Added!');window.location.href='AdminUserAdd.php'</script>";
}

?>