<?php
session_start();
// create a board, generate a match history
require('conf.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
$game_query;
if(isset($_POST["gameBoard"])){
    header('Location: ./login.php');
    // $board = $ $_POST["gameBoard"];
    // if(count($board)){
    //     //want to not assign the ID and check if it came with one
    //     $game_query = "SELECT * FROM Boards WHERE id = :id";
    //     dbLookup($board,$game_query);
    // }
    // else{
    //     //want to init a new row with unique id        
    //     dbLookup($board,$game_query);
    // }
}
function dbLookup($brd,$qry){
    //connecet to SQL DB, assign board an ID
    try{
        $db = new PDO($conn_string, $username, $password);
        $select_query = $qry;
        $stmt = $db->prepare($select_query);
		$r = $stmt->execute(array());

    }
    catch(Exception $e){

    }

}
function tResponse(){
    //send board in DB back to caller
}
?>