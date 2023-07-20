<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maquette de page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
<style>
  body{
    background-color: lightgrey;
  }
  .col-7{
    background-color: lavender;
  }
</style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LTPF</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="https://laplateforme.io/">Accueil</a>
            <a class="nav-link" href="#">Units</a>
            <a class="nav-link" href="#">Jobs</a>
            <a class="nav-link" href="#">Skills</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <h2 class="text-center">La Plateforme</h2>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card" style="width: 15rem;">
            <img src="pic2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Un papillon</h5>
              <p class="card-text">C'est un peu comme une chenille, mais avec des ailles. <br> Ne pas ingerer</p>
              <div class="container">
  <!-- Trigger the modal with a button -->
<button id="cust_btn" type="button"  class="btn btn-info btn-lg">Commander votre propre papillon</button>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
    
          <h4 class="modal-title">Papillon commande</h4>
        </div>
        <div class="modal-body">
          <p>Vous avez commandé un papillon à votre ip address</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"></button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 
            </div>
          </div>
        </div>
        <div class="col-7">
          <h1 class="display-4" id="jumbotron-text">Bonjour, monde!</h1>
          <p class="lead" id="jumbotron-content">Il existe plusieurs visions du terme: <br>
            le monde est la matiere, l'espace et les phenomenes qui nous sont accessibles par les sens, l'experience ou
            la raison. <br>
            Le sens le plus courant designe notre planete, la Terre, avec ses habitants, et son environnement plus ou
            moins naturel.</p>
          <button class="btn btn-danger" onclick="rebooterLeMonde()">Rebooter le Monde</button>
          
          <div class="spinner-border text-success" role="status" id="spinner">
    <span class="visually-hidden">Loading...</span>
  </div>
          <div class="container">
            <div class="row">
              <div class="col">

              </div>
              <div class="col">

              </div>
              <div class="col">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link jumbotron-page" data-page="1">1</a></li>
                    <li class="page-item"><a class="page-link jumbotron-page" data-page="2">2</a></li>
                    <li class="page-item"><a class="page-link jumbotron-page" data-page="3">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
<div class="col">
  <div class="list-group" id="rightList">
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Limbes</a>
    <a href="#" class="list-group-item list-group-item-action">Luxure</a>
    <a href="#" class="list-group-item list-group-item-action">Gourmandise</a>
    <a href="#" class="list-group-item list-group-item-action">Avance</a>
    <a href="#" class="list-group-item list-group-item-action">Colere</a>
    <a href="#" class="list-group-item list-group-item-action">Heresie</a>
    <a href="#" class="list-group-item list-group-item-action">Violence</a>
    <a href="#" class="list-group-item list-group-item-action">Ruse et Tromperie</a>
    <a href="#" class="list-group-item list-group-item-action">Trahison</a>
    <a href="#" class="list-group-item list-group-item-action">Internet Explorer</a>
  </div>
