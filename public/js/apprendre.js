$(document).ready(function() {


    $(document).on('click', '#next', function (e) {
        console.log('reload')
        location.reload();
    });

    $(document).on('click', '#seeName', function (e) {
        console.log('seeName')
        $('#name').removeClass('d-none')
    });

    $(document).on('click', '#apprendre', function (e) {
        e.preventDefault();
        console.log('apprendre')


                /*
                 * POST
                 * */
                // setLoader();
                $.post(Routing.generate('apprendre'),
                    {},
                    function(response) {
                    console.log('response ok')
                    // removeLoader();
                });

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