function increment() {
    let countElement = document.getElementById("count");
    let currentValue = parseInt(countElement.innerText);
    countElement.innerText = currentValue + 1;
}

const cartIcon = document.querySelector("cart_icon");
const addCart = document.querySelector("çart");
const cartClose = document.querySelector("cart_close");

cartIcon.addEventListener("click", () => cart.classlist.add("active"));
cartClose.addEventListener("click", () => cart.classlist.remove("active"));
