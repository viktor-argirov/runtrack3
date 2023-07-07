function validerInscription() {
    // Récupérer les valeurs des champs de formulaire
    var prenom = document.getElementById('prenom').value;
    var nom = document.getElementById('nom').value;
    var email = document.getElementById('email').value;
    var motDePasse = document.getElementById('motDePasse').value;
    var confirmationMotDePasse = document.getElementById('confirmationMotDePasse').value;

    // Réinitialiser les messages d'erreur
    document.getElementById('erreurPrenom').innerHTML = "";
    document.getElementById('erreurNom').innerHTML = "";
    document.getElementById('erreurEmail').innerHTML = "";
    document.getElementById('erreurMotDePasse').innerHTML = "";
    document.getElementById('erreurConfirmationMotDePasse').innerHTML = "";

    // Effectuer les vérifications
    var erreurs = false;

    if (prenom.trim() === "") {
        document.getElementById('erreurPrenom').innerHTML = "Veuillez entrer votre prénom";
        erreurs = true;
    }

    if (nom.trim() === "") {
        document.getElementById('erreurNom').innerHTML = "Veuillez entrer votre nom";
        erreurs = true;
    }

    // Vérifier le format de l'email (utilisation d'une expression régulière simplifiée)
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
        document.getElementById('erreurEmail').innerHTML = "Veuillez entrer une adresse email valide";
        erreurs = true;
    }

    // Vérifier que le mot de passe est suffisamment complexe (au moins 6 caractères)
    if (motDePasse.length < 6) {
        document.getElementById('erreurMotDePasse').innerHTML = "Le mot de passe doit contenir au moins 6 caractères";
        erreurs = true;
    }

    // Vérifier que le mot de passe et sa confirmation sont identiques
    if (motDePasse !== confirmationMotDePasse) {
        document.getElementById('erreurConfirmationMotDePasse').innerHTML = "Les mots de passe ne correspondent pas";
        erreurs = true;
    }

    // Si des erreurs sont détectées, empêcher la soumission du formulaire
    if (erreurs) {
        event.preventDefault();
    }
}