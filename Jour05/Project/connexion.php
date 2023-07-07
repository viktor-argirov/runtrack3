<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '123456789'); //Database connexion`

if(isset($_POST['submit'])) {
    if(isset($_POST['mail']) && isset($_POST['password'])) {
        $mail = $_POST['mail'];
        $password = $_POST['password'];


        if (isset($_POST['mail']) && isset($_POST['password']) == 'admin') {
            $_SESSION['admin'] = 'admin';
            header("Location: admin.php");
            }
        $requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE mail = ? AND password = ?");
        $requser->execute(array($mail, $password));
        $userexist = $requser->rowCount();

        if($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['mail'] = $userinfo['mail'];
            $_SESSION['password'] = $userinfo['password'];
            header("Location: profil.php?id=".$_SESSION['id']);
            exit();
        } else {
            $error = "Identifiant ou mot de passe incorrect.";
        }
    }
}

?>
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

        <form method="POST" action="connexion.php">
            <input type="email" name="mail" placeholder="Mail" />
            <input type="password" name="password" placeholder="Mot de passe" />
            <br /><br />
           <a href="profil.php"><input type="submit" name="submit" value="Se connecter !" /></a> 
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
</body>
</html>