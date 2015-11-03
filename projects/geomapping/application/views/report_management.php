<!-- BEGIN MAIN CONTENT -->
    <div id="main-content">
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Add New Report</h3>
        </div>

        <div class="row">

            <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="form4" role="form" method="post" action="<?=base_url();?>admin/add_report" enctype="multipart/form-data" parsley-validate class="icon-validation">

                                        <div class="form-group">
                                            <label class="control-label">Exsisting Reports</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                               <select  name="add_report_id" class="form-control" data-live-search="true">
                                                    <option value="">Select</option>>
                                                   <?php $info=''; foreach($report_data as $j){  ?>
                                                    <option value="<?=$j->add_report_id?>"><?=$j->report_name?></option>
                                                   <?php } ?>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Upload New Format</label>
											
											<div style="position:relative;">
														<a class='btn btn-primary' href='javascript:;'>
															Choose File...
															<input name="file_name" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'  size="40"  >
														</a>
														&nbsp;
														<span class='label label-info' id="upload-file-info"></span>
													</div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" value='Upload' class="btn btn-danger" >Add</button>
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
                
    </div>


<!-- BEGIN MAIN CONTENT -->
    <div id="main-content">
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Schedule Automatic Report Generation</h3>
        </div>

        <div class="row">

            <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="form4" action="<?=base_url();?>admin/automatic_report" role="form" parsley-validate class="icon-validation" method="post">
                                        <div class="form-group">
                                            <label class="control-label">Report Name</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select name="add_report_id[]" class="form-control" data-live-search="true" multiple title="Select one or more">
                                                    <option name="">Select</option>
                                                   <?php $info=''; foreach($report_data as $j){  ?>
                                                    <option value="<?=$j->add_report_id?>"><?=$j->report_name?></option>
                                                   <?php } ?>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Frequency</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select name="frequency" class="form-control">
                                                    <option>Select</option>
                                                    <option value="Daily">Daily</option>
                                                    <option value="Weekly">Weekly</option>
                                                    <option value="Monthly">Monthly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Day</label>
                                            <div class="controls">
                                                <div class="input-group col-md-12">
                                                    <input name="day" class="pickadate form-control" type="text" placeholder="Enter Day" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Time</label>
                                            <div class="controls">
                                                <div class="input-group col-md-12">
                                                <input name="time" class="pickatime form-control" type="text" placeholder="Enter Time" />
                                             </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger" onclick="javascript:$('#form4').parsley('validate');">Submit</button>
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
                
    </div>

<!-- BEGIN MAIN CONTENT -->
    <div id="main-content">
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Automatic Report Notification</h3>
        </div>

        <div class="row">

            <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="<?=base_url();?>admin/automatic_report_notification" role="form" parsley-validate class="icon-validation" method="post">
                                        
                                        <div class="form-group">
                                            <label class="control-label">User Name</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select name="user_name[]" class="form-control" data-live-search="true" multiple title="Select one or more">
                                                     <?php $info=''; foreach($user_data_info as $j){  ?>
                                                    <option value="<?=$j->user_id?>"><?=$j->name?></option>
                                                   <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">User Role</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select  name="role[]" class="form-control" data-live-search="true" multiple title="Select one or more">
                                                   <?php $info=''; foreach($user_data_info as $j){  ?>
                                                    <option value="<?=$j->role?>"><?=$j->role?></option>
                                                   <?php } ?>
                                                  
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Frequency</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select name="frequency" class="form-control">
                                                    <option>Select</option>
                                                    <option value="Daily">Daily</option>
                                                    <option value="Weekly">Weekly</option>
                                                    <option value="Monthly">Monthly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Day</label>
                                            <div class="controls">
                                                <div class="input-group col-md-12">
                                                    <input name="day" class="pickadate form-control" type="text" placeholder="Enter Day" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Time</label>
                                            <div class="controls">
                                                <div class="input-group col-md-12">
                                                <input name="time" class="pickatime form-control" type="text" placeholder="Enter Time" />
                                             </div>
                                            </div>
                                        </div>
                                          

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger" onclick="javascript:$('#form4').parsley('validate');">Submit</button>
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
                
    </div>

    
