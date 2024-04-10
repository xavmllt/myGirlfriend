const button = document.getElementById("button");
let messageArea = document.getElementById("message");
let message = "L'amour ne voit pas avec les yeux, mais avec l'âme. - William Shakespeare";
messageArea.style.color = "red";

button.addEventListener("click", () => {
    alert("❤️");
    messageArea.textContent = message;
});
