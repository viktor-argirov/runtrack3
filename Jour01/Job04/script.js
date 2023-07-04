/*#4*/
function bisextile(annee){
    if ((annee % 4 === 0 && annee % 100 !== 0) && annee % 400 === 0){
        return true;
    }  else {
        return false;
    }
}
var annee = 2024;
if (bisextile(annee)){
    console.log(annee +" est une annee bisextile.");
} else {
    console.log(annee + " n'est pas une annee bisextile.");
}

bisextile(annee);