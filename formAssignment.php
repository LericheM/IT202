<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function getName(){
	if(isset($_GET['username'])){
		echo "<p>Hello, " . $_GET['username'] . "</p>";
	}
	if(isset($_GET['password'])){
		echo "<p>Your password is " . $_GET['username'] . "</p>";
	}
}
?>
<html>
<head></head>
<body><?php getName();?>
<form name= "login" mode="POST" onsubmit= "return validateForm()">
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
	<p id ='after'></p>
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
			else{
				output = "";
				for(i = 0;i < password.length; i++){
					output += "*"
				}
				document.getElementById("after").innerHTML = "You entered: U: "+uname+"\n P: "+output;
			}
		}
	</script>
</body>
</html>

<?php
if(isset($_GET)){
	echo "<br><pre>" . var_export($_GET, true) . "</pre><br>";
}
?>