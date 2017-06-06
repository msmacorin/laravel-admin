var password = document.getElementById("password")
        , confirm_password = document.getElementById("password_confirmation");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("As senhas não conferem.");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;