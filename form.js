const fname = document.getElementById("fname");
const lname = document.getElementById("lname");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");


const errorfname = document.getElementById("fnamem");
const errorlname = document.getElementById("lnamem");
const errorEmail = document.getElementById("emailm");
const errorPassword = document.getElementById("passwordm");
const errorpassword2 = document.getElementById("password2m");

Form.addEventListener('submit', (e) => {
    if (fname.value.length <= 3) {
        errorfname.innerHTML = "name must more than 3";
    }
    if (lname.value.length <= 3) {
        errorlname.innerHTML = "name must more than 3";
    }
    if (email.value.length <= 10) {
        errorEmail.innerHTML = "email must more than 3";
    }
    if (password.value.length <= 8) {
        errorPassword.innerHTML = "Password must be 8 or more";
    }
    if (password2.value.length <= 8) {
        errorpassword2.innerHTML = "Password must be 8 or more";
    }

})
