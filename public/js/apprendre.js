$(document).ready(function() {


    $(document).on('click', '#next', function (e) {
        console.log('reload')
        location.reload();
    });

    $(document).on('click', '#seeName', function (e) {
        console.log('seeName')
        $('#name').removeClass('d-none')
    });

    // /*
    // * POST
    // * */
    // setLoader();
    // $.post(Routing.generate('montreUnOiseau'), {
    //     idCDC:idCDCToValidate
    // }, function(response) {
    //     $('#infosCheckGenre').addClass('d-none');
    //     $('#checkGenreCode').html(response);
    //     $('#modalValideAndConfirmCDC').modal('show');
    //     removeLoader();
    // });









});