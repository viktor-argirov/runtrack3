<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
    
        h1 {
            text-align: center;
        }

        .content {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .contain h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
<div class="content">
        <header>
        <h1>Connexion</h1>
    </header>
    <main>
        <h2>Entrez vos informations de connexion :</h2>
        
<input type="text" placeholder="saisissez votre email" id="email_connexion"></br></br>


<input type="password" placeholder="saisissez votre mot de passe" id="mdp_connexion"></br>


<p id="champs_erreur"></p>

<button id="button_connexion">envoyer</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src='script.js'></script>
</body>
</html>