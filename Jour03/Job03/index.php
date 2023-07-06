<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Taquin</title>
    <style>
    .puzzle-container {
      width: 300px;
      height: 300px;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(3, 1fr);
    }
    .puzzle-tile {
      border: 1px solid black;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      cursor: pointer;
    }
    .puzzle-tile img {
      max-width: 100%;
      max-height: 100%;
    }
    .message {
      color: green;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="puzzle-container"></div>
  <div class="message"></div>
  <button onclick="restart()">Recommencer</button>

  <script src="script.js"></script>
</body>
</html>
