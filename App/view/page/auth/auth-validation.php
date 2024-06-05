<script>
    function validateEmail() {
        var inputEmail = document.getElementById("email");
        var regex = /^[a-z0-9._%+-]+@(?:gmail|outlook|admin|hotmail|yahoo|tsoftec|teampichincha|cdp)\.(?:com|es|org)$/i;
        var email = inputEmail.value.toLowerCase();
        if (!regex.test(email)) {
            inputEmail.style.borderColor = "red";
            return false;
        } else {
            inputEmail.style.borderColor = "green";
            return true;
        }
    }

    function validatePasswordLogin() {
        var inputPassword = document.getElementById("password");
        var password = inputPassword.value;
        var strength = document.getElementById("passwordStrength");
        var regexUpperCase = /[A-Z]/;
        var regexLowerCase = /[a-z]/;
        var regexNumber = /[0-9]/;
        var regexSpecialChar = /[^A-Za-z0-9]/;

        var lengthMsg = "";
        var upperCaseMsg = "";
        var lowerCaseMsg = "";
        var numberMsg = "";
        var specialCharMsg = "";

        if (!regexUpperCase.test(password)) {
            upperCaseMsg = "La contraseña debe contener al menos una letra mayúscula.";
        }
        if (!regexLowerCase.test(password)) {
            lowerCaseMsg = "La contraseña debe contener al menos una letra minúscula.";
        }
        if (!regexNumber.test(password)) {
            numberMsg = "La contraseña debecontener al menos un número.";
        }
        if (!regexSpecialChar.test(password)) {
            specialCharMsg = "La contraseña debe contener al menos un carácter especial.";
        }
        if (password.length < 8 || password.length > 20) {
            lengthMsg = "La contraseña debe tener entre 8 y 20 caracteres.";
        }

        var isValid = (password.length >= 8 && password.length <= 20 &&
            regexUpperCase.test(password) &&
            regexLowerCase.test(password) &&
            regexNumber.test(password) &&
            regexSpecialChar.test(password));

        if (isValid) {
            inputPassword.style.borderColor = "green";
            return true;
        } else {
            inputPassword.style.borderColor = "red";
            return false;
        }
    }

    function validateForm() {
        var isEmailValid = validateEmail();
        var isPasswordValid = validatePasswordLogin();
        var submitButton = document.getElementById("submit-auth-signin");

        if (isEmailValid && isPasswordValid) {
            submitButton.removeAttribute("disabled");
        } else {
            submitButton.setAttribute("disabled", "disabled");
        }
    }

    document.getElementById("loginFormLogin").addEventListener("input", validateForm);
</script>