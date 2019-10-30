<?php

    ini_set('display_errors',1);
	ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $flag1 = false;
    $flag2 = false;
    
    require('conf.php');

    $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";

    try {
        $db = new PDO($conn_string,$username,$password);
        $query = "create table if not exists `Players`(
            `id` int auto_increment not null,
            `username` varchar(30) not null unique,
            `pin` int default 0,
            PRIMARY KEY (`id`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci";
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $stmt = $db->prepare($query);
        print_r($stmt->errorInfo());
        $r = $stmt->execute();
        echo "<br>". ($r>0?"Created table or already exists":"Failed to create table")."<br>";
        unset($r);
    } catch (Exception $e) {
        $response = "DB Error: " . $e;
        }
    function lookup($name,$token){

        //using this function to check login credentials through database
        if(isset($_POST['pass_token'])){
            $flag1 = true;
        }
        if(isset($_POST['username'])){
            $flag2 = true;
        }
        if($flag1 && $flag2){
            $pass_token = $_POST['pass_token'];
            try{
                $db = new PDO($conn_string,$username,$password);
                $query = "select * from `Players` where `token` =".$pass_token;
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                $stmt = $db->prepare($query);
            }
            catch(Exception $e){
                echo $e->getMessage();
	            exit("Something went wrong");

            }
        }
    }

?>