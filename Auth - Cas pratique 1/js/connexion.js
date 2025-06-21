//nous déterminons la date d'expiration

let dateExp = new Date();

dateExp.setHours(dateExp.getHours() + 1);

//Nous définissons les constantes username et mdp sur la valeur de retour de prompts

const username = window.prompt("Identifiant :");

const mdp = window.prompt("Mot de passe :");

//Nous créons nos cookies

document.cookie = `username=${username}; expires=${dateExp.toUTCString()}`;

document.cookie = `mdp=${mdp}; expires=${dateExp.toUTCString()}`;