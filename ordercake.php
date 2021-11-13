<?php
    $connection = mysqli_connect("localhost" , "root" , "", "deliverydatabase");
    $id = $_post["id"];
    $base = $_post["cake_base"];
    $filling = $_post["cake_filling"];
    $frosting = $_post["cake_frosting"];
    $size = $_post["cake_size"];

    
        $input = mysqli_query($connection, "INSERT INTO cake_details (id,cake_base,cake_filling,cake_frosting,cake_size) VALUES ($id,$base, $filling, $frosting, $size)");
        if($input){
            echo "Order placed Successfully" ;
        } else{
            echo "Try again - data given is not taken by the table";
        }
    
?>