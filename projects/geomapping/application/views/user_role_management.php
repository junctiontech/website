<!-- BEGIN MAIN CONTENT -->
<div id="main-content">
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3><strong>Users </strong> Role Management</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading bg-red">
                            <h3 class="panel-title"><strong>Users </strong> </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!--<div class="col-md-12 m-b-20">
                                    <div  class="btn-group">
                                        <button id="table-edit_new" class="btn btn-danger btn-sm">
                                            Add New <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                   </div>-->
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-red">
                                    <table class="table table-striped table-hover dataTable" id="table-editable">
                                        <thead>
                                            <tr role="row">
											
                                                <th>Full Name</th>
                                                <th>Mobile No</th>
                                                <th>IMEI</th>
												<th style="display:none"></th>
                                                <th>Role</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

										<?php $info=''; foreach($user_data_info as $j){  ?>
										
                                            <tr>
											
												  <td class="text"><?=$j->name ?></td>
                                                <td><?=$j->mobile?></td>
                                                <td><?=$j->imei_no?></td>
												<td style="display:none"><?=$j->user_id?></td> 
                                              
                                                <td class="cap"style="width:25%"><?=$j->role?></td>
                                                <td class="text-center">
												
                                                <a class="edit btn btn-dark btn-sm" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                                <a class="delete btn btn-sm btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                               
												</td>
												
                                            </tr>
											
											 <?php } ?>
                                           
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT -->


        </div>
      
