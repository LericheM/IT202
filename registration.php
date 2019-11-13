<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST["username"]) and isset($_POST["pass"])){
    if($_POST[""])
    $user_input = $_POST["username"];
    $user_pass = $_POST["pass"];
}
require('conf.php');
function add_user(){
    $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
	try{
        $db = new PDO($conn_string, $username, $password);
        $insert_query = "INSERT INTO Players (username,token)
        VALUES (:usr,:pas)";
        $stmt = $db->prepare($insert_query);
        $r = $stmt->execute([":usr"=>$user_input,":pas"=>$user_pass]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
  </script>
    
</head>
<body >
<form action="#" method="post">
<input type="text" name="username">
<input type="password" name="pass" >
<input type="password" name="confirm">
<input type="submit" value="Register">
</form>
</body>

</html>