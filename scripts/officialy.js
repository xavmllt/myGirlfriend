const button = document.getElementById("button");
let messageArea = document.getElementById("message");
let message = "To be your friend was all I ever wanted; to be your lover was all I ever dreamed";
messageArea.style.color = "red";

button.addEventListener("click", () => {
    alert("❤️");
    messageArea.textContent = message;
});
