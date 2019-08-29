/**
 * Created by Shany on 2019-07-18.
 */
/*
Q1 Lire un nombre et afficher le carré et le cube de ce nombre.

Calculer la surface d’un rectangle dont la longueur et la largeur sont lues à l’écran.

Convertir un nombre de gallons en litres. 1 gal = 4.55 litres

Calculer le salaire brut d’un employé. Il est payé à l’heure et les données concernant le taux horaire et le nombre d’heures travaillées sont fournies en entrée.


Lire le nom et l’âge d’un individu, puis convertir son âge en jours (approximatif). Imprimer un message incluant son nom pour l’informer du nombre de jours vécus.
*/

// QUESTION 1
/*
var nombre;
var carre;
var cube;

nombre =  Number(prompt("Veuillez entrer un nombre svp :"));
carre = nombre * nombre;
cube = nombre * nombre * nombre;

alert("Le carre du nombre est = " + carre);
alert("Le cube est " + cube);

// QUESTION 2
var largeur;
var hauteur;
var surface;

largeur = Number(prompt("Veuillez entrer la largeur svp :"));
hauteur = Number(prompt("Veuillez entrer la hauteur svp :"));

surface = largeur * hauteur;

alert("La surface est de : " + surface);

//QUESTION 3
var litres;
var gallons;

gallons = Number(prompt("Veuillez entrer le nombre de gallons"));
litres = gallons * 4.55;

alert(gallons + " gallons donne " + litres + " en litres");

//QUESTION 4
var salaire;
var taux;
var nbHeuresTravaillees;

nbHeuresTravaillees = Number(prompt("Nb heures travaillees :"));
taux = Number(prompt("Taux Horaire"));

salaire = nbHeuresTravaillees * taux;

alert(salaire);

//Question 5
var nom;
var age;
var nbJoursVecus

nom = prompt("Entrez votre nom :");
age = Number(prompt("Entrez votre age : "))

nbJoursVecus = age * 365;

alert(nbJoursVecus);
*/

// CHAPITRE 2 SI --> IF
// On veut un programme qui affiche si l'utilisateur peut consommer de l'alcool
var age;

age = Number(prompt("Veuillez entrer votre age svp :"));

//Un si à deux conditions (cas le plus simple)
if(age < 18)
{
    //Tout ce qu'il y a entre les deux accolades ce fait uniquement
    // si age < 18 est vrai
    alert("Vous ne pouvez pas consommer");
}
else
{
    alert("Vous pouvez boire et être heureux!");
}
var toto;
//Un si à plusieurs conditions
age2 = Number(prompt("Veuillez entrer votre age svp :"));
if(age2 < 15){
    alert("Vous ne pouvez jamais BOIRE!");
}
else if(age2 >= 15 && age2 < 18){
    //Vrai si on a 15-16-17
    alert("On peut boire sous la supervision des parents");
}
else if(age2 >= 18 && age2 < 30){
    alert("Party is ON!!");
}
else if(age2>=30 && age2 < 50){
    alert("Occupez-vous de vos enfants!");
}
else{
    alert("AUTRE");
}

// &&  ET --> deux conditions doivent êtres vraies
// || OU --> Une des deux ou les deux conditions

if(sexe == "feminin" || age == 30){
    alert("Faire une action");
}
















