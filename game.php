<?php session_start();
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
// TODO: add an element for text input send to php
?>
<!DOCTYPE html>
<html>
    <head>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <script defer src="./main.js"></script>


</head>
<body>
  <h2>It's X's turn!</h2>

  <div class="flex-container flex-column">
  <div class="flex-container flex-wrap" id="board">
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <button class = "btn" id="find_match">Find Match!</button>
  <button class ="btn"id="next-game-button">New Game!</button>
  <button onclick = " location.href = './logout.php';"class = "btn" id="logout">Logout!</button>
</body>
</html>