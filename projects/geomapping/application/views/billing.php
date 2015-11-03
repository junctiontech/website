<!-- BEGIN MAIN CONTENT -->
    <div id="main-content">
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Billing</h3>
        </div>

    
        <!-- start table -->
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading bg-red">
                            <h3 class="panel-title"><strong>Billed</strong> Amount</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-red">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-dynamic">
                                        <thead>
                                            <tr>
                                                <th>User Name</th>
                                                <th>Role</th>
                                               <!-- <th>Bill Start</th>
                                                <th>Bill End</th>
                                                <th>Bill No</th>-->
                                                <th>Amount</th>
											<!--	<th>Bill No</th>-->
                                                <th></th>
                                            </tr>
                                        </thead>
                                     <tbody>
										<?php 	$grand_total=0;
										foreach($bill as $bill){
										$today = date("Y-m-d");
										$report_data = $bill->date;
										$today_dt = new DateTime($today);
										$expire_dt = new DateTime($report_data);
										if (DATE_FORMAT($expire_dt, 'M') != DATE_FORMAT($today_dt, 'M')) { 
											
										//	print_r(DATE_FORMAT($expire_dt, 'M'));die;
										if($bill->user_name == $bill->user_name){
											$grand_total+= $bill->billing_amount;
											?>
											<tr>
                                                <td><?=$bill->user_name?></td>
                                                <td><?=$bill->user_role?></td>
                                               <!-- <td>10.00 am</td>-->
                                                <td><?=$bill->billing_amount?></td>
                                            <!--    <td><?=$i?></td>-->
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-file-o"></i> View</button>
                                                </td>
                                               <!-- <td>
                                                    <button type="button" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Validate</button>
                                                    <button type="button" class="btn btn-sm btn-dark"><i class="fa fa-times"></i> Reject</button>
                                                </td>-->
                                            </tr>
											 <?php }
											else{
											 ?>
		 
		
                                            <tr>
                                                <td><?=$bill->user_name?></td>
                                                <td><?=$bill->user_role?></td>
                                               <!-- <td>10.00 am</td>-->
                                                <td><?=$grand_total?></td>
                                            <!--    <td><?=$i?></td>-->
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-file-o"></i> View</button>
                                                </td>
                                               <!-- <td>
                                                    <button type="button" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Validate</button>
                                                    <button type="button" class="btn btn-sm btn-dark"><i class="fa fa-times"></i> Reject</button>
                                                </td>-->
                                            </tr>
                                            <?php } 
		}
		}	
		?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        </br>
        <!-- start table -->
		
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading bg-red">
                            <h3 class="panel-title"><strong>Unbilled </strong> Amount</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-red">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-dynamic">
                                        <thead>
                                            <tr>
                                                <th>User Name</th>
                                                <th>Role</th>
                                               <!-- <th>Bill Start</th>
                                                <th>Bill End</th>-->
                                                <th>Amount</th>
												<!--<th>Bill No</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php	$grand_total=0;
										foreach($unbill as $bill){
										$today = date("Y-m-d");
										$report_data = $bill->date;
										$today_dt = new DateTime($today);
										$expire_dt = new DateTime($report_data);
										if (DATE_FORMAT($expire_dt, 'M') == DATE_FORMAT($today_dt, 'M')) { 
											$grand_total+= $bill->billing_amount;
											//print_r(DATE_FORMAT($expire_dt, 'M'));die;
										 ?>
			                               <tr>
                                                <td><?=$bill->user_name?></td>
                                                <td><?=$bill->user_role?></td>
                                               <!-- <td>10.00 am</td>-->
                                                <td><?=$bill->billing_amount?></td>
											<!--	<td><?=$i?></td>-->
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-file-o"></i> View</button>
                                                </td>
												 <td>
                                                  <a href="<?=base_url();?>admin/billing_pay/<?=$bill->data_capture_id?>">  <button type="button" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Validate</button></a>
                                                    <button type="button" class="btn btn-sm btn-dark"><i class="fa fa-times"></i> Reject</button>
                                                </td>
                                            </tr>
                                          <?php }
											}
											?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div> <!-- End Main Content -->