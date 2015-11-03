<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>
  	<meta charset="utf-8">
     <title>College Management</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/superfish.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="fontello/css/fontello.css" rel="stylesheet">
        
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
</head>
  
  <body>
  
  <header>
  	<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-3">
			<a href="javascript:;" id="logo">COLLEGE MANAGEMENT</a>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-9">
			<ul id="top_nav" class="show-xs">
              <li><a href="index.html" class="button_top btn">Register</a></li>
			</ul>
		</div>
	</div>
</div>
</header><!-- End header --><!-- End header -->


<section id="login_bg" style="height:730px;">
<div  class="container">
<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
		<div id="login">
			<p class="text-center">
				<img src="img/college_Management.png" alt="">
			</p>
			<hr>
			<form action="login.php" method="post">
				<div class="form-group">
					<input type="text"  class=" form-control required" name="user_name" placeholder="User name">
					<span class="input-icon"><i class=" icon-user"></i></span>
				</div>
				<div class="form-group" style="margin-bottom:5px;">
					<input type="password" class=" form-control required" placeholder="Password" name="user_password" style="margin-bottom:5px;">
					<span class="input-icon"><i class="icon-lock"></i></span>
				</div>
				<div class="form-group" style="padding-top:50px;">
					<input type="submit"  name="submit" value="Log in" class="button_fullwidth"/>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</section> <!-- End login -->
<footer>
<div id="copy_right">© Junction Tech</div>
</footer>

<div id="toTop">Back to top</div>


<!-- JQUERY -->
<script src="js/jquery-1.10.2.min.js"></script>

<!-- OTHER JS --> 
<script src="js/superfish.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/functions.js"></script>
<script src="js/classie.js"></script>

  </body>
</html>