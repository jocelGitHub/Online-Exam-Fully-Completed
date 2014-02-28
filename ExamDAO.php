<?php

	class ExamDAO{

		public static function getQuestionChoices($question_number){
			global $db;
			if (!$question_number) return false;

			try{
				$query = "SELECT question_number, questions, choice_A, choice_B, choice_C, choice_D  FROM questionexam WHERE question_number = '{$question_number}' ";
				$result = $db->query($query);

				if($result->num_rows > 0){
					$questions = array();
					while($row = $result->fetch_assoc()){
						$questions[] = $row;
					}
					$result->free();
					return $questions;
				}else{
					return false;
				}
			} catch(Exeption $e) {
				error_log($e->getMessage());
			}
		}

		public static function getAllAnswer(){
			global $db;
			try{
				$query = "SELECT answer FROM questionexam ORDER BY question_id";
				$result = $db->query($query);
				$answers = array();
				while($row = $result->fetch_assoc()){
					$answers[] = $row['answer'];
				}
				return $answers;
			} catch (Exeption $e) {
				error_log($e->getMessage());
			}

			return false;
		}

		public static function checkAnswers($answers) {
			$correct = self::getAllAnswer();

			if($correct === false) {
				error_log("Correct Answers Not Ready");
			}

			if (count($correct) != strlen($answers)) {
				error_log("Invalid Answers");
				return false;
			}
			$score = 0;
			for ($i = 0; $i < count($correct); $i++){
				if($correct[$i] == $answers[$i]){
					$score++;
				}
			}

			return $score;
		}
	}
?>