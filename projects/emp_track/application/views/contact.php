<body>

<div class="wrap">
	
	<!-- Logo and Navigation --><div class="site-header-container container">

	<div class="row">
	
		<div class="col-md-12">
			
			<header class="site-header">
			
				<section class="site-logo">
				
					<a href="<?php echo base_url(); ?>home">
						<img src="<?php echo base_url(); ?>assets_user/images/logo@2x.png" width="120" />
					</a>
					
				</section>
				
				<nav class="site-nav">
					
					
					<ul class="main-menu hidden-xs" id="main-menu">
						<li >
							<a href="<?php echo base_url(); ?>home">
								<span>Home</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>home/about">
								<span>About Us</span>
							</a>
						</li>
						
						<li class="active">
							<a href="<?php echo base_url(); ?>home/contact">
								<span>Contact</span>
							</a>
						</li>
							

							
  						<button type="button" class="btn btn-primary"> <a href="<?php echo base_url(); ?>home/registration"><font color="white">Sign Up</font></a></button>

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

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function initialize()
{
	var mapDiv = document.getElementById('map');
	var map = new google.maps.Map(mapDiv, {
		center: new google.maps.LatLng(23.186711, 77.460559),
		zoom: 13,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	});
	
	new google.maps.Marker({
		position: new google.maps.LatLng(23.186711, 77.460559),
		map: map
	});
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<section class="contact-map" id="map"></section>


<section class="contact-container">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-sm-7 sep">
				
				
				<form class="contact-form" role="form" method="post" action="" enctype="application/x-www-form-urlencoded">
					
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Name:" />
					</div>
					
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="E-mail:" />
					</div>
					
					<div class="form-group">
						<textarea class="form-control" name="message" placeholder="Message:" rows="6"></textarea>
					</div>
					
					<div class="form-group text-right">
						<button class="btn btn-primary" name="send">Send</button>
					</div>
					
				</form>
				
			</div>
			
			<div class="col-sm-offset-1 col-sm-4">
				
				<div class="info-entry">
					
					<h4>Address</h4>
					
				<p>
					532/533 Corporate Zone 5th Floor <br />
					Ashima Mall, Hoshangabad Road  <br />
					Bhopal 462026
				</p>
					
				</div>
				
				<div class="info-entry">
					
					<h4>Contact</h4>
					
				<p>
					Phone: +91 755 405 3276, <br />
					+91 810 906 9226 <br />
					info@junctiontech.in <br />
					
				</p>
					
					<ul class="social-networks">
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
		
	</div>
	
</section>	
	<!-- Footer Widgets --><section class="footer-widgets">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-sm-12">
				
				<a href="javascript:;">
					<img src="<?php echo base_url(); ?>assets_user/images/logo@2x.png" width="150" />
				</a>
				
				<p>
					What employer wouldn’t want to know exactly where their employees are during the workday? In today's economy, efficiency and productivity are more important than ever. Trackster™ is here to help with capabilities like job check in/out, messaging and powerful reporting tools. If your employees have smartphones, Trackster™ allows you to monitor their whereabouts at all times. This certainly makes supervising a lot easier, improves time management, and enhances productivity.
				</p>
				
			</div>
			
		</div>
		
	</div>
	
</section>

<!-- Site Footer --><footer class="site-footer">

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