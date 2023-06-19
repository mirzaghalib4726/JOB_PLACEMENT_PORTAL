<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "LINKEDINPORTAL";

    $conn = new mysqli($server, $user, $pass);

   if ($conn->connect_error)
   {
        die("Connection failed: " . $conn->connect_error);
   }
 ?>
