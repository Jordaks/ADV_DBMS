    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tailwind Scroll Nav</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
        scroll-behavior: smooth;
        }

    </style>
    </head>
    <body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="sticky top-0 z-20 bg-white shadow p-4">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <img src="/ADV_DBMS/image/R.png" alt="Logo" class="w-10 h-9" />
        <div class="flex gap-4 text-sm font-bold">
        <a href="#home" class="nav-link px-3 py-2 rounded-md hover:bg-gray-700 hover:text-white transition">Home</a>
        <a href="#tshirt" class="nav-link px-3 py-2 rounded-md hover:bg-gray-700 hover:text-white transition">T-shirt</a>
        <a href="#shorts" class="nav-link px-3 py-2 rounded-md hover:bg-gray-700 hover:text-white transition">Shorts</a>
        <a href="#shoes" class="nav-link px-3 py-2 rounded-md hover:bg-gray-700 hover:text-white transition">Shoes</a>
        <a href="#about" class="nav-link px-3 py-2 rounded-md hover:bg-gray-700 hover:text-white transition">About</a>
        </div>
    </div>
    </nav>

    <!-- Sections -->
    <section id="home" class="h-screen flex items-center justify-center bg-white">
    <h1 class="text-4xl font-bold">Home</h1>
    </section>

    <section id="tshirt">
        <h1 class="text-4xl font-bold">T-shirt</h1>
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">T-shirt</h2>
                        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                            <div class="product hover:scale-100 transition duration-250 hover:shadow-2xl border-2 bg-white border-gray-300 rounded-2xl shadow-sm mt-4 mx-4 mb-4 p-4">
                                <img src="/ADV_DBMS/image/carhartt1.jpg" alt="Carhartt Tee" class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Carhartt</h3>
                                        <p class="mt-1 text-sm text-black product-color">Black</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">Large</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱449</p>
                                    </div>
                                </div>
                                <?php if($authenticated){ ?>
                                <button onclick="addToCart(this)" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } else { ?>
                                <button onclick="alert('Please login first before you order')" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } ?>
                            </div>
                                                    
                            <div class="product hover:scale-100 transition duration-250 hover:shadow-2xl border-2 bg-white border-gray-300 rounded-2xl shadow-sm mt-4 mx-4 mb-4 p-4">
                                <img src="/ADV_DBMS/image/carhartt2.jpg" alt="Carhartt Tee"  class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Carhartt</h3>
                                        <p class="mt-1 text-sm text-black product-color">Black</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">Small</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱399</p>
                                    </div>
                                </div>
                                <?php if($authenticated){ ?>
                                <button onclick="addToCart(this)" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } else { ?>
                                <button onclick="alert('Please login first before you order')" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } ?>
                            </div>
                            
                            <div class="product hover:scale-100 transition duration-250 hover:shadow-2xl border-2 bg-white border-gray-300 rounded-2xl shadow-sm mt-4 mx-4 mb-4 p-4">
                                <img src="/ADV_DBMS/image/internalreform.jpg" alt="Internal Reform Tee" class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Internal Reform</h3>
                                        <p class="mt-1 text-sm text-black product-color">Khaki</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">Large</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱499</p>
                                    </div>
                                </div>
                                <?php if($authenticated){ ?>
                                <button onclick="addToCart(this)" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } else { ?>
                                <button onclick="alert('Please login first before you order')" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } ?>
                            </div>  

                            <div class="product hover:scale-100 transition duration-250 hover:shadow-2xl border-2 bg-white border-gray-300 rounded-2xl shadow-sm mt-4 mx-4 mb-4 p-4">
                                <img src="/ADV_DBMS/image/crt.jpg" alt="CRT Tee"
                                    class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">CRT</h3>
                                        <p class="mt-1 text-sm text-black product-color">White</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">Medium</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱450</p>
                                    </div>
                                </div>
                                <?php if($authenticated){ ?>
                                <button onclick="addToCart(this)" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } else { ?>
                                <button onclick="alert('Please login first before you order')" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } ?>
                            </div> 
                            
                            <div class="product hover:scale-100 transition duration-250 hover:shadow-2xl border-2 bg-white border-gray-300 rounded-2xl shadow-sm mt-4 mx-4 mb-4 p-4">
                                <img src="/ADV_DBMS/image/adidas.jpg" alt="Adidas Tee" class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Adidas</h3>
                                        <p class="mt-1 text-sm text-black product-color">Black</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">Medium</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱499</p>
                                    </div>
                                </div>
                                <?php if($authenticated){ ?>
                                <button onclick="addToCart(this)" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } else { ?>
                                <button onclick="alert('Please login first before you order')" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } ?>
                            </div>
                                                    
                            <div class="product hover:scale-100 transition duration-250 hover:shadow-2xl border-2 bg-white border-gray-300 rounded-2xl shadow-sm mt-4 mx-4 mb-4 p-4">
                                <img src="/ADV_DBMS/image/star.jpg" alt="Carhartt Tee"  class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Carhartt</h3>
                                        <p class="mt-1 text-sm text-black product-color">Black</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">Large</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱349</p>
                                    </div>
                                </div>
                                <?php if($authenticated){ ?>
                                <button onclick="addToCart(this)" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } else { ?>
                                <button onclick="alert('Please login first before you order')" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } ?>
                            </div>
                            
                            <div class="product hover:scale-100 transition duration-250 hover:shadow-2xl border-2 bg-white border-gray-300 rounded-2xl shadow-sm mt-4 mx-4 mb-4 p-4">
                                <img src="/ADV_DBMS/image/teeluv.jpg" alt=" Teeluv Tee" class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Teeluv</h3>
                                        <p class="mt-1 text-sm text-black product-color">Khaki</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">Large</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱400</p>
                                    </div>
                                </div>
                                <?php if($authenticated){ ?>
                                <button onclick="addToCart(this)" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } else { ?>
                                <button onclick="alert('Please login first before you order')" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } ?>
                            </div>  

                            <div class="product hover:scale-100 transition duration-250 hover:shadow-2xl border-2 bg-white border-gray-300 rounded-2xl shadow-sm mt-4 mx-4 mb-4 p-4">
                                <img src="/ADV_DBMS/image/lemandik.jpg" alt="Lemandik Tee"  class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Lemandik</h3>
                                        <p class="mt-1 text-sm text-black product-color">Gray</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">Medium</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱500</p>
                                    </div>
                                </div>
                                <?php if($authenticated){ ?>
                                <button onclick="addToCart(this)" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } else { ?>
                                <button onclick="alert('Please login first before you order')" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400 w-full add-to-cart relative">
                                        <i class="fa-solid fa-cart-plus text-2xl top-1 absolute left-12"></i>
                                        <span class="ml-8 flex items-center justify-center text-sm font-bold text-white">Add To Cart</span>
                                </button>
                                <?php } ?>
                            </div>
                        </div>
    </section>

    <section id="shorts" class="h-screen flex items-center justify-center bg-blue-100">
    <h1 class="text-4xl font-bold">Shorts</h1>
    </section>

    <section id="shoes" class="h-screen flex items-center justify-center bg-green-100">
    <h1 class="text-4xl font-bold">Shoes</h1>
    </section>

    <section id="about" class="h-screen flex items-center justify-center bg-purple-100">
    <h1 class="text-4xl font-bold">About</h1>
    </section>

    <!-- Script for Active Nav and Click Animation -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const navLinks = document.querySelectorAll('.nav-link');

        function setActive(link) {
        navLinks.forEach(el => {
            el.classList.remove('bg-gray-700', 'text-white', 'text-black');
            el.classList.add('text-black');
        });
        link.classList.remove('text-black');
        link.classList.add('bg-gray-700', 'text-white', 'animate-wiggle');
        setTimeout(() => link.classList.remove('animate-wiggle'), 300);
        }

        navLinks.forEach(link => {
        link.addEventListener('click', function () {
            setActive(this);
        });
        });

        window.addEventListener('scroll', () => {
        const scrollY = window.scrollY + 150;
        navLinks.forEach(link => {
            const section = document.querySelector(link.getAttribute('href'));
            if (section && section.offsetTop <= scrollY && section.offsetTop + section.offsetHeight > scrollY) {
            setActive(link);
            }
        });
        });
    });
    </script>

    </body>
    </html>
