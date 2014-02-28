<?php 
class AdminUserHandler{

	public function loginAuthen($username, $password){
		if (empty($username)) {
			return false;
		}
		if (empty($password)) {
			return false;
		}

		$result = AdminUserDAO::loginAuthen($username, $password);

		return $result;
	}

	public function getAllUsers() {

		$result = AdminUserDAO::getAllUsers();

		if (empty($result)) {
			return false;
		}

		return $result;
	}

	public function addUser($fname, $lname, $email, $password) {

		if (empty($fname)) {
			return false;
		}

		if (empty($lname)) {
			return false;
		}

		if (empty($email)) {
			return false;
		}

		if (empty($password)) {
			return false;
		}

		$isEmail = AdminUserDAO::isEmailValid($email);

		if(!$isEmail) {
			return false;
		}

		$result = AdminUserDAO::addUser($fname, $lname, $email, $password);

		return $result;
	}

	public function getOneUser($id) {

		if (empty($id)) {
			return false;
		}

		$result = AdminUserDAO::getOneUser($id);

		if (empty($result)) {
			return false;
		}

		return $result;
	}

	public function updateUser($id, $fname, $lname, $email, $password) {

		if (empty($id)) {
			return false;
		}

		if (empty($fname)) {
			return false;
		}

		if (empty($lname)) {
			return false;
		}

		if (empty($email)) {
			return false;
		}

		if (empty($password)) {
			return false;
		}

		$result = AdminUserDAO::updateUser($id, $fname, $lname, $email, $password);

		return $result;

	}

	public function deleteUser($id) {

		if (empty($id)) {
			return false;
		}

		$result = AdminUserDAO::deleteUser($id);

		return $result;


	} 

	public function getAllUsersScoreDetails() {

	$result = AdminUserDAO::getAllUsersScoreDetails();

	if (empty($result)) {
		return false;
	}

	return $result;	
	}
}

 ?>