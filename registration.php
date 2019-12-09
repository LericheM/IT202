<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST["username"]) and isset($_POST["pass"])){
    $user_input = $_POST["username"];
    $user_pass = $_POST["pass"];
    $user_passC = $_POST["confirm"];
    if($user_pass == $user_passC){
        add_user($user_input,$user_pass);
    
    }
    else{
        echo "Passwords don't match! User not created!";
    }
}
function add_user($uname,$pass){
    require('conf.php');
    $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
	try{
        $hash = password_hash($pass, PASSWORD_BCRYPT);
        $db = new PDO($conn_string, $username, $password);
        $insert_query = "INSERT INTO `Players` (username,token)
        VALUES (:usr,:pas)";
        $stmt = $db->prepare($insert_query);
        $r = $stmt->execute([":usr"=>$uname,":pas"=>$hash]);

        echo "New user created!";
        header("Location: login.php");
    }
    catch(Exception $e){
        $response = "DB Error: " .$e;
        echo $response;
    }
}
?>
<html lang="en">
<head>
    <title>Register</title>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

  <script>
  function validate(){
      let pass = document.forms[0]["pass"].value;
      let confirm = document.forms[0]["confirm"].value;
      let text = document.getElementById("div1");

      if(pass != confirm)
      {
        div1.innerText = "Passwords don't match!";
        document.forms[0]["confirm"].style = "border: 3px solid red;";
        document.forms[0]["pass"].style = "border: 3px solid red;"
      }
      else{
          div1.innerText = "";
        document.forms[0]["confirm"].style = "initial;";
        document.forms[0]["pass"].style = "initial";
      }
  }
    
  </script>
    
</head>
<body >
<form action="#" method="post">
<input type="text" name="username">
<input type="password" name="pass" >
<input type="password" name="confirm" onblur = "validate()">
<input type="submit" value="Register">
<div id = "div1">
    <p></p>
</div>
</form>
</body>

</html>