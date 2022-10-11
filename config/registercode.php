<?php 
include("./config/database.php");
    // declare variables
$fname = "";
$lname = "";
$email = "";
$email2 = "";
$password = "";
$password2 = "";
$date = "";
$error_array = array();

        if(isset($_POST["register_button"])){
            //First Name
            $fname = strip_tags($_POST['reg_fname']);//Stores first name
            $fname = str_replace(' ', '', $fname);  //removes space
            $fname = ucfirst(strtolower ($fname)); //uppercase letters
            $_SESSION['reg_fname'] = $fname; //stores fname into session variable

            //Last Name
            $lname = strip_tags($_POST['reg_lname']);//Stores last name
            $lname = str_replace(' ', '', $lname);  //removes space
            $lname = ucfirst(strtolower ($lname)); //uppercase letters
            $_SESSION['reg_lname'] = $lname; //stores lname into session variable

            //Email
            $email = strip_tags($_POST['reg_email']);//Stores first name
            $email = str_replace(' ', '', $email);  //removes space
            $email = ucfirst(strtolower ($email)); //uppercase letters
            $_SESSION['reg_email'] = $email; //stores email into session variable

            //Email2
            $email2 = strip_tags($_POST['reg_email2']);//Stores first name
            $email2 = str_replace(' ', '', $email2);  //removes space
            $email2 = ucfirst(strtolower ($email2)); //uppercase letters
            $_SESSION['reg_email2'] = $email2; //stores email2 into session variable

            //password
            $password = strip_tags($_POST['reg_password']);//Stores first name
            $password2 = strip_tags($_POST['reg_password2']); //removes space


            $date = date("Y-m-d");

            if($email == $email2){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $email = (filter_var($email, FILTER_VALIDATE_EMAIL));
                    // check if email has been used
                    $e_check = mysqli_query($conn, "SELECT email FROM register WHERE email='$email'");
                    $num_rows = mysqli_num_rows($e_check);

                    if($num_rows > 0){
                        array_push($error_array, "Email already in use<br>"); 
                    }
                }else{
                    array_push($error_array, "Invalid format<br>");
                }

            }else{
                array_push($error_array, "Emails dont match<br>");
            }
            if(strlen($fname) > 25 || strlen($fname) < 2){
                array_push($error_array, "Your first name should be from 2 to 25 letters<br>");
            }

            if(strlen($lname) > 25 || strlen($lname) < 2){
                array_push($error_array, "Your last name should be from 2 to 25 letters<br>");
            }
            if($password != $password2){
                array_push($error_array, "Password don't match<br>");
            }else {
                if(preg_match('/[^A-Za-z0-9]/', $password)){
                    array_push($error_array, "Your password must contain letters and numbers<br>");
                }
                if(strlen($password) > 30 || strlen($password) < 6){
                    array_push($error_array, "Your password must be between 6 to 25 characters<br>");
                }
            }
            // if(empty($error_array)){
            //     $password = md5($password); // encrypt password before sending to database


            // generate a random username by concatenating the first and last name.
            $username = strtolower($fname. "_" .$lname);
            $check_username_query = mysqli_query($conn, "SELECT username FROM register WHERE username='$username'");

            $i = 0;

            while(mysqli_num_rows($check_username_query) != 0) {
            //username exists add number to username
                $i++;
                $username = $username. "_" .$i;
                $check_username_query = mysqli_query($conn, "SELECT username FROM register WHERE username='$username'");
            }


            $rand = rand(1,2);
            if($rand == 1)
               $profile_pics = "public/img/head_sun_flower.png";
            else if($rand == 2) 
            $profile_pics = "public/img/head_red.png";

            $query = mysqli_query($conn, "INSERT INTO register VALUE('', '$fname', '$lname', '$username', '$email', '$password', '$profile_pics', '0', '0', 'no', ',' )");

           // array_push($error_array("<span style='color: green;'>You are all set! Go ahead and login<span><br>"));



         $_SESSION["reg_fname"] = "";
         $_SESSION["reg_lname"] = "";
         $_SESSION["reg_email"] = "";
         $_SESSION["reg_email2"] = "";
        }

        

?>