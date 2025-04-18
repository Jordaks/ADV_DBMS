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
    <link href="./output.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce431fb7e5.js" crossorigin="anonymous"></script>
    <title>Thrift Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="/ADV_DBMS/image/R.png"/>

    <style>
        html {
        scroll-behavior: smooth;
        }
    </style>

</head>
<?php
session_start();
?>
<body >

    <div class="bg-orange-100">
        <!-- Navbar -->
            <nav class="backdrop-blur-md bg-opacity-10 text-white p-4 sticky top-0 z-50 shadow-md">
                <div class="container mx-auto flex justify-between items-center">
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="hidden sm:ml-6 sm:block">
                            <div class=" flex space-x-4">
                            <img src="/ADV_DBMS/image/R.png" alt="Logo" class="w-10 h-9">
                            <a href="#" class="nav-link active hover:scale-110 hover:text-white hover:bg-gray-700 transition duration-500 rounded-md px-3 py-2 text-sm font-bold text-black">Home</a>
                            <a href="#t-shirt" class="nav-link hover:scale-110 transition duration-500 rounded-md px-3 py-2 text-sm  font-bold text-black hover:bg-gray-700 hover:text-white">T-shirt</a>
                            <a href="#shorts" class="nav-link hover:scale-110 transition duration-500 rounded-md px-3 py-2 text-sm font-bold text-black hover:bg-gray-700 hover:text-white">Shorts</a>
                            <a href="#shoes" class="nav-link hover:scale-110 transition duration-500 rounded-md px-3 py-2 text-sm font-bold text-black hover:bg-gray-700 hover:text-white">Shoes</a>
                            <a href="#about" class="nav-link hover:scale-110 transition duration-500 rounded-md px-3 py-2 text-sm font-bold text-black hover:bg-gray-700 hover:text-white">About</a>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 space-x-4">
                        
                    </div>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 space-x-4">
                            
                            <!-- Cart -->
                        
                                <?php if($authenticated){ ?>
                                    <a href="cart.php">
                                        <button class="pl-3">
                                            <span >
                                                <svg  class="hover:scale-110 transition duration-500 fill-current text-black w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </button>                                
                                    </a>
                                <?php } else { ?>
                                    <button onclick="alert('Please login first before you order')"  class="pl-3"> 
                                            <span >
                                                <svg  class="hover:scale-110 transition duration-500 fill-current text-black w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                    </button>
                                <?php } ?>  

                                <!-- User -->

                                <?php if($authenticated){ ?>
                                    <p id="cart-count" class="bg-orange-500 text-white text-xs rounded-full flex items-center justify-center absolute top-7 left-[86%] px-1 py-[2px]">0</p>
                                    <button onclick="toggleUser()" class="p-3 ">
                                        <span>
                                            <svg class="hover:scale-110 transition duration-500 text-gray-800 w-11 h-11"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                        </span>
                                    </button>

                                <!-- login/sign up -->

                                <?php } else { ?>  
                                    <div class="hover:scale-110 transition duration-500 relative ml-3 border-2 rounded-xl border-black bg-white hover:border-gray-500">
                                        <a href="log_in.php" target="">
                                            <button type="button" class="ml-1.5 mr-1.5  hover:scale-110 transition duration-500 relative rounded-full p-1  text-black hover:text-gray-500 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden font-bold"> LOG IN
                                                <span class="absolute -inset-1.5"></span>
                                            </button>
                                        </a>
                                    </div>

                                    <div class="hover:scale-110 transition duration-500 relative ml-3 border-2 rounded-xl border-black bg-white hover:border-gray-500 ">
                                        <a href="sign_up.php" target="">
                                            <button type="button" class="ml-1.5 mr-1.5 hover:scale-110 transition duration-500 relative rounded-full p-1 text-black hover:text-gray-500 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden font-bold"> SIGN UP
                                                <span class="absolute -inset-1.5"></span>
                                            </button>
                                        </a>
                                    </div>
                                <?php } ?>                          
                        </div>
                </div>
            </nav>

        <header class="bg-[url('/ADV_DBMS/bg.jpg')] bg-center px-20 min-h-screen grid place-items-center" >            
                <div >
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 border-2 border-gray-200 backdrop-filter backdrop-blur-md bg-opacity-10 rounded-4xl">
                        <div class="m-8 p-8">
                            <h1 class=" text-6xl text-center  font-bold tracking-tight text-white">Welcome to our Thrift Store</h1>
                            <p class="mt-6 text-2xl text-center text-white">We are a thrift store that sells quality second-hand clothes at affordable prices.</p>
                            <p class="text-m text-center text-white">Where Your Grandma’s Closet Meets Your New Style – Thrift Like a Pro!</p>
                            <p class=" text-9xl text-center text-white">StayThrifty!</p>
                        </div>
                    </div>
                </div>
        </header>

        <main  >

            

            <div class="bg-orange-50">
                <h1 class="ml-24 pt-5 text-4xl pl-2 font-bold tracking-tight text-gray-900"><section id="t-shirt">Latest Thrift</section></h1>
            
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                


                    <!--
                        
                    Tshirt
                        
                    -->
                    
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
                

                <!--
                    
                SHORTS
                    
                -->
                    

                    <h1 class=" pt-5 pb-24 text-4xl font-bold tracking-tight text-gray-900"><section id="shorts">Latest Thrift</section></h1>
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Shorts</h2>

                    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                            <div class="product hover:scale-100 transition duration-250 hover:shadow-2xl border-2 bg-white border-gray-300 rounded-2xl shadow-sm mt-4 mx-4 mb-4 p-4">
                                <img src="/ADV_DBMS/image/jorts1.jpg" alt="RRJ" class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">RRJ</h3>
                                        <p class="mt-1 text-sm text-black product-color">Blue</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">28-29</p>
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
                                <img src="/ADV_DBMS/image/jorts2.jpg" alt="Jag Jeans"  class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Jag Jeans</h3>
                                        <p class="mt-1 text-sm text-black product-color">Denim Black</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">30-32</p>
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
                                <img src="/ADV_DBMS/image/palda1.jpg" alt="Bench" class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Bench</h3>
                                        <p class="mt-1 text-sm text-black product-color">Black/White</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">27-28</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱549</p>
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
                                <img src="/ADV_DBMS/image/Shorts.jpg" alt="Oxygen"
                                    class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Oxygen</h3>
                                        <p class="mt-1 text-sm text-black product-color">Aphricot</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">30-32</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱550</p>
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
                                <img src="/ADV_DBMS/image/jorts3.jpg" alt="Lee " class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Lee</h3>
                                        <p class="mt-1 text-sm text-black product-color">Black</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">30</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱459</p>
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
                                <img src="/ADV_DBMS/image/jorts4.jpg" alt="Levi's"  class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Levi's</h3>
                                        <p class="mt-1 text-sm text-black product-color">Light Wash</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">28</p>
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
                                <img src="/ADV_DBMS/image/palda2.jpg" alt="Cotton On" class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Cotton On</h3>
                                        <p class="mt-1 text-sm text-black product-color">Light Blue</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">29</p>
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
                                <img src="/ADV_DBMS/image/jorts5.jpg" alt="Lemandik Tee"  class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">H&M</h3>
                                        <p class="mt-1 text-sm text-black product-color">Deep Blue</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">34</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱550</p>
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
                        


                    <!--

                    SHOES
                        
                    -->


                        <h3 class=" pt-5 pb-24 text-4xl font-bold tracking-tight text-gray-900"><section id="shoes">Latest Thrift</section></h1>        
                        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Shoes</h2>

                    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                            <div class="product hover:scale-100 transition duration-250 hover:shadow-2xl border-2 bg-white border-gray-300 rounded-2xl shadow-sm mt-4 mx-4 mb-4 p-4">
                                <img src="/ADV_DBMS/image/AF1.jpg" alt="Air Force 1" class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Air Force 1</h3>
                                        <p class="mt-1 text-sm text-black product-color">Triple White</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">42</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱999</p>
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
                                <img src="/ADV_DBMS/image/altra.jpg" alt="Altra"  class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Altra</h3>
                                        <p class="mt-1 text-sm text-black product-color">White</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">43</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱849</p>
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
                                <img src="/ADV_DBMS/image/clogs.jpg" alt="Birkenstock Clogs" class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Birkenstock Clogs</h3>
                                        <p class="mt-1 text-sm text-black product-color">Browm</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">42</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱949</p>
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
                                <img src="/ADV_DBMS/image/campus.jpg" alt="Adidas Campus"  class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Adidas Campus</h3>
                                        <p class="mt-1 text-sm text-black product-color">White</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">43</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱1000</p>
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
                                <img src="/ADV_DBMS/image/DR.M.jpg" alt="Dr.Martens " class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Dr.Martens</h3>
                                        <p class="mt-1 text-sm text-black product-color">Brown</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">44</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱1200</p>
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
                                <img src="/ADV_DBMS/image/newb.jpg" alt="New Balance 530"  class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">New Balance 530</h3>
                                        <p class="mt-1 text-sm text-black product-color">White</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">40</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱949</p>
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
                                <img src="/ADV_DBMS/image/converse1.jpg" alt="Converse" class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Converse</h3>
                                        <p class="mt-1 text-sm text-black product-color">White</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">44</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱899</p>
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
                                <img src="/ADV_DBMS/image/travis.jpg" alt="Lemandik Tee"  class="product-image w-full aspect-square object-cover rounded-2xl bg-gray-200" />
                                <div class="mt-4 flex justify-between mr-4">
                                    <div class="ml-4">
                                        <h3 class="text-sm font-bold text-gray-700 product-title">Travis Scott</h3>
                                        <p class="mt-1 text-sm text-black product-color">Triple Black</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 product-size">45</p>
                                        <p class="mt-1 text-sm font-bold text-gray-900 product-price">₱2550</p>
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

                
                <div id="user" class="fixed top-0 right-[-100%] w-[360px] border-2 h-full bg-orange-50 shadow-lg p-[65px_20px_40px] z-[100] overflow-auto transition-all duration-400">
                    <span>
                        <svg class="hover:scale-110 transition duration-500 text-gray-800 size-16 font-bold ml-32"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </span>

                    <h3 class="font-bold pb-10 text-center text-3xl">My Profile</h3>

                    <div class="flex justify-between items-center text-gray-700 mt-5 pt-2 text-lg font-semibold">
                        <p>Name: <span><?php echo $_SESSION["name"] ?? "Not set"; ?></span></p>
                    </div>

                    <div class="flex justify-between items-center text-gray-700 mt-10 pt-2 text-lg font-semibold">
                        <p>Email:  <span><?php echo $_SESSION["email"] ?? "Not set"; ?></span></p>
                    </div>

                    <div class="flex justify-between items-center  text-gray-700  font-semibold mt-10 pt-2 text-lg ">
                        <p>Address: <spa><?php echo $_SESSION["address"] ?? "Not set"; ?></spa></p>
                        
                    </div>

                    <div class="flex justify-between items-center  text-gray-700 mt-10 pt-2 pb-64 text-lg font-semibold">
                        <p>Contact: <span><?php echo $_SESSION["phone"] ?? "Not set"; ?></span></p>
                    </div>


                
                    <a href="logout.php">
                        <button class="mt-5 w-full font-semibold bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-400">
                            Logout
                        </button>
                    </a>
                        
                        
                        <button onclick="toggleUser()"  class="absolute top-5 right-4 text-[35px] cursor-pointer">
                            <svg   xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hover:text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                        
                    
                </div>

        </main>

        <footer  >
                    <div class="grid grid-cols-3 gap-4 p-6">
                        <div>
                            <h5 class="mr-20 ml-40 text-l font-bold tracking-tight text-gray-900"><section id="about">ABOUT THRIFT SHOP</section></h5>
                        <!--   <span class="mr-20 ml-40 text-l tracking-tight text-gray-900">
                                <pre>
        RETHRY is a modern thrift shop wher
        you handpick pieces and turn them
        into your own perfect 
                                </pre> 
                                
                            </span> -->
                            <br>
                            <span class="ml-44 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="about.php" title="About Us" target="_blank">
                                    About Us
                                </a>
                            </span>
                            <br>
                            <span class="ml-44 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="" title="Privacy & Policy" target="_blank">
                                    Privacy & Policy
                                </a> 
                            </span>
                        </div>

                        <div>
                            <h5 class=" ml-30 text-l text-center font-bold tracking-tight text-gray-900">CUSTOMER SERVICE</h5>
                            <br>
                            <span class="ml-40 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="" title="Contact" target="_blank">
                                Contact Us
                                </a>
                            </span>
                            <br>
                            <span class="ml-40 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="" title="Logout" target="_blank">
                                Payment Methods
                                </a>
                            </span>
                            <br>
                            <span class="ml-40 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="" title="Shipping" target="_blank">
                                Free Shipping
                                </a>
                            </span>
                            <br>
                            <span class="ml-40 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="" title="Return" target="_blank">
                                Return & Refund
                                </a>
                            </span>
                            <br>
                            <span class="ml-40 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="" title="Cart" target="_blank">
                                Help Centre
                                </a>
                            </span>
                            <br>
                            <span class="ml-40 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="" title="Order" target="_blank">
                                Order Tracking
                                </a>
                            </span>
                            <br>
                            <span class="ml-40 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="log_in.php" title="Login" target="_blank">
                                Login
                                </a>
                            </span>
                            <br>
                            <span class="ml-40 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="sign_up.php" title="Register" target="_blank">
                                Register
                                </a>
                            </span>                            
                        </div>


                        <div class="">
                            <h5 class=" text-center text-l font-bold tracking-tight text-gray-900">CONTACT US ON</h5>
                            <br>
                            <span class="ml-44 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400"  >
                                <a href="https://www.facebook.com/markjordan.javier" title="Mark Jordan Javier"  target="_blank">
                                <i class="fa-brands fa-facebook fa-1x "></i> Facebook
                                </a>
                            </span>
                            <br>
                            <span class="ml-44 mb-20 mx-3  hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="https://www.instagram.com/imnot_dannnnn/" title="imnot_dannnnn" target="_blank">
                                <i class="fa-brands fa-instagram fa-1x"></i> Instagram
                                </a>
                            </span>
                            <br>
                            <span class="ml-44 mb-20 mx-3  hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="https://www.tiktok.com/@jordamnnnn " title="Jordaks" target="_blank">
                                <i class="fa-brands fa-tiktok"></i> Tiktok
                                </a>
                            </span>
                            <br>
                            <span class="ml-44 mb-20 hover:scale-110 transition duration-500 hover:text-yellow-400"  >
                                <a href="https://www.linkedin.com/in/mark-jordan-javier-29b72935a/" title="Mark Jordan Javier" target="_blank">
                                <i  class="fa-brands fa-linkedin"></i> LinkedIn
                                </a>
                            </span>
                            <br>
                            <span class="ml-44 mb-20 mx-3  hover:scale-110 transition duration-500 hover:text-yellow-400">
                                <a href="mailto:javiermarkjorda@gmail.com" title="javiermarkjordan" target="_blank">
                                <i class="fa-solid fa-envelope  fa-1x"></i> Email
                                </a>
                            </span>
                        </div>
                    </div>

                    
            <div class="mt-auto bg-[#A98B72] text-white text-center py-4">
                &copy; 2025 RETHRY. All Rights Reserved. |
                <a href="#" class="text-yellow-400 hover:underline mx-2">Terms of Service</a> |
                <a href="#" class="text-yellow-400 hover:underline mx-2">FAQs</a> |
                <a href="#" class="text-yellow-400 hover:underline mx-2">Philippines</a> |
            </div>
            
        </footer>

        <script src="index.php"></script>

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
            alert("Item is already in the cart.");
        } else {
            cart.push({ name, color, size, price, image, quantity: 1 });
        }

        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartButtonCount();
        }

        function updateCartButtonCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const count = cart.reduce((sum, item) => sum + item.quantity, 0);
        document.getElementById('cart-count').textContent = count;
        }

        document.addEventListener('DOMContentLoaded', updateCartButtonCount);

        window.toggleUser = function() {
            const user = document.getElementById("user");
            user.style.right = user.style.right === "0px" ? "-100%" : "0px";
        };


        // animation

        document.addEventListener('DOMContentLoaded', () => {
            const navLinks = document.querySelectorAll('.nav-link');

            function setActive(link) {
                navLinks.forEach(el => el.classList.remove('bg-gray-700', 'text-white'));
                link.classList.add('bg-gray-700', 'text-white', );
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
                    if (section.offsetTop <= scrollY && section.offsetTop + section.offsetHeight > scrollY) {
                    setActive(link);
                    }
                });
            });
        });

        

        </script>
    </body>
</html>