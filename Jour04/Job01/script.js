document.getElementById("button").addEventListener("click", function() {
    fetch("expression.txt")
      .then(response => response.text())
      .then(data => {
        document.getElementById("content").textContent = data;
      })
      .catch(error => {
        console.log("Une erreur s'est produite : " + error);
      });
  });
  