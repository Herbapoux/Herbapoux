
// boucle exemple

var nbr1;
var nbr2;
var division;

while (true){

    nbr1 = Number(prompt("inscrivez le premier nombre"));
    nbr2 = Number(prompt("Inscrivez le deuxième nombre"));

    if(nbr2 === 0){
        alert("Division par 0 interdite!");
    }

    else{
        division = nbr1 / nbr2;
        alert("Voici le résultat de la division: " + division);
    }
}

// CHAPITRE 3

/* 01. Lire 2 nombres A et B différents. Trouver et afficher le plus petit et le plus grand. Si les deux
nombres sont identiques, affichez un message d'erreur à l'utilisateur. */

var nbra;
var nbrb;

nbra = Number(prompt("Choisissez deux nombres différents" +
    "\nInscrivez le premier nombre: "));
nbrb = Number(prompt("Choisissez deux nombres différents" +
    "\nInscrivez le deuxième nombre: "));

if(nbra < nbrb){
    alert("Le plus petit nombre est: " + nbra + "\nLe plus grand nombre est: " + nbrb);
}

else if(nbra > nbrb){
    alert("Le plus petit nombre est: " + nbrb + "\nLe plus grand nombre est: " + nbra);
}

else{
    alert("Vous devez entrer deux nombres différents svp");
}

// 02. Lire 3 nombres A, B et C différents. Trouver et afficher le plus petit et le plus grand.

var nbr01;
var nbr02;
var nbr03;

nbr01 = Number(prompt("Choisissez trois nombres différents" +
    "\nInscrivez le premier nombre: "));
nbr02 = Number(prompt("Choisissez trois nombres différents" +
    "\nInscrivez le deuxième nombre: "));

nbr03 = Number(prompt("Choisissez trois nombres différents" +
    "\nInscrivez le troisième nombre: "));


if(nbr01 === nbr02 || nbr02 === nbr03 || nbr01 === nbr03){
    alert("Vous devez entrer trois nombres différents svp")
}

else if((nbr01 < nbr02) && (nbr01 < nbr03)){
    if(nbr02 > nbr03){
        alert("01 Le plus petit nombre est: " + nbr01 + "\nLe plus grand nombre est: " + nbr02);
    }
    else if(nbr03 > nbr02){
        alert("01 Le plus petit nombre est: " + nbr01 + "\nLe plus grand nombre est: " + nbr03);
    }
}

else if(nbr02 < nbr03){
    if(nbr01 > nbr03){
        alert("02 Le plus petit nombre est: " + nbr02 + "\nLe plus grand nombre est: " + nbr01);
    }
    else if(nbr03 > nbr01){
        alert("02 Le plus petit nombre est: " + nbr02 + "\nLe plus grand nombre est: " + nbr03);
    }
}

else if(nbr03 < nbr01){
    if(nbr01 > nbr02){
        alert("02 Le plus petit nombre est: " + nbr03 + "\nLe plus grand nombre est: " + nbr01);
    }
    else if(nbr02 > nbr01){
        alert("02 Le plus petit nombre est: " + nbr03 + "\nLe plus grand nombre est: " + nbr02);
    }
}

else{
    alert("Erreur");
}

/* 03. 3. Calculer et afficher la surface d'un rectangle pour seulement ceux ayant un périmètre d'au moins
100.*/

var hauteur;
var largeur;
var surf;

hauteur = Number(prompt("Quel est la hauteur?"));
largeur = Number(prompt("Quel est la largeur?"));
surf = hauteur * largeur;

if(surf < 100 ){
    alert("Votre surface est trop petite");
}

else{
    alert("voici la surface de votre rectangle: " + surf);
}

/* 04. Lire 2 nombres au clavier.
Si ces 2 nombres sont :
- supérieurs ou égaux à 10, affichez leur somme
- inférieurs à 10, affichez leur produit
Si l'un des deux nombres est supérieur ou égal à 10 et l'autre inférieur à 10, affichez la différence
entre les deux nombres.*/

var nba;
var nbb;

nba = Number(prompt("Inscrire le premier nombre:"));
nbb = Number(prompt("inscrire le deuxième nombre:"));

if(nba >= 10 && nbb >= 10){
    alert("Voici leur sommes: " + (nba + nbb));
}

else if(nba < 10 && nbb < 10){
    alert("Voici leur produit: " + (nba / nbb));
}

else if(nba >= 10 && nbb < 10){
    alert("A. Voici leur différence: " + (nba - nbb));
}

else{
    alert("B. Voici leur différence: " + (nbb - nba));
}

/* 05. Lire une lettre de l'alphabet. Afficher le mot voyelle (pour : a, e, i, o, u, y) ou le
mot consonne (pour les autres) selon la lettre lue.
Assurez-vous que l'utilisateur puisse entrer les lettres en minuscules ou en
majuscules.*/

var lettre;

lettre = (prompt("Inscrire une lettre; "));

