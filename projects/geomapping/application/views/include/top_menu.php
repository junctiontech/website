<?php $user_session_data = $this->session->userdata('user_data');
//print_r((!empty($user_data['role']))?$user_data['role']:'');die;
?>
<body>
<!-- BEGIN TOP MENU -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="menu-medium" class="sidebar-toggle tooltips">
                    <i class="fa fa-outdent"></i>
                </a>
                <a class="navbar-brand" href="javascript:;">
                    <img src="<?=base_url();?>assets/img/logo.png" alt="logo">
                </a>
            </div>
            <div class="navbar-center">Dashboard</div>
            <div class="navbar-collapse collapse">
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right header-menu">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <li class="dropdown" id="notifications-header">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="glyph-icon flaticon-notifications"></i>
                            <span class="badge badge-danger badge-header">6</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header clearfix">
                                <p class="pull-left">Notifications</p>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list withScroll" data-height="220">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-camera p-r-10 f-18 c-orange"></i>
                                            Steve uploaded  photo
                                            <span class="dropdown-time">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-map-marker p-r-10 f-18 c-red"></i>
                                            Shanley added a geographic location
                                            <span class="dropdown-time">15 mins</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-footer clearfix">
                                <a href="javascript:;" class="pull-left">See all notifications</a>
                               
                            </li>
                        </ul>
                    </li>
                    <!-- END NOTIFICATION DROPDOWN -->
                     <!-- BEGIN USER DROPDOWN -->
                    <li class="dropdown cap" id="user-header">
                        <a href="#" class="dropdown-toggle c-white" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img src="<?=base_url();?>assets/img/avatars/avatar2.png" alt="user avatar" width="30" class="p-r-5">
                            <span class="username"><?=(!empty($user_data['name']))?$user_data['name']:''?>-<?=(!empty($user_data['role']))?$user_data['role']:''?></span>
                            <i class="fa fa-angle-down p-r-10"></i>
                        </a>
                        <ul class="dropdown-menu">
                            
                            <li>
                                <a href="javascript:;">
                                    <i class="glyph-icon flaticon-settings21"></i> Account Settings
                                </a>
                            </li>
							<li>
                                <a href="<?=base_url();?>home/logout">
                                    <i class="fa fa-power-off"></i>Logout
                                </a>
                            </li>
                         
                        </ul>
                    </li>
                    <!-- END USER DROPDOWN -->
             
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </nav>
    <!-- END TOP MENU -->