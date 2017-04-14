<?php?>
 
<html> 
<head> 
  <title>Register</title> 
</head> 
 
<body> 
  <h2>This is the register page</h2> 
  <form method="post" action="index.php"> 
    <strong>Username: </strong> <input type="text" name="reg_username" value="" /> <br> <br> 
    <strong>Password: </strong> <input type="password" name="reg_password" value="" /> <br> <br> 
    <input type="hidden" name="action" value="registrar" /> <br> <br> 
    <input type="submit" value="register" /> 
  </form> 
  <form action="login.php" method="post"> 
      <input type="submit" value="try to login" />
  </form> 
</body> 
</html> 
