<!--Admin dashboard added by palak on 31st mar-->
<!-- BEGIN MAIN CONTENT -->
<div id="main-content">
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3><strong>Users</strong> Listing</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Authorize </strong>User</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="no-bd">
                                            <tr>
                                                <th style="width:30px;" class="div_checkbox">
                                                    <div class="div_checkbox">
                                                        <input class="toggle_checkbox" type="checkbox">
                                                    </div>
                                                </th>
                                                <th><strong>Name</strong>
                                                </th>
                                                <th><strong>Mobile No</strong>
                                                </th>
                                                <th><strong>IMEI NUMBER</strong>
                                                </th>
                                                 <th class="text-center"><strong>Authorize</strong>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="no-bd-y">
										 <?php $info=''; foreach($user_data_info as $j){  ?>
                                            <tr>
                                                <td>
                                                    <div class="div_checkbox">
                                                        <input type="checkbox">
                                                    </div>
                                                </td>
                                                <td class="text"><?=$j->name?></td>
                                                <td><?=$j->mobile?></td>
												
                                                <td class="text-left color-success"><?=$j->imei_no?></td>
                                                <td class="text-center">
													<a class="btn btn-sm btn-success" href="<?=base_url();?>admin/verify_user_accept/<?=$j->user_id ?>/<?=$info=1 ?>">
													<i class="fa fa-check"></i> ACCEPT
													</a> 
													<a class="btn btn-sm  btn-danger" href="<?=base_url();?>admin/verify_user_accept/<?=$j->user_id ?>/<?=$info=2 ?>">
														<i class="fa fa-times-circle"></i> 
														REJECT
													</a>
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
        </div>
        <!-- END MAIN CONTENT -->
    
   