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
	
	if(isset($_POST['password']) && isset($_POST['passwordConfirm']) ){

		if($_POST['password']==$_POST['passwordConfirm']){
			echo "Successfully saved.";
			
		}
		else{
			echo "Passwords do not match!";
		}
	}
}

?>
<html>
<head></head>
<body>
<?php getName();?>
<style>
input { border: 1px solid black; }
.error {border: 1px solid red;}
.noerror {border: 1px solid black;}
</style>
<div style="margin-left: 50%; margin-right:50%;">
<form name= "login" method="POST" onsubmit= " validateForm()">

	<input name="username" type="text" 
	placeholder="Enter your name" required/>
	<!-- add password field-->
	<input type="password" name="password" 
	placeholder="Enter your password" required>
	<!-- add confirm password field-->
	<input type="password" name="passwordConfirm"
	placeholder="Please confirm your passsword" required>
	<span style="display:none;" id="validation.password"></span>

	<!-- EMAIL -->
	<input type="email" name="email" 
	placeholder="name@example.com"/>

	<span id="validation.email" style="display:none;"></span>
	


	<!-- ensure passwords match before sending the form
			AND/OR
		validate password matches confirmation on php side
	-->
	<!-- change form submit type to post, adjust php checks for change in type-->

	<input type="submit" value="Submit"/>

	<select name="drop" id="dropMenu">
		<option value="select_option">-Select Option-</option>
		<option value="x">X</option>
		<option value="o">O</option>
	</select>
</form>
</div>
	<script>
		function validateForm(){
			var form = documents.forms[0];
			var password = document.forms["login"]["password"].value;
			var pass2 = document.forms["login"]["passwordConfirm"].value;

			console.log(password);
			console.log(pass2);

			let pv = document.getElementById("validation.password");
			let selectMenu = form.dropMenu;
			selectVal = selectMenu.value;

			var email = documents["login"]["email"].value;
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
			if (password == pass2) {
				pv.style.display = "none";
				form.passwordConfirm.className = "noerror" 
			}
			else{
				pv.style.display = "block";
				alert("Passwords don't match.") ;
				form.passwordConfirm.focus();
				form.passwordConfirm.className = "error";
				form.confirm.style = "border: 1px solid red;";
				succeeded = false;
			}
			if(selectVal == "select_option"){
				alert("Please select a different option");
				form.dropMenu.focus();
				form.dropMenu.classname = "error";
				for.dropMenu.style = "border: 1px solid red;";
				succeeded = false;
			}
			console.log(uname)
			console.log(password)
			return succeeded
		}
	</script>
</body>
</html>
<?php checkPasswords();?>
<?php
if(isset($_POST)){
	echo "<br><pre>" . var_export($_POST, true) . "</pre><br>";
}
?>