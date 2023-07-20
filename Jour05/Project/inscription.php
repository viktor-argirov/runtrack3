<?php

$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '123456789'); //Database connexion`


if(isset($_POST['submit'])){
    if(isset($_POST['mail']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['password'])){
        $mail = $_POST['mail'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $password = $_POST['password'];

        $sql = "INSERT INTO utilisateurs (mail, prenom, nom, password) VALUES (?, ?, ?, ?);";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$mail, $prenom, $nom, $password]);
        header("Location: connexion.php");
        exit();

    } else {
        echo "Tous les champs ne sont pas remplis.";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Incsription</title>
    <script src="script.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .container h2 {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group span {
            color: red;
            font-size: 12px;
        }

        .form-group .error-message {
            margin-top: 5px;
            color: red;
            font-size: 12px;
        }

        .form-group .success-message {
            margin-top: 5px;
            color: green;
            font-size: 12px;
        }

        .form-group .button-container {
            text-align: right;
        }

        .form-group .button-container button {
            padding: 5px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group .button-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
    <h1>Page d'accueil</h1>

    <div class="container">
    <main>
        <h2>Remplissez le formulaire d'inscription :</h2>
        <form method="POST" action="inscription.php">

      <p>
      <label for="mail">Mail </label>
      <input type="text" name="mail" id="mail">
      </p>
      <p>
      <label for="prenom">Prenom </label>
      <input type="text" name="prenom" id="prenom">
      </p>
      <p>
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom">
      </p>
      <p>
      <label for="password">Password</label>
      <input type="text" name="password" id="password">
      </p>
      <p>
      <input type="submit" name="submit" id="submit" value="Submit">
      </p>
    </form>
    </main>
    </div>
</body>
</html>
