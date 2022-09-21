<?php
    // $host =   'localhost';  
    // $user =   'sosalin_word';  
    // $pass =   'Papun@1996';  
    // $dbname = 'sosalin_word'; 

    $host =   'localhost';  
    $user =   'root';   
    $pass =   '';  
    $dbname = 'api';
     
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    }  
    
    
    
    ?>