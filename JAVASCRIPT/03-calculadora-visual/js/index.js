const inputText = document.getElementById("input-results");
const operationList = document.getElementById("operations-list");
const buttons = document.getElementsByClassName("calc-button");
let result;
let op;

for(let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function() {
        switch(buttons[i].textContent) {
            case "=": {
                op = inputText.value;
                try {
                    result = eval(op);
                    inputText.value = result;
                    if(Number.isFinite(result)) {
                        const newItem = document.createElement("li");
                        newItem.textContent = op + "=" + result;
                        operationList.appendChild(newItem);
                    } else {
                        inputText.value = "Error";
                    }
                } catch (error) {
                    inputText.value = "Error";
                }
                break;
            }
            case "C": {
                inputText.value = "";
                break;
            }
            default: {
                if(inputText.value == "Error") {
                    inputText.value = "";
                }
                inputText.value = inputText.value + buttons[i].textContent;
                break
            }
        }
    })
}

//eval(string)