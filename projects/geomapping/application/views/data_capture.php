 
 <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3>Data Collector</h3>
            </div>
			<form id="form4" role="form" parsley-validate="" class="icon-validation" 
							action="<?=base_url()?>collector/data_capture_insert" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="m-b-20"><strong>Location</strong></p>

                                            <div class="form-group">
                                                <label class="control-label">latitude</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" parsley-minlength="3" class="form-control parsley-validated" value="<?=$this->input->post('latitude')?>" name="latitude">
                                            <input type="hidden" name="user_id" value="<?=(isset($user_data['user_id'])?$user_data['user_id']:'')?>">
											 <input type="hidden" name="user_role" value="<?=(isset($user_data['role'])?$user_data['role']:'')?>">
											  <input type="hidden" name="user_name" value="<?=(isset($user_data['name'])?$user_data['name']:'')?>">
											</div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Longitude</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" parsley-minlength="3" class="form-control parsley-validated" value="<?=$this->input->post('longitude')?>" name="longitude">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p class="m-b-20"><strong>Department</strong></p>
                                            <select name="department" class="form-control" data-style="input-lg btn-default">
                                                <option>Select</option>
                                                <option>School Eduction</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="m-b-20"><strong>Asset Type</strong></p>
                                            <select name="asset" class="form-control" data-style="input-lg btn-default">
                                                <option>Select</option>
                                                <option>Primary School</option>
                                                <option>Middle School</option>
                                                <option>High School</option>
                                                <option>Higher Secondary</option>
                                                <option>ITI</option>
                                                <option>College</option>
                                                <option>PHC</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="m-b-20"><strong>Collect for Govt Asset</strong></p>
                                            <select name="govasset" class="form-control" data-style="input-lg btn-default">
                                                <option>Select</option>
                                                <option>YES</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="m-b-20"><strong>Collect for Pvt Asset</strong></p>
                                            <select name="pvtasset" class="form-control" data-style="input-lg btn-default">
                                                <option>Select</option>
                                                <option>YES</option>
                                            </select>
                                        </div>
                                    </div>
                                
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            
                            <div class="row">
                                <div class="row">
                                <div class="col-md-12">

				    
                                    
									  <h3><strong>Attributes To Be collector</strong></h3>
                                      <hr>
                                        <div class="form-group">
                                            <label class="control-label">Establishment Year</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                            <input name="establishment" class="pickadate form-control" type="text" placeholder="Enter Year" />
                                            </div>
                                        </div>

                                       <div class="form-group">
                                            <label class="control-label">Construction Year</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                            <input name="construction" class="pickadate form-control" type="text" placeholder="Enter Year" />
                                            </div>
                                        </div>

										<div class="form-group">
                                            <label class="control-label">Scheme</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input name="scheme" type="text" parsley-minlength="3" class="form-control parsley-validated">
                                            </div>
                                        </div>

										<div class="form-group">
                                            <label class="control-label">Agency</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input name="agency" type="text" parsley-minlength="3" class="form-control parsley-validated">
                                            </div>
                                        </div>

										<div class="form-group">
                                            <label class="control-label">Physical Status</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select name="physical_status" class="form-control">
                                                    <option>Select</option>
                                                    <option>Good</option>
                                                    <option>Satisfactory</option>
                                                    <option>Repairable</option>
                                                    <option>Useless</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Programme</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select name="programme" class="form-control">
                                                    <option>Select</option>
                                                    <option>Bundelkhand</option>
                                                    <option>IAP</option>
                                                    <option>IWMP</option>
                                                    <option>OTHER</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">MIS Code (if any)</label>
                                            <div class="input-icon right ">
                                                <i class="fa"></i>
                                                <input name="mis_code" type="text" parsley-minlength="3" class="form-control parsley-validated" placeholder="http://">
                                            </div>
                                        </br>
                                            <div class="input-icon right ">
                                                <i class="fa"></i>
                                                <input name="mis_code_sec" type="text" parsley-minlength="3" class="form-control parsley-validated" placeholder="http://">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Electrified</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select name="electrified" class="form-control">
                                                    <option>Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">IS_Residential:</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select name="is_residential" class="form-control">
                                                    <option>Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Is_Pvt:</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select name="is_pvt" class="form-control">
                                                    <option>Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Boundary Wall:</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select name="boundary_wall" class="form-control">
                                                    <option>Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Computer:</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select name="computer" class="form-control">
                                                    <option>Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">ICT:</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select name="ict" class="form-control">
                                                    <option>Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>

										<br />
	                                   <hr>
										<h3><strong>Photos to be taken</strong></h3>
                                        <hr>
                                        <div class="form-group">
                                            <label class="control-label">Kitchenshed</label>
										  <div style="position:relative;">
														<a class='btn btn-primary' href='javascript:;'>
															Choose File...
															<input name="files" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'  size="40"  >
														</a>
														&nbsp;
														<span class='label label-info' id="upload-file-info"></span>
													</div>
                                       </div>
                                        <div class="form-group">
                                            <label class="control-label">Play Ground</label>
                                         	  <div style="position:relative;">
														<a class='btn btn-primary' href='javascript:;'>
															Choose File...
															<input name="play_ground" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'  size="40">
														</a>
														&nbsp;
														<span class='label label-info' id="upload-file-info"></span>
													</div>
                                       
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Girls Toilet</label>
                                          	  <div style="position:relative;">
														<a class='btn btn-primary' href='javascript:;'>
															Choose File...
															<input name="girls_toilet" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40">
														</a>
														&nbsp;
														<span class='label label-info' id="upload-file-info"></span>
													</div>
                                     
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Boys Toilet</label>
                                         	  <div style="position:relative;">
														<a class='btn btn-primary' href='javascript:;'>
															Choose File...
															<input name="boys_toilet" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'  size="40">
														</a>
														&nbsp;
														<span class='label label-info' id="upload-file-info"></span>
													</div>
                                     
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Drinking Water</label>
                                         	  <div style="position:relative;">
														<a class='btn btn-primary' href='javascript:;'>
															Choose File...
															<input name="drinking_water" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'  size="40">
														</a>
														&nbsp;
														<span class='label label-info' id="upload-file-info"></span>
													</div>
                                       
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Library</label>
                                        	  <div style="position:relative;">
														<a class='btn btn-primary' href='javascript:;'>
															Choose File...
															<input name="library" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'  size="40">
														</a>
														&nbsp;
														<span class='label label-info' id="upload-file-info"></span>
													</div>
                                       
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Boundarywall</label>
                                        	  <div style="position:relative;">
														<a class='btn btn-primary' href='javascript:;'>
															Choose File...
															<input name="wall" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'  size="40">
														</a>
														&nbsp;
														<span class='label label-info' id="upload-file-info"></span>
													</div>
                                       
                                        </div>

                                    
                                </div>
                            </div>

                                    </div>
                                
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-12">
                                        
    									  <h3><strong>अगर􀍪वभाग</strong></h3>
                                          <hr>
                                            <div class="form-group">
                                            <label class="control-label">Attributes To Be collect</label>
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input name="other_attribtes" type="text" parsley-minlength="3" class="form-control parsley-validated">
                                                </div>
                                            </div>
    										
                                            <div class="form-group">
                                            <label class="control-label">Photos to be taken</label>    
                                                  <div style="position:relative;">
														<a class='btn btn-primary' href='javascript:;'>
															Choose File...
															<input name="other_photo" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'  size="40"  >
														</a>
														&nbsp;
														<span class='label label-info' id="upload-file-info"></span>
													</div>
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <button class="btn btn-danger" onclick="javascript:$('#form4').parsley('validate');">Validate</button>
                                                <button type="reset" class="btn btn-default">Cancel</button>
    					                       <input type="submit" value="Upload" class="btn btn-default">
                                               <input type="submit" value="Backup" class="btn btn-default">
                                            </div>
                                       
                                    </div>
                                </div>

                            </div>
                                
                        </div>
                    </div>
                </div>
            </div>
</form></div>