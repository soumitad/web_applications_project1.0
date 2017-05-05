<?php
require_once('../util/main.php');
require('../model/dbConnection.php');
require('../model/addItem.php');
require('../model/db.php');
$item = "";

$username = $_SESSION['userId'];
$firstname = $_SESSION['first_name'];
$lastname = $_SESSION['last_name'];
$duedate;
if(!isset($action)){
    //$string_version = implode('', $username);
    display_error($username);
   // <?php echo $username[0];
    $items = getToDoItems($username);
}else if ($action == "update"){
    $todo_item = $_POST['itemName'];
    $date_due = $_POST['dueDate'];
    $status = $_POST['status'];
    $id = $_POST['id'];
    updateitem($id,$todo_item,$date_due,$status);
}
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
        include('todoView.php');
    }
}
?>
