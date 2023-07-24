<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de création de compte</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <header class="bg-blue-500 py-4 text-white text-center">
        <nav class="container mx-auto flex justify-between items-center px-4">
            <span class="text-white font-bold text-lg">Mon Site</span>
            <ul class="flex space-x-4">
                <li><a class="text-white" href="index.php">Accueil</a></li>
                <li><a class="text-white" href="index.php">Inscription</a></li>
                <li><a class="text-white" href="index.php">Connexion</a></li>
                <li><a class="text-white" href="index.php">Rechercher</a></li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto mt-8">
        <section class="bg-white shadow-md rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-4">Formulaire de création de compte</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Civilité</label>
                    <div class="flex items-center">
                        <label class="mr-2">
                            <input type="radio" name="civilite" value="M." class="form-radio">
                            <span class="ml-2">M.</span>
                        </label>
                        <label>
                            <input type="radio" name="civilite" value="Mme" class="form-radio">
                            <span class="ml-2">Mme</span>
                        </label>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" class="form-input">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-input">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse" class="form-input">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="email">Adresse email</label>
                    <input type="email" id="email" name="email" class="form-input">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" class="form-input">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="password_confirmation">Confirmer le mot de passe</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-input">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Passions</label>
                    <div class="flex items-center">
                        <label class="mr-4">
                            <input type="checkbox" name="passions[]" value="informatique" class="form-checkbox">
                            <span class="ml-2">Informatique</span>
                        </label>
                        <label class="mr-4">
                            <input type="checkbox" name="passions[]" value="voyages" class="form-checkbox">
                            <span class="ml-2">Voyages</span>
                        </label>
                        <label class="mr-4">
                            <input type="checkbox" name="passions[]" value="sport" class="form-checkbox">
                            <span class="ml-2">Sport</span>
                        </label>
                        <label>
                            <input type="checkbox" name="passions[]" value="lecture" class="form-checkbox">
                            <span class="ml-2">Lecture</span>
                        </label>
                    </div>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Valider</button>
            </form>
        </section>
    </main>

    <footer class="bg-gray-800 py-4 mt-8 text-white text-center">
        <nav class="container mx-auto">
            <ul class="flex space-x-4">
                <li><a class="text-white" href="index.php">Accueil</a></li>
                <li><a class="text-white" href="index.php">Inscription</a></li>
                <li><a class="text-white" href="index.php">Connexion</a></li>
                <li><a class="text-white" href="index.php">Rechercher</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
