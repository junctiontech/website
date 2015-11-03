<!--Signup page starts-->
<body class="login fade-in" data-page="signup">
    <!-- START SIGNUP BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="<?=base_url();?>assets/img/account/register-icon.png" alt="Register icon" />
                    </div>
                    <div class="login-logo">
                        <a href="javascript:;">
                            <img src="<?=base_url();?>assets/img/account/login-logo.png" alt="Company Logo" />
                        </a>
                    </div>
                    <hr>
                    <div class="login-form">
                        <!-- Start Error box -->
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
                        <!-- End Error box -->
                        <form action="<?=base_url();?>home/Register" method="post" parsley-validate>
                            <input type="text" placeholder="Name" name="name"  parsley-minlength="3"  class="form-control" required/>
                            <input type="mobile" id="reg-mobile" onblur="check_mobile(this,<?=(!empty($id))?$id:'0'?>)" name="mobile"  parsley-type="phone"  placeholder="Mobile No" class="form-control" required/>
							 <input type="email" id="reg-email" parsley-type="email" onblur="check_email(this,<?=(!empty($id))?$id:'0'?>)"  name="email" placeholder="Email" class="form-control" required>
							
                            <input type="text" id="reg-imei" onblur="check_imei(this,<?=(!empty($id))?$id:'0'?>)" name="imei_no" placeholder="IMEI No" class="input-field" required/>
                            <input type="password"  placeholder="Password" class="input-field" required/>
                            <input type="password" name="password" placeholder="Confirm Password" class="input-field" required/>
                            <label class="checkbox">
                                <!--comment by javed 31 march 
                                <input type="checkbox" value="option1" required>I agree to something I will never read -->
                            </label>
                            <button type="submit" class="btn btn-login">Sign Up</button>
                        </form>
                        <div class="login-links">
                            <a href="<?=base_url();?>home/password_forgot">Forgot password?</a>
                            <br>
                            <a href="<?=base_url();?>home">Already have an account? <strong>Sign In</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SIGNUP BOX -->
	<!--Signup page ends-->