<?php 
class AdminUserDAO{
	public static function loginAuthen($username, $password){
		global $db;
		try {
			$query = "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}' ";
			$result = $db->query($query);
			
			if ($result->num_rows > 0) {
				$record = $result->fetch_assoc();
				$_SESSION = $record;
				error_log("Successfully Login");
				return true;
			} else {
				error_log("Username or Password is Incorrect");
				return false;
			}

		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;

	}

	public static function getAllUsers() {
		global $db;

		try {
			$query = "SELECT * FROM user";
			$result = $db->query($query);

			if ($result->num_rows > 0) {
				$records = array();
				while ($row = $result->fetch_assoc()) {
					$records[] = $row;
				}
				$result->free();
				error_log("Successfully Fetch Data");
				return $records;
			} else {
				error_log("Nothing Fetch");
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}

	public static function addUser($fname, $lname, $email, $password){
		global $db;

		try {
			$query = "INSERT INTO user (fname, lname, email, password) VALUES ('{$fname}','{$lname}','{$email}','{$password}') ";
			$result = $db->query($query);

			if ($result) {
				error_log("Successfully Inserted");
				return true;
			} else {
				error_log("Cannot Insert");
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}

	public static function getOneUser($id) {
		global $db;

		try {
			$query = "SELECT * FROM user WHERE id = '{$id}'";
			$result = $db->query($query);

			if ($result->num_rows > 0) {
				$record = array();
				while ($row = $result->fetch_assoc()) {
					$record[] = $row;
				}
				$result->free();
				error_log("Successfully get1 Data");
				return $record;
			} else {
				error_log("No Data");
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}

	public static function updateUser($id, $fname, $lname, $email, $password) {
		global $db;

		try {
			$query = "UPDATE user SET fname = '{$fname}', lname = '{$lname}', email = '{$email}', password = '{$password}' WHERE id = '{$id}' ";
			$result = $db->query($query);

			if ($result) {
				error_log("Successfully Updated");
				return true;
			} else {
				error_log("Not Updated");
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}

	public static function deleteUser($id) {
		global $db;

		try {
			$query = "DELETE FROM user WHERE id = '{$id}'";
			$result = $db->query($query);

			if ($result) {
				error_log("Successfully deleted");
				return true;
			} else {
				error_log("Not Deleted");
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}

	public static function isEmailValid($email) {
		global $db;

		try {
			$query = "SELECT * FROM user WHERE email = '{$email}' ";
			$result = $db->query($query);

			if ($result->num_rows > 0) {
				error_log("Email existing");
				return false;
			} else {
				error_log("Email is Valid");
				return true;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}

	public static function getAllUsersScoreDetails() {
		global $db;

		try {
			$query = "SELECT * FROM user u JOIN user_score us ON(u.id = us.user_id)";
			$result = $db->query($query);

			if ($result->num_rows > 0) {
				$records = array();
				while ($row = $result->fetch_assoc()) {
					$records[] = $row;
				}
				$result->free();
				error_log("Successfully Fetch Data");
				return $records;
			} else {
				error_log("Nothing Fetch");
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}

}

 ?>