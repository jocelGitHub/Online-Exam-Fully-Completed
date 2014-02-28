<?php
require_once("../config.php");
require_once("AdminUserDAO.php");
require_once("AdminUserHandler.php");

$id = $_GET['id'];

$Handler = new AdminUserHandler();

$results = $Handler->deleteUser($id);

if($results){
	echo "<script>alert('Successfully Deleted!');window.location.href='AdminUser.php'</script>";
} else {	
	echo "<script>alert('Not Delete!');window.location.href='AdminUserAdd.php'</script>";
}

?>