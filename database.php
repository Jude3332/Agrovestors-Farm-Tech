<?php 
ob_start();
session_start();

// $timezone = $data_default_timezone_set("Africa/Lagos");


$servername = "localhost"; 
$username = "root";
$password = "";
$database = "Agrovestors_farm_tech";

    //   connect database
    $conn = mysqli_connect($servername, $username, $password, $database);

    // check connection  
    if(mysqli_connect_error()){
        echo "connection failed " .mysqli_connect_error();
    }
?>