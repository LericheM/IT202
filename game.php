<?php session_start();
?>
<!DOCTYPE html>
<html>
    <head>
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

  <button id="next-game-button">New Game!</button>
</body>
</html>