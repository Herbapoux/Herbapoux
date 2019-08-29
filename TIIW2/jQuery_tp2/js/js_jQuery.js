

$('#flashID').css("position", "relative");

//Déplacer Gauche
$("#boutonGauche").click(function(){
    $('#flashID').css("left", "-=50");
});

//Déplacer Droite
$("#boutonDroite").click(function(){
    $('#flashID').css("left", "+=50");
});

//Changer image
compteur = 0;
$("#boutonChangerImage").click(function(){
    var imagedeflash;

    imagedeflash = $('#flashID').attr("src");
    if(compteur < 2)

        if(imagedeflash === "img/flash.jpg"){
        $('#flashID').attr("src" , "img/flash2.jpg");
        }

        else{
        $('#flashID').attr("src" , "img/flash.jpg");
        }

    compteur = compteur + 1
});

//Enlever l'image
$("#boutonEnleverImage").click(function(){
    $("#flashID").fadeOut();
});

//Afficher l'image
$("#boutonAjouterImage").click(function(){
    $("#flashID").fadeIn();
});

//Ajoutez un attribut alt à votre image avec la description 'photo de Flash'
$("#boutonAjouterAttribut").click(function(){
    $("#flashID").attr('alt', 'Photo de Flash');
});

//Ajoutez un titre en H1 'FLASH JQUERY' dans le haut de cette page avant la photo (before)
var compteur2 = 0;
$("#boutonAjouterTitre").click(function() {

    if(compteur2 < 1){
        $('body').prepend('<h1>FLASH JQUERY</h1>');
    }
    compteur2 = compteur2 +1;
});

//Flash est tellement rapide, ajoutez une autre image à côté de Flash à tous les cliques sur ce bouton!
$("#boutonDupliquer").click(function () {
    var clone = $(".flashClass:first").clone();

    $('#FlashDiv').append($("#flashID").clone())
});

//Flash ralentit, enlevez une image!
$("#boutonRalentir").click(function(){
    $(".flashClass:last").remove();
});



//Flash doit apparaître et disparaître toutes les 500MS pendant 5 secondes.
$("#boutonVitesseSupreme").click(function(){
    disparaitreFlash()
});

var i = 0;
function disparaitreFlash()
{
    var cntDwn = setInterval(function(){
        if(i===10) {
            //Le temps est terminé on clean tout
            clearInterval(cntDwn);
            i = 0;
        }
        else {
            //fonction blink flash
            $('#flashID').toggle();
            i = i + 1;
        }
    },500);
}

//Flash se téléporte sous ces boutons et retourne en haut lorsque l'on clique de nouveau.
$("#boutonTeleport").click(function () {

    $('#flashID').toggle();
    $('#flashIDTeleport').toggle();
});

//Ce bouton fait afficher une image d'explosion dans l'écran et enlève tout le reste (boutons images, etc).
$("#boutonNuke").click(function () {
    $('#explosion').hide();
    $('#nuke').toggle();
});