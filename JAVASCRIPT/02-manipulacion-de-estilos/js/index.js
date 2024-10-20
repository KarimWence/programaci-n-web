const redButton = document.getElementById("red-button");
const greenButton = document.getElementById("green-button");
const blueButton = document.getElementById("blue-button");
const restartButton = document.getElementById("restart-button");
const body = document.getElementsByTagName("body")[0];

redButton.addEventListener("click", function () {
    body.style.backgroundColor = "red";
    body.style.color = "white"
});

greenButton.addEventListener("click", function () {
    body.style.backgroundColor = "green";
    body.style.color = "#white"
});

blueButton.addEventListener("click", function () {
    body.style.backgroundColor = "blue";
    body.style.color = "white"
});

restartButton.addEventListener("click", function () {
    body.style.backgroundColor = "#ffffff";
    body.style.color = "black";
});