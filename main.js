//  Variables
let board;
let turn = 'x';
let win;
let id;

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
document.getElementById('logout').addEventListener('click',logout);

//cache test
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
  win = winner ? winner : board.includes('') ? null : 'T';
  return win;
  saveBoard();
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

function saveBoard(){
  if(win){
    id = $("#id").blur(function(){
      $("#id").val();
    });
    sendBoard(id);
  }
}

function sendBoard(b_id){
  $.ajax({
    type:"POST",
    url:"./mp.php",
    data:{gameBoard: board,match_id:b_id},
    success: function(){console.log("success");
    }
  })
}



// function findMatch(){
//   let match_id = document.getElementById("id").value;
//   $.ajax({
//     type:"POST",
//     url:"./mp.php",
//     data:{"match_id":match_id},
//     success: sendBoard()
//     }
//   );
  

// }
// $("findmatch").click(function(){findMatch();});

