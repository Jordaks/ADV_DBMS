<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

    <!-- Product 1 -->
    <div id="product1" class="hover:scale-100 transition duration-250 hover:shadow-2xl border-2 bg-white border-black rounded-2xl shadow-sm mt-4 mx-4 mb-4 p-4">
        <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg" 
            alt="Carhartt Tee" class="aspect-square w-full rounded-2xl bg-gray-200 object-cover lg:h-80">
        <div class="mt-4 flex justify-between">
            <div>
                <h3 class="text-sm text-gray-700 product-title">Carhartt</h3>
                <p class="mt-1 text-sm text-gray-500 product-color">Black</p>
                <p class="mt-1 text-sm text-gray-500 product-size">Medium</p>
                <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱449</p>
            </div>
        </div>
        <button class="mt-4 bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-400 w-full add-to-cart">
            Add To Cart
        </button>
    </div>

    <!-- Shopping Cart -->
    <div id="cart" class="fixed top-0 right-[-100%] w-[360px] h-full bg-white shadow-lg p-6 z-50 transition-all duration-400">
        <h3 class="font-bold text-center text-3xl mb-4">Shopping Cart</h3>
        
        <div id="cart-items"></div>
        
        <div class="flex justify-between items-center border-t border-black mt-5 pt-2 text-lg font-semibold">
            Total: <span id="cart-total">₱0</span>
        </div>

        <button class="mt-5 w-full bg-orange-500 text-white py-2 rounded hover:bg-orange-400">
            CHECKOUT
        </button>
        
        <button onclick="toggleCart()" class="absolute top-5 right-4 text-2xl">
            ❌
        </button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const addCartButtons = document.querySelectorAll(".add-to-cart");
            const cartItemsContainer = document.getElementById("cart-items");
            const cartTotalContainer = document.getElementById("cart-total");
            let totalAmount = 0;

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
                    <button class="remove-item text-red-500">❌</button>
                `;

                cartItemsContainer.appendChild(cartItem);
                totalAmount += parseFloat(productPrice);
                updateTotal();

                // Show cart when item is added
                toggleCart();

                // Remove item event
                cartItem.querySelector(".remove-item").addEventListener("click", () => {
                    cartItem.remove();
                    totalAmount -= parseFloat(productPrice);
                    updateTotal();
                });
            }

            function updateTotal() {
                cartTotalContainer.textContent = `₱${totalAmount.toFixed(2)}`;
            }

            // Toggle Cart Function
            window.toggleCart = function() {
                const cart = document.getElementById("cart");
                cart.style.right = cart.style.right === "0px" ? "-100%" : "0px";
            };
        });
    </script>

</body>
</html>
