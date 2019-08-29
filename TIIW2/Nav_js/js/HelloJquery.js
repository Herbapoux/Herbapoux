/** Created by Yannick on 2019-08-21. ... */

//Dans un événement (par exemple un click de souris)


//FONCTION HTML (Va modifier ce qui se trouve ENTRE les balises)
$('#helloJquery').html("JQUERY ROCKS!");

//On peut se servir des variables
var texteDeLaBalise = $('#helloJquery').html();
//alert (texteDeLaBalise);

//FONCTION CSS (Modifie ce qui se trouve dans le CSS)
$('#helloJquery').css("color", "red");

//FONCTION ATTR (Modifie ce qui se trouve DANS la balise)
$('#imgJquery').attr("src","img/Cover.jpg");

$('h2').html("Yeah");
$('h2').css("color", "blue");
$('#helloJquery').attr("class", "rouge");
