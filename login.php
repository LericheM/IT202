<?php
	ini_set('display_errors',1);
	ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    if(isset($_POST["username"]) and isset($_POST["pass"])){
        $user_input = $_POST["username"];
        $user_pass = $_POST["pass"];
        get_sample_users();
    }
    
    function get_sample_users(){

	require('conf.php');
    $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
	try{
		$db = new PDO($conn_string, $username, $password);
        $select_query = "SELECT * FROM Players WHERE username = 'spade'";
        $stmt = $db->prepare($select_query);
		$r = $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        if($results["token"] == $_POST['pass']){
            echo "Welcome back !". $results["token"];
            echo "<br> Here is the database array: <br>";
            print_r($results);
        }
        else{
            echo "User or password is incorrect";
            echo "<br> Here is the database array: <br>";
            print_r($results);
        }
        
	}
	catch(Exception $e){
        $response = "DB Error: " . $e;
        echo $response;
	}
}





?>
<html lang="en">
<head>
    <title>Login</title>
    
</head>
<body >
    <div id = "screenOut">
            <p></p>
    </div>
<form action="#" method="post">
<input type="text" name="username">
<input type="password" name="pass" >
<input type="submit" value="Login">
</form>
</body>

</html>
