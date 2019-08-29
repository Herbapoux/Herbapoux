var compteur =0;

$( "#boutonAction" ).click(function() {
    $('#helloJquery').html("On a cliqué sur le bouton, bravo!");
    $('#helloJquery').css("color","pink");
    $('img').attr("src" , "medias/sw2.jpg");
});

$( "#imgJquery" ).dblclick(function() {
    $( "#imgJquery" ).hide();
});

$( "#imgJquery" ).hover(function() {
    $( "#imgJquery" ).css("opacity" , "0.7");
    $("#imgJquery").css("cursor","pointer");
    $("#imgJquery").css("transform","scale(1.1)");
});

$( "#imgJquery" ).mouseleave(function() {
    $( "#imgJquery" ).css("opacity" , "1");
    $("#imgJquery").css("transform","scale(1)");
});

$( "#boutonAction2" ).click(function() {
    $( "#imgJquery" ).show();
    if(compteur < 1){
        $('body').append('<h1>APPEND!!!!</h1>');
        $('body').prepend('<h1>PREPEND!!!!</h1>');
    }
    compteur = compteur +1;
});

$( "#imgSW" ).click(function() {
    var nomImage;

    nomImage = $('#imgSW').attr("src");

    if(nomImage === "medias/ren.png"){
        $('#imgSW').attr("src" , "medias/ben.jpg");
    }
    else{
        $('#imgSW').attr("src" , "medias/ren.png");
    }


});








