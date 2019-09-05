var premierClic = 0;
var premierImageSRC;
var premiereImageID;
var deuxiemeImageSRC;
var deuxiemeImageID;


$('.img-fluid').hover(function () {
    $('.img-fluid').css("cursor", "pointer");

});

var nbCompteur = 0;

$( ".img-fluid" ).click(function()
{
    var idImage = this.id;
    var sourceImage = this.src;

    //Premier click
    if(premierClic === 1)
    {
        $('#'+idImage).hide(500);
        premierImageSRC = sourceImage;
        premiereImageID = idImage;
        premierClic = 0;

        fVerification();
    }

    //Deuxième click
    else
    {
        deuxiemeImageSRC = sourceImage;
        deuxiemeImageID = idImage;

        $('#'+premiereImageID).attr("src", deuxiemeImageSRC);
        $('#'+deuxiemeImageID).attr("src", premierImageSRC);

        $('#'+premiereImageID).show(500);
        premierClic = 1;
        premierImageSRC = "";
        premiereImageID = "";
        deuxiemeImageSRC = "";
        deuxiemeImageID = "";
        nbCompteur = nbCompteur + 1;

        fVerification();
    }
});

function fVerification()
{
     var FVictoire = 0;

     for(i=1; i<10; i++)
     {
         //getting image source
         var path = $('#image'+i).attr('src');

         //splitting url and getting filename with file extension
         var file = path.split('/').pop();

         if(file === "image_0"+i+".jpg")
         {
             FVictoire = FVictoire + 1
         }
     }

     if(FVictoire === 9)
     {
         //$('#solide').toggle();
         setTimeout(function ()
         {
             $('#victoire').toggle();
         }, 500);
         $('#Vclics').html("Bravo, vous l'avez réussi en " + nbCompteur + " clics!");
     }
}

fVerification();

//BOUTON RECOMMENCER

$("#boutonRecommencer").click(function(){
    $("#image1").attr("src", "img/image_02.jpg");
    $("#image2").attr("src", "img/image_08.jpg");
    $("#image3").attr("src", "img/image_09.jpg");
    $("#image4").attr("src", "img/image_07.jpg");
    $("#image5").attr("src", "img/image_06.jpg");
    $("#image6").attr("src", "img/image_04.jpg");
    $("#image7").attr("src", "img/image_03.jpg");
    $("#image8").attr("src", "img/image_05.jpg");
    $("#image9").attr("src", "img/image_01.jpg");
    $('#victoire').hide();
    nbCompteur = 0;



});

//BOUTON TRICHER

$("#boutonTricher").click(function(){
    $("#image1").attr("src", "img/image_01.jpg");
    $("#image2").attr("src", "img/image_02.jpg");
    $("#image3").attr("src", "img/image_03.jpg");
    $("#image4").attr("src", "img/image_04.jpg");
    $("#image5").attr("src", "img/image_05.jpg");
    $("#image6").attr("src", "img/image_06.jpg");
    $("#image7").attr("src", "img/image_07.jpg");
    $("#image8").attr("src", "img/image_08.jpg");
    $("#image9").attr("src", "img/image_09.jpg");
    $('#victoire').show();
});



