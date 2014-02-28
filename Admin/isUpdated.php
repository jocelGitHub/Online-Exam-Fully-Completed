<?php 
require_once("../config.php");
require_once("AdminQuestionDAO.php");
require_once("AdminQuestionHandler.php");

$id = $_POST['que_num'];
$que = $_POST['que'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$ans = $_POST['ans'];

$Handler = new AdminQuestionHandler();
$result = $Handler->editQuestion($id, $que, $a, $b, $c, $d, $ans);

if ($result) {
	echo json_encode(
			array(
				'status' => 'succcess',
				'respone' => 'Successfully Updated!'
			)
		);
} else {
	echo json_encode(
			array(
				'status' => 'failed',
				'respone' => 'Not Updated!!'
			)
		);
}
 ?>