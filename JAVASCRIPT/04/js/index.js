const addButton = document.getElementById("button-add");
const textInput = document.getElementById("input-text");
const textTaskList = document.getElementById("tasks-list");
var historyList = [];

addButton.addEventListener("click", function() {
    if(!textInput.value == "") {
        createElements(textInput.value);
    } else {
        console.log("Error");
    }
});

function createElements(text) {
    const newTask = document.createElement("li");
    const textTask = document.createElement("p");
    const checkTask = document.createElement("input");
    const deleteButton = document.createElement("input");
    deleteButton.type = "button";
    deleteButton.classList.add("button-delete");
    deleteButton.value = "Eliminar";
    checkTask.type = "checkbox";
    textTask.textContent = text;
    textTask.classList.add("text-task");
    newTask.appendChild(checkTask);
    newTask.appendChild(textTask);
    newTask.appendChild(deleteButton);
    addRemoveFunction();
    checkTask.onclick = checkboxChecked;
    addToTaskList(newTask);
    saveAtHistory(text);
}

function addRemoveFunction() {
    const deleteButtons = document.getElementsByClassName("button-delete");
    Array.from(deleteButtons).forEach((removeButton) => {
        removeButton.addEventListener("click", () => {
            removeButton.parentElement.remove();
        })
    })
}

function addToTaskList(newTask) {
    textTaskList.appendChild(newTask);
}

function saveAtHistory(element) {
    
    console.log(historyList);
    historyList.push(element);
    localStorage.setItem("history", JSON.stringify(historyList));
}

function updateHistory() {
    historyList = JSON.parse(localStorage.getItem("history"));
    while(textTaskList.lastElementChild) {
        textTaskList.removeChild(textTaskList.lastElementChild);
    }
    /*historyList.forEach(element => {
        createElements(element);
    });*/
    console.log(historyList);
}

function checkboxChecked() {
    if(this.checked == true) {
        this.nextElementSibling.setAttribute("style", "text-decoration: line-through; color: rgba(0, 0, 0, 0.4);");
    } else {
        this.nextElementSibling.setAttribute("style", "text-decoration: none; color: black;");
    }
}


window.onload = function() {
    updateHistory();
}