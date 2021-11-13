<?php
    $connection = mysqli_connect("localhost", "root", "", "deliverydatabase");
    
   $input = mysqli_query($connection, "DELETE FROM deliverydatabase ORDER BY id DESC limit 1 ");

   if($input){
       echo "Thank you for ordering";
   } else{
       echo "Error";
   }
?>