<?php include('../view/styleHeader.php') ?>

<?php 
    require('todo.php');
     
?>
<body> 
    <div class="container">
       <!-- <div class="jumbotron">
            <h2 id="navs">Voila!! World</h2>
       <div class="page-header">
              <h1 id="navs">Voila!!</h1>
            </div>
            
        </div> -->
       <div class="col-lg-12">
           <div class="row">
               <h1>Voila!!! Hello <?php echo $firstname;?><?php echo " "?><?php echo $lastname;?></h1>
               
           </div> 
           <hr/>
       </div>
       <div class="row">
           <div class="col-xs-6 col-md-4">
               
               <a href="addItem.php?userid=<?php echo $username;?>" class="btn btn-success">+ Add a New Item</a>
                  
           </div>
       </div>
        <div class="row">
            <div class="col-md-8">
               <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">List of Incomplete To-Do Items:</h3>
                    </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Item</th>
                            <th>Date Created</th>
                            <th>Due Date</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item) : ?>
                                <tr>
                                    <td><?php echo $item['id'];?></td>
                                    <td><?php echo $item['todo_item'];?></td>
                                    <td><?php echo $item['date_created'];?></td>
                                    <td><?php echo $item['date_due'];?></td>
                                    <td><a href="#" class="btn btn-success">Edit</a></td>
                                    <td><a href="#" class="btn btn-warning">Delete</a></td>
                                </tr>    
                            <?php endforeach; ?>
                          
                        </tbody>
                      </table>
                </div>
               </div>
            </div>    
        </div>
       
       <div class="row">
            <div class="col-md-8">
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
                            <th>Date Completed</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
               </div>
            </div>    
        </div> 
       
       <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
       
    </div>
</body>    

<?php include('../view/styleFooter.php') ?>