<body class="page-body skin-black loaded ">

	<div class="page-container sidebar-collapsed "><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
		
		<div class="sidebar-menu ">
			
			
			<header class="logo-env">
				
				<!-- logo -->
				<div class="logo">
					<a href="javascript:;">
						<img src="assets/images/logo@2x.png" width="120" alt="" />
					</a>
				</div>
				
				<!-- logo collapse icon -->
				
				<div class="sidebar-collapse">
					<a href="javascript:;" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>
				
				
				
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="javascript:;" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>
				
			</header>
			
			<ul id="main-menu" class="">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<!-- Search Bar -->
				
				<li>
					<a href="<?=base_url()?>home/emp_detail">
						<i class="entypo-gauge"></i>
						<span>Dashboard</span>
					</a>
				</li>
				
			</ul>
			
		</div>	