//Implémenter le JS de ma page

const inputNom = document.getElementById("NomInput");
const inputPrenom = document.getElementById("PrenomInput");
const inputMail = document.getElementById("EmailInput");
const inputPassword = document.getElementById("PasswordInput");
const inputValidationPassword = document.getElementById("ValidatePasswordInput");
const btnvalidation = document.getElementById("btn-validation-inscription");


inputNom.addEventListener("keyup", validateForm);
inputPrenom.addEventListener("keyup", validateForm);
inputMail.addEventListener("keyup", validateForm);
inputPassword.addEventListener("keyup", validateForm);
inputValidationPassword.addEventListener("keyup", validateForm);

//Function permettant de valider tout le formulaire
function validateForm() {
const nomOk = validateRequired(inputNom);
const prenomOk = validateRequired(inputPrenom);
const mailOk = validateMail(inputMail);
const PasswordOK = validatePassword(inputPassword);
const passwordConfirmOk = validateConfirmationPassword(inputPassword, inputValidationPassword);

if (nomOk && prenomOk && mailOk && PasswordOK && passwordConfirmOk) {
btnvalidation.disabled = false;
}
else {
btnvalidation.disabled = true;
}
}

function validateConfirmationPassword(inputPwd, inputConfirmPwd) {

if (!inputPwd || !inputConfirmPwd) {
return false;
}

if (inputPwd.value == inputConfirmPwd.value) {
inputConfirmPwd.classList.add("is-valid");
inputConfirmPwd.classList.remove("is-invalid");
return true;
} else {
inputConfirmPwd.classList.add("is-invalid");
inputConfirmPwd.classList.remove("is-valid");
return false;
}
}

function validatePassword(input) {
const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/;
const passwordUser = input.value;
if (passwordUser.match(passwordRegex)) {
input.classList.add("is-valid");
input.classList.remove("is-invalid");
return true;
}
else {
input.classList.remove("is-valid");
input.classList.add("is-invalid");
return false;
}
}


function validateMail(input) {
//Définir mon regex
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const mailUser = input.value;
if (mailUser.match(emailRegex)) {
input.classList.add("is-valid");
input.classList.remove("is-invalid");
return true;
}
else {
input.classList.remove("is-valid");
input.classList.add("is-invalid");
return false;
}
}

function validateRequired(input) {
if (input.value != '') {
input.classList.add("is-valid");
input.classList.remove("is-invalid");
return true;
}
else {
input.classList.remove("is-valid");
input.classList.add("is-invalid");
return false;
}
}