<?php include("./header.php") ?>
    <main class="bg-gray-200">
        <div class="h-full w-full flex py-40 px-48 justify-between ">
            <div class="items-center w-[600px]">
                <h2 class="text-3xl font-semibold pb-5">Online Payment</h2>
                <hr class=" bg-gray-300 pb-1 w-full">
                <h5 class="text-4xl font-semibold pt-10 pb-5">Online payment</h5>
                <form action="" method="post">
                    <label for="flname">First Name</label><br>
                    <input type="text" placeholder="First And Last Name" required class="border-2 border-solid border-gray-300 rounded  hover:border-blue-600 h-10 w-[500px] shadow-xl">
                    <br></br>
                    <label for="email">Enter email address</label><br>
                    <input type="email" placeholder="Enter Email" required class="border-2 border-solid border-gray-300 rounded  hover:border-blue-600 h-10 w-[500px] shadow-xl">
                    <br><br>
                    <label for="amount">Amount(NGN)</label><br>
                    <input type="number" placeholder="0" required class="border-2 border-solid border-gray-300 rounded  hover:border-blue-600 h-10 w-[500px] shadow-xl">
                    <br><br>
                    <label for="number">Phone No.</label><br>
                    <input type="number" placeholder="Phone Number" required class="border-2 border-solid border-gray-300 rounded  hover:border-blue-600 h-10 w-[500px] shadow-xl">
                    <br><br>
                    <label for="payment">Payment Dexcription</label><br>
                    <textarea name="describe" id="text" cols="70" rows="4" class="border-2 border-solid border-gray-300 rounded  hover:border-blue-600 shadow-xl" placeholder="Enter Payment Description"></textarea>

                    <button class=" bg-blue-600 rounded h-10 w-[400px] text-white caret-green-700">Click to pay online (Nigeria and international cards)</button>
                </form>
                
            </div>
            <div class="bg-white shadow rounded h-full w-[300px] hover:drop-shadow-2xl">
            <div class="items-center py-8 px-8 text-start">
                <h5 class="mt-5 pb-5 text-lg"><a href="">Menu</a></h5>
                <hr class="w-full bg-gray-300 pb-1">
                <div class="py-3 text-gray-400">
                    <ul class="inline space-y-3">
                        <li class="hover:underline hover:underline-offset-4"><a class="hover:text-gray-900" href="index.php"><ion-icon name="remove-outline"></ion-icon> Home</a></li>
                        <li class="hover:underline hover:underline-offset-4"><a class="hover:text-gray-900" href="about.php"><ion-icon name="remove-outline"></ion-icon> About</a></li>
                        <li class="hover:underline hover:underline-offset-4"><a class="hover:text-gray-900" href="blog.php"><ion-icon name="remove-outline"></ion-icon> Blog</a></li>
                        <li class="hover:underline hover:underline-offset-4"><a class="hover:text-gray-900" href="invest.php"><ion-icon name="remove-outline"></ion-icon> Invest</a></li>
                        <li class="hover:underline hover:underline-offset-4"><a class="hover:text-gray-900" href="mycart1.php"><ion-icon name="remove-outline"></ion-icon> Cart</a></li>
                        <li class="hover:underline hover:underline-offset-4"><a class="hover:text-gray-900" href="Payment.php"><ion-icon name="remove-outline"></ion-icon>Payments</a></li>
                        <li class="hover:underline hover:underline-offset-4"><a class="hover:text-gray-900" href="faqs.php"><ion-icon name="remove-outline"></ion-icon> FAQs</a></li>
                        <li class="hover:underline hover:underline-offset-4"><a class="hover:text-gray-900" href="others.php"><ion-icon name="remove-outline"></ion-icon> Other products</a></li>
                        <li class="hover:underline hover:underline-offset-4"><a class="hover:text-gray-900" href="sell.php"><ion-icon name="remove-outline"></ion-icon>Sell products</a></li>
                        <li class="hover:underline hover:underline-offset-4"><a class="hover:text-gray-900" href="contact.php"><ion-icon name="remove-outline"></ion-icon> Contact Us</a></li>
                    </ul>
                </div>
            </div> 
            </div>
            
        </div>
    </main>

    <?php include("./footer.php") ?>