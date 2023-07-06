function filterData() {
    const id = document.getElementById("id").value.trim();
    const name = document.getElementById("name").value.trim();
    const type = document.getElementById("type").value.trim();
  
    fetch("pokemon.json")
      .then(response => response.json())
      .then(data => {
        const filteredData = data.filter(pokemon => {
          if (id && pokemon.id.toString() !== id) {
            return false;
          }
          if (name && !pokemon.name.toLowerCase().includes(name.toLowerCase())) {
            return false;
          }
          if (type && !pokemon.type.includes(type)) {
            return false;
          }
          return true;
        });
  
        displayResults(filteredData);
      })
      .catch(error => {
        console.log("Une erreur s'est produite : " + error);
      });
  }
  
  function displayResults(data) {
    const resultContainer = document.getElementById("result");
    resultContainer.innerHTML = "";
  
    if (data.length === 0) {
      resultContainer.textContent = "Aucun résultat trouvé.";
      return;
    }
  
    const ul = document.createElement("ul");
    data.forEach(pokemon => {
      const li = document.createElement("li");
      li.textContent = `${pokemon.name} (ID: ${pokemon.id}, Type: ${pokemon.type.join(", ")})`;
      ul.appendChild(li);
    });
  
    resultContainer.appendChild(ul);
  }