<?php 
/*Controller*/ 
require('dbConnection.php'); 
require('db.php');
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
  display_error($username);
  display_error($password);
  $suc = isUserValid($username,$password); 
  if($suc == true) 
  { 
    //$result = getTodoItems($_COOKIE['my_id']); 
    include ('index23.php'); 
  }else{ 
    //header("Location: badInfo.php"); 
  } 
}else if ($action=='register') { 
  //echo "We want create a new account"; 
   //echo "test commit"
    $firstname = $lastname = $email = $gender = $password = $confpassword = "";
   
  if(empty($_POST['firstname'])){
      $firstname = "First Name is missing";
  }
  if(empty($_POST['lastname'])){
      $lastname = "Last Name is missing";
  }
  if(empty($_POST('email'))){
      $email = "Email address will serve as your username and is mandatory";
  }
  if(empty($_POST('gender'))){
      $gender = "Gender is missing";
  }
  if(empty($_POST('password'))){
      $password = "Password is missing";
  }
  if(empty($_POST('confpassword'))){
      $confpassword = "Confirm Password is missing";
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
}/* else if ($action == 'add') { 
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
