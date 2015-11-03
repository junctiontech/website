
<body>

<div class="wrap">
	
	<!-- Logo and Navigation --><div class="site-header-container container">

	<div class="row">
	
		<div class="col-md-12">
			
			<header class="site-header">
			
				<section class="site-logo">
				
					<a href="index.html">
						<img src="<?php echo base_url(); ?>assets_user/images/logo@2x.png" width="120" />
					</a>
					
				</section>
				
				<nav class="site-nav">
					
					
					<ul class="main-menu hidden-xs" id="main-menu">
						<li class="active">
							<a href="<?php echo base_url(); ?>home">
								<span>Home</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>home/about">
								<span>About Us</span>
							</a>
						</li>
						
						<li>
							<a href="<?php echo base_url(); ?>home/contact">
								<span>Contact</span>
							</a>
						</li>
							

							
  						<button type="button" class="btn btn-primary"> <a href="http://192.168.1.110:8080/emp_track/"><font color="white">Sign Up</font></a></button>

					</ul>
					
				
					<div class="visible-xs">
						
						<a href="javascript:;" class="menu-trigger">
							<i class="entypo-menu"></i>
						</a>
						
					</div>
				</nav>
				
			</header>
			
		</div>
		
	</div>
	
</div>	
	<!-- Breadcrumb --><section class="breadcrumb">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-sm-12">
				
				<h1>Registration</h1>
				
							<ol class="breadcrumb bc-3">
								<li>
								<a href="index.html"><i class="entypo-home"></i>Home</a>
							</li>
							<li class="active">
					
									<a href="index.html">Registration</a>
							</li>
							</ol>
							
			</div>
			
		</div>
		
	</div>
	
</section>
<section class="portfolio-container">
	
	<div class="container">
		
<div class="well well-sm">
	<h4>Please fill the details to register with us.</h4>
</div>

<form id="rootwizard-2" method="post" action="<?php echo base_url(); ?>home/thankyou" class="form-wizard validate">
	
	<div class="steps-progress">
		<div class="progress-indicator"></div>
	</div>
	
	<ul>
		<li class="active">
			<a href="#tab2-1" data-toggle="tab"><span>1</span>Personal Info</a>
		</li>
		<li>
			<a href="#tab2-2" data-toggle="tab"><span>2</span>Education</a>
		</li>
		<li>
			<a href="#tab2-3" data-toggle="tab"><span>3</span>Skills</a>
		</li>
		<li>
			<a href="#tab2-4" data-toggle="tab"><span>4</span>Work Experience</a>
		</li>

	</ul>
	
	<div class="tab-content">
		<div class="tab-pane active" id="tab2-1">
			
			<div class="row">
				
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="full_name">Full Name</label>
						<input class="form-control" name="full_name" id="full_name" data-validate="required" placeholder="Your full name" />
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="birthdate">Date of Birth</label>
						<input class="form-control" name="birthdate" id="birthdate" data-validate="required" data-mask="date" placeholder="Pre-formatted birth date" />
					</div>
				</div>
				
			</div>
			
			<div class="form-group">
				<label class="control-label">Enter Email</label>
				
				<div class="input-group">
					<div class="input-group-addon">
						<i class="entypo-mail"></i>
					</div>
					
					<input type="text" class="form-control" name="email" data-validate="required,email" placeholder="Enter your email" />
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label">Choose Password</label>
						
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-key"></i>
							</div>
							
							<input type="password" class="form-control" name="password" id="password" data-validate="required" placeholder="Enter strong password" />
						</div>
					</div>
				</div>
				
				<div class="col-md-6">						
					<div class="form-group">
						<label class="control-label">Repeat Password</label>
						
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-cw"></i>
							</div>
							
							<input type="password" class="form-control" name="password" id="password" data-validate="required,equalTo[#password]" data-message-equal-to="Passwords doesn't match." placeholder="Confirm password" />
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="row">
				
				<div class="col-md-5">
					<div class="form-group">
						<label class="control-label" for="city">City</label>
						<input class="form-control" name="city" id="city" data-validate="required" placeholder="Current city" />
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="state">State</label>
						
						<select name="test" class="form-control">
							<optgroup label="United States">
								<option value="1">Alabama</option>
								<option value="2">Boston</option>
								<option value="3">Ohaio</option>
								<option value="4">New York</option>
								<option value="5">Washington</option>
							</optgroup>
						</select>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label" for="zip">Zip</label>
						<input class="form-control" name="zip" id="zip" data-mask="** *** **" data-validate="required" placeholder="Zip Code" />
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label">Gender</label>
						
						<br />
						
						<div class="make-switch switch-small" data-on-label="M" data-off-label="F">
						    <input type="checkbox" checked>
						</div>
					</div>	
				</div>
