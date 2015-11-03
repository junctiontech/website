<!--Login page starts-->
<body class="login fade-in" data-page="login">
    <!-- BEGIN LOGIN BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-6 ">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="<?=base_url();?>assets/img/account/user-icon.png" alt="Key icon">
                    </div>
                    
                    <div class="login-logo">
                        <img src="<?=base_url();?>assets/img/account/login-logo.png" alt="Company Logo">
                    </div>

                    <hr>
                    <div class="login-form">
                        <!-- BEGIN ERROR BOX -->
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
                        <!-- END ERROR BOX -->
                        <form action="<?=base_url();?>home/login" method="post">
                            <input type="text" placeholder="Mobile No" class="input-field form-control user" name="mobile" />
                            <input name="password" type="password" placeholder="Password" class="input-field form-control password" />
                            <input value="Login" type="submit" class="btn btn-login"/>
							
                        </form>
                        <div class="login-links">
                            <a href="<?=base_url();?>home/password_forgot">Forgot password?</a>
                            <br>
                            <a href="<?=base_url();?>home/signup">Don't have an account? <strong>Sign Up</strong></a>
                        </div>
                    </div>
                </div>
                <!-- Comment by javed 31 March
                <div class="social-login row">
                    <div class="fb-login col-lg-6 col-md-12 animated flipInX">
                        <a href="#" class="btn btn-facebook btn-block">Connect with <strong>Facebook</strong></a>
                    </div>
                    <div class="twit-login col-lg-6 col-md-12 animated flipInX">
                        <a href="#" class="btn btn-twitter btn-block">Connect with <strong>Twitter</strong></a>
                    </div>
                </div> -->
            </div>
<div class="col-sm-6 col-md-6">
<table class="table" style="margin-top:70px;">
                                        <thead>
                                            <tr class="active">
                                                <th>#</th>
                                                <th>Role</th>
                                                <th>Mobile No.</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="active">
                                                <td>1</td>
                                                <td>Admin</td>
                                                <td>8817507639</td>
                                                <td>123</td>
                                            </tr>
                                            <tr class="active" >
                                                <td>2</td>
                                                <td>Data Collector</td>
                                                <td>7894561230</td>
                                                <td>123</td>
                                            </tr>
                                            <tr class="active">
                                                <td>3</td>
                                                <td>Data Validator</td>
                                                <td>9630709443</td>
                                                <td>123</td>
                                            </tr>
                                            <tr class="active">
                                                <td>4</td>
                                                <td>Vrm Integrator</td>
                                                <td>12345678</td>
                                                <td>123</td>
                                            </tr>
                                        </tbody>
                                    </table>
</div>
        </div>
    </div>
    <!-- END LOCKSCREEN BOX -->
 <!--Login page ends-->  