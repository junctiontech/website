<!-- employee detail view starts  -->
<br />

<div class="panel-group " id="accordion-test">
		
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" class="collapsed">
							Employee Details
						</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						
			<table class="table table-bordered datatable table-responsive" id="table-1">
				<thead>
					<tr>
						<th>Employee ID</th>
						<th>Full Name</th>
						<th>Mobile No</th>
						<th>Location</th>
						<th>Task</th>
						<th>History</th>
						<th>Action</th>
						
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td>1001</td>
						<td>Javed</td>
						<td>7575498898</td>
						<td>
							<a href="javascript:;" onclick="jQuery('#modal-1').modal('show');" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-location"></i>
								Current Location
							</a>
						</td>	
						<td>
							<a href="javascript:;"  class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-briefcase"></i>
								Current Task
							</a>
						</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-default btn-icon icon-left  btn-sm  dropdown-toggle" data-toggle="dropdown">
								<i class="entypo-database"></i>	History <span class="caret"></span>
								</button>
								<ul class="dropdown-menu dropdown-default" role="menu">
									<li><a href="javascript:;">Sign Job Task</a>
									</li>
									<li><a href="javascript:;">Validate Job Task</a>
									</li>	
								</ul>
							</div>
							</td>	
						<td>
							<a href="<?=base_url()?>home/task"><button type="button" class="btn  btn-sm  btn-default btn-icon icon-left"> <i class="entypo-check"></i>Validated Task</button></a>
						</td>
					</tr>

					<tr>
						<td>1002</td>
						<td>Rahul</td>
						<td>7575498898</td>
						<td>
							<a href="javascript:;" onclick="jQuery('#modal-1').modal('show');" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-location"></i>
								Current Location
							</a>
						</td>	
						<td>
							<a href="javascript:;"  class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-briefcase"></i>
								Current Task
							</a>
						</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-default btn-icon icon-left  btn-sm  dropdown-toggle" data-toggle="dropdown">
								<i class="entypo-database"></i>	History <span class="caret"></span>
								</button>
								<ul class="dropdown-menu dropdown-default" role="menu">
									<li><a href="javascript:;">Sign Job Task</a>
									</li>
									<li><a href="javascript:;">Validate Job Task</a>
									</li>	
								</ul>
							</div>
							</td>	
						<td>
							<a href="<?=base_url()?>home/task"><button type="button" class="btn  btn-sm  btn-default btn-icon icon-left"> <i class="entypo-check"></i>Validated Task</button></a>
						</td>
					</tr>

					<tr>
						<td>1003</td>
						<td>Randy S. Smith</td>
						<td>7575498898</td>
						<td>
							<a href="javascript:;" onclick="jQuery('#modal-1').modal('show');" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-location"></i>
								Current Location
							</a>
						</td>	
						<td>
							<a href="javascript:;"  class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-briefcase"></i>
								Current Task
							</a>
						</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-default btn-icon icon-left  btn-sm  dropdown-toggle" data-toggle="dropdown">
								<i class="entypo-database"></i>	History <span class="caret"></span>
								</button>
								<ul class="dropdown-menu dropdown-default" role="menu">
									<li><a href="javascript:;">Sign Job Task</a>
									</li>
									<li><a href="javascript:;">Validate Job Task</a>
									</li>	
								</ul>
							</div>
							</td>	
						<td>
							<a href="<?=base_url()?>home/task"><button type="button" class="btn  btn-sm  btn-default btn-icon icon-left"> <i class="entypo-check"></i>Validated Task</button></a>
						</td>
					</tr>

</tbody>	
			</table>
					</div>
				</div>
			</div>
		
		</div>

<br />
<h2>Overall Performance</h2>

			<br />

			<div class="row">
		
				<div class="col-sm-3 col-md-6">
					<a href="<?=base_url()?>home/location_complaince">
					 <div class="tile-title tile-primary"> <div class="icon"> <i class="glyphicon glyphicon glyphicon-map-marker"></i> </div> <div class="title"> <h3>LOCATION COMPLIANCE</h3><p></p>  </div> </div>
			</a>
		</div>
		
		<div class="col-sm-3 col-md-6">
			<a href="<?=base_url()?>home/task_complaince">
				 <div class="tile-title tile-primary"> <div class="icon"> <i class="glyphicon glyphicon-briefcase"></i> </div> <div class="title"> <h3>TASK COMPLIANCE</h3> <p></p>  </div> </div>
			
	</a>
</div>

</div>
<!--end-->

<br />
<h2>Task Assign</h2>

<br />

<div class="row">
	<div class="col-sm-3 col-md-6">
		<a href="<?=base_url()?>home/add_task">
			<div class="tile-title tile-primary"> <div class="icon"> <i class="glyphicon glyphicon-list-alt"></i> </div> <div class="title"> <h3>NEW TASK ASSIGN</h3> <p></p>  </div> </div>
		</a>
</div>

<div class="col-sm-3 col-md-6">
	<a href="<?=base_url()?>home/task_review">
	<div class="tile-title tile-primary"> <div class="icon"> <i class="glyphicon glyphicon-check"></i> </div> <div class="title"> <h3>TASK REVIEW</h3> <p></p>  </div> </div>
	
</a>
</div>


</div>
<!--end-->
<br />
<h2>User Administrator</h2>

<br />

<div class="row">
			<div class="col-sm-3 col-md-3">
				<a href="<?=base_url()?>home/add_employee">
				 <div class="tile-title tile-primary"> <div class="icon"> <i class="glyphicon glyphicon-plus-sign"></i> </div> <div class="title"> <h3>ADD NEW USER</h3> <p></p>  </div> </div>
				</a>
		</div>

		<div class="col-sm-3  col-md-3">
			<a href="<?=base_url()?>home/add_employee">
			 <div class="tile-title tile-primary"> <div class="icon"> <i class="glyphicon glyphicon-pencil"></i> </div> <div class="title"> <h3>MODIFY USER</h3> <p></p>  </div> </div>
			
		</a>
		</div>

	<div class="col-sm-3 col-md-3">
		<a href="<?=base_url()?>home/evaluate_employee">
		 <div class="tile-title tile-primary"> <div class="icon"> <i class="glyphicon glyphicon-eye-open"></i> </div> <div class="title"> <h3>EVALUATE  EMPLOYEE </h3> <p></p>  </div> </div>
		</a>
	</div>

	<div class="col-sm-3 col-md-3">
		<a href="<?=base_url()?>home/process_request">
		<div class="tile-title tile-primary"> <div class="icon"> <i class="glyphicon glyphicon-refresh"></i> </div> <div class="title"> <h3>REQUEST & CLAIM</h3> <p></p>  </div> </div>
		
	</a>
	</div>
</div>

<!--end-->
<br />


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>


				
</div>

<!-- Modal 1 (Basic)-->
<div class="modal fade" id="modal-1">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Current Location</h4>
			</div>
			
			<div class="modal-body">
				
				<script type="text/javascript">
				
				function initialize() {
					var mapDiv = document.getElementById('normal');
					var map = new google.maps.Map(mapDiv, {
						center: new google.maps.LatLng(23.1828, 77.4563),
						zoom: 7,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					});
				}
				
				
				google.maps.event.addDomListener(window, 'load', initialize);
				</script>
				<div id="normal" style="height: 350px; width: 100%"></div>
				
			</div>
			
		</div>
	</div>
</div>



