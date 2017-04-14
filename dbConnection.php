<?php 
 $dsn = 'mysql:host=sql2.njit.edu;dbname=sd655'; 
 $username = 'sd655'; 
 $password = 'pSLU9F3d'; 
 try{ 
   $db = new PDO($dsn,$username,$password); 
 }catch (PDOException $error){ 
   $error_message = $error->getMessage(); 
   echo $error_message; 
   exit(); 
 } 
?> 


