<?php include("./config/registercode.php"); 
      include("./config/database.php");
?>

<link href="./public/src/style.css" rel="stylesheet">
    <main class="py-6  h-[150vh] w-full bg-gradient-to-t  from-blue-500 to-slate-800">
        <div class=" ml-20 py-6 pr-30 items-center h-full">
            <div class="relative flex w-[800px] left-36 space-x-3 ml-20 ">
                <button class="h-10 p-2 w-1/2 bg-blue-400 hover:bg-purple-400 translate-x-3 rotate-6 ">Sign up as a Vendor</button> 
                <button class="h-10 p-2 w-1/2 bg-purple-400 hover:bg-purple-400 -rotate-6">Sign up as an Investor</button>
            </div>
            <div class="items-center justify-center w-full h-[110vh] text-white bg-slate-900">
                    <div class="flex justify-between p-5">
                        <button class="text-md w-[150px] rounded-md  h-10 p-2 translate-x-3 rotate-6 transition ease-in-out delay-150 bg-blue-500 hover:bg-purple-400 hover:-translate-y-1 hover:scale-110 duration-300">
                            <ion-icon name="log-in-outline"></ion-icon>
                            Create Account
                        </button>
                        <p class="text-sm text-end -skew-y-12">Join over 10,000 vendors to <br> sell and buy your goods</p>
                    </div>
                    <br>
                    <hr class="w-[900px] absolute ml-32">
                    <div class="flex justify-between p-5">
                        <p class="text-gray-200 ">Payment method:</p>
                        <p class="text-gray-200 ">online</p>
                    </div>
                    <hr>
                    <div class="p-10 py-5 text-center">
                        <form action="signup.php" method="POST" >
                        <input type="text" placeholder="First Name" name="reg_fname" class="h-10 w-[500px] text-gray-600" 
                        value="<?php  
                        if(isset($_SESSION["reg_fname"])){
                           echo $_SESSION["reg_fname"];
                        } ?>" required >
                        <br><br>
                        <?php if(in_array("Your first name should be from 2 to 25 letters<br>", $error_array)) echo "Your first name should be from 2 to 25 letters<br>"; ?>

                        <input type="text" placeholder="Last Name" name="reg_lname"  class="h-10 w-[500px] text-gray-600"  
                        value="<?php  
                        if(isset($_SESSION["reg_lname"])){
                        echo $_SESSION["reg_lname"];
                        } ?>" required>
                        <br><br>
                        <?php if(in_array("Your last name should be from 2 to 25 letters<br>", $error_array)) echo "Your last name should be from 2 to 25 letters<br>"; ?>

                        <input type="email" placeholder="Email" name="reg_email"  class="h-10 w-[500px] text-gray-600"  
                        value="<?php  
                        if(isset($_SESSION["reg_email"])){
                        echo   $_SESSION["reg_email"];
                        } ?>" required>
                        <br><br>
                        <input type="email" placeholder="Confirm Email" name="reg_email2"  class="h-10 w-[500px] text-gray-600"  
                        value="<?php  
                        if(isset($_SESSION["reg_email2"])){
                        echo   $_SESSION["reg_email2"];
                        } ?>" required>
                        <br><br>
                        <?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
                              else if(in_array("Invalid format<br>", $error_array)) echo "Invalid format<br>";
                              else if(in_array("Emails dont match<br>", $error_array)) echo "Emails dont match<br>";?>

                        <input type="password" placeholder="Password" name="reg_password" required class="h-10 w-[500px] text-gray-600">
                        <br><br>
                        <input type="password" placeholder="Confirm Password" name="reg_password2" required class="h-10 w-[500px] text-gray-600">
                        <br>
                        <?php if(in_array("Password don't match<br>", $error_array)) echo "Password don't match";
                              else if(in_array("Your password must contain letters and numbers<br>", $error_array)) echo "Your password must contain letters and numbers<br>";
                              else if(in_array("Your password must be between 6 to 25 characters<br>", $error_array)) echo "Your password must be between 6 to 25 characters<br>";?>

                              <br>
                        <input type="checkbox">
                        <label for="">Agree to our <a href="" class="">Privacy policy</a> </label>
                        <br>
                        <div class="px-44 py-6">
                            <button name="register_button" class="register w-[150px] border-2 border-solid border-gray-300">Submit</button>
                        </div> <br>
                        <?php if(in_array("<span style='color: green;'>You are all set! Go ahead and login<span><br>", $error_array)) echo "<span style='color: green;'>You are all set! Go ahead and login<span><br>"; ?>
                        </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </main>