<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtrage des données Pokémon</title>
</head>
<body>
  <form id="filterForm">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id">

    <label for="name">Nom:</label>
    <input type="text" id="name" name="name">

    <label for="type">Type:</label>
    <select id="type" name="type">
      <option value="">Tous</option>
      <option value="Fire">Feu</option>
      <option value="Water">Eau</option>
      <option value="Grass">Plante</option>
    </select>

    <input type="button" value="Filtrer" onclick="filterData()">
  </form>

  <div id="result"></div>

  <script src="script.js"></script>
</body>
</html>