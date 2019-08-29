

// Chapitre 2

// 01. Lire deux nombres et afficher le plus grand des deux.

var nombre1;
var nombre2;

nombre1 = Number(prompt("Entrez un premier nombre"));
nombre2 = Number(prompt("Entrez un deuxième nombre"));

if(nombre1 > nombre2){
    alert("Ceci est le nombre le plus: " + nombre1);
}

else if(nombre1 < nombre2){
    alert("Ceci est le nombre le plus: " + nombre2);
}

else{
    alert("Les deux nombres sont égaux: " + nombre2);
}

// 02. Un marchand décide d’accorder une réduction de 15% à tout acheteur, si le montant
// total de ses achats est plus grand que 200.00$. Écrire un algorithme qui permet de
// calculer et d’afficher la réduction que chaque acheteur a droit, connaissant le montant total
// des achats.

var reduction;
var montant;

montant = Number(prompt("Entrez le montant total: "));
reduction = montant / 100 * 15;


if(montant > 200) {
    alert("Vous bénéficiez d'une réduction d'un montant de: " + reduction);
}

else{
    alert("Le prix de votre article est de: " + montant);
}

// 03. Lire deux nombres, si les deux nombres sont plus grands que 9 écrire le mot
// « BONJOUR » et si tel n’est pas le cas écrire « BONSOIR ».

var nombrea;
var nombreb;

nombrea = Number(prompt("Entrez un premier nombre"));
nombreb = Number(prompt("Entrez un deuxième nombre"));

if(nombrea && nombreb > 9){
    alert("BONJOUR");
}

else{
    alert("BONSOIR");
}

/* 04. Lire deux nombres. Vous devez diviser le premier nombre par le deuxième seulement si
le deuxième nombre est différent de zéro. Par contre si ce nombre est zéro inscrivez le
message suivant :‘Division par zéro interdite.’, si ce nombre n’est pas zéro vous devez
imprimer le résultat. */

var nbr1;
var nbr2;
var division;


nbr1 = Number(prompt("inscrivez le premier nombre"));
nbr2 = Number(prompt("Inscrivez le deuxième nombre"));

if(nbr2 === 0){
    alert("Division par 0 interdite!");
}

else{
    division = nbr1 / nbr2;
    alert("Voici le résultat de la division: " + division);
}

// 05. Lire un degré de température. Si la température est comprise entre -40 et -10 écrire
// « HAAAAAAAAA! Il fait froid». Sinon, écrire « Enfin une belle journée! ».

var temperature;

temperature = Number(prompt("Entrez la température:"));

if(temperature > -40 && temperature < -10 ){
    alert("HAAAAAA! il fait froid!");
}

else if(temperature <= -40){
    alert("Moi je change de pays, il fait trop froid!!");
}

else{
    alert("Enfin une belle journée!");
}

// 06 - A. Lire une note au clavier et afficher la lettre correspondante.
// ● 90 et plus : A
// ● Entre 80 et 90 : B
// ● Entre 70 et 80 : C
// ● Entre 60 et 70 : D
// ● Moins de 60 : E
// * Codez l’exercice #6 2 fois, une fois en débutant le IF par la cote A et une fois par la cote E
// (en sens inverse).

var resultat;

resultat = Number(prompt("Entrez votre note svp"));

if(resultat >= 90 && resultat <= 100){
    alert("A");
}

else if(resultat >= 80 && resultat < 90){
    alert("B");
}

else if(resultat >= 70 && resultat < 80){
    alert("C");
}

else if(resultat >= 60 && resultat < 70){
    alert("D");
}

else if(resultat <= 59 && resultat >= 0){
    alert("E");
}

else{
    alert("Erreur sur la note");
}

// 06 - B.

var resultat2;

resultat2 = Number(prompt("Entrez votre note svp"));

if(resultat2 <= 59 && resultat2 >= 0){
    alert("E");
}

else if(resultat2 >= 60 && resultat2 < 70){
    alert("D");
}

else if(resultat2 >= 70 && resultat2 < 80){
    alert("C");
}

else if(resultat2 >= 80 && resultat2 < 90){
    alert("B");
}

else if(resultat2 >= 90 && resultat2 <= 100){
    alert("A");
}

else{
    alert("Erreur sur la note");
}

// 07. Lire un nombre au clavier. Afficher la catégorie (Positif, Négatif ou Zéro à l’écran)

var nbrs;

nbrs = Number(prompt("Entrez un nombre svp"));

if(nbrs > 0){
    alert("Positif");
}

else if(nbrs < 0){
    alert("Négatif");
}

else{
    alert("Zéro");
}

// 08. Faire un programme qui lit le taux horaire et le nombre d’heures travaillées d’un employé. Affichez son
// salaire. (Attention, il est payé le double de son taux horaire pour toutes les heures supplémentaires travaillées.
// Une semaine de travail normale est de 40 heures.


var thoraire;
var heures;
var salaire;
var salaire2;

thoraire = Number(prompt("Entrez votre taux horaire"));
heures = Number(prompt("Entrez le nombre d'heures travaillé"));

salaire = thoraire * heures;
salaire2 = (thoraire * 40) + ((thoraire * 2) * (heures - 40));


if(heures <= 40){
    alert("Votre salaire est de " + salaire + "$");
}

else if(heures > 40){
    alert("Votre salaire est de " + salaire2 + "$");
}

/* 09. Faire un programme qui lit un nom d’utilisateur et un mot de passe.
Si le nom d’utilisateur est “admin” et le mot de passe “12345”, affichez le message
suivant : « Bonjour [nom de l’utilisateur] ». Si les informations ne sont pas correctes, affichez
le message suivant : « Votre nom d’utilisateur ou votre mot de passe est invalide » */

var utilisateur;
var motpasse;

utilisateur = (prompt("Entrez votre nom d'utilisateur"));
motpasse = (prompt("entrez votre mot de passe"));

if(utilisateur !== "admin" || motpasse !== "12345"){
    alert("Votre nom d’utilisateur ou votre mot de passe est invalide");
}

else {
    alert("Bonjour " + utilisateur);
}

// 10. Lire un nombre entier au clavier et afficher le nom du mois correspondant. Si le nombre saisi ne
// correspond pas à un mois, affichez le message suivant : « Mois invalide ».

var mois;

mois = Number(prompt("Entrez le mois en valeur numérique"));

if(mois === 1 || mois === "01"){
    alert("Janvier");
}

else if(mois === 2 || mois === "02"){
    alert("Février");
}

else if(mois === 3 || mois === "03"){
    alert("Mars");
}

else if(mois === 4 || mois === "04"){
    alert("Avril");
}

else if(mois === 5 || mois === "05"){
    alert("Mai");
}

else if(mois === 6 || mois === "07"){
    alert("Juin");
}

else if(mois === 7 || mois === "07"){
    alert("Juillet");
}

else if(mois === 8 || mois === "08"){
    alert("Août");
}

else if(mois === 9 || mois === "09"){
    alert("Septembre");
}

else if(mois === 10 || mois === "10"){
    alert("Octobre");
}

else if(mois === 11 || mois === "11"){
    alert("Novembre");
}

else if(mois === 12 || mois === "12"){
    alert("Décembre");
}

else{
    alert("Mois invalide");
}
