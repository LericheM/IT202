<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        #canvas {
          width: 1000px;
          height: 1000px;
          border: 1px solid black;
        }
        body {
          /* game logic and stylying sourced from Anna Peterson on Medium */
          /* https://medium.com/javascript-in-plain-english/the-worlds-most-empowering-tic-tac-toe-javascript-tutorial-a889e4c20883 */
          text-align: center;
          font-family: Arial, Helvetica, sans-serif;
          }
          h2 {
          margin: 0 auto;
          font-size: 35px;
          margin: 10px;
          }
          .flex-container {
          display: flex;
          justify-content: center;
          align-items: center;
          }
          .flex-column {
          height: 100%;
          width: 100%;
          flex-direction: column;
          }
          .flex-wrap {
          flex-wrap: wrap;
          height: 432px;
          width: 432px;
          }
          .square {
          border: 2px solid rgba(0, 0, 0, .75);
          height: 140px;
          width: 140px;
          }
          #reset-button {
          text-align: center;
          font-size: 20px;
          border: 1px solid black;
          height: 55px;
          width: 100px;
          margin: 10px;
          }
        </style>
        <canvas 
        id="canvas" width="1000" height="1000" tabindex="1"
        ></canvas>
<script>
  let board;
  function initBoard(){
    board = [
      "","","",
      "","","",
      "","",""
    ];//layout is more clear in this manner
    render();
  }

  function render(){
    board.forEach(function(mark,index){
      console.log(mark,index);
    });
  }
  // Get a reference to the canvas DOM element
  var canvas = document.getElementById('canvas');
  // Get the canvas drawing context
  var context = canvas.getContext('2d');



  // Determine if number a is within the range b to c (exclusive)
  function isWithin(a, b, c) {
    return (a > b && a < c);
  }
  function menu() {
    erase();
    context.fillStyle = '#000000';
    context.font = '36px Arial';
    context.textAlign = 'center';
    context.fillText('Tic Tac Toe!', canvas.width / 2, canvas.height / 4);
    context.font = '24px Arial';
    context.fillText('Click to Start', canvas.width / 2, canvas.height / 2);
    context.font = '18px Arial'
    context.fillText('click on the box to play your turn', canvas.width / 2, (canvas.height / 4) * 3);
    // Start the game on a click
    canvas.addEventListener('click', startGame);
  }
  // Countdown timer (in seconds)
  var countdown = 30;
  // ID to track the setTimeout
  var id = null;

  // Clear the canvas
  function erase() {
    context.fillStyle = '#FFFFFF';
    context.fillRect(0, 0, 600, 400);
  }
</script>

</head>
<body>
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