<?php

function addItems($email, $item, $duedate) {
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

function deleteItem($id) {
    global $db;
    
    $query = 'DELETE FROM todos WHERE id=:id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
    }

function updateitem($id, $todoitem, $duedate, $status) {
    global $db;
    $query = 'UPDATE todos SET
    todo_item = :todo_item,
    date_due = :date_due,
    status = :status
    WHERE id = :id';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':todo_item', $todoitem);
    $statement->bindValue(':date_due', $duedate);
    $statement->bindValue(':status', $status);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
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


function getToDoItem($id) {
  global $db;
  $query = "SELECT * FROM todos WHERE id=:id"; 
  $statement = $db->prepare($query); 
  $statement->bindValue(':id', $id); 
  $statement->execute();
  $user = $statement->fetch();
  $statement->closeCursor();
  return $user;
}

function display_error_1($error, 
                       $tag = 'i', 
                       $class = '2' ) {
    $opentag  = '<'  . $tag . ' class="' . $class . '">';
    $closetag = '</' . $tag . '>';
    echo $opentag . $error . $closetag;
}



?>

