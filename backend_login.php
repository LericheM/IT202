<?php

function get_players(){
    ini_set('display_errors',1);
	ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    require('conf.php');

    $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";

    try {
        $db = new PDO($conn_string,$username,$password);
        $query = "create table if not exists 'Players'(
            'id' int auto_increment not null,
            'username' varchar(30) not null unique,
            'pin' int default 0,
            PRIMARY KEY ('id')
        ) CHARACTER SET utf8 COLLATE utf8_general_ci";
        $db->setAttribute(PDO::AFTER_ERRMODE,PDO::ERRMODE_WARNING);
        $stmt = $db->prepare($query);
        print_r($stmt->errorInfo());
        $r = $stmt->execute();
        echo "<br>". ($r>0?"Created table or already exists":"Failed to create table")."<br>";
        unser($r);

        if(isset($_POST["user"])){
            $user = $_POST["user"];
            $flag1 = true;
        }
        if(isset($_POST["pass"])){
            $pass = $_POST["pass"];
            $flag2 = true;
        }
        if($flag1 and $flag2){
            lookup($user,$pass);
        }
    } catch (Exception $e) {
        $response = "DB Error: " . $e;
        }
    function lookup($name,$token){
        //using this function to check login credentials through database
        return null;
    }
}
?>