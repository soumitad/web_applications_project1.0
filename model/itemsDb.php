<?php

function addItems($email, $item, $duedate,$time) {
    global $db;
    
    $query = 'INSERT INTO todos (username, todo_item, date_due, status, date_created,duedate_time) '
            . 'VALUES (:username, :todo, :duedate, :status, CURDATE(),:time)';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $email);
    $statement->bindValue(':todo', $item);
    $statement->bindValue(':duedate', $duedate);
    //$statement->bindValue(':birthday', $dob);
    $statement->bindValue(':status', 'PENDING');
    $statement->bindValue(':time', $time);
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

function updateitem($id, $todoitem, $duedate, $status, $time) {
    global $db;
    
    if($status=="COMPLETED"){
        $query = 'UPDATE todos SET
    todo_item = :todo_item,
    date_due = :date_due,
    date_completed = CURDATE(),
    status = :status,
    duedate_time = :time
    WHERE id = :id';
    }else{
        $query = 'UPDATE todos SET
    todo_item = :todo_item,
    date_due = :date_due,
    status = :status,
    duedate_time = :time
    WHERE id = :id';
    }
    
    
    $statement = $db->prepare($query);
    $statement->bindValue(':todo_item', $todoitem);
    $statement->bindValue(':date_due', $duedate);
    $statement->bindValue(':status', $status);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':time', $time);
    $statement->execute();
    $statement->closeCursor();
    }

function getToDoItems($email) {
    global $db;
    
  $query = "SELECT * FROM todos where username=:user_id order by date_created"; 
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

