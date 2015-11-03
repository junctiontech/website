 
 <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3>List of Validation Notification</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                    
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-dynamic">
                                        <thead class="">
                                            <tr>
                                                <th><strong>Date</strong>
                                                </th>
                                                <th><strong>Name</strong>
                                                </th>
                                             <!--   <th><strong>Date</strong>
                                                </th>
                                                <th class="text-center"><strong>Status</strong>
                                                </th>-->
                                            </tr>
                                        </thead>
                                        <?php $i=''; foreach ($data_validate as $validate){ $i++; ?>
                                        <tbody class="cap">
                                            <tr>
                                                <td><?=$validate->date?></td>
                                                <td><?=$validate->user_name?></td>
                                               <!-- <td><?=$validate->date?></td>-->
                                                <td class="text-center">
                                                    <a href="<?=base_url();?>validator/data_validator/<?=$validate->data_capture_id?>"<button type="button" class="btn btn-sm btn-danger">View</button></a>  <?php if($validate->status=="under_validate"){ ?><a href="<?=base_url();?>validator/validator_valid/<?=$validate->data_capture_id?>"<button type="button" class="btn btn-sm btn-danger">Do Validate</button></a><?php  } else{ ?> <a <button type="button" class="btn btn-sm btn-danger"><?=$validate->status?></button></a> <?php } ?>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <!-- END Main content -->
