$(document).ready(function() {


    $(document).on('click', '#one', function (e) {
        console.log('one')
        setLoader();
        $.post(Routing.generate('one'), {
            ar: 1
        }, function(response) {
            console.log('ok')
            removeLoader();
        });

    });

    $(document).on('click', '#next', function (e) {
        console.log('reload')
        location.reload();
    });

    $(document).on('click', '#seeName', function (e) {
        console.log('seeName')
        $('#name').removeClass('d-none')
    });

    $(document).on('click', '#more', function (e) {
        console.log('more')
        var string = $(this).attr('data-string');
        var url = '/oiseau?string=' + string
        /*
        * REDIRECT
        * */
        try { window.location.replace(url); }
        catch(e) { window.location = url; }
    });

    function setLoader() {
        $('#backLoader').removeClass('none');
    }

    function removeLoader() {
        $('#backLoader').addClass('none');
    }
});