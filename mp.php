<?php
session_start();
// create a board, generate a match history
require('conf.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
$game_query;
if(isset($_POST["match_id"])){
    $match_id = $_POST["match_id"];
    checkBoard($match_id);
}
function checkBoard($m_id){
    if(isset($_POST["gameBoard"])){
        $board = $ $_POST["gameBoard"];
        $match_id = $m_id;
        $game_query = "SELECT * FROM Boards WHERE id = :id";
        dbLookup($board,$game_query,$match_id);
    }
}
function dbLookup($brd,$qry,$id){
    //connecet to SQL DB, assign board an ID
    try{

        $db = new PDO($conn_string, $username, $password);
        $select_query = $qry;
        $stmt = $db->prepare($select_query);
        $r = $stmt->execute(array("id"=>$id));
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($stmt->errorInfor());
        echo($results);

    }
    catch(Exception $e){

    }

}
function tResponse(){
    //send board in DB back to caller
}
?>