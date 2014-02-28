<?php 

class AdminQuestionHandler{

	public function getAllQuestions(){
		$result = AdminQuestionDAO::getAllQuestions();

		if (empty($result)) {
			return false;
		}

		return $result;
	}

	public function deleteQuestion($id){
		if (empty($id)) {
			return false;
		}

		$result = AdminQuestionDAO::deleteQuestion($id);

		return $result;
	}

	public function editQuestion($id, $question, $choice_A, $choice_B, $choice_C, $choice_D, $answer){
		if(empty($id)) {
			return false;
		}
		if(empty($question)) {
			return false;
		}
		if(empty($choice_A)) {
			return false;
		}
		if(empty($choice_B)) {
			return false;
		}
		if(empty($choice_C)) {
			return false;
		}
		if(empty($choice_D)) {
			return false;
		}
		if(empty($answer)) {
			return false;
		}

		$result = AdminQuestionDAO::editQuestion($id, $question, $choice_A, $choice_B, $choice_C, $choice_D, $answer);

		return $result;
	}

	public function addQuestions($question_number,$question, $choice_A, $choice_B, $choice_C, $choice_D, $answer){

		if(empty($question_number)) {
			return false;
		}
		if(empty($question)) {
			return false;
		}
		if(empty($choice_A)) {
			return false;
		}
		if(empty($choice_B)) {
			return false;
		}
		if(empty($choice_C)) {
			return false;
		}
		if(empty($choice_D)) {
			return false;
		}
		if(empty($answer)) {
			return false;
		}

		$result = AdminQuestionDAO::addQuestions($question_number,$question, $choice_A, $choice_B, $choice_C, $choice_D, $answer);

		return $result;
	}

	public function getOneQuestion($id){
		if (empty($id)) {
			return false;
		}

		$result = AdminQuestionDAO::getOneQuestion($id);

		if (empty($result)) {
			return false;
		} 

		return $result;
	}
}
 ?>