<?php
require('../model/dbConnection.php');
require('../model/addItem.php');
require('../model/db.php');
$item = "";




$duedate;
if(isset($_POST['login-submit'])) {
    $item = $_POST['itemName'];
    $duedate = $_POST['dueDate'];
    $new_date = date('Y-m-d', strtotime($_POST['dueDate']));
    
    $username = filter_input(INPUT_POST, 'username');
    if ($username == NULL) {
        $username = "";
    }
    
    $insertStatus = addItem($username, $item, $new_date); 
    if($insertStatus != null) 
    {
        $items = getToDoItems($username);
        include('../todo/todoView.php');
    }
}
?>
