$(document).ready(function(){
	$('#fname').on('blur', function() {
		var fname = $(this).val();
		if (fname.length >= 2) {
			$('#error').hide();
		} else {
			$('#error').show().html('Atleast 3 char');
		}
	});

	$('#lname').on('blur',function() {
		var lname = $(this).val();
		if (lname.length >= 1) {
			$('#error').hide();
		} else {
			$('#error').show().html('Atleast 3 char');
		}
	});

	$("#email").on('blur',function(event){
		var email = $("#email").val();
		var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
			if(email != ''){
				if(email.match(emailExp)){
					$('#error').hide();
				}else {
					$('#error').show().html('Email Invalid');
				}
			}else{
				$('#error').show().html('Enter Email');
			}

	});

	$('#password').on('blur',function(){
		var pass = $(this).val();
		if(pass.length >= 8) {
			$('#error').hide();
		} else {
			$('#error').show().html('8 char above');
		}
	});

	$('#cpass').on('blur',function(){
		var confirm = $(this).val();
		var pass = $("#password").val();
		if(confirm == pass && confirm.length >= 8) {
			$('#error').hide();
		} else {
			$('#error').show().html('Not Match');
		}	
	});

	$('#submit').on('click',function(){
	var email = $("#email").val();
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;		
		if ($('#fname').val().length >=2 && $('#lname').val().length >= 1 && $('#password').val().length >= 8 && $('#password').val() ==  $('#cpass').val()) {
			if (email.match(emailExp)) {
				return true;
			} else {
				return false;
			}
		} else {
			alert("Fill in All");
			return false;
		}
	});

	$('#return').on('click', function(){
		window.location.href="AdminHome.php";
	});
});