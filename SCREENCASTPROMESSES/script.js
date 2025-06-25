const mybutton = document.getElementById('mybutton');

mybutton.addEventListener('click', function() {
    // Ici le code exécuté si le bouton est cliqué
    console.log('Le bouton a été cliqué !');
    alert('Le bouton a été cliqué !');
});

const myinput = document.getElementById('myinput');

myinput.addEventListener('keyup', (event) => {
    if (event.key === 'Enter') {
        // Ici le code exécuté si la touche "Entrée" est pressée
        console.log('La touche Entrée a été pressée !');
        alert(myinput.value);
    }
});

const parents = document.getElementById('parents');
const child = document.getElementById('child');

parents.addEventListener('click', (event) => {
    // Ici le code exécuté si le parent est cliqué
    console.log('Le parent a été cliqué !');
    alert('parents clicked!');
});

child.addEventListener('click', (event) => {
    // Ici le code exécuté si l'enfant est cliqué
    console.log('L\'enfant a été cliqué !');
    alert('child clicked!');
    event.stopPropagation(); // Empêche la propagation de l'événement au parent
});