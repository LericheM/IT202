<?php
//Borrowed helper function structure from Toegel
function get_username(){
    if($_SESSION['user']){
        echo $_SESSION['user']['name'];
    }
    else{
        echo "[Session missing]";
    }
}
function fetch_id(){
    if($_SESSION['user']){
        return $_SESSION['user']['id'];
    }
    else{
        echo "[Session missing]";
    }
}
?>