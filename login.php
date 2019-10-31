<?php
function get_sample_users(){
	ini_set('display_errors',1);
	ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

	require('conf.php');
    $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
	try{
		$db = new PDO($conn_string, $username, $password);
        $select_query = "select username,token 
        from `Players` 
        where token = :passwdPlace
        and username = :usernamePlace";
		$stmt = $db->prepare($select_query);
		$r = $stmt->execute([":usernamePlace"=>$user_input,":passwdPlace"=>$user_pass]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($stmt->errorInfo()){
            print_r($stmt->errorInfo());
        }
        else{
            if($results["password"] == $_POST['pass']){
                echo "Welcome back ". $user_input;
            }
            else{
                echo "User or password is incorrect";
            }
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
</head>
<body >
    <div id = "screenOut">
            <p></p>
    </div>
<form action="#" onsubmit="return false" method="post">
<input type="text" name="username">
<input type="password" name="pass" >
<input type="submit" value="Login">
</form>
</body>

</html>
<?php get_sample_users()?>