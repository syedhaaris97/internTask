<!DOCTYPE html>
<html>
<head>
	<title>jQuery Learning</title>
</head>
<body>

<div id="demo"></div>
<div id="sec"></div>

<!-- 	<label>What is the Capital of Pakistan?</label><br>
	<br>
	<input id="ans" type="text" name="captial">
	<br>
	<label id="result"></label>
	<br>
	<label id="answer"></label>
	<br>
	<button id="check">Check</button>

	<button id="sh">Show/Hide</button>

 -->

<!-- <form>
	<label>Name:</label>
	<input type="text" name="name" id="name">
	<br>
	<br>
	<label>Email:</label>
	<input type="text" name="email" id="email">
	<br>
	<br>
	<label>Address:</label>
	<input type="text" name="add" id="add">

	<input type="submit" name="submit" id="submit" value="submit">
</form> -->

<div id="onoff" style="width: 100px; height: 100px; background-color:red;" ></div>

<script src="jQuery.js"></script>
<script type="text/javascript">
	// $(document).ready(function(){
	// 	// alert(4);
	// 	console.log('Document is ready');
	// 	$('#demo').text('Working from home');
	// 	// chaining function
	// 	$('#sec').text('chaining funtion').css('background-color', 'red').css('width','50px').css('height','50px').fadeIn(3000);
	// });

	// $(document).ready(function(){
	// 	$('button').click(function(){
	// 		var answer = $('#ans').val();
	// 		if (answer == 'Islamabad') {
	// 			$('#result').text('Answer is correct').css('color','green').fadeOut(2000);
	// 		}
	// 		else{
	// 			$('#result').html('<span style="color:red">answer is incorrect</span>').fadeOut(3000);
	// 			$('#answer').text('Correct answer is Islamabad').fadeOut(3000);
	// 			// $('#result')
	// 		}
	// 	});
	// 	$('#sh').click(function(){
	// 		$('#check').hide();
	// 		$('#ans').clone().insertAfter('#ans');
	// 	$('#sh').dblclick(function(){
	// 			$('#check').show();
	// 			$('#ans').remove();
	// 		})
	// 	});
	// })


	// $(document).ready(function(){
	// 	$('#submit').on('click', function(){
	// 		var valid = true;

	// 		if ($("#name").val() == ''){
	// 			alert('Please enter your name');
	// 			valid = false;
	// 		}

	// 		if ($("#email").val() == ''){
	// 			alert('Please enter your email');
	// 			valid = false;
	// 		}

	// 		if ($("#add").val() == ''){
	// 			alert('Please enter your email');
	// 			valid = false;
	// 		}
	// 	})
	// })

	$(document).ready(function(){
		$('#onoff').on({
			'mouseenter': function(){
			$('#onoff').css('background-color', 'blue').css('color', 'white').text("Blue Color");
			},
			'mouseleave': function(){
			$('#onoff').css('background-color', 'red').css('color', 'white').text("Red Color");
			},
			'click': function(){
			$('#onoff').css('background-color', 'green').css('color', 'white').text("Green Color");
			},
			'dblclick': function(){
			$('#onoff').css('background-color', 'orange').css('color', 'white').text("orange Color");
			}
		})
	})
</script>
</body>
</html>