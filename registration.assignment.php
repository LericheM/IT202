/* Forked from Toegel Repo in order to finish homework */
<!DOCTYPE html>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function checkPasswords(){
	if(isset($_POST['password']) && isset($_POST['confirm'])){
		if($_POST['password'] == $_POST['confirm']){
			echo "<br>Passwords Matched!<br>";
		}
		else{
			echo "<br>Passwords didn't match!<br>";
		}
	}
}
?>
<html>
<head>
<script>
function validate(){
	var form = document.forms[0];
	var password = form.password.value;
	var conf = form.confirm.value;
	console.log(password);
	console.log(conf);
	let pv = document.getElementById("validation.password");
	let suc = true;
    let selMenu = form.dropMenu;
    let selectVal = selMenu.value;
	if(password == conf){
		
		pv.style.display = "none";
		form.confirm.className= "noerror";	
	}
	else{
		pv.style.display = "block";
		pv.innerText = "Passwords don't match";
		//form.confirm.focus();
		form.confirm.className = "error";
		//form.confirm.style = "border: 1px solid red;";
		suc = false;
	}
	var email = form.email.value;
	var ev = document.getElementById("validation.email");
	//this won't show if type="email" since browser handles
	//better validation. Change to type="text" to test
	if(email.indexOf('@') > -1){
		ev.style.display = "none";
	}
	else{
		ev.style.display = "block";
		ev.innerText = "Please enter a valid email address";
		suc = false;
	}
	/*
	add validation for a proper selection from dropdown.
	First element should be "Select One", and it should require that
	some other value is selected in order to proceed
	*/
    if(selectVal == "-1"){
				alert("Select another option!");
                suc = false;
			}
	return suc;	
}
</script>
<style>
input { border: 1px solid black; }
.error {border: 1px solid red;}
.noerror {border: 1px solid black;}
</style>
</head>
<body>
<div style="margin-left: 50%; margin-right:50%;">
<form method="POST" action="#" onsubmit="return validate();">
<input name="name" type="text" placeholder="Enter your name"/>

<input name="email" type="email" placeholder="name@example.com"/>
<span id="validation.email" style="display:none;"></span>

<input type="password" name="password" placeholder="Enter password"/>
<input type="password" name="confirm" placeholder="Re-Enter password"/>
<span style="display:none;" id="validation.password"></span>

<!-- Add dropdown element (something specific to your project) -->
<select name="dropMenu" id="drop">
		<option value="-1">-Select Side-</option>
		<option value="0">X</option>
		<option value="1">O</option>
</select>
<input type="submit" value="Try it"/>
</form>
</div>
</body>
</html>
<?php checkPasswords();?>
<?php
if(isset($_POST)){
	echo "<br><pre>" . var_export($_POST, true) . "</pre><br>";
}
?>