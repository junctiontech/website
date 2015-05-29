<?php 
include 'menu.php'; 
?>
		<div class="main-content" >
		<br />
	<h2 class="title">Software Consulting</h2>
	<div class="row">
				
				<div class="col-sm-12">
					
					
					<p>As a customer, you get access to software consultants who not only understand your business plan but also help your project meet the best in every dimension - best cloud, best user interface, best mobility, best web visibility, best social ability, etc.</p>
		
					<p> The objective is to bring clarity to your functional requirements and help you make the right technology decisions for creating an application that is cutting-edge and gives your business a firm competitive advantage.</p>
					
				
				</div>
				
				
			</div>
		<br />
	<!-- Right positioning social icons -->
			<div class="ssk-sticky ssk-right ssk-center ssk-xs">
						<a href="https://www.facebook.com/junctiontech" class="ssk ssk-facebook" target="_blank"></a>
					<a href="https://twitter.com/junctionsoft" class="ssk ssk-twitter"  target="_blank"></a>
					<a href="https://youtu.be/CBx07Ltoxh%" class="ssk ssk-icon ssk-youtube"  target="_blank" title="YouTube"></a>
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