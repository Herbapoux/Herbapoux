
//Exercice ATTR

$('#stormBlanc').attr("title", "Pas facile la vie de Stormtrooper");
$('#stormBlanc').attr("alt", "image d'un stormtrooper blanc");
$('#stormBlanc').attr("src", "images/nouveauStorm.jpeg");
$('#fontAChanger').attr("class", "fas fa-fighter-jet fa-4x");

//Exercice CSS

$('.row4 h1').css("font-size", "4rem");
$('.orange').css("opacity", ".8");
$('.fondNoir').css("background-color", "darkgray");
$('.fondBlanc').css("background-color", "lightgray");

//Exercice HTML et Hide

$('#PereDeLuke').html("Père de Luke Skywalker");
$('#ViveLesStormtroopers').html("Vive les Stormtroopers");
$('#hide').hide();




/*FONCTION HTML (Va modifier ce qui se trouve ENTRE les balises)
$('#helloJquery').html("JQUERY ROCKS!");

//On peut se servir des variables
var texteDeLaBalise = $('#helloJquery').html();
//alert (texteDeLaBalise);

//FONCTION CSS (Modifie ce qui se trouve dans le CSS)
$('#helloJquery').css("color", "red");

//FONCTION ATTR (Modifie ce qui se trouve DANS la balise)
$('#imgJquery').attr("src","img/Cover.jpg");*/