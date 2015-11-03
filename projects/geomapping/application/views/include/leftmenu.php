<!-- BEGIN WRAPPER -->
<div id="wrapper">
<!-- BEGIN MAIN SIDEBAR -->
        <nav id="sidebar">
            <div id="main-menu">
                <ul class="sidebar-nav">
				 
					 <?php if((isset($user_data['role'])?$user_data['role']:'')=="Data Collector"){  ?>
					 
					<li>
                        <a href="javascript:;"><i class="glyphicon glyphicon-cog"></i><span class="sidebar-text">Refresh Configuration</span></a>
                    </li>
					<li>
                        <a href="<?=base_url();?>collector/data_collector"><i class="glyphicon glyphicon-map-marker"></i><span class="sidebar-text">Geo Mapping</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>collector/data_capture"><i class="fa fa-camera-retro"></i><span class="sidebar-text">Capture Data</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>collector/report_collector"><i class="fa fa-file-text"></i><span class="sidebar-text">View Reports</span></a>
                    </li>
					 <?php }
					  elseif((isset($user_data['role'])?$user_data['role']:'')=="Data Validator"){  ?>
					  <li>
                        <a href="<?=base_url();?>validator/data_validator_dashboard"><i class="fa fa-dashboard"></i><span class="sidebar-text">Validate Data</span></a>
                    </li>
                     <li>
                        <a href="<?=base_url();?>validator/report_validator"><i class="fa fa-file-text"></i><span class="sidebar-text">View Reports</span></a>
                    </li>
					 <?php }
					  elseif((isset($user_data['role'])?$user_data['role']:'')=="Vrm Integrator"){  ?>
					   <li>
                        <a href="<?=base_url();?>vrm"><i class="fa fa-dashboard"></i><span class="sidebar-text">validate data</span></a>
                    </li>
						<li>
                        <a href="<?=base_url();?>vrm/vrm_geo"><i class="glyphicon glyphicon-map-marker"></i><span class="sidebar-text">Prepare VRM</span></a>
                    </li>
					
					<li>
                        <a href="<?=base_url();?>vrm/report_vrm"><i class="glyphicon glyphicon-map-marker"></i><span class="sidebar-text">View Report</span></a>
                    </li>
					 <?php }
					 elseif((isset($user_data['role'])?$user_data['role']:'')=="Super Admin")  {  ?>
                    <li>
                        <a href="<?=base_url();?>admin/admin_dash"><i class="fa fa-dashboard"></i><span class="sidebar-text">User Management</span></a>
                    </li>
					<li>
                        <a href="<?=base_url();?>admin/user_role_management"><i class="glyph-icon flaticon-account"></i><span class="sidebar-text">Role Management</span></a>
                    </li>
					<li>
                        <a href="<?=base_url();?>admin/area_assign"><i class="glyphicon glyphicon-map-marker"></i><span class="sidebar-text">Area Assignment</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>admin/report_management"><i class="glyphicon glyphicon-tasks"></i><span class="sidebar-text">Report Management</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>admin/report"><i class="glyphicon glyphicon-eye-open"></i><span class="sidebar-text">View Report</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>admin/billing"><i class="glyphicon glyphicon-list-alt"></i><span class="sidebar-text">Billing</span></a>
                    </li>
                    <?php }
					else { redirect('home'); } ?>
					 
               </ul>
            </div>
        </nav>
        <!-- END MAIN SIDEBAR -->
    