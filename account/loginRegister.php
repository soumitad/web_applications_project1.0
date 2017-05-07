<?php 
/*Controller*/
require_once('../util/main.php');
require_once('../model/dbConnection.php'); 
require_once('../model/db.php');
//include('Login.php'); 
$usernameErr ="";
$passwordErr ="";
$error= "";
$errorMsg="";
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
  
  if (empty($username)){
    $usernameErr = "Please enter a username";
    $error = true;
    }
  
  $password = $_POST['password'];
  
  if (empty($password)){
    $passwordErr = "Please enter your password";
    $error = true;
    }
  if(!$error){
    $suc = isUserValid($username,$password); 
    if($suc == true) 
    { 
      //$result = getTodoItems($_COOKIE['my_id']); 
       $userDetails = getUserDetails($username);
       $firstname = $userDetails['first_name'];
       $lastname = $userDetails['last_name'];
       $_SESSION['userId'] = $username;
       $_SESSION['first_name'] = $firstname;
       $_SESSION['last_name'] = $lastname;
       //include('todo/todoView.php'); 
       redirect('../todo/todoView.php');
    }else{
        $errorMsg = "The Username and password combination that you entered is incorrect.";
        include('Login.php');
    }
  }else{
      include('Login.php');
  }
  
}


?>
