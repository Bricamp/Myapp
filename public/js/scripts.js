     // ---------------------------------------------- //
    // Menu navegacion activo
    // ---------------------------------------------- //
$(document).ready(function () {

    $(function () {
        var pagina = location.protocol + "//" + document.domain + "/"
        + location.pathname.split('/')[1];

        $('a.nav-link').each(function () {
                var target_URL = $(this).prop("href");
                if (target_URL == pagina) {
                    $('a.nav-link').removeClass('active');
                    $(this).addClass('active');
                    return false;
                }
            });
        }
    );



});
