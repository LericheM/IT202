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
document.getElementById('next-game-button').addEventListener('click', initBoard);
document.getElementById('logout').addEventListener('click',logout);
function enableClick(){
  document.getElementById('board').addEventListener('click', handleTurn);
}

// Functions

function initBoard(){
  enableClick();
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
  winner ? winner : board.includes('') ? null : 'T';
  if(winner){
    render();
    document.getElementById('board').removeEventListener('click', handleTurn);

    
    $.ajax({method:'POST',url:"./mp.php", data:{brd:board.toString()}, 
    success: function(result){$("#bot").html(result);
    }});
  }
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

// function saveBoard(){
//   if(win){
//     id = $("#id").blur(function(){
//       $("#id").val();
//     });
//     sendBoard(id);
//   }
// }

// function sendBoard(b_id){
//   $(".square").post("./mp.php",
//   {gameBoard: board,match_id:b_id},
//     function(){
//       alert("Board sent");
//     }
//   );
// }



// // function findMatch(){
// //   let match_id = document.getElementById("id").value;
// //   $.ajax({
// //     type:"POST",
// //     url:"./mp.php",
// //     data:{"match_id":match_id},
// //     success: sendBoard()
// //     }
// //   );
  

// // }
// // $("findmatch").click(function(){findMatch();});

