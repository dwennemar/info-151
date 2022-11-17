function getCellID(colsPerRow, r, c) {
  const id = r * colsPerRow + c;
  return `c${id};`
}

function drawGameBoard(rows, columns) {
  const table = document.createElement("table");
  const board = document.getElementById("board");
  board.appendChild(table);

  for (let i = 0; i < rows; i++) {
    const row = document.createElement("tr")
    table.appendChild(row);

    for (let j = 0; j < columns; j++) {
      const col = document.createElement("td");
      col.setAttribute("class", "white");
      col.setAttribute("id", getCellID(8, i, j))
      row.appendChild(col);
    }
  }
}
