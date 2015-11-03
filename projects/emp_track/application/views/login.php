<!-- login page vie added by palak on 21st march -->
<body class="page-body login-page login-form-fall" data-url="">


	<!-- This is needed when you send requests via Ajax --><script type="text/javascript">
	var baseurl = '';
	</script>

	<div class="login-container">
		
		<div class="login-header login-caret">
			
			<div class="login-content">
				
				<a href="javascript:;">
					<img src="assets/images/logo@2x.png" width="120" alt="" />
				</a>
				<p class="description"><font color="white">Dear user, log in to access the admin area!</font></p>
				
				<!-- progress bar indicator -->
				<div class="login-progressbar-indicator">
					<h3>43%</h3>
					<span>logging in...</span>
				</div>
			</div>
			
		</div>
		
		<div class="login-progressbar">
			<div></div>
		</div>
		
		<div class="login-form">
			
			<div class="login-content">
				
				<div class="form-login-error">
					<h3>Invalid login</h3>
					<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
				</div>
				
				<form method="post" action="<?=base_url()?>home/emp_detail">
					
					<div class="form-group">
						
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-user"></i>
							</div>
							
							<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
						</div>
						
					</div>
					
					<div class="form-group">
						
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-key"></i>
							</div>
							
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
						</div>
						
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-login">
							<i class="entypo-login"></i>
							Login
						</button>
						
					</div>
					<!-- Implemented in v1.1.4 -->				
					
				<!-- 
				
				You can also use other social network buttons
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left twitter-button">
						Login with Twitter
						<i class="entypo-twitter"></i>
					</button>
					
				</div>
				
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left google-button">
						Login with Google+
						<i class="entypo-gplus"></i>
					</button>
					
				</div> -->				
			</form>
			
					<div class="form-group">
					<a href="<?=base_url()?>home/emp_dashboard">
						<button class="btn btn-primary btn-block btn-login">
							<i class="entypo-login"></i>
							Login As Emp
						</button>
					</a>	
					</div>
					<div class="form-group">
					<a href="<?=base_url()?>home/role">
						<button class="btn btn-primary btn-block btn-login">
							<i class="entypo-login"></i>
							Login As Role Manager
						</button>
					</a>
			</div>
			<div class="login-bottom-links">    
				
				<a href="<?=base_url()?>home/forgotpassword" class="link">Forgot your password?</a>
				
				<br />
				
			</div>

			<div>    
				
				<a href="<?=base_url()?>home/registration" class="link"><STRONG>Create an account</STRONG></a>
				
				<br />
				
			</div>
			
		</div>
		
	</div>
	
</div>
