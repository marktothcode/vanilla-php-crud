<?php 
      
    $connection =  mysqli_connect('localhost', 'root', '', 'loginapp');

    if (!$connection) {
        echo "we are connected";    
        die("Database connection failed");
    }

  
