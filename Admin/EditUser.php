<?php
require_once("../config.php");
require_once("AdminUserDAO.php");
require_once("AdminUserHandler.php");

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = sha1($_POST['password']);

$Handler = new AdminUserHandler();

$results = $Handler->updateUser($id, $fname, $lname, $email, $password);

if($results){
	echo "<script>alert('Successfully Updated!');window.location.href='AdminUser.php'</script>";
} else {	
	echo "<script>alert('NOt Updated!');window.location.href='AdminUserEdit.php'</script>";
}

?>