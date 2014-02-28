$(document).ready(function(){
	var que_num;

	$('#yes').on('click',function(){
		que_num = $('#num').val();
		$.ajax({
			url:'isDelete.php',
			data:{que_num:que_num},
			method:'POST',
			dataType:'JSON',

			success: function(response){
				$('#container').html("<h3>"+response.respone+"</h3>");
				$('#back').show(1000);
			}
		});
	});

	$('#no').on('click', function(){
		window.location.href='AdminQuestion.php';
	});

	$('#back').on('click', function(){
		window.location.href="AdminQuestion.php";
	});

	$('#save').on('click', function(){
		que_num = $('#num').val();
		var que = $('#question').val();
		var a = $('#a').val();
		var b = $('#b').val();
		var c = $('#c').val();
		var d = $('#d').val();
		var ans = $('#ans').val();

		$.ajax({
			url:'isUpdated.php',
			data:{que_num:que_num, que:que, a:a, b:b, c:c, d:d, ans:ans},
			dataType:'JSON',
			method:'POST',

			success: function(response){
				alert(response.respone);
				window.location.href="AdminQuestion.php";
			}
		});
	});

	$('#discard').on('click', function(){
		window.location.href="AdminQuestion.php";
	});

	$('#return').on('click', function(){
		window.location.href="AdminHome.php";
	});

	$('#add').on('click', function(){
		window.location.href="AdminAddQuestions.php";	
	});

	$('#new').on('click', function(){
		var que = $('#question').val();
		var num = $('#n').val();
		var a = $('#a').val();
		var b = $('#b').val();
		var c = $('#c').val();
		var d = $('#d').val();
		var ans = $('#ans').val();

		if (que != '' && a != '' && b != '' && c != '' && d != '' && ans != '' && num != '') {
			$.ajax({
				url:'isAdded.php',
				data:{num:num, que:que, a:a, b:b, c:c, d:d, ans:ans},
				dataType:'JSON',
				method:'POST',

				success: function(response) {
					alert(response.respone);
					window.location.href="AdminQuestion.php";
				}
			});
		}else {
			alert("Fill in All!!");
		}
	});

	$('#cancel').on('click', function(){
		window.location.href="AdminQuestion.php";
	});
});