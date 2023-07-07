<?php

$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '123456789'); //Database connexion`


if(isset($_POST['submit'])){
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['password'])){
        $mail = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['mail'];
        $password = $_POST['password'];

        $sql = "INSERT INTO utilisateurs (nom, prenom, mail, password) VALUES (?, ?, ?, ?);";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$nom, $prenom, $mail, $password]);
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
    <?php
    // Vérifier si l'utilisateur est connecté
    $utilisateurConnecte = false; // Remplacez ceci par votre propre logique de vérification

    if ($utilisateurConnecte) {
        // Utilisateur connecté
        $prenom = "John"; // Remplacez ceci par le prénom de l'utilisateur connecté
        echo "<p>Bonjour $prenom</p>";
    } else {
        // Utilisateur non connecté
        echo "<a href='inscription.php'>Inscription</a> | <a href='connexion.php'>Connexion</a>";
    }
    ?>
    
    <h1>Page d'accueil</h1>

    <div class="container">
        <h2>Inscription</h2>
        <form action="inscription.php" method="POST" onsubmit="validerInscription()">
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom">
                <span id="erreurPrenom" class="error-message"></span>
            </div>

            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">
                <span id="erreurNom" class="error-message"></span>
            </div>

            <div class="form-group">
                <label for="mail">Email:</label>
                <input type="mail" id="mail" name="mail">
                <span id="erreurEmail" class="error-message"></span>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password">
                <span id="erreurMotDePasse" class="error-message"></span>
            </div>

            <div class="form-group">
                <label for="confirmationMotDePasse">Confirmer le mot de passe:</label>
                <input type="password" id="password" name="password">
                <span id="erreurConfirmationMotDePasse" class="error-message"></span>
            </div>

            <div class="form-group button-container">
                <button type="submit">Inscription</button>
            </div>
        </form>
    </div>
</body>
</html>