</div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-2">
        <button class="btn btn-primary" onclick="incrementProgress()">Avancer</button>
        </div>
        <div class="col-8">
          <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0"
          aria-valuemax="100" id="progressBar"></div>
          </div>
        </div>
        <div class="col">
        <button class="btn btn-primary" onclick="decrementProgress()">Reculer</button>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Login" aria-label="Login" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Password" aria-label="Password"
              aria-describedby="basic-addon2">
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>
          </div>

          <label for="basic-url">Your vanity URL</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            </div>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Dogecoin</span>
            </div>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
              <span class="input-group-text">.00</span>
            </div>
          </div>

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">With textarea</span>
            </div>
            <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
        </div>
        <div class="col">

        </div>
        <div class="col">
        <form>
    <div class="mb-3">
      <label for="form_mail" class="form-label">Email address</label>
      <input type="email" class="form-control" id="form_mail" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="form_mdp" class="form-label">Password</label>
      <input type="password" class="form-control" id="form_mdp">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="button" class="btn btn-primary" id="form_btn">Submit</button>
  </form>
        </div>
      </div>
    </div>
    <br>

  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    $(document).on("click","#cust_btn",function(){
  
  $("#myModal").modal("toggle");
  
})
    function rebooterLeMonde() {
      const citationsBladeRunner = [
        "Tous ces moments se perdront dans l'oubli, comme les larmes dans la pluie.",
        "Il est temps de mourir.",
        "Je veux voir un peu de lumière dans le monde.",
        "Les androïdes rêvent-ils de moutons électriques ?",
        "J'ai vu tant de choses que vous, humains, ne pourriez pas croire...",
      ];

      // Générer un index aléatoire pour choisir une citation
      const indexAleatoire = Math.floor(Math.random() * citationsBladeRunner.length);

      // Récupérer l'élément jumbotron par son ID
      const jumbotronText = document.getElementById("jumbotron-text");

      // Modifier le texte du jumbotron avec la citation aléatoire
      if (jumbotronText) {
        jumbotronText.innerText = citationsBladeRunner[indexAleatoire];
      }
    }
  </script>
  <script>
    const jumbotronContents = [
      {
        title: "Je veux voir un peu de lumière dans le monde.",
        content: "J'ai vu tant de choses que vous, humains, ne pourriez pas croire...",
      },
      {
        title: "Les androïdes rêvent-ils de moutons électriques ?",
        content: "Il est temps de mourir.",
      },
      {
        title: "GEURRE",
        content: "Tous ces moments se perdront dans l'oubli, comme les larmes dans la pluie.",
      },
      // Ajoutez d'autres contenus pour les pages supplémentaires ici
    ];

    function changeJumbotronContent(pageNumber) {
      const jumbotronTitle = document.getElementById("jumbotron-text");
      const jumbotronContent = document.getElementById("jumbotron-content");

      // Vérifier si le numéro de page est valide
      if (pageNumber >= 1 && pageNumber <= jumbotronContents.length) {
        // Récupérer le contenu correspondant à la page sélectionnée
        const currentPageContent = jumbotronContents[pageNumber - 1];

        // Mettre à jour le contenu du jumbotron avec le contenu de la page sélectionnée
        if (jumbotronTitle && jumbotronContent) {
          jumbotronTitle.innerText = currentPageContent.title;
          jumbotronContent.innerText = currentPageContent.content;
        }
      } else {
        console.log("Numéro de page invalide.");
      }
    }

    // Sélectionnez tous les boutons de pagination avec la classe "jumbotron-page"
    const jumbotronPageButtons = document.querySelectorAll(".jumbotron-page");

    // Ajoutez un événement de clic à chaque bouton de pagination
    jumbotronPageButtons.forEach((button) => {
      button.addEventListener("click", function () {
        // Récupérer le numéro de page à partir de l'attribut data-page
        const pageNumber = parseInt(button.dataset.page);

        // Appeler la fonction pour changer le contenu du jumbotron avec la page sélectionnée
        changeJumbotronContent(pageNumber);
      });
    });
  </script>
  <script>
    // Fonction pour gérer l'événement de clic sur les éléments de la liste groupée
function handleListItemClick(event) {
  // Retirer la classe "active" de l'élément actuellement actif (s'il y en a un)
  const activeItem = document.querySelector("#rightList .list-group-item.active");
  if (activeItem) {
    activeItem.classList.remove("active");
  }

  // Rendre l'élément cliqué actif en ajoutant la classe "active"
  event.target.classList.add("active");
}

// Sélectionner tous les éléments de la liste groupée à droite
const listItems = document.querySelectorAll("#rightList .list-group-item");

// Ajouter un événement de clic à chaque élément de la liste groupée
listItems.forEach((item) => {
  item.addEventListener("click", handleListItemClick);
});

  </script>
  <script>
    // Sélectionner la barre de progression par son ID
const progressBar = document.getElementById("progressBar");

// Fonction pour faire progresser la barre de progression
function incrementProgress() {
  const currentProgress = parseInt(progressBar.getAttribute("aria-valuenow"));
  const newProgress = Math.min(currentProgress + 10, 100); // Incrémenter de 10, maximum jusqu'à 100
  progressBar.setAttribute("style", `width: ${newProgress}%`);
  progressBar.setAttribute("aria-valuenow", newProgress);
}

// Fonction pour faire régresser la barre de progression
function decrementProgress() {
  const currentProgress = parseInt(progressBar.getAttribute("aria-valuenow"));
  const newProgress = Math.max(currentProgress - 10, 0); // Décrémenter de 10, minimum jusqu'à 0
  progressBar.setAttribute("style", `width: ${newProgress}%`);
  progressBar.setAttribute("aria-valuenow", newProgress);
}

  </script>
  
  <script>
  function handleSubmit(event) {
    event.preventDefault(); // Empêcher le formulaire de se soumettre

    var email = $("#form_mail").val();
    var mdp = $("#form_mdp").val();

    var tableau_couleurs = [
      "text-primary",
      "text-secondary",
      "text-success",
      "text-danger",
      "text-warning",
      "text-info",
      "text-light",
      "text-dark"
    ];

    if (email !== "" && mdp !== "") {
      let nbre_min = 0;
      let nbr_max = tableau_couleurs.length - 1;

      let nbr_aleatoire = Math.floor(Math.random() * (nbr_max + 1) + nbre_min);

      let new_spinner = "spinner-border " + tableau_couleurs[nbr_aleatoire];
      $('#spinner').attr("class", new_spinner);
    }
  }

  // Ajouter un gestionnaire d'événements pour le formulaire
  $("#form_btn").click(function () {
    handleSubmit(event);
  });
</script>
</body>

</html>
