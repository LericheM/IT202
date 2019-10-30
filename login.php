<?php
function get_sample_users(){
	ini_set('display_errors',1);
	ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $user_input = $_POST['username'];
    $user_pass = $_POST['pass'];
	
	require('conf.php');
	$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
	try{
		$db = new PDO($conn_string, $username, $password);
        $select_query = "select username,token 
        from `Players` 
        where token = :passwdPlace
        and username = :usernamePlace";
		$stmt = $db->prepare($select_query);
		$r = $stmt->execute(array(":usernamePlace"=>$user_input,":passwdPlace"=>$user_pass));
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->errorInfo()){
            print_r($stmt->errorInfo());
        }
        else{
            if($results["password"] == $_POST['pass']){
                echo $results;
            }
            else{
                echo "User or password is incorrect";
            }
        }
	}
	catch(Exception $e){
		$response = "DB Error: " . $e;
	}
   


}


?>