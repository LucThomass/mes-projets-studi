const mailInput = document.getElementById('EmailInput');
const passwordInput = document.getElementById('PasswordInput');
const btnSignin = document.getElementById('btnSignin');

btnSignin.addEventListener('click', checkCredentials);

function checkCredentials() {
    // Récupération des valeurs des champs de saisie factices pour l'instant "credentials en BDD"//

    if (mailInput.value == "test@mail.com" && passwordInput.value == "123") {
        // Redirection vers la page d'accueil après une connexion réussie
        const token = "fakenvkld!fnùdwnbkl!ndfblkndkwlù"
        setToken(token);

//Il faudra récupérer le vrai token
        //const token = "lkjsdngfljsqdnglkjsdbglkjqskjgkfjgbqslkfdgbskldfgdfgsdgf";
        //setToken(token);
        //placer ce token en cookie

        setCookie(RoleCookieName, "admin", 7);


        window.location.replace('/');
    }
    else {
        mailInput.classList.add("is-invalid");
        passwordInput.classList.add("is-invalid");
    }
}