let myButton = document.querySelector('button');
let myHeading = document.querySelector('h2');

function setUserName(){
    let myName = prompt('Insert your name');
    if(!myName) {
        setUserName();
    } else{
    localStorage.setItem('name', myName);
    myHeading.innerHTML = 'Your personal assistant, ' + myName;
    }
}

if(!localStorage.getItem('name')) {
    setUserName();
} else {
    let storedName = localStorage.getItem('name');
    myHeading.innerHTML = 'Your personal assistant, ' + storedName;
}

myButton.onclick = function() {
    setUserName();
}