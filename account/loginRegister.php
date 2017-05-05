<?php 
/*Controller*/
require_once('../util/main.php');
require('../model/dbConnection.php'); 
require('../model/db.php');
//include('Login.php'); 

$action = filter_input(INPUT_POST, 'action'); 
if($action == NULL) 
{ 
  $action = 'show_login_page'; 
} 
if($action == 'show_login_page') 
{ 
  include('Login.php'); 
}else if($action == 'login') 
{ 
   // include('index23.php');
  $username = $_POST['username']; 
  $password = $_POST['password']; 
  $suc = isUserValid($username,$password); 
  if($suc == true) 
  { 
    //$result = getTodoItems($_COOKIE['my_id']); 
     $userDetails = getUserDetails($username);
     $firstname = $userDetails['first_name'];
     $lastname = $userDetails['last_name'];
     $_SESSION['userId'] = $userDetails;
     $_SESSION['first_name'] = $firstname;
     $_SESSION['last_name'] = $lastname;
     //include('todo/todoView.php'); 
     redirect('../todo/todoView.php');
  }else{ 
    //header("Location: badInfo.php"); 
  } 
}/*else if ($action=='register') { 
  //echo "We want create a new account"; 
   //echo "test commit"
    $firstnameErr = $lastnameErr = $emailErr = $genderErr = $passwordErr = $confpasswordErr = "";
   
  if(empty($_POST['firstname'])){
      $firstnameErr = "First Name is missing";
  }
  if(empty($_POST['lastname'])){
      $lastnameErr = "Last Name is missing";
  }
  if(empty($_POST['email'])){
      $emailErr = "Email address will serve as your username and is mandatory";
  }
  if(empty($_POST['gender'])){
      $genderErr = "Gender is missing";
  }
  if(empty($_POST['password'])){
      $passwordErr = "Password is missing";
  }
  if(empty($_POST['confpassword'])){
      $confpasswordErr = "Confirm Password is missing";
  }
  include('Register.php');
  /*if(isset($name)) { 
    $pass = filter_input(INPUT_POST, 'reg_password'); 
    $exist = createUser($name, $pass); 
 
    if ($exist == true) { 
      include ('user_exists.php'); 
    } else { 
      header("Location: index.php"); 
    } 
 
  }*/ 
/*} else if ($action == 'add') { 
  if (isset($_POST['description']) and $_POST['description'] != '') { 
    addTodoItem($_COOKIE['my_id'], $_POST['description']); 
  } 
  $result = getTodoItems($_COOKIE['my_id']); 
  include ('list.php'); 
} else if($action == 'delete'){ 
  if(isset($_POST['item_id'])) { 
    $selected = $_POST['item_id']; 
    deleteTodoItem($_COOKIE['my_id']); 
  }      
  $result = getTodoItems($_COOKIE['my_id']); 
  include ('list.php'); 
}*/ 


?>
