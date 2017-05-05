<?php

function addItem($email, $item, $duedate) {
    global $db;
    
    $query = 'INSERT INTO todos (username, todo_item, date_due, status, date_created) '
            . 'VALUES (:username, :todo, :duedate, :status, CURDATE())';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $email);
    $statement->bindValue(':todo', $item);
    $statement->bindValue(':duedate', $duedate);
    //$statement->bindValue(':birthday', $dob);
    $statement->bindValue(':status', 'PENDING');
    //$statement->bindValue(':date_create', $duedate);
    
    $statement->execute();
    $customer_id = $db->lastInsertId();
    $statement->closeCursor();
    return $customer_id;
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_error_1($error_message);
    }
}

function getToDoItems($email) {
    global $db;
    
     $query = "SELECT * FROM todos where username=:user_id"; 
  try{   
  $statement = $db->prepare($query); 
  $statement->bindValue(':user_id', $email); 
  $statement->execute();
  $user = $statement->fetchAll();
  $statement->closeCursor();
  return $user;
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_error_1($error_message);
    }
}

function display_error_1($error, 
                       $tag = 'i', 
                       $class = '2' ) {
    $opentag  = '<'  . $tag . ' class="' . $class . '">';
    $closetag = '</' . $tag . '>';
    echo $opentag . $error . $closetag;
}

?>

