let num1;
let num2;
let op;

const inputText = document.getElementById("input-results");
const operationList = document.getElementById("operations-list");
const numButtons = document.getElementsByClassName("number");
const opButtons = document.getElementsByClassName("op");



for(let i = 0; i < numButtons.length; i++) {
    numButtons[i].addEventListener("click", function() {
        inputText.value = inputText.value + numButtons[i].innerText;
    })
}
