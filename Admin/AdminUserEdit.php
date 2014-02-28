<?php
require_once("../config.php");
require_once("AdminUserDAO.php");
require_once("AdminUserHandler.php");


$id = $_GET['id'];
$Handler = new AdminUserHandler();

$results = $Handler->getOneUser($id);
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
	<div class = "span4 wellko" style = "margin-left:400px">
    <h2>Edit USer</h2><hr>
    <form method = "POST" action = "EditUser.php">
      <table>
        <?php foreach($results as $value): ?>
        <tr>
          <td>Name:</td>
          <td><input type = "text" name = "fname" id = "fname" value = "<?= $value['fname']?>"></td>
        </tr>
        <tr>
          <td>Surname:</td>
          <td><input type = "text" name = "lname" id = "lname" value = "<?= $value['lname']?>"></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type = "email" name = "email" id = "email" value = "<?= $value['email']?>"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type = "password" name = "password" id = "password" value = "<?= $value['password']?>"></td>
        </tr>
        <tr>
          <td>Confirm Password:</td>
          <td><input type = "password" name = "cpass" id = "cpass" value = "<?= $value['password']?>"></td>
        </tr>
        <tr>
          <td></td>
          <td><div id ="error"></div></td>
        </tr>
      </table>
      <input type = "hidden" name = "id" value = "<?= $value['id']?>">
    <?php endforeach ?>
      <input type = "submit" id = 'submit' value = "Submit" class = 'btn btn-success' style = "margin-left:50px;margin-top:40px;width:250px">
    </form>
    <a href="AdminUser.php"><button class= 'btn' style = "margin-left:50px;width:250px">Cancel</button></a>
    
	</div>
</div>
    <script type="text/javascript" src = "../js/jquery.1.10.2.js"></script>
    <script type="text/javascript" src = "../js/AdminUser.js"></script>
</body>
</html>


