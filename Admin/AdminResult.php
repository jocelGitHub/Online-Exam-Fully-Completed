<?php
require_once("../config.php");
require_once("AdminUserDAO.php");
require_once("AdminUserHandler.php");

$Handler = new AdminUserHandler();

$results = $Handler->getAllUsersScoreDetails();
if(empty($results)){
	echo "<script>alert('Empty Table!');window.location.href='AdminUser.php'</script>";
} 

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
<div class = "container span12" style = "margin-left:100px;margin-right:100px;margin-top:20px">

	<div class = "row wellko">
		<table class = "table table-striped">
			<caption style = "background-color:#56DF66;color:white"><h3>All Users Score and Details</h3></caption>
			<tr>
				<td style = "background-color:#576AF1;color:white">No.</td>
				<td style = "background-color:#576AF1;color:white">Picture</td>
				<td style = "background-color:#576AF1;color:white">Name</td>
				<td style = "background-color:#576AF1;color:white">Surname</td>
				<td style = "background-color:#576AF1;color:white">Email Address</td>
				<td style = "background-color:#576AF1;color:white">Score</td>
				<td style = "background-color:#576AF1;color:white">Date Exam</td>
			</tr>
			<?php foreach($results as $value): ?>
			<tr>
				<td style = "background-color:#EC3C3C;color:white"><?= $value['id']?></td>
				<td><img src="../<?= $value['pic']?>" style = "width:50;height:50;border-radius:10px; margin-top;100px"></td>
				<td><?= $value['fname']?></td>
				<td><?= $value['lname']?></td>
				<td><?= $value['email']?></td>
				<td><?= $value['score']?></td>
				<td><?= $value['date_exam']?></td>
			</tr>
		<?php endforeach ?>
		</table>
	</div>

	<div class = "row well pull-right">
		<button class = "btn btn-info" style = "width:250px;margin-top:10px" id = "return">Return</button>
	</div>
</div>
    <script type="text/javascript" src = "../js/jquery.1.10.2.js"></script>
    <script type="text/javascript" src = "../js/Admin.js"></script>
</body>
</html>


