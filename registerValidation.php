<?php // Initialize variables to null.
$firstname =""; // Sender Name
$lastname =""; 
$email =""; // Sender's email ID
$firstnameErr ="";
$lastnameErr ="";
$emailErr ="";
$passwordErr ="";
$confpasswordErr ="";
$genderErr ="";

if(isset($_POST['register-submit'])) { // Checking null values in message.
if (empty($_POST["firstname"])){
$firstnameErr = "First Name is required";
}
else
 {
$firstname = test_input($_POST["firstname"]); // check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
{
$firstnameErr = "Only letters and white space allowed";
}
}
if (empty($_POST["lastname"])){
$lastnameErr = "Last Name is required";
}
else
 {
$lastname = test_input($_POST["lastname"]); // check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
{
$lastnameErr = "Only letters and white space allowed";
}
} 

// Checking null values inthe message.
if (empty($_POST["email"]))
{
$emailErr = "Email address will be your username and is mandatory";
}
else
 {
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
{
$emailErr = "Invalid Email";
}
} 

if (empty($_POST["gender"]))
{
$genderErr = "Gender is mandatory";
}
else
  {
$gender = test_input($_POST["gender"]); // check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$gender))
{
$genderErr = "Only letters and white space allowed";
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