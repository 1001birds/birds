$(document).ready(function() {

    /*
    * POST
    * */
    setLoader();
    $.post(Routing.generate('montreUnOiseau'), {
        idCDC:idCDCToValidate
    }, function(response) {
        $('#infosCheckGenre').addClass('d-none');
        $('#checkGenreCode').html(response);
        $('#modalValideAndConfirmCDC').modal('show');
        removeLoader();
    });









});