<?php include('../view/styleHeader.php') ?>
<?php 
$usernameErr ="";
$passwordErr ="";
$error= "";
$errorMsg="";
?>
<body> 
  <div class="container">
    	<div class="row">
                        <div class="col-md-6">
                            <div class="row">
                               <img src="../img/to_do_list.jpg" class="img-responsive"> 
                            </div>
                        </div>
                        <div class="col-md-1">

                        </div>
			<div class="col-md-5">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="Register.php">Sign Up</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
                                                            <form id="login-form" action="loginRegister.php" method="post" role="form" style="display: block;">
                                                                <div class="form-group has-error">
                                                                                    <div class="controls">
                                                                                        <span class="help-block"><?php echo $errorMsg;?></span>
                                                                                    </div>
                                                                              </div>
                                                                    <input type="hidden" name="action" value="login">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                                                                <div class="form-group has-error">
                                                                                    <div class="controls">
                                                                                        <span class="help-block"><?php echo $usernameErr;?></span>
                                                                                    </div>
                                                                              </div>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                                                                <div class="form-group has-error">
                                                                                    <div class="controls">
                                                                                        <span class="help-block"><?php echo $passwordErr;?></span>
                                                                                    </div>
                                                                              </div>
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="passwordRecover.php" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
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