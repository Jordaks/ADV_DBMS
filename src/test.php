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

    <section id="tshirt" class="h-screen flex items-center justify-center bg-yellow-100">
    <h1 class="text-4xl font-bold">T-shirt</h1>
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
