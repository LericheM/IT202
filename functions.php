<?php
//Borrowed helper function structure from Toegel
function get_username(){
    if($_SESSION['user']){
        echo $_SESSION['user']['name'];
    }
    else{
        echo "Session Missing!"
    }
}
?>