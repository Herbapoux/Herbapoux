/**
 * Created by Shany on 2019-08-08.
 */
/*
Lire deux nombres.

Vous devez diviser le premier nombre par le deuxième
seulement si le deuxième nombre est différent de zéro.
Par contre si ce nombre est zéro inscrivez le message suivant
:‘Division par zéro interdite.’,
si ce nombre n’est pas zéro vous devez imprimer le résultat.
*/

//Commentaire sur une seule ligne

//Déclaration des variables
var nombre1;
var nombre2 = -1;
var resultat;

//CE QU'ON VEUT RÉPÉTER on le met dans la boucle
/*while(nombre2 != 0){
    //Lecture des variables au clavier
    nombre1 = Number(prompt("Veuillez entrer la nombre 1 svp :"));
    nombre2 = Number(prompt("Veuillez entrer la nombre 2 svp :"));

//Faire les vérifications (SI WHILE)
    if(nombre2 === 0){
        alert("DIVISION PAR ZERO INTERDITE");
    }
    else if(nombre1 === nombre2){
        alert("LES DEUX NOMBRES SONT IDENTIQUES");
    }
    else{
        resultat = nombre1 / nombre2;
        alert("Le résultat est : " + resultat);
    }
}
*/

//On veut faire un décompte
var compteur = 10;

while(compteur >= 0){
    alert(compteur);
    compteur = compteur - 1;
}



