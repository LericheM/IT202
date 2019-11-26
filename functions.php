<?php
//Borrowed helper function structure from Toegel
function get_username(){
    if($_SESSION['user']){
        return $_SESSION['user']['name'];
    }
}
function check_sesh(){
    return isset($_SESSION);
}
function fetch_id(){
    if($_SESSION['user']){
        return $_SESSION['user']['id'];
    }
}
if(isset($_POST["destination"])){
    
}
?>