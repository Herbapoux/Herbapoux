/**
 * Created by Shany on 2019-07-11.
 */
//Calculer la surface d’un rectangle dont la longueur et la largeur sont lues à l’écran.

    // NUMERO 2
var longueur;
var largeur;
var surface;

longueur = Number(prompt("Veuillez entrer la longueur svp :"));
largeur = Number(prompt("Veuillez entrer la largeur svp :"));

surface = longueur * largeur;

alert("La surface pour une largeur de " + largeur +
    " et une longueur de " + longueur + " est de  " + surface +
    "m carre");

// NUMERO 3
// Convertir un nombre de gallons en litres. 1 gal = 4.55 litres
var francsFrancais;
var CAD;

CAD = Number(prompt("Entrez le montant en canadien :"));

francsFrancais = 445 * CAD;

alert("Voici le montant en CFA" + francsFrancais + "$");

//NUMERO 3.1
var francsFrancais2;
var CAD2;

francsFrancais2 = Number(prompt("Entrez le montant en CFA"));

CAD2 = francsFrancais2 / 445;

alert(francsFrancais2 + " CFA = " + CAD2 + "$");

