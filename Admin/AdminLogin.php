<html>
<head>
	<title>Admin</title>
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
            <a class="brand font-brand" href="registration.php"> LVCC Administration</a>
          </div>
  </div>
</header>

<div class = "container containerLogin" id = "container">
	<div class = "row well">
		<h3 class = "icon-ok">&nbsp;&nbsp;&nbsp;&nbsp;Sign-in</h3>
	</div>
	<div class = "row well">
		<form method = "POST" action = "AdminLoginAuthen.php">
			<center>
			<div style = "margin-top:40px">
				<div class = "span1">
					<label style = "margin-left:65px;margin-top:10px;"><b>Username:</b></label>
					<label style = "margin-left:65px;margin-top:15px"><b>Password:</b></label>
				</div>
				<div class = "span4">
					<input type = "text" name = "username" style = "width:250px;height:30px;">		
					<input type = "password" name = "password" style = "width:250px;height:30px;">
				</div>
				<div>
					<input type = "submit" value = "Sign-in" class ="btn btn-primary" style = "margin-left:30px;margin-top:30px;width:150px">
				</div>
			</center>
		</form>
			</div>
	</div>
</div>

</body>
</html>

