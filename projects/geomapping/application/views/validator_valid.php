 <?php //print_r(((!empty($data_validate[0]->agency))?$$data_validate[0]->agency);die; ?> 
 <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
		 <form id="form4" role="form" parsley-validate="" class="icon-validation" 
							action="<?=base_url()?>validator/data_validator_update" method="post">
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3><?=(! ($data_validate[0]->user_role))?$data_validate[0]->user_role:''?></h3>
            </div>
               <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default map-panel">
                        <div class="panel-body">
                         <!-- <form method="post" action="<?=base_url();?>collector/data_capture">
                            <div class="row map_padding" style="padding-left:30px;">-->
                                <div class="col-md-4 col-sm-4 col-xs-4"><b>Current Location</b></div>
                                <div class="col-md-4 col-sm-4 col-xs-4" id="lat">Latitude</div>
                                <div class="col-md-4 col-sm-4 col-xs-4" id="lng">Longitude</div>
                                <input type="hidden" name="latitude" id="lat1" value=""/>
                                <input type="hidden" name="longitude" id="lng1" value=""/>
                          <!--  </div>-->
                            </br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                   <!-- <div class="map" id="simple-map"></div>-->
                                   <div class="col-md-12 col-sm-12 col-xs-12" id="map1"></div>
                                </div>
                            </div>
                         <!--   <div class="panel-heading pull-right">
                              <input  name="Data Collector" value="Data Collector" type="submit" class="btn btn-primary">
                                        </div>
                                      </form>-->
                        </div>
                    </div>
                </div>
                
               <style>
                     #map1 {
                        height: 50%;
                        width: 100%!important;
                        margin: 0px;
                        padding: 0px;
                        }
               
               </style>
  
            <!-- END MAIN CONTENT -->

        </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p class="m-b-20"><strong>Department</strong></p>
                                            <select name="department" class="form-control" data-style="input-lg btn-default">
                                                <option><?=(!empty($data_validate[0]->department))?$data_validate[0]->department:''?></option>
                                                <option>School Eduction</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="m-b-20"><strong>Asset Type</strong></p>
                                            <select name="asset" class="form-control" data-style="input-lg btn-default">
                                                <option><?=(!empty($data_validate[0]->asset))?$data_validate[0]->asset:''?></option>
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
                                                <option><?=(!empty($data_validate[0]->govasset))?$data_validate[0]->govasset:''?></option>
                                                <option>Yes</option>
												<option>No</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="m-b-20"><strong>Collect for Pvt Asset</strong></p>
                                            <select name="pvtasset" class="form-control" data-style="input-lg btn-default">
                                                <option><?=(!empty($data_validate[0]->pvtasset))?$data_validate[0]->pvtasset:''?></option>
                                                <option>Yes</option>
												<option>No</option>
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

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Establishment Year</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-calendar"></i>
                                                <input name="establishment" class="pickadate form-control"  type="text" placeholder="Enter Year" value="<?=(!empty($data_validate[0]->establishment))?$data_validate[0]->establishment:''?>"/>
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="row">       
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Construction Year</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-calendar"></i>
                                                <input name="construction" class="pickadate form-control" value="<?=(!empty($data_validate[0]->construction))?$data_validate[0]->construction:''?>" type="text" placeholder="Enter Year" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
    										<div class="form-group col-md-12">
                                                <label class="control-label">Scheme</label>
                                                <div class="input-icon right">
                                                    <input name="scheme" value="<?=(!empty($data_validate[0]->scheme))?$data_validate[0]->scheme:''?>" type="text" parsley-minlength="3" class="form-control parsley-validated">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
    										<div class="form-group col-md-12">
                                                <label class="control-label">Agency</label>
                                                <div class="input-icon right">
                                                    <input name="agency" value="<?=(!empty($data_validate[0]->agency))?$data_validate[0]->agency:''?>" type="text" parsley-minlength="3" class="form-control parsley-validated">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
    										<div class="form-group col-md-12">
                                                <label class="control-label">Physical Status</label>
                                                <div class="input-icon right">
                                                    <select name="physical_status" class="form-control">
                                                        <option><?=(!empty($data_validate[0]->physical_status))?$data_validate[0]->physical_status:''?></option>
                                                        <option>Good</option>
                                                        <option>Satisfactory</option>
                                                        <option>Repairable</option>
                                                        <option>Useless</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Programme</label>
                                                <div class="input-icon right">
                                                    <select name="programme" class="form-control">
                                                        <option><?=(!empty($data_validate[0]->programme))?$data_validate[0]->programme:''?></option>
                                                        <option>Bundelkhand</option>
                                                        <option>IAP</option>
                                                        <option>IWMP</option>
                                                        <option>OTHER</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">MIS Code (if any)</label>
                                                <div class="input-icon right ">
                                                    <input name="mis_code" value="<?=(!empty($data_validate[0]->mis_code))?$data_validate[0]->mis_code:''?>" type="text" parsley-minlength="3" class="form-control parsley-validated" placeholder="http://">
                                                </div>
                                            </br>
                                                <div class="input-icon right ">
                                                    <input name="mis_code_sec" value="<?=(!empty($data_validate[0]->mis_code_sec))?$data_validate[0]->mis_code_sec:''?>" type="text" parsley-minlength="3" class="form-control parsley-validated" placeholder="http://">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Electrified</label>
                                                <div class="input-icon right">
                                                    <select name="electrified" class="form-control">
                                                        <option><?=(!empty($data_validate[0]->electrified))?$data_validate[0]->electrified:''?></option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">IS_Residential:</label>
                                                <div class="input-icon right">
                                                    <select name="is_residential" class="form-control">
                                                        <option><?=(!empty($data_validate[0]->is_residential))?$data_validate[0]->is_residential:''?></option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Is_Pvt:</label>
                                                <div class="input-icon right">
                                                    <select name="is_pvt" class="form-control">
                                                        <option><?=(!empty($data_validate[0]->is_pvt))?$data_validate[0]->is_pvt:''?></option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Boundary Wall:</label>
                                                <div class="input-icon right">
                                                    <select name="boundary_wall" class="form-control">
                                                        <option><?=(!empty($data_validate[0]->boundary_wall))?$data_validate[0]->boundary_wall:''?></option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Computer:</label>
                                                <div class="input-icon right">
                                                    <select name="computer" class="form-control">
                                                        <option><?=(!empty($data_validate[0]->computer))?$data_validate[0]->computer:''?></option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">ICT:</label>
                                                <div class="input-icon right">
                                                    <select name="ict" class="form-control">
                                                        <option><?=(!empty($data_validate[0]->ict))?$data_validate[0]->ict:''?></option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

										<br />

										<hr>
										<h3><strong>Photos to be taken</strong></h3>
                                        <hr>
                                        <div class="form-group">
                                            <label class="control-label">Kitchenshed</label>
                                            <div class="gallery config-open">
                                                <div class="row">
                                                    <div class="mix category-1 col-lg-3 col-md-6 col-sm-6 col-xs-12" data-value="1">
                                                        <div class="thumbnail">
                                                            <div class="overlay">
                                                                <div class="thumbnail-actions">
                                                                    <a href="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->kitchenshed))?$data_validate[0]->kitchenshed:''?>" class="btn btn-default btn-icon btn-rounded magnific" title="Animal 1"><i class="fa fa-search"></i></a>
                                                                </div>
                                                            </div>
                                                            <img src="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->kitchenshed))?$data_validate[0]->kitchenshed:''?>" class="img-responsive" alt="animal1" />
                                                        </div>
                                                    </div>
                                                 </div>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Play Ground</label>
                                                <div class="row">
                                                    <div class="mix category-1 col-lg-3 col-md-6 col-sm-6 col-xs-12" data-value="1">
                                                        <div class="thumbnail">
                                                            <div class="overlay">
                                                                <div class="thumbnail-actions">
                                                                    <a href="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->play_ground))?$data_validate[0]->play_ground:''?>" class="btn btn-default btn-icon btn-rounded magnific" title="Animal 1"><i class="fa fa-search"></i></a>
                                                                </div>
                                                            </div>
                                                            <img src="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->play_ground))?$data_validate[0]->play_ground:''?>" class="img-responsive" alt="animal1" />
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Girls Toilet</label>
                                                <div class="row">
                                                    <div class="mix category-1 col-lg-3 col-md-6 col-sm-6 col-xs-12" data-value="1">
                                                        <div class="thumbnail">
                                                            <div class="overlay">
                                                                <div class="thumbnail-actions">
                                                                    <a href="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->girls_toilet))?$data_validate[0]->girls_toilet:''?>" class="btn btn-default btn-icon btn-rounded magnific" title="Animal 1"><i class="fa fa-search"></i></a>
                                                                </div>
                                                            </div>
                                                            <img src="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->girls_toilet))?$data_validate[0]->girls_toilet:''?>" class="img-responsive" alt="animal1" />
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Boys Toilet</label>
                                                <div class="row">
                                                    <div class="mix category-1 col-lg-3 col-md-6 col-sm-6 col-xs-12" data-value="1">
                                                        <div class="thumbnail">
                                                            <div class="overlay">
                                                                <div class="thumbnail-actions">
                                                                    <a href="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->boys_toilet))?$data_validate[0]->boys_toilet:''?>" class="btn btn-default btn-icon btn-rounded magnific" title="Animal 1"><i class="fa fa-search"></i></a>
                                                                </div>
                                                            </div>
                                                            <img src="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->boys_toilet))?$data_validate[0]->boys_toilet:''?>" class="img-responsive" alt="animal1" />
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Drinking Water</label>
                                                <div class="row">
                                                    <div class="mix category-1 col-lg-3 col-md-6 col-sm-6 col-xs-12" data-value="1">
                                                        <div class="thumbnail">
                                                            <div class="overlay">
                                                                <div class="thumbnail-actions">
                                                                    <a href="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->drinking_water))?$data_validate[0]->drinking_water:''?>" class="btn btn-default btn-icon btn-rounded magnific" title="Animal 1"><i class="fa fa-search"></i></a>
                                                                </div>
                                                            </div>
                                                            <img src="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->drinking_water))?$data_validate[0]->drinking_water:''?>" class="img-responsive" alt="animal1" />
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Library</label>
                                                <div class="row">
                                                    <div class="mix category-1 col-lg-3 col-md-6 col-sm-6 col-xs-12" data-value="1">
                                                        <div class="thumbnail">
                                                            <div class="overlay">
                                                                <div class="thumbnail-actions">
                                                                    <a href="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->library))?$data_validate[0]->library:''?>" class="btn btn-default btn-icon btn-rounded magnific" title="Animal 1"><i class="fa fa-search"></i></a>
                                                                </div>
                                                            </div>
                                                            <img src="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->library))?$data_validate[0]->library:''?>" class="img-responsive" alt="animal1" />
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Boundarywall</label>
                                                <div class="row">
                                                    <div class="mix category-1 col-lg-3 col-md-6 col-sm-6 col-xs-12" data-value="1">
                                                        <div class="thumbnail">
                                                            <div class="overlay">
                                                                <div class="thumbnail-actions">
                                                                    <a href="<?=base_url();?>assets/img/gallery/animal1.jpg" class="btn btn-default btn-icon btn-rounded magnific" title="Animal 1"><i class="fa fa-search"></i></a>
                                                                </div>
                                                            </div>
                                                            <img src="<?=base_url();?>assets/img/gallery/animal1.jpg" class="img-responsive" alt="animal1">
                                                        </div>
                                                    </div>
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
                                            <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Attributes To Be collect</label>
                                                <div class="input-icon right">
                                                    <input name="other_attribtes" value="<?=(!empty($data_validate[0]->other_attribtes))?$data_validate[0]->other_attribtes:''?>" type="text" parsley-minlength="3" class="form-control parsley-validated">
													<input name="data_capture_id" value="<?=(!empty($data_validate[0]->data_capture_id))?$data_validate[0]->data_capture_id:''?>" type="hidden" >
                                                </div>
                                            </div>
                                        </div>
    										
                                            <div class="form-group">
                                            <label class="control-label">Photos to be taken</label>    
                                                <div class="row">
                                                    <div class="mix category-1 col-lg-3 col-md-6 col-sm-6 col-xs-12" data-value="1">
                                                        <div class="thumbnail">
                                                            <div class="overlay">
                                                                <div class="thumbnail-actions">
                                                                    <a href="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->other_photo))?$data_validate[0]->other_photo:''?>" class="btn btn-default btn-icon btn-rounded magnific" title="Animal 1"><i class="fa fa-search"></i></a>
                                                                </div>
                                                            </div>
                                                            <img src="<?=base_url();?>data_capture/<?=(!empty($data_validate[0]->other_photo))?$data_validate[0]->other_photo:''?>" class="img-responsive" alt="animal1" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                            <div class="form-group">
                                                <button type="submit" value="submit" class="btn btn-danger" onclick="javascript:$('#form4').parsley('validate');">Accept</button>
                                                <button type="submit" formaction="<?=base_url()?>validator/data_validator_reject" class="btn btn-default">Rejected</button>
                                            </div>
                                        
                                    </div>
                                </div>

                            </div>
                                
                        </div>
                    </div>
                </div>
            </div>
			</form>
        </div>

      
    <!-- END WRAPPER -->
