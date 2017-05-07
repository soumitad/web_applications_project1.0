<?php // Initialize variables to null.
require('../model/dbConnection.php');
require('../model/registerDb.php');
$firstname =""; // Sender Name
$lastname =""; 
$email =""; // Sender's email ID
$firstnameErr ="";
$lastnameErr ="";
$emailErr ="";
$passwordErr ="";
$password ="";
$confpasswordErr ="";
$genderErr ="";
$error = false;

if(isset($_POST['register-submit'])) { // Checking null values in message.
if (empty($_POST["firstname"])){
$firstnameErr = "First Name is required";
$error = true;
}
else
 {
$firstname = test_input($_POST["firstname"]); // check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
{
$firstnameErr = "Only letters and white space allowed";
$error = true;
}
}
if (empty($_POST["lastname"])){
$lastnameErr = "Last Name is required";
$error = true;
}
else
 {
$lastname = test_input($_POST["lastname"]); // check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
{
$lastnameErr = "Only letters and white space allowed";
$error = true;
}
} 

$email=test_input($_POST["email"]);
// Checking null values inthe message.
if (empty($_POST["email"]))
{
$emailErr = "Email address will be your username and is mandatory";
$error = true;
}
else
 {
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
{
$emailErr = "Invalid Email";
$error = true;
}
} 

if (empty($_POST["gender"]))
{
$genderErr = "Gender is mandatory";
$error = true;
}
else
  {
$gender = test_input($_POST["gender"]); // check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$gender))
{
$genderErr = "Only letters and white space allowed";
$error = true;
}
}

$password = test_input($_POST['password']);
if(empty($_POST['password'])){
      $passwordErr = "Password is missing";
  }
  if(empty($_POST['confpassword'])){
      $confpasswordErr = "Please confirm your password";
  }
  
/*$dob = test_input($_POST['birthday']);
if(empty($_POST['birthday'])){
      $passwordErr = "Birthday is missing";
  }*/
  
$phone = test_input($_POST['phonenum']);
if(empty($_POST['phonenum'])){
      $passwordErr = "Phone number is missing";
  }  
  

if(!$error){
    $emailExists = isUserEmailExists($email);
    
    if($emailExists == true){
        $emailErr = "Username already exists in the system, please try logging in to system or click Forgot Password";
    }else{
       $registerationIndicator = registerUser($email, $firstname, $lastname,
                      $password, $gender, $phone);
       
       if($registerationIndicator != null){
           header("Location: registerSuccess.php"); 
       }
    }
}

} // Function for filtering input values.
    function test_input($data)
    {
    $data = trim($data);
    $data =stripslashes($data);
    $data =htmlspecialchars($data);
    return $data;
    }


?>