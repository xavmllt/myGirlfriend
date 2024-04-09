let nom = document.getElementById('name');
const submit = document.getElementById('submit');

submit.addEventListener('click', (event) => {
    event.preventDefault();
    nom = nom.value;
    console.log(nom);
    window.location = './pages/name.php?nom=' + encodeURIComponent(nom);
});