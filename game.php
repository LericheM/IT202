<?php session_start();
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
?>
<!DOCTYPE html>
<html>
    <head>
    <!-- <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" /> -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
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
  <button class ="btn"id="next-game-button">New Game!</button>
  <button onclick = " location.href = './logout.php';"class = "btn" id="logout">Logout!</button>
  <form id = "bot" action="">
    <p></p>
  </form>
</body>
</html>