<?php include('../view/styleHeader.php') ?>
<?php 
require('../util/main.php');

$username = $_SESSION['userId'];

if(isset($_GET['action'])){
    $action= $_GET['action'];
   if($action=="update"){
       $id = $_GET['id'];
   } 
}else{
    $action="add";
}
include('todo.php');

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
								<form id="login-form" action="addEditItem.php" method="post" role="form" style="display: block;">
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
                                                                            <div class="form-group has-error">
                                                                                <div class="controls">
                                                                                    <span class="help-block"><?php echo $todoItem_err;?></span>
                                                                                </div>
                                                                            </div>
									</div>
									<div class="form-group">
                                                                            <?php if ($action == "update"): ?>
                                                                                <label for="usr">Due Date:</label>
										<input type="date" name="dueDate" id="duedate" class="form-control" value="<?php echo $duedate; ?>" >
                                                                            <?php else: ?>
                                                                                <input type="date" name="dueDate" id="duedate" class="form-control" placeholder="Due Date" value="<?php echo date('Y-m-d'); ?>" >
                                                                            <?php endif; ?>
                                                                            <div class="form-group has-error">
                                                                                <div class="controls">
                                                                                    <span class="help-block"><?php echo $duedate_err;?></span>
                                                                                </div>
                                                                            </div>
									</div>
                                                                        <div class="form-group">
                                                                            <?php if ($action == "update"): ?>
                                                                                <label for="usr">Time(HH:MM):</label>
										<input type="text" name="time" id="time" class="form-control" value="<?php echo $time; ?>" >
                                                                            <?php else: ?>
                                                                                <input type="text" name="time" id="time" class="form-control" placeholder="Time(HH:MM)" value="" >
                                                                            <?php endif; ?>
                                                                            <div class="form-group has-error">
                                                                                <div class="controls">
                                                                                    <span class="help-block"><?php echo $time_err;?></span>
                                                                                </div>
                                                                            </div>
									</div>
                                                                        <?php if ($action == "update"): ?>
                                                                        <label for="usr">Status:</label>
                                                                        <div class="form-group">
                                                                                <select name="status" class="form-control" value="<?php echo $status; ?>">
                                                                                                    <option value="PENDING">PENDING</option>
                                                                                                    <option value="COMPLETED">COMPLETED</option>
                                                                                                    
                                                                                </select>
									<!--	<input type="text" name="status" id="status" class="form-control" value=""> -->
									</div>
                                                                        <?php endif; ?>
									
									<div class="form-group">
										<div class="row">
                                                                                        <div class="col-sm-2"></div>
                                                                                            <div class="col-sm-5"><input type="submit" name="item-submit" id="item-submit" tabindex="4" class="form-control btn btn-login" value="Save"></div>
                                                                                            <div class="col-sm-5"><a href="todoView.php" class="form-control btn btn-warning">Cancel</a></div>
											<div class="btn-group">
                               
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