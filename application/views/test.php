<!DOCTYPE html>
<html lang="en" class="loading">

<!-- Mirrored from pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Mar 2018 10:55:36 GMT -->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
	<meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
	<meta name="author" content="PIXINVENT">
	<title>Admin</title>
	<link rel="apple-touch-icon" sizes="60x60" href="assets/img/ico/apple-icon-60.html">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/ico/apple-icon-76.html">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/ico/apple-icon-120.html">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/img/ico/apple-icon-152.html">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/ico/favicon.ico">
	<link rel="shortcut icon" type="image/png" href="assets/img/ico/favicon-32.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
	<!-- BEGIN VENDOR CSS-->
	<!-- font icons-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/feather/style.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons/style.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/css/perfect-scrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/css/prism.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/css/pickadate/pickadate.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/css/chartist.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/css/tables/datatable/datatables.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/css/sweetalert2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/css/dragula.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/css/switchery.min.css">
	<!-- END VENDOR CSS-->
	<!-- BEGIN APEX CSS-->
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
	<!-- END APEX CSS-->
	<!-- BEGIN Page Level CSS-->
	<!-- END Page Level CSS-->
	<!-- BEGIN Custom CSS-->
	<!-- END Custom CSS-->
</head>





<body data-col="2-columns" class=" 2-columns " onload="startTime()">
	<div class="wrapper nav-collapsed menu-collapsed">
		<!-- main menu-->
		<!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
		<div data-active-color="white" data-background-color="primary" data-image="assets/img/sidebar-bg/01.jpg" class="app-sidebar">
			<!-- main menu header-->
			<!-- Sidebar Header starts-->
			<div class="sidebar-header">
				<div class="logo clearfix">
					<a href="<?php echo site_url('dashboard')?>" class="logo-text float-left">
						<div class="logo-img">
							<img src="assets/img/logo.png" />
						</div>
						<span class="text align-middle">APEX</span>
					</a>
					<a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block">
						<i data-toggle="collapsed" class="ft-toggle-left toggle-icon"></i>
					</a>
					<a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none">
						<i class="ft-x"></i>
					</a>
				</div>
			</div>
			<!-- Sidebar Header Ends-->
			<!-- / main menu header-->
			<!-- main menu content-->
			<div class="sidebar-content">
				<div class="nav-container">
					<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
						<li class="nav-item <?php if($this->uri->segment(1)=="dashboard"){echo 'active';}?>">
							<a href="<?php echo site_url('dashboard')?>">
								<i class="ft-home"></i>
								<span data-i18n="" class="menu-title">Dashboard</span>
							</a>
						</li>
						<li class="nav-item <?php if($this->uri->segment(1)=="customers"){echo 'active';}?>">
							<a href="<?php echo site_url('customers')?>">
								<i class="ft-users"></i>
								<span data-i18n="" class="menu-title">Customers</span>
							</a>
						</li>
						<li class="nav-item <?php if($this->uri->segment(1)=="customerdevice"){echo 'active';}?>">
							<a href="<?php echo site_url('customerdevice')?>">
								<i class="ft-monitor"></i>
								<span data-i18n="" class="menu-title">Customer Device</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- main menu content-->
			<div class="sidebar-background"></div>
			<!-- main menu footer-->
			<!-- include includes/menu-footer-->
			<!-- main menu footer-->
		</div>
		<!-- / main menu-->


		<!-- Navbar (Header) Starts-->
		<nav class="navbar navbar-expand-lg navbar-light bg-faded">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<form role="search" class="navbar-form navbar-right mt-1">
						<div class="position-relative has-icon-right">
							<input type="text" placeholder="Search" class="form-control round" />
							<div class="form-control-position">
								<i class="ft-search"></i>
							</div>
						</div>
					</form>
				</div>
				<div class="navbar-container">
					<div id="navbarSupportedContent" class="collapse navbar-collapse">
						<ul class="navbar-nav">
							<li class="nav-item mr-2">
								<a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen">
									<i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
									<p class="d-none">fullscreen</p>
								</a>
							</li>
							<li class="dropdown nav-item">
								<a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
									<i class="ft-user font-medium-3 blue-grey darken-4"></i>
									<p class="d-none">User Settings</p>
								</a>
								<div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
									<a href="javascript:;" class="dropdown-item py-1">
										<i class="ft-edit mr-2"></i>
										<span>Edit Profile</span>
									</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">
										<i class="ft-power mr-2"></i>
										<span>Logout</span>
									</a>
								</div>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link position-relative notification-sidebar-toggle">
									<i class="ft-align-left font-medium-3 blue-grey darken-4"></i>
									<p class="d-none">Notifications Sidebar</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<!-- Navbar (Header) Ends-->






		<div class="main-panel">
			<div class="main-content">
				<div class="content-wrapper">
					<!--info cards Starts-->
					<div class="row" matchHeight="card">
						<div class="col-sm-6 col-xl-3 col-lg-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="px-3 py-3">
										<div class="media">
											<div class="media-body text-left">
												<h3 class="mb-1 danger" id="txt">uptime</h3>
												<span>Uptime Status</span>
											</div>
											<div class="media-right align-self-center">
												<i class="icon-bulb danger font-large-2 float-right"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3 col-lg-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="px-3 py-3">
										<div class="media">
											<div class="media-body text-left">
												<h3 class="mb-1 info">10</h3>
												<span>Total Device</span>
											</div>
											<div class="media-right align-self-center">
												<i class="ft-cpu info font-large-2 float-right"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3 col-lg-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="px-3 py-3">
										<div class="media">
											<div class="media-body text-left">
												<h3 class="mb-1 success" id="txt">20</h3>
												<span>Total Customer</span>
											</div>
											<div class="media-right align-self-center">
												<i class="icon-user success font-large-2 float-right"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3 col-lg-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="px-3 py-3">
										<div class="media">
											<div class="media-body text-left">
												<h3 class="mb-1 lime" id="txt">23</h3>
												<span>Active User</span>
											</div>
											<div class="media-right align-self-center">
												<i class="icon-energy lime font-large-2 float-right"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--info cards Ends-->
					<div class="row" matchHeight="card">
						<div class="col-xl-6 col-lg-6 col-sm-6">
							<div class="card">
								<div class="card-header pb-0">
									<h4 class="card-title">Statistics Electricity Consumption</h4>
								</div>
								<div class="card-body">
									<div class="card-block">
										<div class="chart-info mb-2">
											<span class="text-uppercase mr-3"><i class="fa fa-circle primary font-small-2 mr-1"></i> Lamp</span>
											<span class="text-uppercase"><i class="fa fa-circle warning font-small-2 mr-1"></i> AC</span>
										</div>
										<div id="line-chart2" class="height-350 lineChart2 lineChart2Shadow">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-6 col-lg-6">
							<div class="row">
								<div class='col-sm-6 col-md-6 col-lg-6'>
									<div class="card">
										<div class="card-block pt-3">
											<div class="clearfix">
												<h5 class="text-bold-500 info float-left">TV</h5>
												<div class="actions float-right">
													<div class="form-group mr-1">
														<input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
													</div>
												</div>
											</div>
											<p>Description device.</p>
											<img src="assets/img/icon/tv-icon.png" class="rounded-circle width-50 mr-2">
											<span class="info">Apr 11</span>
										</div>
									</div>
								</div>
								<div class='col-sm-6 col-md-6 col-lg-6'>
									<div class="card">
										<div class="card-block pt-3">
											<div class="clearfix">
												<h5 class="text-bold-500 info float-left">AC</h5>
												<div class="actions float-right">
													<div class="form-group mr-1">
														<input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
													</div>
												</div>
											</div>
											<p>Description device.</p>
											<img src="assets/img/icon/ac-icon.png" class="rounded-circle width-50 mr-2">
											<span class="info">Apr 11</span>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class='col-sm-6 col-md-6 col-lg-6'>
									<div class="card">
										<div class="card-block pt-3">
											<div class="clearfix">
												<h5 class="text-bold-500 info float-left">Lamp 1</h5>
												<div class="actions float-right">
													<div class="form-group mr-1">
														<input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
													</div>
												</div>
											</div>
											<p>Description device.</p>
											<img src="assets/img/icon/lamp-icon.png" class="rounded-circle width-50 mr-2">
											<span class="info">Apr 11</span>
										</div>
									</div>
								</div>

								<div class='col-sm-6 col-md-6 col-lg-6'>
									<div class="card">
										<div class="card-block pt-3">
											<div class="clearfix">
												<h5 class="text-bold-500 info float-left">Lamp 2</h5>
												<div class="actions float-right">
													<div class="form-group mr-1">
														<input type="checkbox" id="switcherySize3" class="switchery lime" data-size="xs" checked/>
													</div>
												</div>
											</div>
											<p>Description device.</p>
											<img src="assets/img/icon/lamp-icon.png" class="rounded-circle width-50 mr-2">
											<span class="info">Apr 11</span>
										</div>
									</div>
								</div>			
							</div>
						</div>
					</div>
				</div>


				<footer class="footer footer-static footer-light">
					<p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; <?php echo date('Y')?> <a href="https://sdtech.co.id/" target="_blank" class="text-bold-800 primary darken-2">PT Sinergi Digital Teknologi </a>, All rights reserved. </span></p>
				</footer>
			</div>
		</div>

		<!-- START Notification Sidebar-->
		<aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block">
			<a class="notification-sidebar-close">
				<i class="ft-x font-medium-3"></i>
			</a>
			<div class="side-nav notification-sidebar-content">
				<div class="row">
					<div class="col-12 mt-1">
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#activity-tab" aria-expanded="true" class="nav-link active">Activity</a>
							</li>
							<li class="nav-item">
								<a id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#chat-tab" aria-expanded="false" class="nav-link">Chat</a>
							</li>
							<li class="nav-item">
								<a id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#settings-tab" aria-expanded="false" class="nav-link">Settings</a>
							</li>
						</ul>
						<div class="tab-content px-1 pt-1">
							<div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
								<div id="activity" class="col-12 timeline-left">
									<h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
									<div id="timeline" class="timeline-left timeline-wrapper">
										<ul class="timeline">
											<li class="timeline-line"></li>
											<li class="timeline-item">
												<div class="timeline-badge">
													<span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-purple bg-lighten-1">
														<i class="ft-shopping-cart"></i>
													</span>
												</div>
												<div class="col s9 recent-activity-list-text">
													<a href="#" class="deep-purple-text medium-small">just now</a>
													<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
												</div>
											</li>
											<li class="timeline-item">
												<div class="timeline-badge">
													<span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-info bg-lighten-1">
														<i class="fa fa-plane"></i>
													</span>
												</div>
												<div class="col s9 recent-activity-list-text">
													<a href="#" class="cyan-text medium-small">Yesterday</a>
													<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
												</div>
											</li>
											<li class="timeline-item">
												<div class="timeline-badge">
													<span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-success bg-lighten-1">
														<i class="ft-mic"></i>
													</span>
												</div>
												<div class="col s9 recent-activity-list-text">
													<a href="#" class="green-text medium-small">5 Days Ago</a>
													<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
												</div>
											</li>
											<li class="timeline-item">
												<div class="timeline-badge">
													<span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-warning bg-lighten-1">
														<i class="ft-map-pin"></i>
													</span>
												</div>
												<div class="col s9 recent-activity-list-text">
													<a href="#" class="amber-text medium-small">1 Week Ago</a>
													<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
												</div>
											</li>
											<li class="timeline-item">
												<div class="timeline-badge">
													<span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-red bg-lighten-1">
														<i class="ft-inbox"></i>
													</span>
												</div>
												<div class="col s9 recent-activity-list-text">
													<a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
													<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
												</div>
											</li>
											<li class="timeline-item">
												<div class="timeline-badge">
													<span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-cyan bg-lighten-1">
														<i class="ft-mic"></i>
													</span>
												</div>
												<div class="col s9 recent-activity-list-text">
													<a href="#" class="brown-text medium-small">1 Month Ago</a>
													<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
												</div>
											</li>
											<li class="timeline-item">
												<div class="timeline-badge">
													<span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-amber bg-lighten-1">
														<i class="ft-map-pin"></i>
													</span>
												</div>
												<div class="col s9 recent-activity-list-text">
													<a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
													<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
												</div>
											</li>
											<li class="timeline-item">
												<div class="timeline-badge">
													<span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-grey bg-lighten-1">
														<i class="ft-inbox"></i>
													</span>
												</div>
												<div class="col s9 recent-activity-list-text">
													<a href="#" class="grey-text medium-small">1 Year Ago</a>
													<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div id="chat-tab" aria-labelledby="base-tab2" class="tab-pane">
								<div id="chatapp" class="col-12">
									<h6 class="mt-1 mb-3 text-bold-400">RECENT CHAT</h6>
									<div class="collection border-none">
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Elizabeth Elliott </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
												</div>
												<p class="text-muted font-small-3">Thank you </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-6.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Mary Adams </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
												</div>
												<p class="text-muted font-small-3">Hello Boo </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-11.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Caleb Richards </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">9.00 PM</span>
												</div>
												<p class="text-muted font-small-3">Keny ! </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-18.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">June Lane </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
												</div>
												<p class="text-muted font-small-3">Ohh God </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-1.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Edward Fletcher </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">5.15 PM</span>
												</div>
												<p class="text-muted font-small-3">Love you </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-2.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Crystal Bates </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">8.00 AM</span>
												</div>
												<p class="text-muted font-small-3">Can we </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-3.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Nathan Watts </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">9.53 PM</span>
												</div>
												<p class="text-muted font-small-3">Great! </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-15.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Willard Wood </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">4.20 AM</span>
												</div>
												<p class="text-muted font-small-3">Do it </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-19.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Ronnie Ellis </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">5.30 PM</span>
												</div>
												<p class="text-muted font-small-3">Got that </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-14.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Gwendolyn Wood </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">4.34 AM</span>
												</div>
												<p class="text-muted font-small-3">Like you </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-13.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Daniel Russell </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">12.00 AM</span>
												</div>
												<p class="text-muted font-small-3">Thank you </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-22.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Sarah Graves </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">11.14 PM</span>
												</div>
												<p class="text-muted font-small-3">Okay you </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-9.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Andrew Hoffman </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">7.30 PM</span>
												</div>
												<p class="text-muted font-small-3">Can do </p>
											</div>
										</div>
										<div class="media mb-1">
											<a>
												<img alt="96x96" src="assets/img/portrait/small/avatar-s-20.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle">
											</a>
											<div class="media-body">
												<div class="clearfix">
													<h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Camila Lynch </h4>
													<span class="medium-small float-right blue-grey-text text-lighten-3">2.00 PM</span>
												</div>
												<p class="text-muted font-small-3">Leave it </p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="settings-tab" aria-labelledby="base-tab3" class="tab-pane">
								<div id="settings" class="col-12">
									<h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
									<ul class="list-unstyled">
										<li>
											<div class="togglebutton">
												<div class="switch">
													<span class="text-bold-500">Notifications</span>
													<div class="float-right">
														<div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
															<input id="notifications1" checked="checked" type="checkbox" class="custom-control-input cz-bg-image-display">
															<label for="notifications1" class="custom-control-label"></label>
														</div>
													</div>
												</div>
											</div>
											<p>Use checkboxes when looking for yes or no answers.</p>
										</li>
										<li>
											<div class="togglebutton">
												<div class="switch">
													<span class="text-bold-500">Show recent activity</span>
													<div class="float-right">
														<div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
															<input id="recent-activity1" checked="checked" type="checkbox" class="custom-control-input cz-bg-image-display">
															<label for="recent-activity1" class="custom-control-label"></label>
														</div>
													</div>
												</div>
											</div>
											<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
										</li>
										<li>
											<div class="togglebutton">
												<div class="switch">
													<span class="text-bold-500">Notifications</span>
													<div class="float-right">
														<div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
															<input id="notifications2" type="checkbox" class="custom-control-input cz-bg-image-display">
															<label for="notifications2" class="custom-control-label"></label>
														</div>
													</div>
												</div>
											</div>
											<p>Use checkboxes when looking for yes or no answers.</p>
										</li>
										<li>
											<div class="togglebutton">
												<div class="switch">
													<span class="text-bold-500">Show recent activity</span>
													<div class="float-right">
														<div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
															<input id="recent-activity2" type="checkbox" class="custom-control-input cz-bg-image-display">
															<label for="recent-activity2" class="custom-control-label"></label>
														</div>
													</div>
												</div>
											</div>
											<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
										</li>
										<li>
											<div class="togglebutton">
												<div class="switch">
													<span class="text-bold-500">Show your emails</span>
													<div class="float-right">
														<div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
															<input id="show-emails" type="checkbox" class="custom-control-input cz-bg-image-display">
															<label for="show-emails" class="custom-control-label"></label>
														</div>
													</div>
												</div>
											</div>
											<p>Use checkboxes when looking for yes or no answers.</p>
										</li>
										<li>
											<div class="togglebutton">
												<div class="switch">
													<span class="text-bold-500">Show Task statistics</span>
													<div class="float-right">
														<div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
															<input id="show-stats" type="checkbox" class="custom-control-input cz-bg-image-display">
															<label for="show-stats" class="custom-control-label"></label>
														</div>
													</div>
												</div>
											</div>
											<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</aside>
		<!-- END Notification Sidebar-->

		<!-- BEGIN VENDOR JS-->
		<script src="assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/prism.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
		<!-- BEGIN VENDOR JS-->
		<!-- BEGIN PAGE VENDOR JS-->
		<script src="assets/vendors/js/sweetalert2.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/chartist.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/datatable/datatables.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/pickadate/picker.js" type="text/javascript"></script>
		<script src="assets/vendors/js/pickadate/picker.date.js" type="text/javascript"></script>
		<script src="assets/vendors/js/pickadate/picker.time.js" type="text/javascript"></script>
		<script src="assets/vendors/js/pickadate/legacy.js" type="text/javascript"></script>
		<script src="assets/vendors/js/dragula.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/switchery.min.js" type="text/javascript"></script>
		<!-- END PAGE VENDOR JS-->
		<!-- BEGIN APEX JS-->
		<script src="assets/js/app-sidebar.js" type="text/javascript"></script>
		<script src="assets/js/notification-sidebar.js" type="text/javascript"></script>
		<script src="assets/js/customizer.js" type="text/javascript"></script>
		<!-- END APEX JS-->
		<!-- BEGIN PAGE LEVEL JS-->
		<script src="assets/js/taskboard.js" type="text/javascript"></script>
		<script src="assets/js/sweet-alerts.js" type="text/javascript"></script>
		<script src="assets/js/data-tables/datatable-basic.js" type="text/javascript"></script>
		<script src="assets/js/dashboard2.js" type="text/javascript"></script>
		<script src="assets/js/dashboard1.js" type="text/javascript"></script>
		<script src="assets/js/components-modal.min.js" type="text/javascript"></script>
		<script src="assets/js/pick-a-datetime.js" type="text/javascript"></script>
		<script src="assets/js/switch.min.js" type="text/javascript"></script>
		<!-- END PAGE LEVEL JS-->

		<!-- waktu uptime -->
		<script>
			function startTime() {
				var today = new Date();
				var h = today.getHours();
				var m = today.getMinutes();
				var s = today.getSeconds();
				m = checkTime(m);
				s = checkTime(s);
				document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
				var t = setTimeout(startTime, 500);
			}
			
			function checkTime(i){
				if (i < 10) {
					i = "0" + i}; // add zero in front of numbers < 10
					return i;
				}
			</script>
			<script>
				$(document).ready(function () {
					// Delete Customer
					$('#deleteCustomer').on('click', function () {
						swal({
							title: 'Delete Customer?',
							type: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#0CC27E',
							cancelButtonColor: '#FF586B',
							confirmButtonText: 'Delete',
							cancelButtonText: 'Cancel',
							confirmButtonClass: 'btn btn-success btn-raised mr-5',
							cancelButtonClass: 'btn btn-danger btn-raised',
							buttonsStyling: false
						}).then(function () {
							swal(
								'Deleted!',
								'Success delete customer'
								)
						})
					});

					// Delete Device
					$('#deleteDevice').on('click', function () {
						swal({
							title: 'Delete Device?',
							type: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#0CC27E',
							cancelButtonColor: '#FF586B',
							confirmButtonText: 'Delete',
							cancelButtonText: 'Cancel',
							confirmButtonClass: 'btn btn-success btn-raised mr-5',
							cancelButtonClass: 'btn btn-danger btn-raised',
							buttonsStyling: false
						}).then(function () {
							swal(
								'Deleted!',
								'Success delete device')
						})
					});
				});
			</script>
		</body><!-- Mirrored from pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Mar 2018 10:55:36 GMT -->
		</html>