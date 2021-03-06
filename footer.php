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
		<footer>
				<div class="row">
					<div class="col-md-2 footer-items">
                 <a href="about.php"> 	<p class="footer-items">About</p></a>
                </div>
					<div class="col-md-2">
					<a href="services.php">	<p class="footer-items">Services</p></a>
					</div>
					<div class="col-md-2 footer-items">
					<a href="partners.php"> 	<p class="footer-items">Partners</p></a>
					</div>
					<div class="col-md-2 footer-items">
					<a href="careers.php"> 	<p class="footer-items">Careers</p></a>
					</div>
					<div class="col-md-2 footer-items">
					<a href="contact-us.php"> 	<p class="footer-items">Contact Us</p></a>
					</div>
					<div class="col-md-2 footer-items">
					<a href="sitemap.php"> 	<p class="footer-items">Sitemap</p></a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 last-footer-items">
						<p>Copyright &copy; Junctiontech 2015</p>
					</div>
				</div>
			</footer>	
		</div>
<!-- google analytic code -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63363540-1', 'auto');
  ga('send', 'pageview');
</script>

		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<script src="js/jquery-ui-1.10.3.minimal.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<script src="js/junction.js"></script>
		<script src="js/joinable.js"></script>
		<script src="js/resizeable.js"></script>
		<script src="js/TweenMax.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#contactbottomForm").click(function(){
				$("#formbox").toggle();
			});
		});
		</script>
	</div>

</body>
</html>