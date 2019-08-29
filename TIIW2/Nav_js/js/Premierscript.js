

// 01. Lire un nombre et afficher le carré et le cube de ce nombre.

//Déclaration des variables
var nombre;
var carre;
var cube;


//Lecture au clavier (l'usager entre une valeur)
nombre = Number(prompt("Veuillez entrer un nombre svp: "));

//Les calculs

carre = nombre * nombre;
cube = nombre * nombre * nombre;

//Les affichages
alert("Le carré du nombre est: " + carre);
console.log("le cube du nombre est: " + cube);

// 02. Calculer la surface d’un rectangle dont la longueur et la largeur sont lues à l’écran.

var longueur;
var largeur;
var surface;

longueur = Number(prompt("Veuillez entrer la longueur du triangle sbp: "));
largeur = Number(prompt("Veuillez entrer la largeur du triangle sbp: "));

surface = longueur * largeur;

alert("La surface du triangle est: " + surface);
console.log("la surface du triangle est: " + surface);

// 03. Convertir un nombre de gallons en litres. 1 gal = 4.55 litres

var gallon;
var litre;

gallon = Number(prompt("Entrez le nombre de gallon pour l'équivalensce en litre: "));

litre = gallon * 4.55;

alert(gallon + " gallons vous donnes " + litre + " litres.");

// 04. Calculer le salaire brut d’un employé. Il est payé à l’heure et les données
// concernant le taux horaire et le nombre d’heures travaillées sont fournies en
// entrée.

var salaire;
var heure;
var taux;

heure = Number(prompt("Entrez le nombre d'heure travaillées: "));
taux = Number(prompt("Entrez votre taux horaire: "));

salaire = heure * taux;

alert("Votre salaire brut est de: " + salaire);

// 05. Lire le nom et l’âge d’un individu, puis convertir son âge en jours
// (approximatif). Imprimer un message incluant son nom pour l’informer du
// nombre de jours vécus.

var nom;
var age;
var jours;

nom = (prompt("Entrez votre nom:"));
age = Number(prompt("Entrez votre âge:"));

jours = age * 365;

alert(nom + ", vous avez vécu approximativement: " + jours + " jours.");

// Exercice p.28

// 01. Faites un programme qui lit le nom d’un article et son prix de
// détail. Votre programme doit afficher le prix de gros (66% du prix
// de détail) ainsi que le profit attendu.

var nom2;
var prix;
var prixgros;
var profit;

nom2 = (prompt("Entrez le nom de l'article"));
prix = Number(prompt("Entrez le prix de l'article"));

prixgros = prix * 66 / 100;
profit = prix * 33 / 100;

alert("Votre " + nom2 + "coûte " + prixgros + "$ au prix du gros et vous rapporte " + profit + "$ de profit");

// 02. Programmer un convertisseur Degré Celsius -> Fharenheit.

var fahr;
var cel;

cel = Number(prompt("Entrez la température en Celcius: "));

fahr = cel * (9/5) + 32;

alert("La température en fahrenheit est de " + fahr + " degrés!");

// 03. Programmer un convertisseur Fharenheit -> Degré Celsius.

var cel2;
var fahr2;

fahr2 = Number(prompt("Entrez la température en Fahrenheit: "));

cel2 = (fahr2 - 32) * (5/9);

alert("La température en Celcius est de " + cel2 + " degrés!");

// 04. Écrire un algorithme qui calcule la note finale d’un étudiant. Cette note
// est dérivée des trois notes suivantes : note à l’examen de mi-session qui
// compte pour 30% de la note finale, note de l’examen de fin session qui
// compte pour 50% et la note de laboratoire qui compte pour 20%.
// Lire les quatre éléments d’information suivants : le nom de l’étudiant, la
// note de laboratoire, la note de l’examen de mi-session et la note de
// l’examen de fin de session. Toutes les notes lues sont sur 100. Imprimer
// le nom suivi des trois notes lues qui ont été ramenées sur le pourcentage
// demandé ci-dessus, et de la note finale. Le tout sur des lignes différentes
// accompagné de messages clairs.


var nometud;
var labo20;
var labo;
var examenmi30;
var examenmi;
var examenf50;
var examenf;
var notef;

nometud = (prompt(" Entrez votre nom svp: "));
labo20 = Number(prompt("Entrez votre note des laboratoires: "));
examenmi30 = Number(prompt("Entrez votre note de l'examen de mi-session: "));
examenf50 = Number(prompt("Entrez votre note de l'examen final: "));


labo = labo20 * 100 / 20;
examenmi = examenmi30 * 100 / 30;
examenf = examenf50 * 100 / 50;

notef = labo20 + examenmi30 + examenf50;

alert("Voici les notes de " + nometud + ":" +
    "\nLaboratoire: " + labo + "%" +
    "\nExamen de la mi-session: " + examenmi + "%" +
    "\nExamen final: " + examenf + "%" +
    "\nNote finale: " + notef + "%" );

// 05. Créez un convertisseur d'unités de mesures.
// L'usager entre les dimensions de son terrain en pi2.
// Vous affichez les dimensions en m2, arpents2, hectares.

var pi2;
var met2;
var arp;
var hecto;

pi2 = Number(prompt("Entrez les dimensions de votre terrain en pi2"));

met2 = pi2 / 10.764;
arp = pi2 / 36799;
hecto = pi2 / 107639;

alert("Voici le résultat de votre conversion:" +
    "\nMètre au carré: " + met2 +
    "\nArpent au carré: " + arp +
    "\nHectares: " + hecto );

// 06. ● Fonction quadratique.
// ○ L'usager entre A,B,C,X, vous trouvez Y.
// ■ Rappel : Y = AX2 + BX + C

var fqa;
var fqb;
var fqc;
var fqx;
var fqx2;
var fqy;

fqa = Number(prompt("Veuillez entrer la valeur du A: "));
fqb = Number(prompt("Veuilles entrer la valeur du B: "));
fqc = Number(prompt("Veuillez entrer la valeur du C: "));
fqx = Number(prompt("Veuillez entrer la valeur du X: "));


fqx2 = fqx * fqx;
fqy = (fqa * fqx2) + (fqb * fqx) + fqc;

alert("Voici le résultat: " + fqy);


// Chapitre 2 SI --> IF

// On veut un programme qui affiche si l'utilisateur peut consommer de l'alcool

// Un SI à 2 conditions (cas le plus simple)
// && ET --> deux conditions doivent être vraies
// || OU --> Une des deux ou les deux conditions sont vraies

var age2;

age2 = Number(prompt("Veuillez entrer votre age svp"));

if(age2 < 18)
{
    //Tout ce qu'il y a entre les accolades ce fait uniquement si age < 18 est vrai
    alert("Vous ne pouvez pas consommer");
}

else
{
    alert("Vous pouvez boire et être heureux!");
}

// Un SI à plusieurs consitions

age3 = Number(prompt("Veuillez entrer votre âge svp: "));
if (age3 < 15){
    alert("Vous ne pouvez jamais BOIRE!");
}

else if (age3 >= 15 && age3 < 18) {
    //Vrai si on a 15-16-17
    alert("On peut boire sous la supervision des parents");
}

else if (age3 >= 18 && age3 < 30){
    alert("Party is ON!!");
}

else if (age3 >= 30 && age3 < 50){
    alert("Occupez-vous de vos enfants!");
}

else {
    alert("Autre");
}