<?php 

class UserHandler{
	
	public function createUser($fname, $lname, $email, $pass, $pic){
		if (empty($fname)) {
			return false;
		}
		if (empty($lname)) {
			return false;
		}
		if (empty($email)) {
			return false;
		}
		if (empty($pass)) {
			return false;
		}
		if (empty($pic)) {
			return false;
		}

		$user = UserDAO::createUser($fname, $lname, $email, $pass, $pic);

		if (empty($user)) {
			return false;
		}

		return $user;
	}

	public function checkEmail($email){
		if (empty($email)) {
			return false;
		}

		$result = UserDAO::checkEmail($email);

		return $result;

	}

	public function loginAuthenticator($email,$pass){
		if (empty($email)) {
			return false;
		}

		if (empty($pass)) {
			return false;
		}

		$result = UserDAO::loginAuthenticator($email,$pass);

		return $result;
	}

	public function InsertExamDetails($id, $score) {
		if (empty($id)) {
			return false;
		}

		if (empty($score)) {
			return false;
		}

		$result = UserDAO::InsertExamDetails($id, $score);

		return $result;

	}



}

?>

