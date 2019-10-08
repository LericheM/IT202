<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function getName(){
	if(isset($_GET['name'])){
		echo "<p>Hello, " . $_GET['name'] . "</p>";
	}
}

function checkPasswords(){
	$passw = isset($_POST['password']);
	$passc = isset($_POST['passwordConfirm']);
	$user = isset($_POST['username']);

	if($passc == $passw){
		echo "Successfully saved.";
		
	}
	else{
		echo "Passwords do not match!";
	}
	}

?>
<html>
<head></head>
<body>
<?php getName();?>
<form name= "login" method="POST" onsubmit= " validateForm()">
	<input name="username" type="text" 
	placeholder="Enter your name" required/>
	<!-- add password field-->
	<input type="password" name="password" 
	placeholder="Enter your password" required>
	<!-- add confirm password field-->
	<input type="password" name="passwordConfirm"
	placeholder="Please confirm your passsword" required>
	<!-- EMAIL -->
	<input name="email" type="emai" placeholder="name@example.com"/>
	<span id="validation.email" style="display:none;"></span>


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
			var email = form.email.value;
			var ev = document.getElemenetById("validation.email");
			let succeeded = true;
			if(email.indexOf('@') > -1){
				ev.style.display = "none";
			}
			else{
				ev.style.display = "block";
				ev.innerText = "Please enter a valid email address";
				succeeded = false;
			}
			if (password != pass2) {
				alert("Passwords must match!");
				return false;
			}
			console.log(uname)
			console.log(password)
			return succeeded
		}
	</script>
		<input name="email" type="emai" placeholder="name@example.com"/>
		<span id="validation.email" style="display:none;"></span>
</body>
</html>
<?php checkPasswords();?>
<?php
if(isset($_GET)){
	echo "<br><pre>" . var_export($_GET, true) . "</pre><br>";
}
?>