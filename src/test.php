<!-- products.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Page</title>
    <style>
        body {
        font-family: sans-serif;
        padding: 20px;
        }
        .product {
        max-width: 300px;
        border: 1px solid #ccc;
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 20px;
        }
        button {
        cursor: pointer;
        }
        .cart-icon {
        position: relative;
        font-size: 24px;
        text-decoration: none;
        }
        .cart-count {
        position: absolute;
        top: -8px;
        right: -8px;
        background: red;
        color: white;
        border-radius: 50%;
        padding: 2px 6px;
        font-size: 12px;
        }
    </style>
    </head>
    <body>

    <!-- 🛒 Cart Icon -->
    <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
        <a href="test_cart.php" class="cart-icon">
        🛒
        <span id="cart-count" class="cart-count">0</span>
        </a>
    </div>

    <h1>Shop</h1>

    <!-- 🧢 Product Card -->
    <div class="product">
        <img src="/ADV_DBMS/image/carhartt1.jpg" 
            alt="Carhartt Tee" 
            class="product-image aspect-square w-full rounded-2xl bg-gray-200 object-cover lg:h-80"
            style="width: 100%; object-fit: cover;">

        <div class="mt-4 flex justify-between mr-4" style="display: flex; justify-content: space-between; padding: 10px;">
        <div class="ml-4">
            <h3 class="text-sm font-bold text-gray-700 product-title">Carhartt</h3>
            <p class="mt-1 text-sm text-black product-color">Black</p> 
        </div>
        <div>
            <p class="text-sm text-gray-500 product-size">Large</p>
            <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱449</p>
        </div>
        </div>

        <div class="ml-4 mt-2" style="padding: 10px;">
        <button onclick="addToCart(this)" 
                style="background-color: black; color: white; padding: 8px 16px; border: none; border-radius: 8px;">
            Add to Cart
        </button>

    </div>


    </div>




<div class="product">
<img src="/ADV_DBMS/image/carhartt1.jpg" 
    alt="Carhartt Tee" 
    class="product-image aspect-square w-full rounded-2xl bg-gray-200 object-cover lg:h-80"
    style="width: 100%; object-fit: cover;">

<div class="mt-4 flex justify-between mr-4" style="display: flex; justify-content: space-between; padding: 10px;">
<div class="ml-4">
    <h3 class="text-sm font-bold text-gray-700 product-title">H&M</h3>
    <p class="mt-1 text-sm text-black product-color">Black</p> 
</div>
<div>
    <p class="text-sm text-gray-500 product-size">Large</p>
    <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱599</p>
</div>
</div>

<div class="ml-4 mt-2" style="padding: 10px;">
<button onclick="addToCart(this)" 
        style="background-color: black; color: white; padding: 8px 16px; border: none; border-radius: 8px;">
    Add to Cart
</button>
</div>

    </div>

    <script>
        function addToCart(button) {
        const product = button.closest('.product');

        const name = product.querySelector('.product-title').textContent.trim();
        const color = product.querySelector('.product-color').textContent.trim();
        const size = product.querySelector('.product-size').textContent.trim();
        const priceText = product.querySelector('.product-price').textContent.trim();
        const image = product.querySelector('.product-image').getAttribute('src');

        const price = parseFloat(priceText.replace('₱', '').replace(',', ''));
        
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        const existing = cart.find(item => 
            item.name === name && item.color === color && item.size === size
        );

        if (existing) {
            existing.quantity += 1;
        } else {
            cart.push({ name, color, size, price, image, quantity: 1 });
        }

        localStorage.setItem('cart', JSON.stringify(cart));
        alert(`${name} (${color}, ${size}) added to cart!`);
        updateCartButtonCount();
        }

        function updateCartButtonCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const count = cart.reduce((sum, item) => sum + item.quantity, 0);
        document.getElementById('cart-count').textContent = count;
        }

        document.addEventListener('DOMContentLoaded', updateCartButtonCount);
    </script>

</body>
</html>
