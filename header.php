<?php include("./config/database.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGROVESTORS FARM-TECH | HOME</title>
    <link href="./public/src/style.css" rel="stylesheet">
    <link href="/public/src/input.css"  rel="stylsheet">
    <script src="https://kit.fontawesome.com/06af7900db.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <nav class="bg-white shadow-md border-2 border-solid border-gray-300">
        <div class="container mx-auto flex flex-wrap md:w-auto md:flex-col justify-between">
            <div class="flex px-3 py-6 ">
                <img src="./public/img/logo.png.PNG" class="rounded-full h-20 w-20 cursor-pointer">
               
            </div>
            <div class="flex flex-col w-auto py-6 md:items-center">
                <div class="inline-flex w-auto">
                    <ul class="flex flex-row md:items-center">
                    <li><a href="login.php" class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400">Login</a></li> 
                    <li><a href="signup.php" class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400">Sign Up</a></li>
                    <li><a href="mycart1.php" class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400"><ion-icon name="cart-outline"></ion-icon>Mycart</a></li>
                    <li><a href="" class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="" class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="" class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="" class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                    </ul>
                    
                </div>
                <div>
                    <ul class="flex flex-row md:flex-col md:items-center">
                        <li><a href="index.php"class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400">Home</a></li>
                        <li><a href="about.php"class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400">About</a></li>
                        <li><a href="blog.php"class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400">Blog</a></li>
                        <li><a href="invest.php"class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400">Invest</a>
                        <ul class="space-y-4 hidden">
                            <li><a href=""class=" px-2 py-2 font-medium rounded-md hover:bg-slate-400">Plant Produce</a></li>
                            <li><a href=""class=" px-2 py-2 font-medium rounded-md hover:bg-slate-400">Animal Produce</a></li>
                            <li><a href=""class=" px-2 py-2 font-medium rounded-md hover:bg-slate-400">Agro-Machinery</a></li>
                        </ul>
                        </li>
                        <li><a href="mycart1.php"class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400">Cart</a></li>
                        <li><a href="payment.php"class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400">Payments</a></li>
                        <li><a href="faqs.php"class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400">FAQs</a></li>
                        <li><a href="others.php"class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400">Other Products</a></li>
                        <li><a href="contact.php"class="flex px-2 py-2 font-medium rounded-md hover:bg-slate-400">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <button 
                class="max-hidden inline-flex justify-center items-center border mr-auto h-10 w-10 rounded-md md:absolute md:left-[800px] md:top-10 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                </button>
    </nav>




    <!-- <nav class="bg-white w-full h-full ">
        <div class="w-full h-44 pl-10 pr-10">
            <div class="flex justify-between">
                <div class=" h-28 w-28 items-center text-center ">
                    <a href="" class="items-center text-center rounded p-20 ">
                        <img src="./public/img/logo.png.PNG" class="rounded-full h-20 w-20" >
                    </a>
                </div>
            <div class=" pr-10 py-6 px-1 ">
                <div class="grid grid-cols-1 md:flex">
                    <div class=" pl-[900px]">
                        <ul class="list-none space-x-3 py-6 flex">
                            <li class="text-gray-400">Questions? call:07069658497</li>
                            <li><a href="signup.php" class="text-blue-400 hover:text-blue-700">LOGIN</a></li>
                            <li><a href="" class="text-black hover:text-blue-500 "><ion-icon name="cart-outline"></ion-icon>My Cart</a></li>
                            <li><a href="" class="text-black hover:text-blue-500 "><ion-icon name="logo-facebook"></ion-icon></a></li>
                            <li><a href="" class="text-black hover:text-blue-500 "><ion-icon name="logo-twitter"></ion-icon></a></li>
                            <li><a href="" class="text-black hover:text-blue-500 "><ion-icon name="logo-instagram"></ion-icon></a></li>
                            <li><a href="" class="text-black hover:text-blue-500 "><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                        </ul>
                        
                    </div>
                <div class="flex  space-x-3 items-end md:items-start md:hidden md:flex-col md:absolute md:justify-start">
                    <a href="index.php" class="hover:bg-green-400">Home</a>
                    <a href="about.php" class="hover:bg-green-400">About Us</a>
                    <a href="blog.php" class="hover:bg-green-400">Blog</a>
                    <a href="invest.php" class="hover:bg-green-400">Invest</a>
                        <hr class=" md:flex">
                       <ul class="space-y-4 hidden">
                        <li><a href="">Plant Prodruce</a></li>
                        <li><a href="">Animal Produce</a></li>
                        <li><a href="./dropdowns/agromachinery.php">Agro-Machinery Services</a></li>
                       </ul>
                    </li>
                    <a href="mycart1.php" class="hover:bg-green-400" >Cart</a>
                    <a href="payment.php" class="hover:bg-green-400" >Payments</a>
                    <a href="faqs.php" class="hover:bg-green-400" >FAQs</a>
                    <a href="contact.php" class="hover:bg-green-400" >Other products</a>
                    <a href="payment.php" class="hover:bg-green-400" >Sell products</a>
                    <a href="contactus.php" class="hover:bg-green-400" >Contact Us</a>
                </div>
                <div class=" hidden justify-center items-center h-full md:flex">
                <span class="text-2xl font-extrabold hover:cursor-pointer" >
                      <ion-icon name="menu-outline" class="h-20 w-10 text-white"></ion-icon>
                </span>       
        </div>
                    
            </div>
            </div> 
            </div>
        </div>
                   
    </nav>
     -->
