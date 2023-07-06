function jsonValueKey(jsonString, key) {
    try {
      const jsonObject = JSON.parse(jsonString);
      return jsonObject[key];
    } catch (error) {
      console.log("Une erreur s'est produite : " + error);
      return null;
    }
  }
  const jsonString = `{
    "name": "La Plateforme_",
    "address": "8 rue d'hozier",
    "city": "Marseille",
    "nb_staff": "11",
    "creation": "2019"
  }`;
  
  const key = "city";
  const value = jsonValueKey(jsonString, key);
  console.log(value); // Affiche "Marseille"
  document.getElementById("show").innerHTML = value;

  // option 2

  // $(document).ready(function(){
  //   let txt =  `{
  //     "name": "La Plateforme_",
  //     "address": "8 rue d'hozier",
  //     "city": "Marseille",
  //     "nb_staff": "11",
  //     "creation": "2019"}`
  //   let obj = JSONparse(txt);
  //   });    