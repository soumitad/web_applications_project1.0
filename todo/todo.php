<?php
require_once('../util/main.php');
require_once('../model/dbConnection.php');
require_once('../model/itemsDb.php');
require_once('../model/db.php');
$item = "";

$username = $_SESSION['userId'];
$firstname = $_SESSION['first_name'];
$lastname = $_SESSION['last_name'];
$duedate;
$todoItem_err="";
$duedate_err="";
$time_err="";
$error=false;
$errorStatus=false;

if(isset($action)){
    if($action=="update"){
        
        $todoItem = getToDoItem($id);
        $todo_item=$todoItem['todo_item'];
        $duedate=$todoItem['date_due'];
        $status=$todoItem['status'];
        $time=$todoItem['duedate_time'];
    }else if($action=="add"){
        $items = getToDoItems($username);
    }
}else{
    if(isset($_GET['action'])){
            $action=$_GET['action'];
            if($action=="delete"){
            $id=$_GET['id'];

            deleteItem($id);
            $items = getToDoItems($username);
            $action="add";
            include('todoView.php');
        }
    }
    
}


if(isset($_POST['item-submit'])) {
  
    $username = filter_input(INPUT_POST, 'username');
    if ($username == NULL) {
        $username = "";
    }
    $action = $_POST['action'];
    
    display_error("Control Came here");
    
    if($action=="update"){
        $todo_item = $_POST['itemName'];
        $date_due = date('Y-m-d', strtotime($_POST['dueDate']));
        $status = $_POST['status'];
        $id = $_POST['id'];
        $time = $_POST['time'];
        
        if($todo_item == null){
            $todoItem_err = "Please enter a To-DO Item";
            $error = true;
        }
        if($date_due == null){
            $duedate_err = "Please enter a due date";
            $error=true;
        }
        if($time==null){
            $time_err = "Due time is mandatory";
            $error=true;
        }/*else{
            display_error("Time validation");
            $timeErr = isValidTime($time);
            if(!$timeErr){
                $$time_err="Please enter due time in valid format (HH:MM)";
                $error=true;
            }*/
        }
        
        if(!$error){
            display_error("Control is about to update");
            updateitem($id,$todo_item,$date_due,$status,$time);
            
            //display_error($todo_item);
            redirect('todoView.php?action=add');
        }
        
    }else{
        
        $item = $_POST['itemName'];
        $duedate = $_POST['dueDate'];
        $new_date = date('Y-m-d', strtotime($_POST['dueDate']));
        $time = $_POST['time'];
        
        //$errorStatus = validateUserInputs($item,$duedate,$time);
        if($item == null){
            $todoItem_err = "Please enter a To-DO Item";
            $error = true;
        }
        if($duedate == null){
            $duedate_err = "Please enter a due date";
            $error=true;
        }
        if($time==null){
            $time_err = "Due time is mandatory";
            $error=true;
        }/*else{
            $timeErr = isValidTime($time);
            if(!$timeErr){
                $$time_err="Please enter due time in valid format (HH:MM)";
                $error=true;
            }*/
        }
       
        if(!$error){
            
            $insertStatus = addItems($username, $item, $new_date, $time); 
            if($insertStatus != null) 
            {
            $action='add';
            $items = getToDoItems($username);
            redirect('todoView.php');
            }
        }
    
    
    





?>
