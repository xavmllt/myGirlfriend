let nickName = document.getElementById("nickname");
const submit = document.getElementById("submit");
submit.addEventListener("click", (event) => {
    event.preventDefault();
    nickName = nickName.value;
    window.location = '../pages/ticket.php?nom=' + encodeURIComponent(nickName);
});