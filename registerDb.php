<?php

function isUserEmailExists($email){
   global $db; 
  $query = "SELECT 1 AS ID FROM user_profile where username=:user_id"; 
  $statement = $db->prepare($query); 
  $statement->bindValue(':user_id', $email); 
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
                                                     
    

