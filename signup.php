<?php
    $connection = mysqli_connect("localhost" , "root" , "", "deliverydatabase");
    $id = $_post["id"];
    $username = $_post["username"];
    $email_id = $_post["email_id"];
    $password = $_post["password"];

    $checkdata = mysqli_query($connection, "SELECT * FROM customer_details WHERE email_id = '$email_id'");
    $check = mysqli_num_rows($checkdata);

    if($check > 0){
        echo "email already exists";
    } 
    else {
        $input = mysqli_query($connection, "INSERT INTO customer_details (id,username,email_id,password) VALUES ($id, $username, $email_id, $password)");
        if($input){
            echo "Sign up successful" ;
        }
    }
?>