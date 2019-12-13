<?php
session_start();
// create a board, generate a match history


if(isset($_POST["brd"])){
    $board = $_POST["brd"];
    send_db($board);
}

function send_db($game_board){
    require('conf.php');
    $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
    try{
    $board = $game_board;
    $moves = explode(",",$board);
    $m0 = $board[0];$m1 = $board[1];$m2 = $board[2];
    $m3 = $board[3]; $m4 = $board[4];$m5 = $board[5];
    $m6 = $board[6];$m7 = $board[7];$m8 = $board[8];
    //take text version of game board and translate it into a form for db
    $db = new PDO($conn_string, $username, $password);
    $db_query = "INSERT INTO `GameData`(square1,square2,square3,
    square4,square5,square6,square7,square8,square9)
    VALUES(:m0,:m1,:m2,:m3,:m4,:m5,:m6,:m7,:m8)";
    $securedArr = array(":m0"=>$m0,":m1"=>$m1, ":m2"=>$m2,
    ":m3"=>$m3,":m4"=>$m4,":m5"=>$m5,
    ":m6"=>$m6,":m7"=>$m7,":m8"=>$m8);
    $stmt = $db->prepare($db_query);
    $r = $stmt->execute($securedArr); //FINISH THIS
    echo "game saved!";
    }
    catch(Exception $e){
        $response = "DB Error:".$e;
        echo $response;
    }
}








// $game_query;
// if(isset($_POST["match_id"])){
//     $match_id = $_POST["match_id"];
//     checkBoard($match_id);
// }
// function checkBoard($m_id){
//     if(isset($_POST["gameBoard"])){
//         $board = $ $_POST["gameBoard"];
//         $match_id = $m_id;
//         $game_query = "SELECT * FROM Boards WHERE id = :id";
//         dbLookup($board,$game_query,$match_id);
//     }
// }
// function dbLookup($brd,$qry,$id){
//     //connecet to SQL DB, assign board an ID
//     try{

//         $db = new PDO($conn_string, $username, $password);
//         $select_query = $qry;
//         $stmt = $db->prepare($select_query);
//         $r = $stmt->execute(array("id"=>$id));
//         $results = $stmt->fetch(PDO::FETCH_ASSOC);
//         print_r($stmt->errorInfor());
//         echo($results);

//     }
//     catch(Exception $e){

//     }

// }
// function tResponse(){
//     //send board in DB back to caller
// }
?>