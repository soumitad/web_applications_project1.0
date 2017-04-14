<?php
 
 function deleteTodoItem($user_id, $todo_id) { 
  global $db; 
  $query = 'DELETE FROM todos WHERE id = :todo_id and user_id = :user_id'; 
  $statement = $db->prepare($query); 
  $statement->bindValue(':user_id', $user_id); 
  $statement->bindValue(':todo_text', $todo_id); 
  $statement->execute(); 
  $statement->closeCursor(); 
} 

function addTodoItem($user_id, $todo_text) { 
  global $db; 
  $query = "INSERT INTO todos(user_id, todo_item) values (:user_id, :todo_text)"; 
  $statement = $db->prepare($query); 
  $statement->bindValue(':user_id', $user_id); 
  $statement->bindValue(':todo_text', $todo_text); 
  $statement->execute(); 
  $statement->closeCursor(); 
  return true; 
} 
                                                     


