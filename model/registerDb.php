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

function registerUser($email, $first_name, $last_name,
                      $passwordHash, $gender, $phone) {
    global $db;
    $passwordHash1 = sha1($email . $passwordHash);
    $query = 'INSERT INTO user_profile (username, first_name, last_name, phone, gender, passwordHash) '
            . 'VALUES (:username, :firstname, :lastname, :phone, :gender, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $email);
    $statement->bindValue(':firstname', $first_name);
    $statement->bindValue(':lastname', $last_name);
    //$statement->bindValue(':birthday', $dob);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':password', $passwordHash1);
    $statement->execute();
    $customer_id = $db->lastInsertId();
    $statement->closeCursor();
    return $customer_id;
}

?>
                                                     
    

