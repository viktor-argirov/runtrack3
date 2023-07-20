function validerInscription() {
    // Récupérer les valeurs des champs de formulaire
    var prenom = document.getElementById('prenom').value;
    var nom = document.getElementById('nom').value;
    var email = document.getElementById('mail').value;
    var motDePasse = document.getElementById('password').value;
    var confirmationMotDePasse = document.getElementById('confirmationpassword').value;

    // Réinitialiser les messages d'erreur
    document.getElementById('erreurprenom').innerHTML = "";
    document.getElementById('erreurnom').innerHTML = "";
    document.getElementById('erreurmail').innerHTML = "";
    document.getElementById('erreurpassword').innerHTML = "";
    document.getElementById('erreurConfirmationpassword').innerHTML = "";

    // Effectuer les vérifications
    var erreurs = false;

    if (prenom.trim() === "") {
        document.getElementById('erreurprenom').innerHTML = "Veuillez entrer votre prénom";
        erreurs = true;
    }

    if (nom.trim() === "") {
        document.getElementById('erreurnom').innerHTML = "Veuillez entrer votre nom";
        erreurs = true;
    }

    // Vérifier le format de l'email (utilisation d'une expression régulière simplifiée)
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
        document.getElementById('erreurmail').innerHTML = "Veuillez entrer une adresse email valide";
        erreurs = true;
    }

    // Vérifier que le mot de passe est suffisamment complexe (au moins 6 caractères)
    if (motDePasse.length < 6) {
        document.getElementById('erreurpassword').innerHTML = "Le mot de passe doit contenir au moins 6 caractères";
        erreurs = true;
    }

    // Vérifier que le mot de passe et sa confirmation sont identiques
    if (motDePasse !== confirmationMotDePasse) {
        document.getElementById('erreurConfirmationpassword').innerHTML = "Les mots de passe ne correspondent pas";
        erreurs = true;
    }

    // Si des erreurs sont détectées, empêcher la soumission du formulaire
    if (erreurs) {
        event.preventDefault();
    }
}