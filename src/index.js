function increment() {
    let countElement = document.getElementById("count");
    let currentValue = parseInt(countElement.innerText);
    countElement.innerText = currentValue + 1;
}

