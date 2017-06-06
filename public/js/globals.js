$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function logout() {
    $.ajax({
        url: '/logout',
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
            window.location.href = '/login';
        }
    });
}

function maskInit() {
    $('.phone').mask('(00)0000-00009');
    $('.money').mask("#.##0,00", {reverse: true});
    $('.zipcode').mask('00000-000');
    $('.date').mask('00/00/0000');
}

$(document).ready(function () {
    maskInit();
});