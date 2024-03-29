<?php
    session_start();
	ini_set('display_errors',1);
	ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    if(isset($_POST["username"]) and isset($_POST["pass"])){
        $user_input = $_POST["username"];
        $user_pass = $_POST["pass"];
        get_sample_users($user_input,$user_pass);
    }
    
    function get_sample_users($user_input,$user_pass){

	require('conf.php');
    $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
	try{
		$db = new PDO($conn_string, $username, $password);
        $select_query = "SELECT * FROM Players WHERE username = :usr";
        $stmt = $db->prepare($select_query);
		$r = $stmt->execute(array(":usr"=>$user_input));
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        // print_r($stmt->errorInfor());
        if($results && count($results)>0){
            //verify password
            if(password_verify($user_pass, $results['token'])){
                echo "Welcome back ". $results["username"]."!";
                
                $userArr = array("id" => $results['id'],
                "name"=>$results["username"]);
                $_SESSION['user']= $userArr;
                header("Location: landing.php");
                // echo var_export($userArr, true);
                // echo var_export($_SESSION, true);

                // TODO: HANDLE USERNAME CORRECT PASSWORD WRONG

                // echo "<br> Here is the database array: <br>";
                // print_r($results);
                // echo"<br> You entered:". $_POST["username"]."<br>";
            }

        }
        else{
            echo "User or password is incorrect";
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
<form method="post">
<input type="text" name="username">
<input type="password" name="pass" >
<input type="submit" value="Login">
</form>
</body>

</html>
