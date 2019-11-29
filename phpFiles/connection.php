<?php
    $conn = mysqli_connect('localhost','root','!R!s251113','Profile');
    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
     }
     else{
         echo("Connection successfull!");
     }

     
     ?>

