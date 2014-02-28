<?php

	class UserDAO{
		public static function createUser($fname, $lname, $email, $pass, $pic){
			global $db;
			try{
				$query = "INSERT INTO user(fname, lname, email, password, pic) VALUES('{$fname}','{$lname}','{$email}','{$pass}', '{$pic}')";
				$result = $db->query($query);
				if($result){
					error_log("Successfully Inserted");
					return true;
				}else{
					error_log("Connot Insert");
					return false;
				}
			} catch (Exeption $e) {
				error_log($e->getMessage());
			}
			return false;
		}

		public static function checkEmail($email){
			global $db;
			try {
				$query = "SELECT * FROM user WHERE email = '{$email}'";
				$result = $db->query($query);
				if($result->num_rows > 0){
					error_log("Email VALID");
					return true;
				}else{
					error_log("Email INVALID");
					return false;
				}
			} catch(Exeption $e){
				error_log($e->getMessage());
			}
			return false;
		}

		public static function loginAuthenticator($email,$pass){
			global $db;

			try{
				$query = "SELECT * FROM user WHERE email = '{$email}' AND password IN('{$pass}') ";
				$result = $db->query($query);

				if($result->num_rows > 0){
					$record = $result->fetch_assoc();
					$result->free();
					$_SESSION = $record;
					error_log("Successfully Login");
					return true;
				}else {
					error_log("Unsuccessfully Login");
					return false;
				}
			} catch(Exeption $e){
				error_log($e->getMessage());
			}
			return false;

		}

		public static function InsertExamDetails($id, $score){
			global $db;

			try{
				$query ="INSERT INTO user_score (user_id, score, date_exam) VALUES ($id, $score, CURRENT_DATE)";
				$result = $db->query($query);

				if($result){
					error_log("Successfully Inserted");
					return true;
				}else{
					error_log("Not Inserted");
					return false;
				}
			} catch(Exeption $e){
				error_log($e->getMessage());
			}
			return false;

		}

	}
?>