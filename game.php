<!DOCTYPE html>
<html>
    <head>
        <style>
        #canvas {
          width: 1000px;
          height: 1000px;
          border: 1px solid black;
        }
        </style>
        <canvas 
        id="canvas" width="1000" height="1000" tabindex="1"
        ></canvas>
<script>
//Collect the sqaure game base with a few mods
//Source: http://bencentra.com/code/2017/07/11/basic-html5-canvas-games.html
// Collect The Square game

// Get a reference to the canvas DOM element
var canvas = document.getElementById('canvas');
// Get the canvas drawing context
var context = canvas.getContext('2d');



// Determine if number a is within the range b to c (exclusive)
function isWithin(a, b, c) {
  return (a > b && a < c);
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
</body>
</html>