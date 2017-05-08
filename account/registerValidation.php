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
$confPassword ="";
$confpasswordErr ="";
$genderErr ="";
$phoneErr ="";
$birthday;
$birthdayErr ="";
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
$lastname = test_input($_POST["lastname"]);
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


$gender = test_input($_POST["gender"]); 
if ($gender=="")
{
$genderErr = "Please select the gender from the drop down list";
$error = true;
}


$password = test_input($_POST['password']);
if(empty($_POST['password'])){
      $passwordErr = "Password is missing";
      $error = true;
  }
  $confpassword = test_input($_POST['confpassword']);
  if(empty($_POST['confpassword'])){
      $confpasswordErr = "Please confirm your password";
      $error = true;
  }
  
  if($password === $confpassword){
      //Do nothing
  }else{
      $confpasswordErr = "Passwords and Confirm password dont match";
      $error = true;
  }
  
$dob = test_input($_POST['birthday']);
$new_date = date('Y-m-d', strtotime($_POST['birthday']));
if(empty($_POST['birthday'])){
      $birthdayErr = "Birthday is missing";
      $error = true;
  }else{
      if(!isRealDate($_POST['birthday'])){
          $birthdayErr = "Please enter the birthday in a valid date format using the calendar date picker";
          $error = true;
      }
      
      
  }
  
$phone = test_input($_POST['phonenum']);
if(empty($_POST['phonenum'])){
      $phoneErr = "Phone number is missing";
      $error = true;
  }  
  

if(!$error){
    $emailExists = isUserEmailExists($email);
    
    if($emailExists == true){
        $emailErr = "Username already exists in the system, please try logging in to system or click Forgot Password";
    }else{
       $registerationIndicator = registerUser($email, $firstname, $lastname,
                      $password, $gender, $phone,$new_date);
       
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
    
    function isRealDate($date) 
    { 
        if (false === strtotime($date)) 
        { 
            return false;
        } 
        else
        { 
            list($year, $month, $day) = explode('-', $date); 
            if (false === checkdate($month, $day, $year)) 
            { 
                return false;
            } 
        } 
        return true;
    }


?>