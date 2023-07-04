window.addEventListener('scroll', function() {
    // Hauteur totale du document
    var docHeight = document.documentElement.scrollHeight;

    // Hauteur de la fenêtre visible
    var windowHeight = window.innerHeight;

    // Position verticale actuelle de défilement
    var scrollPosition = window.scrollY || window.pageYOffset || document.body.scrollTop || document.documentElement.scrollTop;

    // Calcul du pourcentage de scrolling
    var scrollPercentage = (scrollPosition / (docHeight - windowHeight)) * 100;

    // Mise à jour de la couleur du footer en fonction du pourcentage de scrolling
    var footer = document.querySelector('footer');
    footer.style.backgroundColor = 'hsl(' + scrollPercentage + ', 100%, 50%)';
  });