<?php
    $connection = mysqli_connect("localhost", "root", "", "deliverydatabase");
    $username = $_post["username"];
    $password = $_post["password"];

   $input = mysqli_query($connection, "UPDATE customer_details SET password = '$password' WHERE username = '$username' ");

   if($input){
       echo "Data updated successfully";
   } else{
       echo "Error";
   }
?>