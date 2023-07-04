var counter = 0;

    function addone() {
      counter++;
      document.getElementById("compteur").innerText = counter;
    }

    document.addEventListener("DOMContentLoaded", function() {
      var button = document.getElementById("button");
      button.addEventListener("click", addone);
    });