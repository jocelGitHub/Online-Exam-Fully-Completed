<?php
require_once("../config.php");
// require_once("ExamDAO.php");
// require_once("ExamHandler.php");

?>
<html>
<head>
	<title>Online Examnation</title>
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/font-awesome-ie7.css" rel="stylesheet">
    <link href="../css/boot-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header  style = "background:url('../img/(18).jpg') no-repeat;">
  <div class ="container" >
          <div class="navbar">
            <a class="brand font-brand" href="registration.php"> LVCC Examination</a>
          </div>
          <div class = "pull-right">
          	<a href="AdminSignOut.php" style = "margin-top:20px;"><?=$_SESSION['fname']." ".$_SESSION['lname']?></a>
          </div>
  </div>
</header>
<div class = "container span8 offset2" style = "margin-top:50px;float:center">
			<div class = "row wellko">
				<h3>Administration Options:</h3>
			</div>
			<div class = "row wellko" id = "choices">
				<div class = "container">
					<div class = "span4" style = "margin-left:80px;">
						<a href="AdminQuestion.php"><button type = "submit"><img src="../img/3.jpg" style = "height:200px;width:200px"><br>Questions</button></a>
					</div>
					<div class = "span4">
						<a href="AdminUser.php"><button type = "submit"><img src="../img/img1.jpg" style = "height:200px;width:200px"><br>User</button></a>
					</div>
				</div>					
			</div>
			<div class = "row wellko">
				<div class = "container" style = "margin-left:250px;">
					<div class = "span4">
						<a href="AdminResult.php"><button type = "submit"><img src="../img/e.jpg" style = "height:200px;width:200px"><br>Result</button></a>
					</div>
				</div>
			</div>

</div>
    <script type="text/javascript" src = "js/jquery.1.10.2.js"></script>
    <script type="text/javascript" src = "../js/Admin.js"></script>
</body>
</html>


