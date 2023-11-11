$(document).ready(function() {


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
});