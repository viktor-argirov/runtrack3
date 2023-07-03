function sommenombrespremiers(nombre1, nombre2) {
    function estNombrePremier(nombre) {
        if (nombre < 2) {
            return false;
        }
        for (var i = 2; i < nombre; i++) {
            if (nombre % i === 0) {
                return false;
            }
        }
        return true;
    }

    if (estNombrePremier(nombre1) && estNombrePremier(nombre2)) {
        return nombre1 + nombre2;
    } else {
        return false;
    }
}

var nombre1 = 17;
var nombre2 = 31;
var somme = sommenombrespremiers(nombre1, nombre2);
if (somme !== false) {
    console.log("La somme des nombres premiers " + nombre1 + " et " + nombre2 + " est : " + somme);
} else {
    console.log("Au moins l'un des nombres n'est pas premier.");
}
