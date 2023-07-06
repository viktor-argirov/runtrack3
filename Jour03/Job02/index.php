<!DOCTYPE html>
<html>
<head>
  <title>Exercice Arc-en-ciel</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
  <style>
    #container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .image {
      width: 100px;
      height: 100px;
      margin: 10px;
    }

    #message {
      margin-top: 20px;
      text-align: center;
    }

    .green {
      color: green;
    }

    .red {
      color: red;
    }
  </style>
</head>
<body>
  <button id="melanger">Mélanger</button>
  <div id="container">
    <img class="image" src="arc1.png">
    <img class="image" src="arc2.png">
    <img class="image" src="arc3.png">
    <img class="image" src="arc4.png">
    <img class="image" src="arc5.png">
    <img class="image" src="arc6.png">
  </div>
  <div id="message"></div>
</body>
</html>