<div class="col-md-6">				
					<div class="form-group">
						<label class="control-label">Upload Resume</label>
						
						<br />
						
					<div class="fileinput fileinput-new" data-provides="fileinput">
								<span class="btn btn-info btn-file">
									<span class="fileinput-new">Select file</span>
									<span class="fileinput-exists">Change</span>
									<input type="file" name="...">
								</span>
								<span class="fileinput-filename"></span>
								<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
							</div>
					</div>		
				</div>
			</div>
			
		</div>
		
		<div class="tab-pane" id="tab2-2">
			
				<strong>Higher Secondary School</strong>
			<br />
			<br />
			
			<div class="row">
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="prim_subject">Subject</label>
						<input class="form-control" name="prim_subject" id="prim_subject" data-validate="require" placeholder="High School" />
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="prim_school">School Name</label>
						<input class="form-control" name="prim_school" id="prim_school" placeholder="Which school did you attended" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="prim_date_start">Start Date</label>
						<input class="form-control datepicker" name="prim_date_start" id="prim_date_start" data-start-view="2" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="prim_date_end">End Date</label>
						<input class="form-control datepicker" name="prim_date_end" id="prim_date_end" data-start-view="2" placeholder="(Optional)" />
					</div>
				</div>
				
			</div>
			
			<br />
			
			<strong>Graduation</strong>
			<br />
			<br />
			
			<div class="row">
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="second_subject">Subject/Stream</label>
						<input class="form-control" name="second_subject" id="second_subject" data-validate="require" placeholder="Graduation Degree" />
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="second_school">College Name</label>
						<input class="form-control" name="second_school" id="second_school" placeholder="Which school did you attended" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="second_date_start">Start Date</label>
						<input class="form-control datepicker" name="second_date_start" id="second_date_start" data-start-view="2" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="second_date_end">End Date</label>
						<input class="form-control datepicker" name="second_date_end" id="second_date_end" data-start-view="2" placeholder="(Optional)" />
					</div>
				</div>
				
			</div>
			
			<br />
					<strong>Post-Graduation</strong>
			<br />
			<br />
			
			<div class="row">
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="second_subject">Subject/Stream</label>
						<input class="form-control" name="second_subject" id="second_subject" data-validate="require" placeholder="Post-Graduation Degree" />
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="second_school">College Name</label>
						<input class="form-control" name="second_school" id="second_school" placeholder="Which school did you attended" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="second_date_start">Start Date</label>
						<input class="form-control datepicker" name="second_date_start" id="second_date_start" data-start-view="2" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="second_date_end">End Date</label>
						<input class="form-control datepicker" name="second_date_end" id="second_date_end" data-start-view="2" placeholder="(Optional)" />
					</div>
				</div>
				
			</div>
			
			<br />
			<div class="row">
				
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label" for="other_qualifications"><strong>Other Qualifications/Certifications</strong></label>
						<textarea class="form-control autogrow" name="other_qualifications" id="other_qualifications" placeholder="List one subject per row"></textarea>
					</div>
				</div>
				
			</div>
			
			
		</div>
		
		<div class="tab-pane" id="tab2-3">
				<strong>Knowledge Skills</strong>
			<br />
			<br />
			
			<div class="row">
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="prim_subject">Operating System</label>
						<select class="form-control">
								<option>Option 1</option>
								<option>Option 2</option>
								<option>Option 3</option>
								<option>Option 4</option>
								<option>Option 5</option>
							</select>
					</div>
				</div>
				
				<div class="col-md-8">
					<div class="form-group">
						<label class="control-label" for="prim_school">Proficiency</label>
						<div class="form-control">
						<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-1" name="radio1" checked>
								<label>Beginner</label>
							</div>
							
							<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-2" name="radio1">
								<label>Fresher</label>
							</div>
							
							<div class="radio radio-replace radio-inline">
								<input type="radio" id="rd-3" name="radio1">
								<label>Experienced</label>
							</div>
						</div>	
					</div>
				</div>
				
			</div>
			
			<br />
			<div class="row">
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="prim_subject">Languages</label>
						<select class="form-control">
								<option>Option 1</option>
								<option>Option 2</option>
								<option>Option 3</option>
								<option>Option 4</option>
								<option>Option 5</option>
							</select>
					</div>
				</div>
				
				<div class="col-md-8">
					<div class="form-group">
						<label class="control-label" for="prim_school">Proficiency</label>
						<div class="form-control">
						<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-1" name="radio1" checked>
								<label>Beginner</label>
							</div>
							
							<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-2" name="radio1">
								<label>Fresher</label>
							</div>
							
							<div class="radio radio-replace radio-inline">
								<input type="radio" id="rd-3" name="radio1">
								<label>Experienced</label>
							</div>
						</div>	
					</div>
				</div>
				
			</div>
			
			<br />
			<!--skills-->
			<strong>Learning Skills</strong>
			<br />
			<br />
			
			<div class="row">
				
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="prim_subject">Ability to learn new technologies rapidly</label>
						<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-2" name="radio1">
								<label>Yes</label>
							</div>
							
							<div class="radio radio-replace radio-inline">
								<input type="radio" id="rd-3" name="radio1">
								<label>No</label>
							</div>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="prim_subject">Ability to find solutions through internet</label>
						<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-2" name="radio1">
								<label>Yes</label>
							</div>
							
							<div class="radio radio-replace radio-inline">
								<input type="radio" id="rd-3" name="radio1">
								<label>No</label>
							</div>
					</div>
				</div>
				
			</div>
			
			<br />
			<!--skills-->
			<strong>Problem Solving Skills</strong>
			<br />
			<br />
			
			<div class="row">
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="prim_school">Mindset of efficiency</label>
						<div class="form-control">
						<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-1" name="radio1" checked>
								<label>Learner</label>
							</div>
							
							<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-2" name="radio1">
								<label>Average</label>
							</div>
					</div>	
					</div>
				</div>
				
				<div class="col-md-4">
				<div class="form-group">
						<label class="control-label" for="prim_school">Mindset of creativity</label>
						<div class="form-control">
						<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-1" name="radio1" checked>
								<label>Learner</label>
							</div>
							
							<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-2" name="radio1">
								<label>Average</label>
							</div>
					</div>	
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="prim_school">Fundamentals of Programming Logic</label>
						<div class="form-control">
						<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-1" name="radio1" checked>
								<label>Learner</label>
							</div>
							
							<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-2" name="radio1">
								<label>Average</label>
							</div>
					</div>	
					</div>
				</div>
				
			</div>
			
			<br />
			<!--skills-->
			<strong>Team & Leadership Skills</strong>
			<br />
			<br />
			
			<div class="row">
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="prim_school">Team Player</label>
						<div class="form-control">
						<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-1" name="radio1" checked>
								<label>Learner</label>
							</div>
							
							<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-2" name="radio1">
								<label>Average</label>
							</div>
					</div>	
					</div>
				</div>
				
				<div class="col-md-4">
				<div class="form-group">
						<label class="control-label" for="prim_school">Interpersonal skills</label>
						<div class="form-control">
						<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-1" name="radio1" checked>
								<label>Learner</label>
							</div>
							
							<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-2" name="radio1">
								<label>Average</label>
							</div>
					</div>	
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="prim_school">Communication Skills</label>
						<div class="form-control">
						<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-1" name="radio1" checked>
								<label>Learner</label>
							</div>
							
							<div class="radio radio-replace radio-inline ">
								<input type="radio" id="rd-2" name="radio1">
								<label>Average</label>
							</div>
					</div>	
					</div>
				</div>
				
			</div>
			
			<br />
			
			
		</div>
		
		<div class="tab-pane" id="tab2-4">
			
			<strong>Current &amp; Past Jobs</strong>
			<br />
			<br />
			
			<div class="row">
			
				<div class="col-md-1">
					<label class="control-label">&nbsp;</label>
					<p class="text-right">
						<span class="label label-info">1</span>
					</p>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label" for="job_position_1">Company Name</label>
						<input class="form-control" name="job_position_1" id="job_position_1" data-validate="require" placeholder="Your current job" />
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="job_position_1">Job Position</label>
						<input class="form-control" name="job_position_1" id="job_position_1" data-validate="require" placeholder="Your current position" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="job_position_start_date_1">Start Date</label>
						<input class="form-control datepicker" name="job_position_start_date_1" id="job_position_start_date_1" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="job_position_end_date_1">End Date</label>
						<input class="form-control datepicker" name="job_position_end_date_1" id="job_position_end_date_1" placeholder="(Optional)" />
					</div>
				</div>
				
			</div>
			
			<div class="row">
			
				<div class="col-md-1">
					<label class="control-label">&nbsp;</label>
					<p class="text-right">
						<span class="label label-info">2</span>
					</p>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label" for="job_position_2">Company Name</label>
						<input class="form-control" name="job_position_2" id="job_position_2" data-validate="require" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="job_position_2">Job Position</label>
						<input class="form-control" name="job_position_2" id="job_position_2" data-validate="require" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="job_position_start_date_2">Start Date</label>
						<input class="form-control datepicker" name="job_position_start_date_2" id="job_position_start_date_2" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="job_position_end_date_2">End Date</label>
						<input class="form-control datepicker" name="job_position_end_date_2" id="job_position_end_date_2" placeholder="(Optional)" />
					</div>
				</div>
				
			</div>
			
			<div class="row">
			
				<div class="col-md-1">
					<label class="control-label">&nbsp;</label>
					<p class="text-right">
						<span class="label label-info">3</span>
					</p>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label" for="job_position_3">Company Name</label>
						<input class="form-control" name="job_position_3" id="job_position_3" data-validate="require" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="job_position_3">Job Position</label>
						<input class="form-control" name="job_position_3" id="job_position_3" data-validate="require" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="job_position_start_date_3">Start Date</label>
						<input class="form-control datepicker" name="job_position_start_date_3" id="job_position_start_date_3" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="job_position_end_date_3">End Date</label>
						<input class="form-control datepicker" name="job_position_end_date_3" id="job_position_end_date_3" placeholder="(Optional)" />
					</div>
				</div>
				
			</div>
			
			<div class="row">
			
				<div class="col-md-1">
					<label class="control-label">&nbsp;</label>
					<p class="text-right">
						<span class="label label-info">4</span>
					</p>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label" for="job_position_4">Company Name</label>
						<input class="form-control" name="job_position_4" id="job_position_4" data-validate="require" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="job_position_4">Job Position</label>
						<input class="form-control" name="job_position_4" id="job_position_4" data-validate="require" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="job_position_start_date_4">Start Date</label>
						<input class="form-control datepicker" name="job_position_start_date_4" id="job_position_start_date_4" placeholder="(Optional)" />
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label" for="job_position_end_date_4">End Date</label>
						<input class="form-control datepicker" name="job_position_end_date_4" id="job_position_end_date_4" placeholder="(Optional)" />
					</div>
				</div>
				
			</div>
			<div class="form-group">
				<div class="checkbox checkbox-replace">
					<input type="checkbox" name="chk-rules" id="chk-rules" data-validate="required" data-message-message="You must accept rules in order to complete this registration.">
					<label for="chk-rules">By registering I accept terms and conditions.</label>
				</div>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Finish Registration</button>
			</div>
		</div>
				
		<ul class="pager wizard">
			<li class="previous">
				<a href="javascript:;"><i class="entypo-left-open"></i> Previous</a>
			</li>
			
			<li class="next">
				<a href="javascript:;">Next <i class="entypo-right-open"></i></a>
			</li>
		</ul>
	</div>

</form><!-- Footer -->
	</div><!-- Container End -->
</section><!-- Section end -->

<!-- Site Footer -->
<footer class="site-footer">

	<div class="container">
	
		<div class="row">
			
			<div class="col-sm-6">
				Copyright &copy; Junction Tech - All Rights Reserved.
			</div>
			
			<div class="col-sm-6">
				
				<ul class="social-networks text-right">
					<li>
						<a href="javascript:;">
							<i class="entypo-instagram"></i>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="entypo-twitter"></i>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="entypo-facebook"></i>
						</a>
					</li>
				</ul>
				
			</div>
			
		</div>
		
	</div>
	
</footer>	
</div>
