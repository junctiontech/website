		
	<h2>Task View</h2>

	<br />

<div class="table-responsive">	
<table class="table table-bordered datatable responsive" id="table-1">
	<thead>
		<tr>
			<th>Task Detail</th>
			<th>Location</th>
			<th>Start Up</th>
			<th>Data Upload</th>
			<th>Data </th>
			<th>Action</th>
			
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td>Survey of constraint material with manage the excel of every minute data</td>
			<td>Garcia</td>
			<td>6.00 pm</td>
			<td>
			<a href="javascript:;" onclick="jQuery('#modal-2').modal('show');" class="btn btn-success btn-icon icon-left">Fill Upload <i class="entypo-upload"></i></a>
			
			</td>
			<td>
				<a href="javascript:;" onclick="jQuery('#modal-1').modal('show');" class="btn btn-blue btn-icon icon-left">Fill Data <i class="entypo-upload"></i></a>
		</td>
			<td><button type="button" class="btn btn-danger  btn-icon icon-left">Submit <i class="entypo-install"></i></button></td>
		</tr>

	
			
	</tbody>	
</table>
</div>

	<!-- Modal 1 (Basic)-->
<div class="modal fade" id="modal-1">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Form</h4>
			</div>
			
			<div class="modal-body">
			<form role="form" class="form-horizontal form-groups-bordered">	
				<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Field 1</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" id="field-1" placeholder="Placeholder">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Field 2</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" id="field-1" placeholder="Placeholder">
						</div>
					</div>
				</form>
			</div>
			
			</br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal 2 (Custom Width)-->
<div class="modal fade custom-width" id="modal-2">
	<div class="modal-dialog" style="width: 60%;">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Upload your file</h4>
			</div>
			
			<div class="modal-body">

	<!--file upload-->			
<form action="data/upload-file.php" class="dropzone" id="dropzone_example">
	<div class="fallback">
		<input name="file" type="file" multiple />
	</div>
</form>

<div id="dze_info" class="hidden">
	
	<br />
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title"></div>
		</div>

		<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th width="40%">File name</th>
					<th width="15%">Size</th>
					<th width="15%">Type</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4"></td>
				</tr>
			</tfoot>
		</table>
	    </div>
	</div>
</div>

<!--end-->
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
				<button type="button" class="btn btn-info">Cancel</button>
			</div>
		</div>
	</div>
</div>

