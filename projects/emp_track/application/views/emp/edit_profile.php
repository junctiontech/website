<h2>Profile Update</h2>

			<br />
	<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" action="<?=base_url()?>home/emp_dashboard">
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Employee ID</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" placeholder="Employee ID" >
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Full Name</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" placeholder="Full Name">
						</div>
					</div>

					<div class="form-group">
						<label for="field-3" class="col-sm-3 control-label">Email</label>
						
						<div class="col-sm-5">
							<input type="email" class="form-control" id="field-3" maxlength="255" placeholder="xyz@gmail.com">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-3" class="col-sm-3 control-label">Password</label>
						
						<div class="col-sm-5">
							<input type="password" name="password" maxlength="255" class="form-control" id="password" placeholder="Password">
						</div>
					</div>

					<div class="form-group">
						<label for="field-3" class="col-sm-3 control-label">Confirm Password </label>
						
						<div class="col-sm-5">
							<input type="password" name="passconf" maxlength="255" class="form-control" id="passconf" placeholder="Confirm Password">
						</div>
					</div>

							<div class="form-group">
						<label class="col-sm-3 control-label">Image Upload</label>
						
						<div class="col-sm-5">
							
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x150" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="..." accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
							
						</div>
					</div>

					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Address</label>
						
						<div class="col-sm-5">
							<textarea class="form-control" id="field-ta" placeholder="Textarea"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label">City</label>
						
						<div class="col-sm-5">
							<select class="form-control">
								<option>Option 1</option>
								<option>Option 2</option>
								<option>Option 3</option>
								<option>Option 4</option>
								<option>Option 5</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label">State</label>
						
						<div class="col-sm-5">
							<select class="form-control">
								<option>Option 1</option>
								<option>Option 2</option>
								<option>Option 3</option>
								<option>Option 4</option>
								<option>Option 5</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Pincode</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Phone No.</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1">
						</div>
					</div>

					
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-danger btn-icon icon-left">Update <i class="entypo-install"></i></button>
							<button type="submit" class="btn btn-blue btn-icon icon-left">Cancel <i class="entypo-cancel"></i> </button>
						</div>
					</div>
				</form>
				
			</div>
		
		</div>
	
	</div>
</div>
</div>
