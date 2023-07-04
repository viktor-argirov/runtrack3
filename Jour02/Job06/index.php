<!DOCTYPE html>
<html>
<head>
  <title>Exemple de page avec code Konami</title>
  <style>
    body {
      background-color: white;
    }

    .konami {
      background-color: darksalmon;
      color: white;
    }

    .konami p {
      color: blue;
    }
  </style>
</head>
<body>
  <h1>Exemple de page avec code Konami</h1>
  <p>Essayez d'entrer le code Konami : ↑ ↑ ↓ ↓ ← → ← → B A</p>

  <script>
    // Fonction pour vérifier si un tableau est égal à un autre tableau
    function arraysMatch(arr1, arr2) {
      if (arr1.length !== arr2.length) return false;
      for (var i = 0; i < arr1.length; i++) {
        if (arr1[i] !== arr2[i]) return false;
      }
      return true;
    }

    // Code Konami
    var konamiCode = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];
    var enteredCode = [];

    // Fonction pour gérer la saisie des touches
    function handleKey(event) {
      enteredCode.push(event.key);
      if (enteredCode.length > konamiCode.length) {
        enteredCode.shift();
      }
      if (arraysMatch(enteredCode, konamiCode)) {
        document.body.classList.add('konami');
      }
    }

    // Écouteur d'événement pour les touches
    window.addEventListener('keydown', handleKey);
  </script>
</body>
</html>
