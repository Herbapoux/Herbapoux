var premierClic = 1;
var premierImageSRC;
var premiereImageID;
var deuxiemeImageSRC;
var deuxiemeImageID;

$( ".img-fluid" ).click(function()
{

    var idImage = this.id;
    var sourceImage = this.src;

    //Premier click
    if(premierClic < 2)
    {
        $('#'+idImage).hide(500);
        premierImageSRC = sourceImage;
        premiereImageID = idImage;
        premierClic = 2;
        //alert("Cliquez maintenant sur l'autre image.")
        //console.log("ID = " + premiereImageID + "\n" + "Source = " + premierImageSRC);

        fVerification();
    }
    //Deuxieme click
    else
    {
        //Vérifie si la meme image a ete clique
        if(idImage === premiereImageID)
        {
            alert("veuiillez click sur une autre image.");
        }
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

        fVerification();

        }
    }
});

function fVerification()
{
     var FVictoire = 0;

     for(i=1; i<10; i++)
     {
            //getting image source
            var path=$('#image'+i).attr('src');

            //splitting url and getting filename with file extension
            var file=path.split('/').pop();

            if(file === "image_0"+i+".jpg")
            {
                FVictoire++
            }

            //console.log(file + " : image_0" + i+".jpg")
     }

     if(FVictoire === 9)
    {

        FVictoire = 0;
        setTimeout( 500), alert("Bravo champion");
    }

    //console.log("Bonne réponse : " + NbrBonneReponse);
}

fVerification();