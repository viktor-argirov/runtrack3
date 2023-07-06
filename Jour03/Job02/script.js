$(document).ready(function() {
    var container = $("#container");
    var images = container.children(".image");
    var message = $("#message");
    var originalOrder = container.html();

    // Mélanger les images
    $("#melanger").click(function() {
      var randomOrder = [];

      while (images.length > 0) {
        var randomIndex = Math.floor(Math.random() * images.length);
        randomOrder.push(images[randomIndex]);
        images.splice(randomIndex, 1);
      }

      container.html(randomOrder);
      message.text("");
    });

    // Vérifier si les images sont dans le bon ordre
    container.on("click", ".image", function() {
      if (container.html() === originalOrder) {
        message.text("Vous avez gagné").removeClass("red").addClass("green");
      } else {
        message.text("Vous avez perdu").removeClass("green").addClass("red");
      }
    });
  });