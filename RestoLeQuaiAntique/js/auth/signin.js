const mailInput = document.getElementById('EmailInput');
const passwordInput = document.getElementById('PasswordInput');
const btnSignin = document.getElementById('btnSignin');

btnSignin.addEventListener('click', checkCredentials);

function checkCredentials() {
    // Récupération des valeurs des champs de saisie factices pour l'instant "credentials en BDD"//
    if (mailInput.value == "test@mail.com" && passwordInput.value == "123") {
        alert("Connexion réussie !");
        // Redirection vers la page d'accueil après une connexion réussie
        const token = "fakenvkld!fnùdwnbkl!ndfblkndkwlù"
        
        window.location.replace('/');
    }
    else {
        mailInput.classList.add("is-invalid");
        passwordInput.classList.add("is-invalid");
    }
}