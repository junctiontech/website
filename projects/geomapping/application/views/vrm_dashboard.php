 
 <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3>List of VRM Integrator Notification</h3>
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
                                               <!-- <th><strong>Date</strong>
                                                </th>-->
                                                <th class="text-center"><strong></strong>
                                                </th>
                                            </tr>
                                        </thead>
                                         <?php $i=''; foreach ($data_vrm as $vrm){ $i++; ?>
                                        <tbody class="">
                                            <tr>
                                                <td><?=$vrm->date?></td>
                                                <td class="cap"><?=$vrm->user_name?></td>
                                                <!--<td><?=$vrm->date?></td>-->
                                                <td class="text-center">
                                                    <a href="<?=base_url();?>vrm/vrm_data/<?=$vrm->data_capture_id?>"><button type="button" class="btn btn-sm btn-danger">View</button></a>  <a href="<?=base_url();?>vrm/vrm_data_validate/<?=$vrm->data_capture_id?>"><button type="button" class="btn btn-sm btn-danger">validate</button></a>
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
