<?php   
    include ("database.php");

    session_start();    

    $authenticated = false;
    
    if (isset ($_SESSION["email"]) ) {
        $authenticated = true;
    } 
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="/image/R.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Horizon&display=swap" rel="stylesheet">
    <title>Order</title>
</head>
<body>


        <div >
        <nav class="backdrop-blur-md bg-opacity-10 text-white p-4 sticky top-0 z-50 shadow-md">
                <div class="container mx-auto flex justify-between items-center">
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="hidden sm:ml-6 sm:block">
                            <div class=" flex space-x-4">
                            <img src="/ADV_DBMS/image/R.png" alt="Logo" class="w-10 h-9">
                            <p class="text-[#A98B72] font-bold text-3xl font-bevan">RETHRY</p> <p class="text-[#A98B72] font-bold text-2xl">|</p> <p class="text-[#A98B72] font-bold text-3xl font-horizon">CHECKOUT</p>
                            </div>
                        </div>
                    </div>                        
                    
                </div>
            </nav>
                <div class="bg-orange-100 rounded-xl pt-5 m-4 shadow-2xl ">
                        <h3 class="font-bold ml-10 text-2xl"><i class="fa-solid fa-location-dot mr-5"></i>Delivery Address</h3>
                    <div class=" px-16 rounded-3xl  w-full">
                        <div class="flex justify-between items-center text-gray-700 m-5 py-10 pt-2 text-lg font-semibold">
                            <?php echo $_SESSION["name"] ?? "Not set"; ?>
                            <span class=""><?php echo $_SESSION["phone"] ?? "Not set"; ?></span>
                            <span class="pr-80 mr-44"><?php echo $_SESSION["address"] ?? "Not set"; ?></span>

                        </div>

                    </div>
                </div>

                    <div class="bg-orange-100 rounded-xl m-4 shadow-2xl ">

                    
                    
                        <h3 class="font-bold ml-10 text-2xl">Products Ordered</h3>

                        <div id="cart-items">
                            <?php
                                function displayCartItems($cart) {
                                    if (isset($cart) && !empty($cart)) {
                                        foreach ($cart as $item) {
                                            echo "<div class='flex justify-between items-center py-2'>";
                                            echo "<span>{$item['name']}</span>";
                                            echo "<span>{$item['quantity']}</span>";
                                            echo "<span>₱{$item['price']}</span>";
                                            echo "</div>";
                                        }
                                    } else {
                                        echo "<p class='text-center text-gray-500'>No products in the cart.</p>";
                                    }
                                }

                                displayCartItems($_SESSION['cart'] ?? []);
                            ?>
                        </div>

                    </div>


                    <div class="bg-orange-100 rounded-xl m-4 shadow-2xl ">
                        
                        <div class="flex justify-between mx-10 items-center  border-t border-black mt-5 pt-5 text-lg font-semibold">
                            Total: <span id="cart-total">₱0</span>
                        </div>

                        <div class="flex justify-end  my-3 pb-10 m-4 px-5">
                            <button class="bg-[#A98B72] text-white py-2 px-5  font-bold rounded-2xl hover:bg-[#B79C81]">
                                PLACE ORDER
                            </button>
                        </div>


                        <button onclick="toggleCart()" class="absolute top-5 right-4 text-[35px] cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hover:text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                        
                    </div>
                        
        </div>

        <footer  >
                    <div class="grid grid-cols-3 gap-4 p-6">
                        <div>
                            <h5 class="mr-20 ml-40 text-l font-bold tracking-tight text-gray-900"><section id="about">ABOUT THRIFT SHOP</section></h5>
                            <span class="mr-20 ml-40 text-l tracking-tight text-gray-900">
                                <pre>
        RETHRY is a modern thrift shop wher
        you handpick pieces and turn them
        into your own perfect fit.
                                </pre>                 
                            </span>
                        </div>

                        <div>
                            <h5 class=" ml-30 text-l text-center font-bold tracking-tight text-gray-900">CUSTOMER SERVICE</h5>
                        </div>


                        <div class="">
                            <h5 class=" text-center text-l font-bold tracking-tight text-gray-900">CONTACT US ON</h5>
                            <br>
                            <span class="ml-44 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400"  >
                                <a href="https://www.facebook.com/markjordan.javier" title="Mark Jordan Javier">
                                <i class="fa-brands fa-facebook fa-1x "></i> Facebook
                                </a>
                            </span>
                            <br>
                            <span class="ml-44 mb-20 mx-3  hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="https://www.instagram.com/imnot_dannnnn/" title="imnot_dannnnn">
                                <i class="fa-brands fa-instagram fa-1x"></i> Instagram
                                </a>
                            </span>
                            <br>
                            <span class="ml-44 mb-20 mx-3  hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="https://www.tiktok.com/@jordamnnnn " title="Jordaks">
                                <i class="fa-brands fa-tiktok"></i> Tiktok
                                </a>
                            </span>
                            <br>
                            <span class="ml-44 mb-20 mx-3 hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="www.linkedin.com/in/mark-jordan-javier-29b72935a" title="Mark Jordan Javier">
                                <i class="fa-brands fa-linkedin fa-1x"></i> LinkedIn
                                </a>
                            </span>
                            <br>
                            <span class="ml-44 mb-20 mx-3  hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="mailto:javiermarkjorda@gmail.com" title="javiermarkjordan">
                                <i class="fa-solid fa-envelope  fa-1x"></i> Email
                                </a>
                            </span>
                        </div>
                    </div>

                    
            <div class="mt-auto bg-gray-800 text-white text-center py-4">
                &copy; 2025 RETHRY. All Rights Reserved. |
                <a href="#" class="text-yellow-400 hover:underline mx-2">Terms of Service</a> |
                <a href="#" class="text-yellow-400 hover:underline mx-2">FAQs</a> |
                <a href="#" class="text-yellow-400 hover:underline mx-2">Privacy & Policy</a> |
                <a href="#" class="text-yellow-400 hover:underline mx-2">Philippines</a> |
            </div>
            
        </footer>
        <script src="./index.js"></script>

</body>
</html>