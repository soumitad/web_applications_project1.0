<?php include('../view/styleHeader.php') ?>
<?php include('registerValidation.php') ?>


    
    
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
                                <a href="Login.php">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" class="active" id="register-form-link">Sign Up</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="register-form" action="Register.php" method="post" role="form" style="display: block;">
                                    <input type="hidden" name="action" value="register">
                                    <div class="form-group">
                                        <input type="text" name="firstname" id="firstname" tabindex="1" class="form-control" placeholder="First Name" value="">
                                        <div class="form-group has-error">
                                            <div class="controls">
                                            <span class="help-block"><?php echo $firstnameErr;?></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lastname" id="lastname" tabindex="1" class="form-control" placeholder="Last Name" value="">
                                        <div class="form-group has-error">
                                            <div class="controls">
                                            <span class="help-block"><?php echo $lastnameErr;?></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                        <div class="form-group has-error">
                                            <div class="controls">
                                            <span class="help-block"><?php echo $emailErr;?></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phonenum" id="phonenum" tabindex="2" class="form-control" placeholder="Phone Number">
                                        <div class="form-group has-error">
                                            <div class="controls">
                                            <span class="help-block"><?php echo $phoneErr;?></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="birthday" id="birthday" tabindex="2" class="form-control" placeholder="Birthday">
                                        <div class="form-group has-error">
                                            <div class="controls">
                                            <span class="help-block"><?php echo $birthdayErr;?></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <select name="gender" class="form-control" value="<?php echo $gender; ?>">
                                                                                                    <option value="" selected="selected">SELECT</option>
                                                                                                    <option value="MALE">MALE</option>
                                                                                                    <option value="FEMALE">FEMALE</option>
                                                                                                    
                                        </select>
                                        <div class="form-group has-error">
                                            <div class="controls">
                                            <span class="help-block"><?php echo $genderErr;?></span>
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
                                    <div class="form-group">
                                        <input type="password" name="confpassword" id="confpassword" tabindex="2" class="form-control" placeholder="Confirm Password">
                                        <div class="form-group has-error">
                                            <div class="controls">
                                            <span class="help-block"><?php echo $confpasswordErr;?></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
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
    

 

<?php include('../view/styleFooter.php') ?>