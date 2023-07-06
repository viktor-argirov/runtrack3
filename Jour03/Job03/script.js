// Initial configuration of the puzzle
var puzzle = [
    { id: 1, imgUrl: 'logo1.png' },
    { id: 2, imgUrl: 'logo2.png' },
    { id: 3, imgUrl: 'logo3.png' },
    { id: 4, imgUrl: 'logo4.png' },
    { id: 5, imgUrl: 'logo5.png' },
    { id: 6, imgUrl: 'logo6.png' },
    { id: 7, imgUrl: 'logo7.png' },
    { id: 8, imgUrl: 'logo8.png' },
    { id: 9, imgUrl: 'logo9.png' },
    { id: 0, imgUrl: '' } // empty tile
  ];
  
  // Shuffle the puzzle tiles
  shuffle(puzzle);
  
  // Create the puzzle board
  var puzzleContainer = document.querySelector('.puzzle-container');
  var messageElement = document.querySelector('.message');
  var tiles = [];
  
  for (var i = 0; i < 9; i++) {
    var tile = document.createElement('div');
    tile.classList.add('puzzle-tile');
    tile.dataset.id = puzzle[i].id;
    tile.style.backgroundImage = `url(${puzzle[i].imgUrl})`;
    tile.addEventListener('click', tileClickHandler);
    puzzleContainer.appendChild(tile);
    tiles.push(tile);
  }
  
  // Check if the puzzle is solved
  function isPuzzleSolved() {
    for (var i = 0; i < 9; i++) {
      if (parseInt(tiles[i].dataset.id) !== i) {
        return false;
      }
    }
    return true;
  }
  
  // Handle tile click
  function tileClickHandler() {
    if (messageElement.textContent !== '') {
      return;
    }
  
    var emptyTileIndex = tiles.findIndex(tile => parseInt(tile.dataset.id) === 0);
    var clickedTileIndex = tiles.findIndex(tile => tile === this);
  
    if (isAdjacentTile(emptyTileIndex, clickedTileIndex)) {
      swapTiles(emptyTileIndex, clickedTileIndex);
      if (isPuzzleSolved()) {
        messageElement.textContent = 'Vous avez gagné';
      }
    }
  }
  
  // Check if the clicked tile is adjacent to the empty tile
  function isAdjacentTile(emptyIndex, clickedIndex) {
    var rowDiff = Math.floor(emptyIndex / 3) - Math.floor(clickedIndex / 3);
    var colDiff = (emptyIndex % 3) - (clickedIndex % 3);
    return (Math.abs(rowDiff) === 1 && colDiff === 0) || (rowDiff === 0 && Math.abs(colDiff) === 1);
  }
  
  // Swap two tiles in the puzzle
  function swapTiles(index1, index2) {
    var tempId = tiles[index1].dataset.id;
    var tempImg = tiles[index1].style.backgroundImage;
  
    tiles[index1].dataset.id = tiles[index2].dataset.id;
    tiles[index1].style.backgroundImage = tiles[index2].style.backgroundImage;
  
    tiles[index2].dataset.id = tempId;
    tiles[index2].style.backgroundImage = tempImg;
  }
  
  // Shuffle the puzzle tiles using Fisher-Yates algorithm
  function shuffle(array) {
    var currentIndex = array.length, randomIndex;
    while (currentIndex !== 0) {
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex--;
      [array[currentIndex], array[randomIndex]] = [array[randomIndex], array[currentIndex]];
    }
    return array;
  }
  
  // Restart the game
  function restart() {
    messageElement.textContent = '';
    shuffle(puzzle);
    for (var i = 0; i < 9; i++) {
      tiles[i].dataset.id = puzzle[i].id;
      tiles[i].style.backgroundImage = `url(${puzzle[i].imgUrl})`;
    }
  }
  