const inputText = document.getElementById("input-results");
const operationList = document.getElementById("operations-list");
const numButtons = document.getElementsByClassName("number");
const opButtons = document.getElementsByClassName("op");
let result;
let op;
for(let i = 0; i < numButtons.length; i++) {
    numButtons[i].addEventListener("click", function() {
        if(inputText.value == "Error") {
            inputText.value = "";
        }
        inputText.value = inputText.value + numButtons[i].textContent;
    })
}

for(let i = 0; i < opButtons.length; i++) {
    opButtons[i].addEventListener("click", function() {
        switch(opButtons[i].textContent) {
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
                inputText.value = inputText.value + opButtons[i].textContent;
                break
            }
        }
    })
}

//eval(string)