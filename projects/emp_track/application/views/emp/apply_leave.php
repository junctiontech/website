<h2>Apply For Leave</h2>

			<br />
	<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" action="<?=base_url()?>home/emp_dashboard">
	
					<div class="form-group">
						<label class="col-sm-3 control-label">Leave Type</label>
						
						<div class="col-sm-5">
							<select class="form-control">
								<option>Select Leave Type</option>
								<option>Annual</option>
								<option>Monthly</option>
								<option>1 Weak</option>
								<option>1 Days</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Date From</label>
						
						<div class="col-sm-5">
							<div class="input-group">
								<input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">
								
								<div class="input-group-addon">
									<a href="javascript:;"><i class="entypo-calendar"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label">Date To</label>
						
						<div class="col-sm-5">
							<div class="input-group">
								<input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">
								
								<div class="input-group-addon">
									<a href="javascript:;"><i class="entypo-calendar"></i></a>
								</div>
							</div>
						</div>
					</div>
					

					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Reason</label>
						
						<div class="col-sm-5">
							<textarea class="form-control" id="field-ta" placeholder="Textarea"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
						<button type="submit" class="btn btn-danger btn-icon icon-left">Submit <i class="entypo-install"></i></button>
							<button type="submit" class="btn btn-blue btn-icon icon-left">Cancel <i class="entypo-cancel"></i> </button>
								</div>
					</div>
				</form>
				
			</div>
		
		</div>
	
	</div>
</div>
</div>
