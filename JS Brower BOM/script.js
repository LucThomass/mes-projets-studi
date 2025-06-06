const button = document.getElementById("bouton");

button.addEventListener('click', () => {

  let fenetre = window.open("destination.html", 'destination', 'width=500, height=500');

  fenetre.addEventListener('load', () => {
    let button2 = fenetre.document.getElementById('bouton2');

    button2.addEventListener('click', () => {
      fenetre.close();
    });
  });
});