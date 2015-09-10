<?php 
include 'menu.php'; 
?>
		<div class="main-content" >
		<br />
	<h2 class="content-header">Job Apply </h2>
	    <div class="row">
			<div class="col-sm-12">
				<p>Thank you for your interest in Junction Software Pvt.Ltd. Please provide the following information about your profile. We shall get in touch with you
					</p>
					<form class="contact-form validate" role="form" method="post" action="job_apply.php" enctype="multipart/form-data">
						
						<div class="form-group">
							<input required type="text" name="name" class="form-control" placeholder="Name:" name="min_field" data-validate="number,minlength[4]">
						</div>
						<div class="form-group">
							<input required type="text" name="phone" class="form-control" placeholder="Mobile No:" name="min_field" data-validate="number,minlength[4]">
						</div>
							<div class="form-group">
							<input type="email" required name="email" class="form-control" placeholder="E-mail:" name="email" data-validate="email">
						</div>
						
							<div class="form-group">
							<input type="text" required name="employer" class="form-control" placeholder="Present Employer:" name="min_field" data-validate="number,minlength[4]">
						</div>
						<div class="form-group">
							<input type="text" required name="designation" class="form-control" placeholder="Present Designation:" name="min_field" data-validate="number,minlength[4]">
						</div>
						<div class="form-group">
							<label class="control-label">Upload your resume</label>
							<input required type="file" name="filename" class="filestyle" >
							<span style="padding-right: 5px; font-weight: bold;">File Format : </span><span style="font-size: 13px;">Plain Text, Rich Text, HTML, Word Document or PDF</span>
						</div>
					
						
						
						<div class="form-group text-right">
							<button class="btn btn-primary" name="send">Send</button>
						</div>
						
					</form>
			</div>
		</div>
			</br>
 <?php 
include 'footer.php'; 
?>