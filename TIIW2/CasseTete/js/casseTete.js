var premierClic = 0;
var premierImageSRC;
var premiereImageID;
var deuxiemeImageSRC;
var deuxiemeImageID;



$('.img-fluid').hover(function () {
    $('.img-fluid').css("cursor", "pointer");

});

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
        //alert("Cliquez maintenant sur l'autre image.")
        //console.log("ID = " + premiereImageID + "\n" + "Source = " + premierImageSRC);

        fVerification();
    }
    //Deuxième click
    else
    {
        //Vérifie si la meme image a ete clique
        /*if(idImage === premiereImageID)
        {
            alert("veuillez click sur une autre image.");
        }
        else
        {*/

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

        fVerification();

    }
    //}

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

            //console.log(file + " : image_0" + i+".jpg")
     }

     if(FVictoire === 9)
     {
         setTimeout(500);
         alert("Bravo champion");
     }

    //console.log("Bonne réponse : " + NbrBonneReponse);
}

fVerification();


/*$( ".img-fluid" ).click(function() {
    var idImage = this.id;
    var sourceImage = this.src;
    alert(idImage);
});*/

/*compteur = 0;
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
});*/