if(lettre === "a" || lettre === "e" || lettre === "i" || lettre === "o" || lettre === "u"
    || lettre === "y" || lettre === "A" || lettre === "E" || lettre === "I" || lettre === "O" || lettre === "U"
    || lettre === "Y"){
        alert("Ceci est une voyelle");
}

else if(lettre === "b" || lettre === "c" || lettre === "d" || lettre === "f" || lettre === "g"
    || lettre === "h" || lettre === "j" || lettre === "k" || lettre === "l" || lettre === "m" || lettre === "n"
    || lettre === "p" || lettre === "q" || lettre === "r" || lettre === "s" || lettre === "t" || lettre === "v"
    || lettre === "w" || lettre === "x" || lettre === "z" || lettre === "B" || lettre === "C" || lettre === "D"
    || lettre === "F" || lettre === "G" || lettre === "H" || lettre === "J" || lettre === "K" || lettre === "L"
    || lettre === "M" || lettre === "N" || lettre === "P" || lettre === "Q" || lettre === "R" || lettre === "S"
    || lettre === "T" || lettre === "V" || lettre === "W" || lettre === "X" || lettre === "Z"){
        alert("Ceci est une consonne");
}

else{
    alert("Erreur: Vous devez inscrire une seule lettre");
}

/* 06. Lire une note d’examen et afficher « Échec » si la note est inférieure à 60 et
« Bravo » si la note est supérieure ou égale à 60.*/

var nexamen;

nexamen = Number(prompt("Inscrivez votre note: "));

if(nexamen >= 60 && nexamen <= 100){
    alert("Barvo!");
}

else if(nexamen < 60 && nexamen >= 0){
    alert(" Échec!");
}

else{
    alert("Erreur sur la l'inscription de la note");
}


/* 07. Lire le montant de vente et afficher le montant d’escompte correspondant
sachant que le taux d’escompte est de 12% et n’est calculé que sur les
montants supérieurs ou égaux à $500.00.*/

var montant;

montant = Number(prompt("Quel est le montant de votre vente?"));

if(montant >= 500){
    alert("Voici le montant d'escompte de la vente: " + (montant * 12 / 100) + " $");
}

else if (montant < 500 && montant >= 0){
    alert("Le montant n'est pas suffisant")
}

else{
    alert("Erreur sur l'inscription de votre montant")
}

/* 08. Lire l’âge d’un individu et afficher le mot :
○ « Adulte » si l’âge est >= 18 ans
○ « Adolescent » si l’âge est compris entre 12 et 17 ans inclusivement
○ « Enfant » si l’âge est < 12 ans.*/

var age;

age = Number(prompt("Entrer l'âge de la personne à inscrire: "));

if(age >= 18){
    alert("Adulte");
}

else if(age < 17 && age >= 12){
    alert("Adolescent");
}

else if(age < 12 && age > 0){
    alert("Enfant");
}

else{
    alert("Erreur sur la transcription de l'âge");
}
/* 09. Calculer et afficher l’impôt provincial à charger selon le revenu imposable :
○ revenu > 0 et $7000.00 inclus : 16% du revenu imposable
○ > 7000 et $14000.00 inclus : $1120 + 19.5% du reste
○ >14000 et $23000.00 inclus : $2485 + 21.5% du reste
○ >23000 et $50000.00 inclus : $4420 + 24.5% du reste
○ >50000 et + $11035 + 26% du reste.*/

var revenu;

var impot1;
var impot2;
var impot3;
var impot4;
var impot5;

revenu = Number(prompt("Entrez le montant de votre revenue"));
impot1 = (revenu * 16 / 100);
impot2 = 1120 + (revenu * 19.5 / 100);
impot3 = 2485 + (revenu * 21.5 / 100);
impot4 = 4420 + (revenu * 24.5 / 100);
impot5 = 11035 + (revenu * 26 / 100);

if(revenu > 0 && revenu <= 7000){
    alert("Votre impôt provincial est de: " + impot1);
}

else if(revenu > 7000 && revenu <= 14000){
    alert("Votre impôt provincial est de: " + impot2);
}

else if(revenu > 14000 && revenu <= 23000){
    alert("Votre impôt provincial est de: " + impot3);
}

else if(revenu > 23000 && revenu <= 50000){
    alert("Votre impôt provincial est de: " + impot4);
}

else if(revenu > 50000){
    alert("Votre impôt provincial est de: " + impot5);
}

else{
    alert("Erreur sur l'inscription de votre montant");
}

/* 10. Créez un programme permettant de changer la couleur du texte de la console.
○ Offrez trois choix de couleurs de fond et de texte à l'utilisateur
○ Affichez une ligne de texte de la couleur de fond et de texte choisis par
l'utilisateur */

var fond;
var texte;

fond = (prompt("Couleur de fond entre vert, jaune et rouge"));
texte = (prompt("Couleur de texte entre vert, jaune et rouge"));



/* 11.