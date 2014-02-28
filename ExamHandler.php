<?php 

class ExamHandler{
	
	public function getQuestionChoices($question_number){
		if (empty($question_number)) {
			return false;
		}

		$result = ExamDAO::getQuestionChoices($question_number);

		if (empty($result)) {
			return false;
		}

		return $result;
	}

	public function checkAnswers($answers){
		if (empty($answers)) {
			return false;
		}

		$result = ExamDAO::checkAnswers($answers);

		return $result;
	}

}

?>

