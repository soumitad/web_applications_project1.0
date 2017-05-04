<?php 
 $dsn = 'mysql:host=127.0.0.1;dbname=sd655'; 
 $username = 'root'; 
 $password = 'password-1'; 
 try{ 
   $db = new PDO($dsn,$username,$password); 
 }catch (PDOException $error){ 
   $error_message = $error->getMessage(); 
   echo $error_message; 
   exit(); 
 } 
?> 


