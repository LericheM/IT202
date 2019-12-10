//  Variables
let board;
let turn = 'x';
let win;

// Constants
const squares = Array.from(document.querySelectorAll('#board div'));
const messages = document.querySelector('h2');
const winningCombos = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6], 
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6]
  ];
// Event Listeners
document.getElementById('board').addEventListener('click', handleTurn);
document.getElementById('next-game-button').addEventListener('click', initBoard);
document.getElementById('Logout').addEventListener('click',logout);


// Functions

function initBoard(){
  board = [
    "","","",
    "","","",
    "","",""
  ];//layout is more clear in this manner
  render();
}
initBoard();

function getWinner() {
  let winner = null;
  winningCombos.forEach((combo, index) => {

      if (board[combo[0]] && board[combo[0]] === board[combo[1]] 
          && board[combo[0]] === board[combo[2]]) {

          winner = board[combo[0]];
      }
});

  return winner ? winner : board.includes('') ? null : 'T';
};


function render(){
  board.forEach(function(mark,index){
    squares[index].textContent = mark ;``
  });
  messages.textContent = win === 'T' ? `Tie!` : win ? `${win} wins the game!` : `It's ${turn}'s turn!`;
}


function handleTurn(event){
  let idx = squares.findIndex(function(square){
    return square === event.target;
  });
  board[idx] = turn;

  turn = turn === 'x' ? 'o' : 'x';

  win = getWinner();

  console.log(board);
  render();
}

function sendBoard(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      board = this.responseText;
    }
  };
  xhttp.open("POST","game.php",true);
  xhttp.send();
}

