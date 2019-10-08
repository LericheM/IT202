<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>
<head></head>
<body>
<form name= "login" method="POST" onsubmit= "return validateForm()">
	<input name="username" type="text" 
	placeholder="Enter your name" required/>
	<!-- add password field-->
	<input type="password" name="password" 
	placeholder="Enter your password" required>
	<!-- add confirm password field-->
	<input type="password" name="passwordConfirm"
	placeholder="Please confirm your passsword" required>
	

	<!-- ensure passwords match before sending the form
			AND/OR
		validate password matches confirmation on php side
	-->
	<!-- change form submit type to post, adjust php checks for change in type-->

	<input type="submit" value="Submit"/>
</form>
	<script>
		function validateForm(){
			var uname = document.forms["login"]["username"].value;
			var password = document.forms["login"]["password"].value;
			var pass2 = document.forms["login"]["passwordConfirm"].value;
			if (password != pass2) {
				alert("Passwords must match!");
				return false;
			}
			
			console.log(uname)
			console.log(password)
			}
		}
	</script>
		<p id ='after'></p>

</body>
</html>

