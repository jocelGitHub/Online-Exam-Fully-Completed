<?php
	require_once('config.php');
	require_once('ExamDAO.php');
	require_once('ExamHandler.php');
	require_once('UserDAO.php');
	require_once('UserHandler.php');

	$id = $_SESSION['id'];
	$answers = $_SESSION['answers'];
	$Handler = new ExamHandler();
	$Handler2 = new UserHandler();
	$result = $Handler->checkAnswers($answers);
	$Handler2->InsertExamDetails($id, $result);
?>
<html>
<head>
	<title>Online Examnation</title>
  	<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <link href="css/boot-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header  style = "background:url('img/(18).jpg') no-repeat;">
  <div class ="container" >
          <div class="navbar">
            <a class="brand font-brand" href="registration.php"> LVCC Examination</a>
          </div>
          <div class = "pull-right" style = "margin:5px">
          	<img src="<?=$_SESSION['pic']?>" style = "width:50;height:50;border-radius:10px; margin-top;100px">
          	<a href="SignOut.php">Sign-out</a>
          </div>
  </div>
</header>
<div class = "container span8 offset2" style = "margin-top:50px;float:center">
	<div class = "row wellko">
		<label><b>Name:</b> <?=$_SESSION['fname']." ".$_SESSION['lname']?></label>
	</div>
	<div class = "row wellko">
		<h1>Your score is:  <?=$result?></h1>
	</div>
	<div class = "row wellko">
		<?php
			if($result > 7){
				echo "<h2>Congratulation!! You pass the Exam!!!</h2>";
			}else {
				echo "<h2s>Congratulation!! You failed the Exam!!!</h2>";
			}
	?>
	</div>
</div>
</body>
</html>
