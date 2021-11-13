<?php
    $connection = mysqli_connect("localhost", "root", "", "deliverydatabase");
    $username = $_post["username"];
    $password = $_post["password"];

    $checkdata = mysqli_query($connection, "SELECT * FROM customer_details WHERE username = '$username' AND password = '$password'");
    $check = mysqli_num_rows($checkdata);

    if($check>0){
        echo "Sign In Successful";
    } else{
        echo "Sign In Failed";
    }
?>