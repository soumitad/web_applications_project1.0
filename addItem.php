<?php include('view/styleHeader.php') ?>

<body> 
  <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<h3 class="panel-title">Add an Item: </h3>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="todo/todo.php" method="post" role="form" style="display: block;">
                                                                    <input type="hidden" name="action" value="addItem">
									<div class="form-group">
										<input type="text" name="itemName" id="itemName" class="form-control" placeholder="Item Name" value="">
									</div>
									<div class="form-group">
										<input type="text" name="dueDate" id="password" class="form-control" placeholder="Due Date">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Save">
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
 
<?php include('view/styleFooter.php') ?>