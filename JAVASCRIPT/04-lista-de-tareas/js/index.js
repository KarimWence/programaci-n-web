const addButton = document.getElementById("button-add");
const textInput = document.getElementById("input-text");
const textTaskList = document.getElementById("tasks-list");

addButton.addEventListener("click", function() {
    if(!textInput.value == "") {
        createElements(textInput.value);
        saveAtHistory();
    }
});

function createElements(text, hasDecoration) {
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
    if(hasDecoration) {
        textTask.style.textDecoration = "line-through";
        textTask.style.color = "rgba(0, 0, 0, 0.4)";
        checkTask.checked = true;
    }
    newTask.appendChild(checkTask);
    newTask.appendChild(textTask);
    newTask.appendChild(deleteButton);
    checkTask.onclick = checkboxChecked;
    addToTaskList(newTask);
}

function addRemoveFunction() {
    const deleteButtons = document.querySelectorAll(".button-delete");
    Array.from(deleteButtons).forEach((removeButton) => {
        removeButton.addEventListener("click", e => {
            removeButton.parentElement.remove();
            saveAtHistory();
        })
    })
}

function addToTaskList(newTask) {
    textTaskList.appendChild(newTask);
    textInput.value = "";
    addRemoveFunction();
    saveAtHistory();
}

function saveAtHistory() {
    let history = [];
    let hasDecoration = []; 
    const textTask = document.querySelectorAll(".text-task");
    if(textTask.length != 0) {
        textTask.forEach(element => {
            history.push(element.textContent);
            hasDecoration.push(element.style.textDecoration === "line-through");
            localStorage.setItem("history", JSON.stringify(history));
            localStorage.setItem("hasDecoration", JSON.stringify(hasDecoration));
        });
    } else {
        localStorage.clear();
    }
}

function updateHistory() {
    let history = [];
    let hasDecoration = [];
    while(textTaskList.lastElementChild) {
        textTaskList.removeChild(textTaskList.lastElementChild);
    }
    if(history && hasDecoration) {
        history = JSON.parse(localStorage.getItem("history"));
        hasDecoration = JSON.parse(localStorage.getItem("hasDecoration"));
        history.forEach((element, line) => {
        createElements(element, hasDecoration[line]);
    });
    }
}

function checkboxChecked() {
    if(this.checked == true) {
        this.nextElementSibling.setAttribute("style", "text-decoration: line-through; color: rgba(0, 0, 0, 0.4);");
        saveAtHistory();
    } else {
        this.nextElementSibling.setAttribute("style", "text-decoration: none; color: black;");
        saveAtHistory();
    }
}


window.onload = function() {
    let history = JSON.parse(localStorage.getItem("history"));
    if(history) {
        updateHistory();
    }
}