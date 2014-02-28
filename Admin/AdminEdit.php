<?php 
require_once("../config.php");
require_once("AdminQuestionDAO.php");
require_once("AdminQuestionHandler.php");

$Handler = new AdminQuestionHandler();
$id = $_GET['id'];

$result = $Handler->getOneQuestion($id);
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
 	<div class = "span2 wellko">
 		<div class = "row well"  style = "margin:-10px;">
 			<h4>Option:</h4><hr>
 			<button class = "btn btn-primary" style = "width:150px;margin-bottom:10px" id = "add">Add Questions</button>
 		</div>

 		<div class = "row well"  style = "margin:-10px;margin-top:30px;height:290px">
 			<button class = "btn btn-info" style = "width:150px;margin-top:220px;" id = "return">Return</button>
 		</div>
 	</div>
 	<div class = "span8 wellko">
 		<div class = "row well"  style = "margin:-10px;">
 			<h3>Edit Question <?= $id?></h3>
 		</div>
 		<div class = "row well questions"  style = "margin:-10px;" id = "container">
      <?php foreach($result as $key):?>
   			<input type = "hidden" id = "num" value ="<?= $key['question_number']?>">
        <h3>Question #<?= $key['question_id']?></h3><input type = "text" id = 'question' value = "<?= $key['questions']?>" style = "width:700px;height:30px"><br>
        <b>A.</b><input type = "text" id = 'a' value = "<?= $key['choice_A']?>"><br>
        <b>B.</b><input type = "text" id = 'b' value = "<?= $key['choice_B']?>"><br>
        <b>C.</b><input type = "text" id = 'c' value = "<?= $key['choice_C']?>"><br>
        <b>C.</b><input type = "text" id = 'd' value = "<?= $key['choice_D']?>"><br>
        <b>Answer: </b>
                      <select id = 'ans'>
                        <option value = "<?= $key['answer']?>"><?= $key['answer']?></option>
                        <option value = "A">A</option>
                        <option value = "B">B</option>
                        <option value = "C">C</option>
                        <option value = "D">D</option>
                      </select><br>
        <div class = "pull-right">
          <button id = "save" class = 'btn btn-success' style = "width:150px">Save</button>
          <button id = 'discard' class = 'btn' style = "width:150px">Cancel</button>
        </div>
    <?php endforeach ?>
 		</div>
 	</div>

 </div>
     <script type="text/javascript" src = "../js/jquery.1.10.2.js"></script>
     <script type="text/javascript" src = "../js/Admin.js"></script>
 </body>
 </html>