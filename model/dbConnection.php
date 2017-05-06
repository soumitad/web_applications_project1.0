<?php 
 /*$dsn = 'mysql:host=127.0.0.1;dbname=sd655'; 
 $username = 'root'; 
 $password = 'password-1';*/
   $dsn = 'mysql:host=sql.njit.edu;dbname=sd655';
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


