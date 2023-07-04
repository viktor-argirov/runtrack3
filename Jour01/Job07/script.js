function jourtravaille(date) {
    var jour = date.getDate();
    var mois = date.getMonth() + 1; // Les mois commencent à partir de 0 dans JavaScript
    var annee = date.getFullYear();

    // Vérifier si la date correspond à un jour férié de l'année 2020
    var joursFeries2020 = [
        "01-01", 
        "04-10",
        "04-12",
        "05-01", 
        "05-08",
        "05-21", 
        "06-01", 
        "07-14",
        "08-15", 
        "11-01", 
        "11-11", 
        "12-25"  
    ];

    var dateStr = ("0" + jour).slice(-2) + "-" + ("0" + mois).slice(-2);

    if (joursFeries2020.includes(dateStr)) {
        console.log("Le " + jour + " " + mois + " " + annee + " est un jour férié.");
    } else if (date.getDay() === 0 || date.getDay() === 6) {
        console.log("Non, " + jour + " " + mois + " " + annee + " est un week-end.");
    } else {
        console.log("Oui, " + jour + " " + mois + " " + annee + " est un jour travaillé.");
    }
}

var date = new Date("2023-07-03");
jourtravaille(date);
