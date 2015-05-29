<?php 
include 'menu.php'; 
?>
	<div class="main-content" >
	<br />
<h2 class="title">Contact Us</h2>
	
<div class="row">
		
			<div class="col-sm-12 text-center">
				
				<a href="javascript:;">
					<img src="img/about-img-1.jpg" class="img-rounded img-responsive img-center" alt="junction tech" >
				</a>
				<h4 class="designation">Junction Tech</h4>
				<strong>532/533 Corporate Zone 5th Floor,<br>
					Aashima Mall, Hoshangabad Road Bhopal 462026<br>
					Telephone: +91 755 405 3276, +91 810 906 9226<br>
					Email Address: info@junctiontech.in</strong>
					<hr/>
				<p>Please use <a href="job-apply.php" title="Application Form">this link</a> to post your resume for future consideration.<br><br>If you wish to learn more about Junction Software Pvt ltd or wish to discuss your development requirements and get quotes, please fill out the details below. One of our Senior Consultants will contact you within one business day.<br>Fields marked by an asterisk (<span class="asetrisk">*</span>) are required. </p>
			</div>
			<div class="col-sm-12 ">
			<form class="contact-form validate" role="form" method="post" action="contact.php" enctype="application/x-www-form-urlencoded">
					
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Name:" name="min_field" data-validate="number,minlength[4]" required>
					</div>
					
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="E-mail:" name="email" data-validate="email" required>
					</div>
					
					<div class="form-group">
						<textarea class="form-control" name="message" placeholder="Message:" rows="6" required></textarea>
					</div>
				
					<div class="form-group text-right">
						<button class="btn btn-primary" name="send">Send</button>
					</div>
					
				</form>
			</div>
</div>
		
		
			
	
<!-- Right positioning social icons -->
		<div class="ssk-sticky ssk-right ssk-center ssk-xs">
				<a href="https://www.facebook.com/junctiontech" class="ssk ssk-facebook" target="_blank"></a>
					<a href="https://twitter.com/junctionsoft" class="ssk ssk-twitter"  target="_blank"></a>
					<a href="https://youtu.be/CBx07LtoxhQ" class="ssk ssk-icon ssk-youtube"  target="_blank" title="YouTube"></a>
					<a href="https://plus.google.com/+JunctiontechInjunction/about" class="ssk ssk-google-plus"  target="_blank"></a>
					<a href="https://in.pinterest.com/junction_tech/" class="ssk ssk-pinterest" target="_blank"></a>
					<a href="https://in.linkedin.com/in/junctiontech" class="ssk ssk-linkedin" target="_blank"></a>
			</div>
		<!-- Right positioning social icons -->
			<div id="contactbottomForm">
			<div id="wrapper">
				<div class="upaction" id="request_btn">
				<img style="float: right;width:26px;height:26px;" class="arrowUp">Discuss your requirements with us
				</div>
			</div>
		</div>
		<!-- Forms starts -->
		<div id="formbox" style="display:none;" >
			<form class="contact-form validate" role="form" method="post" action="enquiry.php" enctype="application/x-www-form-urlencoded">
					<p>We will be Happy to Help!</p>
					<div class="form-group margin-form">
						<input type="text" class="form-control" placeholder="Name:" name="name" data-validate="number,minlength[4]" required>
					</div>
					
					<div class="form-group margin-form">
						<input type="text" name="email" class="form-control" placeholder="E-mail:" type="email"  data-validate="email" required>
					</div>
							<div class="form-group margin-form">
						<input type="text" name="requirement" class="form-control" placeholder="Requirement(Brief)"   data-validate="text" required>
					</div>			
					<div class="form-group text-right margin-form">
						<button class="btn btn-primary" type="submit" name="send">Send</button>
					</div>
					
				</form>
		</div>
		<!-- Form ended -->
<!-- Footer -->
<?php 
include 'footer.php'; 
?>