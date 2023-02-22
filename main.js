var addToDoButton = document.getElementById('addToDo');
var toDoContainer = document.getElementById('toDosContainer');
var inputField = document.getElementById('inputField');
let notice = document.getElementById('notice');

addToDoButton.onclick = function(){
    var paragraph = document.createElement('p');
    paragraph.classList.add('paragraph-styling');
    paragraph.innerText = inputField.value;
    if (paragraph.innerText.length == 0) {
        notice.style.display = "block";
        //remove the notice after 3 seconds
        setTimeout(function(){
            notice.style.display = "none";
        }, 3000);
    }

    else {
    toDoContainer.appendChild(paragraph);
    inputField.value = "";
    paragraph.onclick = function(){
        paragraph.style.textDecoration = "line-through"
        paragraph.style.color = "green";
    }
    paragraph.ondblclick = function(){
        toDoContainer.removeChild(paragraph);
    }
}
}

