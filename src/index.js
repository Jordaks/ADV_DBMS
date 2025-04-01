function increment() {
    let countElement = document.getElementById("count");
    let currentValue = parseInt(countElement.innerText);
    countElement.innerText = currentValue + 1;
}

function toggleCart() {
    document.getElementById("cart").classList.toggle("right-0");
    document.getElementById("cart").classList.toggle("right-[-100%]");
    } 

const addcartButton = document.querySelectorAll("#add_cart");
addcartButton.forEach(button => {
    button.addEventListener("click", () => {
        const cartt = event.target.closest("#product1");
        addToCart(cartt);
    });
});

const addToCart = cartt => {
    const productImage = cartt.querySelector("img").src;
    const productName = cartt.createElement("#product_Title").textContent;  
    const productcolor = cartt.createElement("#product_Color").textContent; 
    const productSize = cartt.createElement("#product_Size").textContent;      
    const productPprice = cartt.createElement("#product_Price").textContent;     

    const cartBox = document.createElement("div");
    cartBox.classList.add("cart-box");
    cartBox.innerHTML = `
                    <!-- <div class="mt-20  cursor-pointer  flex justify-center">
                        <img class="w-[100px] h-[100px] rounded-[6px] object-cover mr-[20px]" src="${productImage}" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-2xl bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                        <div class="grid gap-2 mr-auto">
                            <div class="ml-4">
                                <h3 class="text-base leading-none text-gray-700">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    ${productName}
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">${productcolor}</p>
                                <p class="mt-1 text-sm text-gray-500">Medium</p>
                            </div>
                            <span class="ml-4">
                                <p class="text-sm font-medium text-gray-900">${productPprice}</p>
                            <span>
                        </div>
                        <button class="hover:scale-100 transition duration-250 hover:shadow-2xl hover:text-red-500">
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                    </div>
    `;
};


