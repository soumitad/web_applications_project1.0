<?php include('../view/styleHeader.php') ?>
<?php 
require_once('../util/main.php');
$username = $_SESSION['userId'];
$action= $_GET['action'];
if(isset($action)){
   if($action=="update"){
       $id = $_GET['id'];
   } 
}
require_once('todo.php');
?>
<body> 
  <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
                                                <?php if ($action == "update"): ?>
							<h3 class="panel-title">Edit Item: </h3>
                                                        
                                                <?php else: ?>
                                                        <h3 class="panel-title">Add an Item: </h3>
                                                        
                                                <?php endif; ?>
						
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="todo.php" method="post" role="form" style="display: block;">
                                                                    <input type="hidden" name="action" value="<?php echo $action;?>">
                                                                    <input type="hidden" name="username" value="<?php echo $username;?>">
                                                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                                                    
									<div class="form-group">
                                                                            <?php if ($action == "update"): ?>
                                                                                <label for="usr">Item Name:</label>
										<input type="text" name="itemName" id="itemName" class="form-control" value="<?php echo $todo_item; ?>">
                                                                            <?php else: ?>
                                                                                <input type="text" name="itemName" id="itemName" class="form-control" placeholder="Item Name" value="">
                                                                            <?php endif; ?>
									</div>
									<div class="form-group">
                                                                            <?php if ($action == "update"): ?>
                                                                                <label for="usr">Due Date:</label>
										<input type="date" name="dueDate" id="duedate" class="form-control" value="<?php echo $duedate; ?>" >
                                                                            <?php else: ?>
                                                                                <input type="date" name="dueDate" id="duedate" class="form-control" placeholder="Due Date" value="<?php echo date('Y-m-d'); ?>" >
                                                                            <?php endif; ?>    
									</div>
                                                                        <?php if ($action == "update"): ?>
                                                                        <label for="usr">Status:</label>
                                                                        <div class="form-group">
                                                                                <select name="status" class="form-control" value="<?php echo $status; ?>">
                                                                                                    <option value="one">PENDING</option>
                                                                                                    <option value="two">COMPLETED</option>
                                                                                                    
                                                                                </select>
									<!--	<input type="text" name="status" id="status" class="form-control" value=""> -->
									</div>
                                                                        <?php endif; ?>
									
									<div class="form-group">
										<div class="row">
											<div class="btn-group">
                                                                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Save">
                                                                                                <a href="todoView.php" class="btn btn-warning">Cancel</a>
											</div>
										</div>
									</div>
									
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</body> 
 
<?php include('../view/styleFooter.php') ?>