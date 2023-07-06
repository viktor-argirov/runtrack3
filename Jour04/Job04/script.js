document.getElementById("updateButton").addEventListener("click", function() {
    fetch("users.php")
      .then(response => response.json())
      .then(data => {
        const userTable = document.getElementById("userTable");
        const tbody = userTable.querySelector("tbody");
        tbody.innerHTML = "";
  
        data.forEach(user => {
          const row = document.createElement("tr");
          row.innerHTML = `
            <td>${user.id}</td>
            <td>${user.nom}</td>
            <td>${user.prenom}</td>
            <td>${user.email}</td>
          `;
          tbody.appendChild(row);
        });
      })
      .catch(error => {
        console.log("Une erreur s'est produite : " + error);
      });
  });
  