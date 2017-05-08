<?php
    require_once('../util/main.php'); 
    require_once('../model/dbConnection.php');
    $action="add";
    require_once('../model/addItem.php');
    $username = $_SESSION['userId'];
    $firstname = $_SESSION['first_name'];
    $lastname = $_SESSION['last_name'];
    //require('todo.php');
     $items = getToDoItems($username);
?>
