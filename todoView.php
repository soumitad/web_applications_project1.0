<?php include('styleHeader.php') ?>
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
               <hr>
           </div> 
           <hr/>
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
                          <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><a href="#" class="btn btn-success">Edit</a></td>
                            <td><a href="#" class="btn btn-warning">Delete</a></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td><a href="#" class="btn btn-success">Edit</a></td>
                            <td><a href="#" class="btn btn-warning">Delete</a></td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><a href="#" class="btn btn-success">Edit</a></td>
                            <td><a href="#" class="btn btn-warning">Delete</a></td>
                          </tr>
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
    </div>
</body>    

<?php include('styleFooter.php') ?>