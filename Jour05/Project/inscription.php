<!DOCTYPE html>
<html>
<head>
    <title>Incsription</title>
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
        <input type="text" placeholder="saisissez votre nom" id="nom"></br></br>
<input type="text" placeholder="saisissez votre prénom" id="prenom"></br></br>
<input type="email" placeholder="saisissez votre email" id="email"></br></br>
<p id="email_erreur"></p>

<input type="password" placeholder="saisissez votre mot de passe" id="mdp"></br>
<input type="password" placeholder="confirmez votre mot de passe" id="confirm_mdp">
<p id="erreur_mdp"></p>
<p id="champs_erreur"></p>
<button id="button">envoyer</button>

    </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src='script.js'></script>
</body>
</html>
