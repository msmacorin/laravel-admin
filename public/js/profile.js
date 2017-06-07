$('#btn_form_submit').on('click', function () {
    if ($('#profile_form').parsley().validate()) {
        $('#profile_form').submit();
    }
});

$('#btn_change_password').on('click', function () {
    bootbox.dialog({
        title: 'Alterar a senha',
        message: 'Será enviado um e-mail com o procedimento. Deseja enviar o e-mail?',
        buttons: {
            success: {
                label: 'Sim',
                className: "btn-default",
                callback: function () {
                    $('#reset_password_form').submit();
                }
            },
            danger: {
                label: 'Não',
                className: "btn-info"
            }
        }
    });
});