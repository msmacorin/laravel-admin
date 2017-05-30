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