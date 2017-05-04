<?php

function isUserValid($user_id, $pass){
   global $db; 
   $passwordHash1 = sha1($user_id . $pass);
  $query = "SELECT 1 AS ID FROM user_profile where username=:user_id and BINARY passwordHash=:pass"; 
  $statement = $db->prepare($query); 
  $statement->bindValue(':user_id', $user_id); 
  $statement->bindValue(':pass', $passwordHash1);
  $statement->execute();
  $userExists = $statement->fetch();
  $statement->closeCursor();
 
  if($userExists['ID'] == 1){
      return true;
  }else{
      return false;
  }  
  
}

function getUserDetails($email){
    global $db; 
  $query = "SELECT * FROM user_profile where username=:user_id"; 
  $statement = $db->prepare($query); 
  $statement->bindValue(':user_id', $email); 
  $statement->execute();
  $user = $statement->fetch();
  $statement->closeCursor();
  return $user;
}

function display_error($error, 
                       $tag = 'i', 
                       $class = '2' ) {
    $opentag  = '<'  . $tag . ' class="' . $class . '">';
    $closetag = '</' . $tag . '>';
    echo $opentag . $error . $closetag;
}
?>
                                                     
    

