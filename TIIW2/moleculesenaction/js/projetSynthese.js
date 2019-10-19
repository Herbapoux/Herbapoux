function OuvreModalInfo(TitreModal,LienFichierModal)
{
    $("#ModalInfo .modal-title").html(TitreModal);
    $("#ModalInfo .modal-body").load(LienFichierModal);
    $('#ModalInfo').modal('toggle');
}

function OuvreModalHoraire(TitreModal,LienFichierModal)
{
    $("#ModalHoraire .modal-title").html(TitreModal);
    $("#ModalHoraire .modal-body").load(LienFichierModal);
    $('#ModalHoraire').modal('toggle');
}
