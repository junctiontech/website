<!--Area Assignment -->
<!-- BEGIN MAIN CONTENT -->
<div id="main-content">
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3><strong>Area</strong> Assignment</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p>Assign an area location to the user</p>
                                    <br>
                                    <form id="form1" action="<?=base_url();?>admin/area_assign_user" method="Post" class="form-horizontal" parsley-validate>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">User <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-9">
                                                 <select name="user_id" class="form-control" data-live-search="true" required>
												 <?php $info=''; foreach($user_data_info as $j){  ?>
                                                <option value="<?=$j->user_id?>"><?=$j->name?></option>
                                                
												<?php } ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">District <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-9">
                                                <select name="district" class="form-control" data-live-search="true" required>
												 <?php $info=''; foreach($district_data as $j){  ?>
                                                <option value="<?=$j->name?>"><?=$j->name?></option>
												<?php } ?>
                                           </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Tahsil</label>
                                            <div class="col-sm-9">
                                               <select  name="tahsil" class="form-control" data-live-search="true" required>
											    <?php $info=''; foreach($tahsil_data as $j){  ?>
                                                <option value="<?=$j->name?>"><?=$j->name?></option>
												 
												 <?php } ?>
                                           </select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-sm-3 control-label">Village</label>
                                            <div class="col-sm-9">
											
                                               <select name="selectionlist[]" class="form-control" multiple title="Choose one or more" required>
											    <?php $info=''; foreach($village_data as $j){  ?>
                                                <option value="<?=$j->name?>"><?=$j->name?></option>
												  <?php } ?>
                                           </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <div class="pull-right">
                                                <button class="btn btn-primary m-b-10" onclick="javascript:$('#form1').parsley('validate');">Submit</button>
												 <button type="submit" formaction="<?=base_url();?>admin/delete_village_assign_user"   class="btn btn-default m-b-10">Delete</button>
                                                <button type="reset" class="btn btn-default m-b-10">Cancel</button>
												
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            </div>
        <!-- END MAIN CONTENT -->
   