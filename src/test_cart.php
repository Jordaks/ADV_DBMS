<!-- cart.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Cart</title>
  <style>
    body {
      font-family: sans-serif;
      padding: 20px;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    li {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      border-bottom: 1px solid #ccc;
      padding-bottom: 10px;
      gap: 10px;
    }
    .cart-item {
      display: flex;
      align-items: center;
      width: 100%;
    }
    .cart-item img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 8px;
    }
    .item-details {
      flex: 1;
      padding-left: 10px;
    }
    .qty-btn {
      padding: 4px 8px;
      margin: 0 4px;
      border: none;
      background-color: #3498db;
      color: white;
      border-radius: 4px;
      cursor: pointer;
    }
    .remove-btn {
      background-color: #e74c3c;
    }
    .remove-item {
      color: red;
      cursor: pointer;
    }
    button {
      cursor: pointer;
    }
  </style>
</head>
<body>

  <h1>Your Cart</h1>
  <ul id="cartItems"></ul>
  <p id="total"></p>
  <a href="products.html">← Back to Shop</a>

  <script>
    function renderCart() {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      const cartList = document.getElementById('cartItems');
      const totalText = document.getElementById('total');
      cartList.innerHTML = '';
      let total = 0;

      cart.forEach((item, index) => {
        const subtotal = item.price * item.quantity;
        total += subtotal;

        const li = document.createElement('li');
        li.classList.add('cart-item');

        li.innerHTML = `
          <img src="${item.image}" alt="${item.name}">
          <div class="item-details">
            <h3 class="text-sm font-semibold">${item.name}</h3>
            <p class="text-xs text-gray-500">${item.color} | ${item.size}</p>
            <p class="text-sm font-medium text-gray-900">₱${item.price}</p>
            <div class="flex gap-2">
              <button class="qty-btn" onclick="changeQuantity(${index}, -1)">−</button>
              <span>Qty: ${item.quantity}</span>
              <button class="qty-btn" onclick="changeQuantity(${index}, 1)">+</button>
              <button class="remove-item" onclick="removeItem(${index})">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
              </button>
            </div>
          </div>
        `;

        cartList.appendChild(li);
      });

      totalText.textContent = `Total: ₱${total.toFixed(2)}`;
    }

    function changeQuantity(index, delta) {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];

      if (!cart[index]) return;

      cart[index].quantity += delta;

      if (cart[index].quantity <= 0) {
        cart.splice(index, 1);
      }

      localStorage.setItem('cart', JSON.stringify(cart));
      renderCart();
    }

    function removeItem(index) {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      cart.splice(index, 1);
      localStorage.setItem('cart', JSON.stringify(cart));
      renderCart();
    }

    renderCart();
  </script>

</body>
</html>
