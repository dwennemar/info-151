let pieces = [
  [0, -1, 0, -1, 0, -1, 0, -1],
  [-1, 0, -1, 0, -1, 0, -1, 0],
  [0, -1, 0, -1, 0, -1, 0, -1],
  [0, 0, 0, 0, 0, 0, 0, 0],
  [0, 0, 0, 0, 0, 0, 0, 0],
  [1, 0, 1, 0, 1, 0, 1, 0],
  [0, 1, 0, 1, 0, 1, 0, 1],
  [1, 0, 1, 0, 1, 0, 1, 0],
];

const checkerBoard = [
  ["black", "white", "black", "white", "black", "white", "black", "white"],
  ["white", "black", "white", "black", "white", "black", "white", "black"],
  ["black", "white", "black", "white", "black", "white", "black", "white"],
  ["white", "black", "white", "black", "white", "black", "white", "black"],
  ["black", "white", "black", "white", "black", "white", "black", "white"],
  ["white", "black", "white", "black", "white", "black", "white", "black"],
  ["black", "white", "black", "white", "black", "white", "black", "white"],
  ["white", "black", "white", "black", "white", "black", "white", "black"],
]

function getCellID(colsPerRow, r, c) {
  const id = r * colsPerRow + c;
  return `c${id};`
}

function drawGameBoard(rows, columns) {
  document.getElementById("member1").innerText = "Daniel";

  const table = document.createElement("table");
  const board = document.getElementById("board");
  board.appendChild(table);

  for (let i = 0; i < rows; i++) {
    const row = document.createElement("tr")
    table.appendChild(row);

    for (let j = 0; j < columns; j++) {
      const col = document.createElement("td");
      col.setAttribute("class", checkerBoard[i][j]);
      col.setAttribute("id", getCellID(8, i, j))
      row.appendChild(col);
    }
  }
}

function showGamePieces(rows, columns) {
  document.getElementById("member2").innerText = "Daniel";

  for (let i = 0; i < rows; i++) {
    for (let j = 0; j < columns; j++) {
      const cellId = getCellID(8, i, j);
      const cell = document.getElementById(cellId);
      if (pieces[i][j] < 0) {
        cell.setAttribute("class", "redpiece");
      } else if (pieces[i][j] > 0) {
        cell.setAttribute("class", "blackpiece");
      }
    }
  }
}

function randomMove() {
  document.getElementById("member1").innerText = "Daniel";

  const r1 = Math.floor(Math.random() * 8);
  const c1 = Math.floor(Math.random() * 8);
  const r2 = Math.floor(Math.random() * 8);
  const c2 = Math.floor(Math.random() * 8);

  const rc1 = pieces[r1][c1];
  pieces[r2][c2] = rc1;

  const rc1CellId = getCellID(8, r1, c1);
  const baseCell = document.getElementById(rc1CellId);
  baseCell.setAttribute("class", checkerBoard[r1][c1]);

  const rc2CellId = getCellID(8, r2, c2);

  const newCell = document.getElementById(rc2CellId);
  if (pieces[r1][c1] < 0) {
    newCell.setAttribute("class", "redpiece");
  } else if (pieces[r1][c1] > 0) {
    newCell.setAttribute("class", "blackpiece");
  }

  pieces[r1][c1] = 0
}
