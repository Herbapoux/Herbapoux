$('.containerFiltre').hover(function () {
    $('.containerFiltre').css("cursor", "pointer");

    $('#natationHide').show();
    $('#natationShow').hide();
});

$('.containerFiltre').mouseleave(function () {
    $('.containerFiltre').css("cursor", "pointer");

    $('#natationHide').hide();
    $('#natationShow').show();
});
