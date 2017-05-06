<?php
require_once('../util/main.php');
require_once('../model/dbConnection.php');
require_once('../model/addItem.php');
require_once('../model/db.php');
$item = "";

$username = $_SESSION['userId'];
$firstname = $_SESSION['first_name'];
$lastname = $_SESSION['last_name'];
$duedate;

if(isset($action)){
    if($action=="update"){
        display_error($id);
        $todoItem = getToDoItem($id);
        $todo_item=$todoItem['todo_item'];
        $duedate=$todoItem['date_due'];
        $status=$todoItem['status'];
    }else if($action=="add"){
        $items = getToDoItems($username);
    }
}else{
    $action=$_GET['action'];
    if($action=="delete"){
        $id=$_GET['id'];
       
        deleteItem($id);
        $items = getToDoItems($username);
        $action="add";
        include('todoView.php');
    }
}


if(isset($_POST['login-submit'])) {
  
    $username = filter_input(INPUT_POST, 'username');
    if ($username == NULL) {
        $username = "";
    }
    $action = $_POST['action'];
    if($action=="update"){
        $todo_item = $_POST['itemName'];
        $date_due = date('Y-m-d', strtotime($_POST['dueDate']));
        $status = $_POST['status'];
        $id = $_POST['id'];
        updateitem($id,$todo_item,$date_due,$status);
        $action='add';
        //display_error($todo_item);
        include('todoView.php');
    }else{
        $item = $_POST['itemName'];
        $duedate = $_POST['dueDate'];
        $new_date = date('Y-m-d', strtotime($_POST['dueDate']));
        $insertStatus = addItems($username, $item, $new_date); 
        if($insertStatus != null) 
        {
        $action='add';
        $items = getToDoItems($username);
        include('todoView.php');
        }
    }
    
}
?>
