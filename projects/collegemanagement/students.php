<?php
 include("connection.php");
 session_start();
if($_SESSION["user_name"]){
?>
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
              <li><a href="logout.php" class="button_top btn">Logout</a></li>
              
			</ul>
		</div>
	</div>
</div>
</header><!-- End header -->

 
    
    <section id="main_content" >
    	<div class="container">
        	
        
        <div class="row">
        
               
        <div class="col-lg-12 col-md-11 col-sm-11">
       <h2>uSERS</h2>
            
                <div class="panel panel-info filterable add_bottom_45">
                    <div class="panel-heading">
                        <h3 class="panel-title">User Listing</h3>
                        <div class="pull-right">
                            <button class="btn-filter"><span class="icon-th-list"></span> Filter</button>
                        </div>
                    </div>
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr class="filters">
                                <th><input type="text" class="form-control" placeholder="First Name" disabled ></th>
								<th><input type="text" class="form-control" placeholder="Last Name" disabled ></th>
                                <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                                <th><input type="text" class="form-control" placeholder="Mobile Number" disabled ></th>
                                <th><input type="text" class="form-control" placeholder="Course" disabled ></th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
							$qry="select * from user";
							$res=mysql_query($qry);
							while($row=mysql_fetch_array($res))
							{
							?>
                            <tr>
                                <td><?php echo $row['user_fname'];?></td>
								<td> <?php echo $row['user_lname'];?></td>
                                <td> <?php echo $row['user_email'];?></td>
                                <td> <?php echo $row['user_mobile'];?></td>
                                <td> <?php echo $row['user_course'];?></td>
                            </tr>
                           <?php
							}
							?>
                          </tbody>
                    </table>
                    </div><!-- End filterable -->
             
        </div><!-- End col-lg-9-->                        
        </div><!-- End row -->
        
        <hr>
        <div class="row">
        	<div class="col-md-12 text-center">
            	<ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
            	
        </div><!-- End container -->
    </section><!-- End main_content -->

<footer>
<div id="copy_right">© Junction Tech</div>
</footer>

<div id="toTop">Back to top</div>

<!-- JQUERY -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/table_filter.js"></script>

<!-- OTHER JS --> 
<script src="js/superfish.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/functions.js"></script>
<script src="js/classie.js"></script>


  </body>
</html>
<?php }
else{  
 header("location:admin.php");
} ?>