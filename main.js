  let board;
  let turn = 'x';

  const squares = Array.from(document.querySelectorAll('#board div'));
  
  document.getElementById('board').addEventListener('click', handleTurn);

  function initBoard(){
    board = [
      "","","",
      "","","",
      "","",""
    ];//layout is more clear in this manner
    render();
  }
  initBoard();

  function render(){
    board.forEach(function(mark,index){
      squares[index].textContent = mark ;
    });
  }
  function handleTurn(event){
    let idx = squares.findIndex(function(square){
      return square === event.target;
    });
    board[idx] = turn;

    turn = turn === 'x' ? 'o' : 'x';


    console.log(board);
    render();
  }


