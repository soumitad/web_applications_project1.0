<?php?>
<html>
<body> 
  <h2> This is the login page</h2> 
  <form method = "post" action="index.php"> 
  <strong>Username:</strong><input type="test" name="reg_username" value=""/><br><br> 
  <strong>Password:</strong><input type="password" name="reg_password" value=""/><br><br> 
  <input type ="hidden" name="action" value="test_user"><br> 
  <input type="submit" value="Login"/> 
  </form> 
 
  <form action="Register.php"> 
    <input type="submit" value="Register"> 
  </form> 
</body> 
</html> 
