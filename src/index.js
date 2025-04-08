
document.addEventListener("DOMContentLoaded", () => {
    const addCartButtons = document.querySelectorAll(".add-to-cart");
    const cartItemsContainer = document.getElementById("cart-items");
    const cartTotalContainer = document.getElementById("cart-total");
    const cartCountBadge = document.getElementById("cart-count");
    let totalAmount = 0;
    let cartCount = 0;

    addCartButtons.forEach(button => {
        button.addEventListener("click", (event) => {
            const productCard = event.target.closest("#product1");
            addToCart(productCard);
        });
    });

    function addToCart(productCard) {
        const productImage = productCard.querySelector("img").src;
        const productName = productCard.querySelector(".product-title").textContent.trim();
        const productColor = productCard.querySelector(".product-color").textContent.trim();
        const productSize = productCard.querySelector(".product-size").textContent.trim();
        const productPrice = productCard.querySelector(".product-price").textContent.trim().replace("₱", "");

        // Create cart item
        const cartItem = document.createElement("div");
        cartItem.classList.add("cart-item", "flex", "justify-between", "items-center", "border-b", "py-2");
        cartItem.innerHTML = `
            <img class="w-12 h-12 rounded mr-2" src="${productImage}" alt="${productName}">
            <div class="flex-1">
                <h3 class="text-sm font-semibold">${productName}</h3>
                <p class="text-xs text-gray-500">${productColor} | ${productSize}</p>
                <p class="text-sm font-medium text-gray-900">₱${productPrice}</p>
            </div>
            <button class="remove-item text-red-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
            </button>
        `;

        cartItemsContainer.appendChild(cartItem);
        totalAmount += parseFloat(productPrice);
        cartCount++;
        updateCart();


        // Remove item event
        cartItem.querySelector(".remove-item").addEventListener("click", () => {
            cartItem.remove();
            totalAmount -= parseFloat(productPrice);
            cartCount--;
            updateCart();
        });
    }

    function updateCart() {
        cartTotalContainer.textContent = `₱${totalAmount.toFixed(2)}`;
        cartCountBadge.textContent = cartCount;
        cartCountBadge.style.display = cartCount > 0 ? "block" : "none";
    }

    // Toggle Cart Function
    window.toggleCart = function() {
        const cart = document.getElementById("cart");
        cart.style.right = cart.style.right === "0px" ? "-100%" : "0px";
    };

    // Toggle User Function
    window.toggleUser = function() {
        const user = document.getElementById("user");
        user.style.right = user.style.right === "0px" ? "-100%" : "0px";
    };
});

