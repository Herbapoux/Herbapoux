/* 09. Trouvez TOUS les nombres de Armstrong de moins de 1000
On dénomme nombre de Armstrong un entier naturel qui est égal à la somme des
cubes des chiffres qui le composent. */


var compteuri = 1;
var compteurj = Math.floor((Math.random()/10);
var compteurk = Math.floor((Math.random()/100);

while (compteuri <= 10){
    compteuri = compteuri + 1;
    while (compteurj <= 100){
        compteurj = compteurj + 1;
        while (compteurk <= 1000){
            compteurk = compteurk +1;
            if (compteurk )
        }
    }
}

/* 08. Faire un programme qui boucle 10 fois. À toutes les itérations, votre
programme génère un nombre aléatoire entre 0 et 1 et vous demande
aussi de choisir un nombre entre 0 et 1. Si le nombre est identique,
vous gagnez, perdez sinon. Vous affichez le pointage à la fin des 10
itérations. */

var choisir;
var compteur7 = 1;
var resulta = 0;


while (compteur7 <= 10){
    compteur7 = compteur7 + 1;

    choisir = Number(prompt("CHoisissez entre 0 et 1"));

    var aleatoir1 = Math.floor((Math.random()*20)/10);

    if (aleatoir1 === 1 && choisir === 1){
        resulta = resulta + 1;
        alert("Bravo!");
    }
    else if (aleatoir1 === 0 && choisir === 0){
        resulta = resulta + 1;
        alert("Bravo!");
    }
    else{
        alert("Dommage...");
    }
}
alert("Vous avez eu: " + resulta + " points");


/* 07. Lire une série de nombres fournis par l’usager (l’usager transmet le
nombre 0 pour terminer). Afficher combien de nombres positifs ont été
entrés ainsi que combien de nombres négatifs ont été entrés. */

var usage1;
var positif1 = 0;
var negatif1 = 0;

while (usage1 != 0){

    usage1 = Number(prompt("Entrez un nombre. Pour arrêter, inscrivez 0."));

    if (usage1 > 0){
        positif1 = positif1 + 1;
    }
    else if (usage1 < 0){
        negatif1 = negatif1 + 1;
    }
}
alert("Le nombre de positifs = " + positif1 + "\nLe nombre de négatif = " + negatif1);



/* 06. Lire une série de nombres fournis par l’usager (l’usager transmet le
nombre 0 pour terminer). Afficher la somme des nombres positifs ainsi
que la somme des nombres négatifs. */


var usage;
var positif = 0;
var negatif = 0;

while (usage != 0){
    usage = Number(prompt("Entrez un nombre. Pour arrêter inscrivez 0."));

    if (usage > 0){
        positif = parseInt(usage) + parseInt(positif);
    }
    else if (usage < 0){
        negatif = parseInt(usage) + parseInt(negatif);
    }
}

alert("Les positifs = " + positif + "\nLes négatifs = " + negatif);


/* 05. Faire un programme qui affiche 100 nombres aléatoires 0 ou 1 et
compter le nombre de 0 et de 1. */

var compteur5 = 1;
var result0 = 0;
var result1 = 0;

while (compteur5 <= 100){
    compteur5 = compteur5 + 1;

    var aleatoir = Math.floor((Math.random()*20)/10);

    if (aleatoir === 0){
        result0 = result0 + 1;
    }
    else if (aleatoir === 1){
        result1 = result1 +1;
    }

}
alert("Le nombre de 0 = " + result0  + "\nLe nombre de 1 = " + result1);





// 04. Affichez 10 fois un décompte de 20 à 2.

var compteur4 = 1;

while (compteur4 <= 10){
    compteur4 = compteur4 + 1;

    var decompte = 20;

    while (decompte >= 2){
        alert(decompte);
        decompte = decompte -1;
    }
}

// 03. Affichez tous les nombres pairs jusqu'à 100.

var compteur3 = 0;

while (compteur3 <= 50){
    alert(compteur3);
    compteur3 = compteur3 + 2;
}

// 02. Affichez un décompte de 100 à 55.

var compteur2 = 100;

while(compteur2 >= 55){
    alert(compteur2);
    compteur2 = compteur2 -1;
}


// 01. Affichez 100 fois dans la console « Je maîtrise les boucles! »

var compteur = 100;

while(compteur <= 0){
    console.log("Je maîtrise les boucles" + compteur);
    compteur = compteur + 1;
}


