<?php
session_start();
// TODO: Create a SQL query to find a board,
// create a board, generate a match history
require('conf.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
$game_query;
if(isset($_POST["gameBoard"]){
    $board = $ $_POST["gameBoard"];
    if(count($board)){
        //want to not assign the ID and check if it came with one
        $game_query = "SELECT * FROM Boards WHERE id = :id"
        dbLookup($board,$game_query);
    }
    else{
        //want to init a new row with unique id        
        dbLookup($board,$game_query;)
    }
}
function dbLookup($brd,$qry){
    //connecet to SQL DB, assign board an ID
    try{
        $db = new PDO($conn_string, $username, $password);

    }
    catch(Exception $e){

    }

}
function tResponse(){
    //send board in DB back to caller
}
?>