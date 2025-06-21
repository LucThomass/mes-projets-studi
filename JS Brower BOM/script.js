let destination = document.getElementById('destination');

const forward = document.getElementById('forward');

destination.addEventListener('click', () => {
destination = window.location.assign('destination.html');
});

forward.addEventListener('click', () => {
window.history.forward();
});