<?php

function isUserValid($user_id, $pass){
   global $db; 
  $query = "SELECT 1 AS ID FROM users where user_id=:user_id and BINARY passwordHash=:pass"; 
  $statement = $db->prepare($query); 
  $statement->bindValue(':user_id', $user_id); 
  $statement->bindValue(':pass', $pass);
  $statement->execute();
  $userExists = $statement->fetch();
  $statement->closeCursor();
 
  if($userExists['ID'] == 1){
      return true;
  }else{
      return false;
  }  
  
}

function display_error($error, 
                       $tag = 'i', 
                       $class = '2' ) {
    $opentag  = '<'  . $tag . ' class="' . $class . '">';
    $closetag = '</' . $tag . '>';
    echo $opentag . $error . $closetag;
}
?>
                                                     
    

