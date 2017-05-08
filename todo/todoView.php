<?php require_once('../util/main.php'); include('../view/styleHeader.php') ?>
<?php include('../view/sidebar.php') ?>

<?php
    require_once('../model/dbConnection.php');
    $action="add";
    require_once('../model/addItem.php');
    $username = $_SESSION['userId'];
    $firstname = $_SESSION['first_name'];
    $lastname = $_SESSION['last_name'];
    //require('todo.php');
     $items = getToDoItems($username);
?>

    
       <!-- <div class="jumbotron">
            <h2 id="navs">Voila!! World</h2>
       <div class="page-header">
              <h1 id="navs">Voila!!</h1>
            </div>
            
        </div> -->
       <div class="col-md-8 col-md-offset-3">
           <div class="row">
               <h1>Hello <?php echo $firstname;?><?php echo " "?><?php echo $lastname;?></h1>
               
           </div> 
           <hr/>
       </div>
       <div class="row">
           <div class="col-md-8 col-md-offset-3">
               
               <a href="addEditItem.php?userid=<?php echo $username;?>&action=add" class="btn btn-success">+ Add a New Item</a>
               <br/>   
           </div>
           <br/>
       </div>
       <div class="row">
           <div class="col-lg-12">
               
           </div>
       </div>
       <div class="row">
           <div class="col-lg-12">
               
           </div>
       </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
               <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">List of Incomplete To-Do Items:</h3>
                    </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                           <!-- <th>#</th> -->
                            <th>Item</th>
                            <th>Due Date</th>
                            <th>Due Time</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item) : ?>
                              <?php if ($item['status'] == "PENDING"): ?>
                                <tr>
                                 <!--   <td></td> -->
                                    <td><?php echo $item['todo_item'];?></td>
                                    <td><?php echo $item['date_due'];?></td>
                                    <td><?php echo $item['duedate_time'];?></td>
                                    <td><a href="addEditItem.php?action=update&id=<?php echo $item['id']?>" class="btn btn-success">Edit</a></td>
                                    <td><a href="todo.php?action=delete&id=<?php echo $item['id']?>" class="btn btn-warning">Delete</a></td>
                                </tr>
                               <?php endif; ?>
                            <?php endforeach; ?>
                          
                        </tbody>
                      </table>
                </div>
               </div>
            </div>    
        </div>
       
       <div class="row">
            <div class="col-md-8 col-md-offset-3">
               <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Completed Items:</h3>
                    </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Item</th>
                            <th>Date Created</th>
                            <th>Date Due</th>
                            <th>Date Completed</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($items as $item) : ?>
                            <?php if ($item['status'] == "COMPLETED"): ?>
                                <tr>                                
                                    <td><?php echo $item['id'];?></td>
                                    <td><?php echo $item['todo_item'];?></td>
                                    <td><?php echo $item['date_created'];?></td>
                                    <td><?php echo $item['date_due'];?></td>
                                    <td><?php echo $item['date_completed'];?></td>                     
                                </tr>
                            <?php endif; ?>
                           <?php endforeach; ?> 
                        </tbody>
                      </table>
                </div>
               </div>
            </div>    
        </div> 
       

       
    
    

<?php include('../view/styleFooter.php') ?>