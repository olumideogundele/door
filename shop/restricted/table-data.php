<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Valex -  Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!-- Favicon -->
		<link rel="icon" href="../assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!-- Internal Data table css -->
		<link href="../assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="../assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
		<link href="../assets/plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
		<link href="../assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="../assets/plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
		<link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- P-scroll bar css-->
		<link href="../assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

		<!--  Left-Sidebar css -->
		<link rel="stylesheet" href="../assets/css/closed-sidemenu.css">

		<!--- Style css --->
		<link href="../assets/css/style.css" rel="stylesheet">

		<!--- Dark-mode css --->
		<link href="../assets/css/style-dark.css" rel="stylesheet">

		<!---Skinmodes css-->
		<link href="../assets/css/skin-modes.css" rel="stylesheet" />

		<!--- Animations css-->
		<link href="../assets/css/animate.css" rel="stylesheet">

	</head>

	<body class="main-body app sidebar-mini dark-theme">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

			<!-- main-sidebar -->
			<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar sidebar-scroll">
				<div class="main-sidebar-header active">
					<a class="desktop-logo logo-light active" href="backend/index.html"><img src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="main-logo" alt="logo"></a>
					<a class="desktop-logo logo-dark active" href="backend/index.html"><img     src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="main-logo dark-theme" alt="logo"></a>
					<a class="logo-icon mobile-logo icon-light active" href="backend/index.html"><img   src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>"class="logo-icon" alt="logo"></a>
					<a class="logo-icon mobile-logo icon-dark active" href="backend/index.html"><img     src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="logo-icon dark-theme" alt="logo"></a>
				</div>
				<div class="main-sidemenu">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div class="">
								<img alt="user-img" class="avatar avatar-xl brround" src="../assets/img/faces/6.jpg"><span class="avatar-status profile-status bg-green"></span>
							</div>
							<div class="user-info">
								<h4 class="font-weight-semibold mt-3 mb-0">Petey Cruiser</h4>
								<span class="mb-0 text-muted">Premium Member</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="side-item side-item-category">Main</li>
						<li class="slide">
							<a class="side-menu__item" href="backend/index.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Index</span><span class="badge badge-success side-badge">1</span></a>
						</li>
						<li class="side-item side-item-category">General</li>
						<li class="slide">
							<a class="side-menu__item" href="backend/icons.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg><span class="side-menu__label">Icons</span><span class="badge badge-danger side-badge">New</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">Charts</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="backend/chart-morris.html">Morris Charts</a></li>
								<li><a class="slide-item" href="backend/chart-flot.html">Flot Charts</a></li>
								<li><a class="slide-item" href="backend/chart-chartjs.html">ChartJS</a></li>
								<li><a class="slide-item" href="backend/chart-echart.html">Echart</a></li>
								<li><a class="slide-item" href="backend/chart-sparkline.html">Sparkline</a></li>
								<li><a class="slide-item" href="backend/chart-peity.html">Chart-peity</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg><span class="side-menu__label">Ecommerce</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="backend/products.html">Products</a></li>
								<li><a class="slide-item" href="backend/product-details.html">Product-Details</a></li>
								<li><a class="slide-item" href="backend/product-cart.html">Cart</a></li>
							</ul>
						</li>
						<li class="side-item side-item-category">WEB APPS</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="backend/cards.html">Cards</a></li>
								<li><a class="slide-item" href="backend/draggablecards.html">Draggablecards</a></li>
								<li><a class="slide-item" href="backend/rangeslider.html">Range-slider</a></li>
								<li><a class="slide-item" href="backend/calendar.html">Calendar</a></li>
								<li><a class="slide-item" href="backend/contacts.html">Contacts</a></li>
								<li><a class="slide-item" href="backend/image-compare.html">Image-compare</a></li>
								<li><a class="slide-item" href="backend/notification.html">Notification</a></li>
								<li><a class="slide-item" href="backend/widget-notification.html">Widget-notification</a></li>
								<li><a class="slide-item" href="backend/treeview.html">Treeview</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg><span class="side-menu__label">Elements</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="backend/alerts.html">Alerts</a></li>
								<li><a class="slide-item" href="backend/avatar.html">Avatar</a></li>
								<li><a class="slide-item" href="backend/breadcrumbs.html">Breadcrumbs</a></li>
								<li><a class="slide-item" href="backend/buttons.html">Buttons</a></li>
								<li><a class="slide-item" href="backend/badge.html">Badge</a></li>
								<li><a class="slide-item" href="backend/dropdown.html">Dropdown</a></li>
								<li><a class="slide-item" href="backend/thumbnails.html">Thumbnails</a></li>
								<li><a class="slide-item" href="backend/list-group.html">List Group</a></li>
								<li><a class="slide-item" href="backend/navigation.html">Navigation</a></li>
								<li><a class="slide-item" href="backend/images.html">Images</a></li>
								<li><a class="slide-item" href="backend/pagination.html">Pagination</a></li>
								<li><a class="slide-item" href="backend/popover.html">Popover</a></li>
								<li><a class="slide-item" href="backend/progress.html">Progress</a></li>
								<li><a class="slide-item" href="backend/spinners.html">Spinners</a></li>
								<li><a class="slide-item" href="backend/media-object.html">Media Object</a></li>
								<li><a class="slide-item" href="backend/typography.html">Typography</a></li>
								<li><a class="slide-item" href="backend/tooltip.html">Tooltip</a></li>
								<li><a class="slide-item" href="backend/toast.html">Toast</a></li>
								<li><a class="slide-item" href="backend/tags.html">Tags</a></li>
								<li><a class="slide-item" href="backend/tabs.html">Tabs</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 10 6.5 10s1.5.67 1.5 1.5S7.33 13 6.5 13zm3-4C8.67 9 8 8.33 8 7.5S8.67 6 9.5 6s1.5.67 1.5 1.5S10.33 9 9.5 9zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 6 14.5 6s1.5.67 1.5 1.5S15.33 9 14.5 9zm4.5 2.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5z" opacity=".3"/><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.08-.09-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9zm4 13h-1.77c-1.38 0-2.5 1.12-2.5 2.5 0 .61.22 1.19.63 1.65.06.07.14.19.14.35 0 .28-.22.5-.5.5-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.14 8 7c0 2.21-1.79 4-4 4z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg><span class="side-menu__label">Advanced UI</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="backend/accordion.html">Accordion</a></li>
								<li><a class="slide-item" href="backend/carousel.html">Carousel</a></li>
								<li><a class="slide-item" href="backend/collapse.html">Collapse</a></li>
								<li><a class="slide-item" href="backend/modals.html">Modals</a></li>
								<li><a class="slide-item" href="backend/timeline.html">Timeline</a></li>
								<li><a class="slide-item" href="backend/sweet-alert.html">Sweet Alert</a></li>
								<li><a class="slide-item" href="backend/rating.html">Ratings</a></li>
								<li><a class="slide-item" href="backend/counters.html">Counters</a></li>
								<li><a class="slide-item" href="backend/search.html">Search</a></li>
								<li><a class="slide-item" href="backend/userlist.html">Userlist</a></li>
								<li><a class="slide-item" href="backend/blog.html">Blog</a></li>
							</ul>
						</li>
						<li class="side-item side-item-category">COMPONENTS</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/></svg><span class="side-menu__label">Mail</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="backend/mail.html">Mail</a></li>
								<li><a class="slide-item" href="backend/mail-compose.html">Mail Compose</a></li>
								<li><a class="slide-item" href="backend/mail-read.html">Read-mail</a></li>
								<li><a class="slide-item" href="backend/mail-settings.html">mail-settings</a></li>
								<li><a class="slide-item" href="backend/chat.html">Chat</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg><span class="side-menu__label">Forms</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="backend/form-elements.html">Form Elements</a></li>
								<li><a class="slide-item" href="backend/form-advanced.html">Advanced Forms</a></li>
								<li><a class="slide-item" href="backend/form-layouts.html">Form Layouts</a></li>
								<li><a class="slide-item" href="backend/form-validation.html">Form Validation</a></li>
								<li><a class="slide-item" href="backend/form-wizards.html">Form Wizards</a></li>
								<li><a class="slide-item" href="backend/form-editor.html">WYSIWYG Editor</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3"/><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z"/></svg><span class="side-menu__label">Tables</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="backend/table-basic.html">Basic Tables</a></li>
								<li><a class="slide-item" href="backend/table-data.html">Data Tables</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" href="backend/widgets.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v4H5zm10 10h4v4h-4zM5 15h4v4H5zM16.66 4.52l-2.83 2.82 2.83 2.83 2.83-2.83z" opacity=".3"/><path d="M16.66 1.69L11 7.34 16.66 13l5.66-5.66-5.66-5.65zm-2.83 5.65l2.83-2.83 2.83 2.83-2.83 2.83-2.83-2.83zM3 3v8h8V3H3zm6 6H5V5h4v4zM3 21h8v-8H3v8zm2-6h4v4H5v-4zm8-2v8h8v-8h-8zm6 6h-4v-4h4v4z"/></svg><span class="side-menu__label">Widgets</span><span class="badge badge-warning side-badge">Hot</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4C9.24 4 7 6.24 7 9c0 2.85 2.92 7.21 5 9.88 2.11-2.69 5-7 5-9.88 0-2.76-2.24-5-5-5zm0 7.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" opacity=".3"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg><span class="side-menu__label">Maps</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="backend/map-leaflet.html">Mapel Maps</a></li>
								<li><a class="slide-item" href="backend/map-vector.html">Vector Maps</a></li>
							</ul>
						</li>
						<li class="side-item side-item-category">Pages</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="side-menu__icon" viewBox="0 0 24 24" ><g><rect fill="none"/></g><g><g/><g><path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M3,18.5V7 c1.1-0.35,2.3-0.5,3.5-0.5c1.34,0,3.13,0.41,4.5,0.99v11.5C9.63,18.41,7.84,18,6.5,18C5.3,18,4.1,18.15,3,18.5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.34,0-3.13,0.41-4.5,0.99V7.49c1.37-0.59,3.16-0.99,4.5-0.99c1.2,0,2.4,0.15,3.5,0.5V18.5z"/><path d="M11,7.49C9.63,6.91,7.84,6.5,6.5,6.5C5.3,6.5,4.1,6.65,3,7v11.5C4.1,18.15,5.3,18,6.5,18 c1.34,0,3.13,0.41,4.5,0.99V7.49z" opacity=".3"/></g><g><path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,10.69,16.18,10.5,17.5,10.5z"/><path d="M17.5,13.16c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,13.36,16.18,13.16,17.5,13.16z"/><path d="M17.5,15.83c0.88,0,1.73,0.09,2.5,0.26v-1.52c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,16.02,16.18,15.83,17.5,15.83z"/></g></svg><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="backend/profile.html">Profile</a></li>
								<li><a class="slide-item" href="backend/editprofile.html">Edit-Profile</a></li>
								<li><a class="slide-item" href="backend/invoice.html">Invoice</a></li>
								<li><a class="slide-item" href="backend/pricing.html">Pricing</a></li>
								<li><a class="slide-item" href="backend/gallery.html">Gallery</a></li>
								<li><a class="slide-item" href="backend/todotask.html">Todotask</a></li>
								<li><a class="slide-item" href="backend/faq.html">Faqs</a></li>
								<li><a class="slide-item" href="backend/empty.html">Empty Page</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.9 19.91c.36.05.72.09 1.1.09 2.18 0 4.16-.88 5.61-2.3L14.89 13l-3.99 6.91zm-1.04-.21l2.71-4.7H4.59c.93 2.28 2.87 4.03 5.27 4.7zM8.54 12L5.7 7.09C4.64 8.45 4 10.15 4 12c0 .69.1 1.36.26 2h5.43l-1.15-2zm9.76 4.91C19.36 15.55 20 13.85 20 12c0-.69-.1-1.36-.26-2h-5.43l3.99 6.91zM13.73 9h5.68c-.93-2.28-2.88-4.04-5.28-4.7L11.42 9h2.31zm-3.46 0l2.83-4.92C12.74 4.03 12.37 4 12 4c-2.18 0-4.16.88-5.6 2.3L9.12 11l1.15-2z" opacity=".3"/><path d="M12 22c5.52 0 10-4.48 10-10 0-4.75-3.31-8.72-7.75-9.74l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10zm0-2c-.38 0-.74-.04-1.1-.09L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20zm8-8c0 1.85-.64 3.55-1.7 4.91l-4-6.91h5.43c.17.64.27 1.31.27 2zm-.59-3h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM12 4c.37 0 .74.03 1.1.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4zm-8 8c0-1.85.64-3.55 1.7-4.91L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12zm6.27 3h2.3l-2.71 4.7c-2.4-.67-4.35-2.42-5.28-4.7h5.69z"/></svg><span class="side-menu__label">Utilities</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="backend/background.html">Background</a></li>
								<li><a class="slide-item" href="backend/border.html">Border</a></li>
								<li><a class="slide-item" href="backend/display.html">Display</a></li>
								<li><a class="slide-item" href="backend/flex.html">Flex</a></li>
								<li><a class="slide-item" href="backend/height.html">Height</a></li>
								<li><a class="slide-item" href="backend/margin.html">Margin</a></li>
								<li><a class="slide-item" href="backend/padding.html">Padding</a></li>
								<li><a class="slide-item" href="backend/position.html">Position</a></li>
								<li><a class="slide-item" href="backend/width.html">Width</a></li>
								<li><a class="slide-item" href="backend/extras.html">Extras</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg><span class="side-menu__label">Custom Pages</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="backend/signin.html">Sign In</a></li>
								<li><a class="slide-item" href="backend/signup.html">Sign Up</a></li>
								<li><a class="slide-item" href="backend/forgot.html">Forgot Password</a></li>
								<li><a class="slide-item" href="backend/reset.html">Reset Password</a></li>
								<li><a class="slide-item" href="backend/lockscreen.html">Lockscreen</a></li>
								<li><a class="slide-item" href="backend/underconstruction.html">UnderConstruction</a></li>
								<li><a class="slide-item" href="backend/404.html">404 Error</a></li>
								<li><a class="slide-item" href="backend/500.html">500 Error</a></li>
							</ul>
						</li>
						<li class="slide ">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/><path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/></svg><span class="side-menu__label">Submenus</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="#">Level1</a></li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Level2</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="#">Level01</a></li>
										<li><a class="sub-slide-item" href="#">Level02</a></li>
										<li class="sub-slide-sub">
											<a class="sub-side-menu__item sub-slide-item" data-toggle="sub-slide-sub" href="#"><span class="sub-side-menu__label">Level03</span><i class="sub-angle fe fe-chevron-down"></i></a>
											<ul class="sub-slide-menu-sub">
												<li><a class="sub-slide-item" href="#">Level11</a></li>
												<li><a class="sub-slide-item" href="#">Level2</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</aside>
			<!-- main-sidebar -->

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- main-header -->
				<div class="main-header sticky side-header nav nav-item">
					<div class="container-fluid">
						<div class="main-header-left ">
							<div class="responsive-logo">
								<a href="backend/index.html"><img src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="logo-1" alt="logo"></a>
								<a href="backend/index.html"><img     src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="dark-logo-1" alt="logo"></a>
								<a href="backend/index.html"><img   src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>"class="logo-2" alt="logo"></a>
								<a href="backend/index.html"><img     src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="dark-logo-2" alt="logo"></a>
							</div>
							<div class="app-sidebar__toggle" data-toggle="sidebar">
								<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
								<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
							</div>
							<div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
								 <input class="form-control" placeholder="Search for anything..." type="hidden">
							</div>
						</div>
						<div class="main-header-right">
							<ul class="nav">
								<li class="">
									<div class="dropdown  nav-itemd-none d-md-flex">
										<a href="#" class="d-flex  nav-item nav-link pr-0 country-flag1" data-toggle="dropdown" aria-expanded="false">
											<span class="avatar country-Flag mr-0 align-self-center bg-transparent"><img src="../assets/img/flags/us_flag.jpg" alt="img"></span>
											<div class="my-auto">
												<strong class="mr-2 ml-2 my-auto">English</strong>
											</div>
										</a>
										<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
											<a href="#" class="dropdown-item d-flex ">
												<span class="avatar  mr-3 align-self-center bg-transparent"><img src="../assets/img/flags/french_flag.jpg" alt="img"></span>
												<div class="d-flex">
													<span class="mt-2">French</span>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex">
												<span class="avatar  mr-3 align-self-center bg-transparent"><img src="../assets/img/flags/germany_flag.jpg" alt="img"></span>
												<div class="d-flex">
													<span class="mt-2">Germany</span>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex">
												<span class="avatar mr-3 align-self-center bg-transparent"><img src="../assets/img/flags/italy_flag.jpg" alt="img"></span>
												<div class="d-flex">
													<span class="mt-2">Italy</span>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex">
												<span class="avatar mr-3 align-self-center bg-transparent"><img src="../assets/img/flags/russia_flag.jpg" alt="img"></span>
												<div class="d-flex">
													<span class="mt-2">Russia</span>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex">
												<span class="avatar  mr-3 align-self-center bg-transparent"><img src="../assets/img/flags/spain_flag.jpg" alt="img"></span>
												<div class="d-flex">
													<span class="mt-2">spain</span>
												</div>
											</a>
										</div>
									</div>
								</li>
							</ul>
							<div class="nav nav-item  navbar-nav-right ml-auto">
								<div class="nav-link" id="bs-example-navbar-collapse-1">
									<form class="navbar-form" role="search">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search">
											<span class="input-group-btn">
												<button type="reset" class="btn btn-default">
													<i class="fas fa-times"></i>
												</button>
												<button type="submit" class="btn btn-default nav-link resp-btn">
													<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
												</button>
											</span>
										</div>
									</form>
								</div>
								<div class="dropdown nav-item main-header-message ">
									<a class="new nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class=" pulse-danger"></span></a>
									<div class="dropdown-menu">
										<div class="menu-header-content bg-primary text-left">
											<div class="d-flex">
												<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Messages</h6>
												<span class="badge badge-pill badge-warning ml-auto my-auto float-right">Mark All Read</span>
											</div>
											<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4 unread messages</p>
										</div>
										<div class="main-message-list chat-scroll">
											<a href="#" class="p-3 d-flex border-bottom">
												<div class="  drop-img  cover-image  " data-image-src="../../assets/img/faces/3.jpg">
													<span class="avatar-status bg-teal"></span>
												</div>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1 name">Petey Cruiser</h5>
													</div>
													<p class="mb-0 desc">I'm sorry but i'm not sure how to help you with that......</p>
													<p class="time mb-0 text-left float-left ml-2 mt-2">Mar 15 3:55 PM</p>
												</div>
											</a>
											<a href="#" class="p-3 d-flex border-bottom">
												<div class="drop-img cover-image" data-image-src="../../assets/img/faces/2.jpg">
													<span class="avatar-status bg-teal"></span>
												</div>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1 name">Jimmy Changa</h5>
													</div>
													<p class="mb-0 desc">All set ! Now, time to get to you now......</p>
													<p class="time mb-0 text-left float-left ml-2 mt-2">Mar 06 01:12 AM</p>
												</div>
											</a>
											<a href="#" class="p-3 d-flex border-bottom">
												<div class="drop-img cover-image" data-image-src="../../assets/img/faces/9.jpg">
													<span class="avatar-status bg-teal"></span>
												</div>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1 name">Graham Cracker</h5>
													</div>
													<p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
													<p class="time mb-0 text-left float-left ml-2 mt-2">Feb 25 10:35 AM</p>
												</div>
											</a>
											<a href="#" class="p-3 d-flex border-bottom">
												<div class="drop-img cover-image" data-image-src="../../assets/img/faces/12.jpg">
													<span class="avatar-status bg-teal"></span>
												</div>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1 name">Donatella Nobatti</h5>
													</div>
													<p class="mb-0 desc">Here are some products ...</p>
													<p class="time mb-0 text-left float-left ml-2 mt-2">Feb 12 05:12 PM</p>
												</div>
											</a>
											<a href="#" class="p-3 d-flex border-bottom">
												<div class="drop-img cover-image" data-image-src="../../assets/img/faces/5.jpg">
													<span class="avatar-status bg-teal"></span>
												</div>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1 name">Anne Fibbiyon</h5>
													</div>
													<p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
													<p class="time mb-0 text-left float-left ml-2 mt-2">Jan 29 03:16 PM</p>
												</div>
											</a>
										</div>
										<div class="text-center dropdown-footer">
											<a href="backend/text-center">VIEW ALL</a>
										</div>
									</div>
								</div>
								<div class="dropdown nav-item main-header-notification">
									<a class="new nav-link" href="#">
									<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class=" pulse"></span></a>
									<div class="dropdown-menu">
										<div class="menu-header-content bg-primary text-left">
											<div class="d-flex">
												<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Notifications</h6>
												<span class="badge badge-pill badge-warning ml-auto my-auto float-right">Mark All Read</span>
											</div>
											<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4 unread Notifications</p>
										</div>
										<div class="main-notification-list Notification-scroll">
											<a class="d-flex p-3 border-bottom" href="#">
												<div class="notifyimg bg-pink">
													<i class="la la-file-alt text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">New files available</h5>
													<div class="notification-subtext">10 hour ago</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											<a class="d-flex p-3" href="#">
												<div class="notifyimg bg-purple">
													<i class="la la-gem text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">Updates Available</h5>
													<div class="notification-subtext">2 days ago</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											<a class="d-flex p-3 border-bottom" href="#">
												<div class="notifyimg bg-success">
													<i class="la la-shopping-basket text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">New Order Received</h5>
													<div class="notification-subtext">1 hour ago</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											<a class="d-flex p-3 border-bottom" href="#">
												<div class="notifyimg bg-warning">
													<i class="la la-envelope-open text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">New review received</h5>
													<div class="notification-subtext">1 day ago</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											<a class="d-flex p-3 border-bottom" href="#">
												<div class="notifyimg bg-danger">
													<i class="la la-user-check text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">22 verified registrations</h5>
													<div class="notification-subtext">2 hour ago</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											<a class="d-flex p-3 border-bottom" href="#">
												<div class="notifyimg bg-primary">
													<i class="la la-check-circle text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">Project has been approved</h5>
													<div class="notification-subtext">4 hour ago</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
										</div>
										<div class="dropdown-footer">
											<a href="">VIEW ALL</a>
										</div>
									</div>
								</div>
								<div class="nav-item full-screen fullscreen-button">
									<a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
								</div>
								<div class="dropdown main-profile-menu nav nav-item nav-link">
									<a class="profile-user d-flex" href=""><img alt="" src="../assets/img/faces/6.jpg"></a>
									<div class="dropdown-menu">
										<div class="main-header-profile bg-primary p-3">
											<div class="d-flex wd-100p">
												<div class="main-img-user"><img alt="" src="../assets/img/faces/6.jpg" class=""></div>
												<div class="ml-3 my-auto">
													<h6>Petey Cruiser</h6><span>Premium Member</span>
												</div>
											</div>
										</div>
										<a class="dropdown-item" href=""><i class="bx bx-user-circle"></i>Profile</a>
										<a class="dropdown-item" href=""><i class="bx bx-cog"></i> Edit Profile</a>
										<a class="dropdown-item" href=""><i class="bx bxs-inbox"></i>Inbox</a>
										<a class="dropdown-item" href=""><i class="bx bx-envelope"></i>Messages</a>
										<a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account Settings</a>
										<a class="dropdown-item" href="backend/page-signin.html"><i class="bx bx-log-out"></i> Sign Out</a>
									</div>
								</div>
								<div class="dropdown main-header-message right-toggle">
									<a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /main-header -->

				<!-- container -->
				<div class="container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Tables</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Data Tables</span>
							</div>
						</div>
						<div class="d-flex my-xl-auto right-content">
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-info btn-icon mr-2"><i class="mdi mdi-filter-variant"></i></button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-star"></i></button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
							</div>
							<div class="mb-xl-0">
								<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary">14 Aug 2019</button>
									<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
										<a class="dropdown-item" href="#">2015</a>
										<a class="dropdown-item" href="#">2016</a>
										<a class="dropdown-item" href="#">2017</a>
										<a class="dropdown-item" href="#">2018</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- breadcrumb -->

					<!-- row opened -->
					<div class="row row-sm">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">SIMPLE TABLE</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table text-md-nowrap" id="example1">
											<thead>
												<tr>
													<th class="wd-15p border-bottom-0">First name</th>
													<th class="wd-15p border-bottom-0">Last name</th>
													<th class="wd-20p border-bottom-0">Position</th>
													<th class="wd-15p border-bottom-0">Start date</th>
													<th class="wd-10p border-bottom-0">Salary</th>
													<th class="wd-25p border-bottom-0">E-mail</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Bella</td>
													<td>Chloe</td>
													<td>System Developer</td>
													<td>2018/03/12</td>
													<td>$654,765</td>
													<td>b.Chloe@datatables.net</td>
												</tr>
												<tr>
													<td>Donna</td>
													<td>Bond</td>
													<td>Account Manager</td>
													<td>2012/02/21</td>
													<td>$543,654</td>
													<td>d.bond@datatables.net</td>
												</tr>
												<tr>
													<td>Harry</td>
													<td>Carr</td>
													<td>Technical Manager</td>
													<td>20011/02/87</td>
													<td>$86,000</td>
													<td>h.carr@datatables.net</td>
												</tr>
												<tr>
													<td>Lucas</td>
													<td>Dyer</td>
													<td>Javascript Developer</td>
													<td>2014/08/23</td>
													<td>$456,123</td>
													<td>l.dyer@datatables.net</td>
												</tr>
												<tr>
													<td>Karen</td>
													<td>Hill</td>
													<td>Sales Manager</td>
													<td>2010/7/14</td>
													<td>$432,230</td>
													<td>k.hill@datatables.net</td>
												</tr>
												<tr>
													<td>Dominic</td>
													<td>Hudson</td>
													<td>Sales Assistant</td>
													<td>2015/10/16</td>
													<td>$654,300</td>
													<td>d.hudson@datatables.net</td>
												</tr>
												<tr>
													<td>Herrod</td>
													<td>Chandler</td>
													<td>Integration Specialist</td>
													<td>2012/08/06</td>
													<td>$137,500</td>
													<td>h.chandler@datatables.net</td>
												</tr>
												<tr>
													<td>Jonathan</td>
													<td>Ince</td>
													<td>junior Manager</td>
													<td>2012/11/23</td>
													<td>$345,789</td>
													<td>j.ince@datatables.net</td>
												</tr>
												<tr>
													<td>Leonard</td>
													<td>Ellison</td>
													<td>Junior Javascript Developer</td>
													<td>2010/03/19</td>
													<td>$205,500</td>
													<td>l.ellison@datatables.net</td>
												</tr>
												<tr>
													<td>Madeleine</td>
													<td>Lee</td>
													<td>Software Developer</td>
													<td>20015/8/23</td>
													<td>$456,890</td>
													<td>m.lee@datatables.net</td>
												</tr>
												<tr>
													<td>Karen</td>
													<td>Miller</td>
													<td>Office Director</td>
													<td>2012/9/25</td>
													<td>$87,654</td>
													<td>k.miller@datatables.net</td>
												</tr>
												<tr>
													<td>Lisa</td>
													<td>Smith</td>
													<td>Support Lead</td>
													<td>2011/05/21</td>
													<td>$342,000</td>
													<td>l.simth@datatables.net</td>
												</tr>
												<tr>
													<td>Morgan</td>
													<td>Keith</td>
													<td>Accountant</td>
													<td>2012/11/27</td>
													<td>$675,245</td>
													<td>m.keith@datatables.net</td>
												</tr>
												<tr>
													<td>Nathan</td>
													<td>Mills</td>
													<td>Senior Marketing Designer</td>
													<td>2014/10/8</td>
													<td>$765,980</td>
													<td>n.mills@datatables.net</td>
												</tr>
												<tr>
													<td>Ruth</td>
													<td>May</td>
													<td>office Manager</td>
													<td>2010/03/17</td>
													<td>$654,765</td>
													<td>r.may@datatables.net</td>
												</tr>
												<tr>
													<td>Penelope</td>
													<td>Ogden</td>
													<td>Marketing Manager</td>
													<td>2013/5/22</td>
													<td>$345,510</td>
													<td>p.ogden@datatables.net</td>
												</tr>
												<tr>
													<td>Sean</td>
													<td>Piper</td>
													<td>Financial Officer</td>
													<td>2014/06/11</td>
													<td>$725,000</td>
													<td>s.piper@datatables.net</td>
												</tr>
												<tr>
													<td>Trevor</td>
													<td>Ross</td>
													<td>Systems Administrator</td>
													<td>2011/05/23</td>
													<td>$237,500</td>
													<td>t.ross@datatables.net</td>
												</tr>
												<tr>
													<td>Vanessa</td>
													<td>Robertson</td>
													<td>Software Designer</td>
													<td>2014/6/23</td>
													<td>$765,654</td>
													<td>v.robertson@datatables.net</td>
												</tr>
												<tr>
													<td>Una</td>
													<td>Richard</td>
													<td>Personnel Manager</td>
													<td>2014/5/22</td>
													<td>$765,290</td>
													<td>u.richard@datatables.net</td>
												</tr>
												<tr>
													<td>Justin</td>
													<td>Peters</td>
													<td>Development lead</td>
													<td>2013/10/23</td>
													<td>$765,654</td>
													<td>j.peters@datatables.net</td>
												</tr>
												<tr>
													<td>Adrian</td>
													<td>Terry</td>
													<td>Marketing Officer</td>
													<td>2013/04/21</td>
													<td>$543,769</td>
													<td>a.terry@datatables.net</td>
												</tr>
												<tr>
													<td>Cameron</td>
													<td>Watson</td>
													<td>Sales Support</td>
													<td>2013/9/7</td>
													<td>$675,876</td>
													<td>c.watson@datatables.net</td>
												</tr>
												<tr>
													<td>Evan</td>
													<td>Terry</td>
													<td>Sales Manager</td>
													<td>2013/10/26</td>
													<td>$66,340</td>
													<td>d.terry@datatables.net</td>
												</tr>
												<tr>
													<td>Angelica</td>
													<td>Ramos</td>
													<td>Chief Executive Officer</td>
													<td>20017/10/15</td>
													<td>$6,234,000</td>
													<td>a.ramos@datatables.net</td>
												</tr>
												<tr>
													<td>Connor</td>
													<td>Johne</td>
													<td>Web Developer</td>
													<td>2011/1/25</td>
													<td>$92,575</td>
													<td>C.johne@datatables.net</td>
												</tr>
												<tr>
													<td>Jennifer</td>
													<td>Chang</td>
													<td>Regional Director</td>
													<td>2012/17/11</td>
													<td>$546,890</td>
													<td>j.chang@datatables.net</td>
												</tr>
												<tr>
													<td>Brenden</td>
													<td>Wagner</td>
													<td>Software Engineer</td>
													<td>2013/07/14</td>
													<td>$206,850</td>
													<td>b.wagner@datatables.net</td>
												</tr>
												<tr>
													<td>Fiona</td>
													<td>Green</td>
													<td>Chief Operating Officer</td>
													<td>2015/06/23</td>
													<td>$345,789</td>
													<td>f.green@datatables.net</td>
												</tr>
												<tr>
													<td>Shou</td>
													<td>Itou</td>
													<td>Regional Marketing</td>
													<td>2013/07/19</td>
													<td>$335,300</td>
													<td>s.itou@datatables.net</td>
												</tr>
												<tr>
													<td>Michelle</td>
													<td>House</td>
													<td>Integration Specialist</td>
													<td>2016/07/18</td>
													<td>$76,890</td>
													<td>m.house@datatables.net</td>
												</tr>
												<tr>
													<td>Suki</td>
													<td>Burks</td>
													<td>Developer</td>
													<td>2010/11/45</td>
													<td>$678,890</td>
													<td>s.burks@datatables.net</td>
												</tr>
												<tr>
													<td>Prescott</td>
													<td>Bartlett</td>
													<td>Technical Author</td>
													<td>2014/12/25</td>
													<td>$789,100</td>
													<td>p.bartlett@datatables.net</td>
												</tr>
												<tr>
													<td>Gavin</td>
													<td>Cortez</td>
													<td>Team Leader</td>
													<td>2015/1/19</td>
													<td>$345,890</td>
													<td>g.cortez@datatables.net</td>
												</tr>
												<tr>
													<td>Martena</td>
													<td>Mccray</td>
													<td>Post-Sales support</td>
													<td>2011/03/09</td>
													<td>$324,050</td>
													<td>m.mccray@datatables.net</td>
												</tr>
												<tr>
													<td>Unity</td>
													<td>Butler</td>
													<td>Marketing Designer</td>
													<td>2014/7/28</td>
													<td>$34,983</td>
													<td>u.butler@datatables.net</td>
												</tr>
												<tr>
													<td>Howard</td>
													<td>Hatfield</td>
													<td>Office Manager</td>
													<td>2013/8/19</td>
													<td>$98,000</td>
													<td>h.hatfield@datatables.net</td>
												</tr>
												<tr>
													<td>Hope</td>
													<td>Fuentes</td>
													<td>Secretary</td>
													<td>2015/07/28</td>
													<td>$78,879</td>
													<td>h.fuentes@datatables.net</td>
												</tr>
												<tr>
													<td>Vivian</td>
													<td>Harrell</td>
													<td>Financial Controller</td>
													<td>2010/02/14</td>
													<td>$452,500</td>
													<td>v.harrell@datatables.net</td>
												</tr>
												<tr>
													<td>Timothy</td>
													<td>Mooney</td>
													<td>Office Manager</td>
													<td>20016/12/11</td>
													<td>$136,200</td>
													<td>t.mooney@datatables.net</td>
												</tr>
												<tr>
													<td>Jackson</td>
													<td>Bradshaw</td>
													<td>Director</td>
													<td>2011/09/26</td>
													<td>$645,750</td>
													<td>j.bradshaw@datatables.net</td>
												</tr>
												<tr>
													<td>Olivia</td>
													<td>Liang</td>
													<td>Support Engineer</td>
													<td>2014/02/03</td>
													<td>$234,500</td>
													<td>o.liang@datatables.net</td>
												</tr>
												<tr>
													<td>Bruno</td>
													<td>Nash</td>
													<td>Software Engineer</td>
													<td>2015/05/03</td>
													<td>$163,500</td>
													<td>b.nash@datatables.net</td>
												</tr>
												<tr>
													<td>Sakura</td>
													<td>Yamamoto</td>
													<td>Support Engineer</td>
													<td>2010/08/19</td>
													<td>$139,575</td>
													<td>s.yamamoto@datatables.net</td>
												</tr>
												<tr>
													<td>Thor</td>
													<td>Walton</td>
													<td>Developer</td>
													<td>2012/08/11</td>
													<td>$98,540</td>
													<td>t.walton@datatables.net</td>
												</tr>
												<tr>
													<td>Finn</td>
													<td>Camacho</td>
													<td>Support Engineer</td>
													<td>2016/07/07</td>
													<td>$87,500</td>
													<td>f.camacho@datatables.net</td>
												</tr>
												<tr>
													<td>Serge</td>
													<td>Baldwin</td>
													<td>Data Coordinator</td>
													<td>2017/04/09</td>
													<td>$138,575</td>
													<td>s.baldwin@datatables.net</td>
												</tr>
												<tr>
													<td>Zenaida</td>
													<td>Frank</td>
													<td>Software Engineer</td>
													<td>2018/01/04</td>
													<td>$125,250</td>
													<td>z.frank@datatables.net</td>
												</tr>
												<tr>
													<td>Zorita</td>
													<td>Serrano</td>
													<td>Software Engineer</td>
													<td>2017/06/01</td>
													<td>$115,000</td>
													<td>z.serrano@datatables.net</td>
												</tr>
												<tr>
													<td>Jennifer</td>
													<td>Acosta</td>
													<td>Junior Javascript Developer</td>
													<td>2017/02/01</td>
													<td>$75,650</td>
													<td>j.acosta@datatables.net</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">STRIPED ROWS</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Valex Striped Rows.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table text-md-nowrap" id="example2">
											<thead>
												<tr>
													<th class="wd-15p border-bottom-0">First name</th>
													<th class="wd-15p border-bottom-0">Last name</th>
													<th class="wd-20p border-bottom-0">Position</th>
													<th class="wd-15p border-bottom-0">Start date</th>
													<th class="wd-10p border-bottom-0">Salary</th>
													<th class="wd-25p border-bottom-0">E-mail</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Bella</td>
													<td>Chloe</td>
													<td>System Developer</td>
													<td>2018/03/12</td>
													<td>$654,765</td>
													<td>b.Chloe@datatables.net</td>
												</tr>
												<tr>
													<td>Donna</td>
													<td>Bond</td>
													<td>Account Manager</td>
													<td>2012/02/21</td>
													<td>$543,654</td>
													<td>d.bond@datatables.net</td>
												</tr>
												<tr>
													<td>Harry</td>
													<td>Carr</td>
													<td>Technical Manager</td>
													<td>20011/02/87</td>
													<td>$86,000</td>
													<td>h.carr@datatables.net</td>
												</tr>
												<tr>
													<td>Lucas</td>
													<td>Dyer</td>
													<td>Javascript Developer</td>
													<td>2014/08/23</td>
													<td>$456,123</td>
													<td>l.dyer@datatables.net</td>
												</tr>
												<tr>
													<td>Karen</td>
													<td>Hill</td>
													<td>Sales Manager</td>
													<td>2010/7/14</td>
													<td>$432,230</td>
													<td>k.hill@datatables.net</td>
												</tr>
												<tr>
													<td>Dominic</td>
													<td>Hudson</td>
													<td>Sales Assistant</td>
													<td>2015/10/16</td>
													<td>$654,300</td>
													<td>d.hudson@datatables.net</td>
												</tr>
												<tr>
													<td>Herrod</td>
													<td>Chandler</td>
													<td>Integration Specialist</td>
													<td>2012/08/06</td>
													<td>$137,500</td>
													<td>h.chandler@datatables.net</td>
												</tr>
												<tr>
													<td>Jonathan</td>
													<td>Ince</td>
													<td>junior Manager</td>
													<td>2012/11/23</td>
													<td>$345,789</td>
													<td>j.ince@datatables.net</td>
												</tr>
												<tr>
													<td>Leonard</td>
													<td>Ellison</td>
													<td>Junior Javascript Developer</td>
													<td>2010/03/19</td>
													<td>$205,500</td>
													<td>l.ellison@datatables.net</td>
												</tr>
												<tr>
													<td>Madeleine</td>
													<td>Lee</td>
													<td>Software Developer</td>
													<td>20015/8/23</td>
													<td>$456,890</td>
													<td>m.lee@datatables.net</td>
												</tr>
												<tr>
													<td>Karen</td>
													<td>Miller</td>
													<td>Office Director</td>
													<td>2012/9/25</td>
													<td>$87,654</td>
													<td>k.miller@datatables.net</td>
												</tr>
												<tr>
													<td>Lisa</td>
													<td>Smith</td>
													<td>Support Lead</td>
													<td>2011/05/21</td>
													<td>$342,000</td>
													<td>l.simth@datatables.net</td>
												</tr>
												<tr>
													<td>Morgan</td>
													<td>Keith</td>
													<td>Accountant</td>
													<td>2012/11/27</td>
													<td>$675,245</td>
													<td>m.keith@datatables.net</td>
												</tr>
												<tr>
													<td>Nathan</td>
													<td>Mills</td>
													<td>Senior Marketing Designer</td>
													<td>2014/10/8</td>
													<td>$765,980</td>
													<td>n.mills@datatables.net</td>
												</tr>
												<tr>
													<td>Ruth</td>
													<td>May</td>
													<td>office Manager</td>
													<td>2010/03/17</td>
													<td>$654,765</td>
													<td>r.may@datatables.net</td>
												</tr>
												<tr>
													<td>Penelope</td>
													<td>Ogden</td>
													<td>Marketing Manager</td>
													<td>2013/5/22</td>
													<td>$345,510</td>
													<td>p.ogden@datatables.net</td>
												</tr>
												<tr>
													<td>Sean</td>
													<td>Piper</td>
													<td>Financial Officer</td>
													<td>2014/06/11</td>
													<td>$725,000</td>
													<td>s.piper@datatables.net</td>
												</tr>
												<tr>
													<td>Trevor</td>
													<td>Ross</td>
													<td>Systems Administrator</td>
													<td>2011/05/23</td>
													<td>$237,500</td>
													<td>t.ross@datatables.net</td>
												</tr>
												<tr>
													<td>Vanessa</td>
													<td>Robertson</td>
													<td>Software Designer</td>
													<td>2014/6/23</td>
													<td>$765,654</td>
													<td>v.robertson@datatables.net</td>
												</tr>
												<tr>
													<td>Una</td>
													<td>Richard</td>
													<td>Personnel Manager</td>
													<td>2014/5/22</td>
													<td>$765,290</td>
													<td>u.richard@datatables.net</td>
												</tr>
												<tr>
													<td>Justin</td>
													<td>Peters</td>
													<td>Development lead</td>
													<td>2013/10/23</td>
													<td>$765,654</td>
													<td>j.peters@datatables.net</td>
												</tr>
												<tr>
													<td>Adrian</td>
													<td>Terry</td>
													<td>Marketing Officer</td>
													<td>2013/04/21</td>
													<td>$543,769</td>
													<td>a.terry@datatables.net</td>
												</tr>
												<tr>
													<td>Cameron</td>
													<td>Watson</td>
													<td>Sales Support</td>
													<td>2013/9/7</td>
													<td>$675,876</td>
													<td>c.watson@datatables.net</td>
												</tr>
												<tr>
													<td>Evan</td>
													<td>Terry</td>
													<td>Sales Manager</td>
													<td>2013/10/26</td>
													<td>$66,340</td>
													<td>d.terry@datatables.net</td>
												</tr>
												<tr>
													<td>Angelica</td>
													<td>Ramos</td>
													<td>Chief Executive Officer</td>
													<td>20017/10/15</td>
													<td>$6,234,000</td>
													<td>a.ramos@datatables.net</td>
												</tr>
												<tr>
													<td>Connor</td>
													<td>Johne</td>
													<td>Web Developer</td>
													<td>2011/1/25</td>
													<td>$92,575</td>
													<td>C.johne@datatables.net</td>
												</tr>
												<tr>
													<td>Jennifer</td>
													<td>Chang</td>
													<td>Regional Director</td>
													<td>2012/17/11</td>
													<td>$546,890</td>
													<td>j.chang@datatables.net</td>
												</tr>
												<tr>
													<td>Brenden</td>
													<td>Wagner</td>
													<td>Software Engineer</td>
													<td>2013/07/14</td>
													<td>$206,850</td>
													<td>b.wagner@datatables.net</td>
												</tr>
												<tr>
													<td>Fiona</td>
													<td>Green</td>
													<td>Chief Operating Officer</td>
													<td>2015/06/23</td>
													<td>$345,789</td>
													<td>f.green@datatables.net</td>
												</tr>
												<tr>
													<td>Shou</td>
													<td>Itou</td>
													<td>Regional Marketing</td>
													<td>2013/07/19</td>
													<td>$335,300</td>
													<td>s.itou@datatables.net</td>
												</tr>
												<tr>
													<td>Michelle</td>
													<td>House</td>
													<td>Integration Specialist</td>
													<td>2016/07/18</td>
													<td>$76,890</td>
													<td>m.house@datatables.net</td>
												</tr>
												<tr>
													<td>Suki</td>
													<td>Burks</td>
													<td>Developer</td>
													<td>2010/11/45</td>
													<td>$678,890</td>
													<td>s.burks@datatables.net</td>
												</tr>
												<tr>
													<td>Prescott</td>
													<td>Bartlett</td>
													<td>Technical Author</td>
													<td>2014/12/25</td>
													<td>$789,100</td>
													<td>p.bartlett@datatables.net</td>
												</tr>
												<tr>
													<td>Gavin</td>
													<td>Cortez</td>
													<td>Team Leader</td>
													<td>2015/1/19</td>
													<td>$345,890</td>
													<td>g.cortez@datatables.net</td>
												</tr>
												<tr>
													<td>Martena</td>
													<td>Mccray</td>
													<td>Post-Sales support</td>
													<td>2011/03/09</td>
													<td>$324,050</td>
													<td>m.mccray@datatables.net</td>
												</tr>
												<tr>
													<td>Unity</td>
													<td>Butler</td>
													<td>Marketing Designer</td>
													<td>2014/7/28</td>
													<td>$34,983</td>
													<td>u.butler@datatables.net</td>
												</tr>
												<tr>
													<td>Howard</td>
													<td>Hatfield</td>
													<td>Office Manager</td>
													<td>2013/8/19</td>
													<td>$98,000</td>
													<td>h.hatfield@datatables.net</td>
												</tr>
												<tr>
													<td>Hope</td>
													<td>Fuentes</td>
													<td>Secretary</td>
													<td>2015/07/28</td>
													<td>$78,879</td>
													<td>h.fuentes@datatables.net</td>
												</tr>
												<tr>
													<td>Vivian</td>
													<td>Harrell</td>
													<td>Financial Controller</td>
													<td>2010/02/14</td>
													<td>$452,500</td>
													<td>v.harrell@datatables.net</td>
												</tr>
												<tr>
													<td>Timothy</td>
													<td>Mooney</td>
													<td>Office Manager</td>
													<td>20016/12/11</td>
													<td>$136,200</td>
													<td>t.mooney@datatables.net</td>
												</tr>
												<tr>
													<td>Jackson</td>
													<td>Bradshaw</td>
													<td>Director</td>
													<td>2011/09/26</td>
													<td>$645,750</td>
													<td>j.bradshaw@datatables.net</td>
												</tr>
												<tr>
													<td>Olivia</td>
													<td>Liang</td>
													<td>Support Engineer</td>
													<td>2014/02/03</td>
													<td>$234,500</td>
													<td>o.liang@datatables.net</td>
												</tr>
												<tr>
													<td>Bruno</td>
													<td>Nash</td>
													<td>Software Engineer</td>
													<td>2015/05/03</td>
													<td>$163,500</td>
													<td>b.nash@datatables.net</td>
												</tr>
												<tr>
													<td>Sakura</td>
													<td>Yamamoto</td>
													<td>Support Engineer</td>
													<td>2010/08/19</td>
													<td>$139,575</td>
													<td>s.yamamoto@datatables.net</td>
												</tr>
												<tr>
													<td>Thor</td>
													<td>Walton</td>
													<td>Developer</td>
													<td>2012/08/11</td>
													<td>$98,540</td>
													<td>t.walton@datatables.net</td>
												</tr>
												<tr>
													<td>Finn</td>
													<td>Camacho</td>
													<td>Support Engineer</td>
													<td>2016/07/07</td>
													<td>$87,500</td>
													<td>f.camacho@datatables.net</td>
												</tr>
												<tr>
													<td>Serge</td>
													<td>Baldwin</td>
													<td>Data Coordinator</td>
													<td>2017/04/09</td>
													<td>$138,575</td>
													<td>s.baldwin@datatables.net</td>
												</tr>
												<tr>
													<td>Zenaida</td>
													<td>Frank</td>
													<td>Software Engineer</td>
													<td>2018/01/04</td>
													<td>$125,250</td>
													<td>z.frank@datatables.net</td>
												</tr>
												<tr>
													<td>Zorita</td>
													<td>Serrano</td>
													<td>Software Engineer</td>
													<td>2017/06/01</td>
													<td>$115,000</td>
													<td>z.serrano@datatables.net</td>
												</tr>
												<tr>
													<td>Jennifer</td>
													<td>Acosta</td>
													<td>Junior Javascript Developer</td>
													<td>2017/02/01</td>
													<td>$75,650</td>
													<td>j.acosta@datatables.net</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div><!-- bd -->
							</div><!-- bd -->
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Bordered Table</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Valex Bordered Table.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
											<thead>
												<tr>
													<th class="border-bottom-0">Name</th>
													<th class="border-bottom-0">Position</th>
													<th class="border-bottom-0">Office</th>
													<th class="border-bottom-0">Age</th>
													<th class="border-bottom-0">Start date</th>
													<th class="border-bottom-0">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>2011/04/25</td>
													<td>$320,800</td>
												</tr>
												<tr>
													<td>Garrett Winters</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>63</td>
													<td>2011/07/25</td>
													<td>$170,750</td>
												</tr>
												<tr>
													<td>Ashton Cox</td>
													<td>Junior Technical Author</td>
													<td>San Francisco</td>
													<td>66</td>
													<td>2009/01/12</td>
													<td>$86,000</td>
												</tr>
												<tr>
													<td>Cedric Kelly</td>
													<td>Senior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2012/03/29</td>
													<td>$433,060</td>
												</tr>
												<tr>
													<td>Airi Satou</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>33</td>
													<td>2008/11/28</td>
													<td>$162,700</td>
												</tr>
												<tr>
													<td>Brielle Williamson</td>
													<td>Integration Specialist</td>
													<td>New York</td>
													<td>61</td>
													<td>2012/12/02</td>
													<td>$372,000</td>
												</tr>
												<tr>
													<td>Herrod Chandler</td>
													<td>Sales Assistant</td>
													<td>San Francisco</td>
													<td>59</td>
													<td>2012/08/06</td>
													<td>$137,500</td>
												</tr>
												<tr>
													<td>Rhona Davidson</td>
													<td>Integration Specialist</td>
													<td>Tokyo</td>
													<td>55</td>
													<td>2010/10/14</td>
													<td>$327,900</td>
												</tr>
												<tr>
													<td>Colleen Hurst</td>
													<td>Javascript Developer</td>
													<td>San Francisco</td>
													<td>39</td>
													<td>2009/09/15</td>
													<td>$205,500</td>
												</tr>
												<tr>
													<td>Sonya Frost</td>
													<td>Software Engineer</td>
													<td>Edinburgh</td>
													<td>23</td>
													<td>2008/12/13</td>
													<td>$103,600</td>
												</tr>
												<tr>
													<td>Jena Gaines</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>30</td>
													<td>2008/12/19</td>
													<td>$90,560</td>
												</tr>
												<tr>
													<td>Quinn Flynn</td>
													<td>Support Lead</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2013/03/03</td>
													<td>$342,000</td>
												</tr>
												<tr>
													<td>Charde Marshall</td>
													<td>Regional Director</td>
													<td>San Francisco</td>
													<td>36</td>
													<td>2008/10/16</td>
													<td>$470,600</td>
												</tr>
												<tr>
													<td>Haley Kennedy</td>
													<td>Senior Marketing Designer</td>
													<td>London</td>
													<td>43</td>
													<td>2012/12/18</td>
													<td>$313,500</td>
												</tr>
												<tr>
													<td>Tatyana Fitzpatrick</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>19</td>
													<td>2010/03/17</td>
													<td>$385,750</td>
												</tr>
												<tr>
													<td>Michael Silva</td>
													<td>Marketing Designer</td>
													<td>London</td>
													<td>66</td>
													<td>2012/11/27</td>
													<td>$198,500</td>
												</tr>
												<tr>
													<td>Paul Byrd</td>
													<td>Chief Financial Officer (CFO)</td>
													<td>New York</td>
													<td>64</td>
													<td>2010/06/09</td>
													<td>$725,000</td>
												</tr>
												<tr>
													<td>Gloria Little</td>
													<td>Systems Administrator</td>
													<td>New York</td>
													<td>59</td>
													<td>2009/04/10</td>
													<td>$237,500</td>
												</tr>
												<tr>
													<td>Bradley Greer</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>41</td>
													<td>2012/10/13</td>
													<td>$132,000</td>
												</tr>
												<tr>
													<td>Dai Rios</td>
													<td>Personnel Lead</td>
													<td>Edinburgh</td>
													<td>35</td>
													<td>2012/09/26</td>
													<td>$217,500</td>
												</tr>
												<tr>
													<td>Jenette Caldwell</td>
													<td>Development Lead</td>
													<td>New York</td>
													<td>30</td>
													<td>2011/09/03</td>
													<td>$345,000</td>
												</tr>
												<tr>
													<td>Yuri Berry</td>
													<td>Chief Marketing Officer (CMO)</td>
													<td>New York</td>
													<td>40</td>
													<td>2009/06/25</td>
													<td>$675,000</td>
												</tr>
												<tr>
													<td>Caesar Vance</td>
													<td>Pre-Sales Support</td>
													<td>New York</td>
													<td>21</td>
													<td>2011/12/12</td>
													<td>$106,450</td>
												</tr>
												<tr>
													<td>Doris Wilder</td>
													<td>Sales Assistant</td>
													<td>Sidney</td>
													<td>23</td>
													<td>2010/09/20</td>
													<td>$85,600</td>
												</tr>
												<tr>
													<td>Angelica Ramos</td>
													<td>Chief Executive Officer (CEO)</td>
													<td>London</td>
													<td>47</td>
													<td>2009/10/09</td>
													<td>$1,200,000</td>
												</tr>
												<tr>
													<td>Gavin Joyce</td>
													<td>Developer</td>
													<td>Edinburgh</td>
													<td>42</td>
													<td>2010/12/22</td>
													<td>$92,575</td>
												</tr>
												<tr>
													<td>Jennifer Chang</td>
													<td>Regional Director</td>
													<td>Singapore</td>
													<td>28</td>
													<td>2010/11/14</td>
													<td>$357,650</td>
												</tr>
												<tr>
													<td>Brenden Wagner</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>28</td>
													<td>2011/06/07</td>
													<td>$206,850</td>
												</tr>
												<tr>
													<td>Fiona Green</td>
													<td>Chief Operating Officer (COO)</td>
													<td>San Francisco</td>
													<td>48</td>
													<td>2010/03/11</td>
													<td>$850,000</td>
												</tr>
												<tr>
													<td>Shou Itou</td>
													<td>Regional Marketing</td>
													<td>Tokyo</td>
													<td>20</td>
													<td>2011/08/14</td>
													<td>$163,000</td>
												</tr>
												<tr>
													<td>Michelle House</td>
													<td>Integration Specialist</td>
													<td>Sidney</td>
													<td>37</td>
													<td>2011/06/02</td>
													<td>$95,400</td>
												</tr>
												<tr>
													<td>Suki Burks</td>
													<td>Developer</td>
													<td>London</td>
													<td>53</td>
													<td>2009/10/22</td>
													<td>$114,500</td>
												</tr>
												<tr>
													<td>Prescott Bartlett</td>
													<td>Technical Author</td>
													<td>London</td>
													<td>27</td>
													<td>2011/05/07</td>
													<td>$145,000</td>
												</tr>
												<tr>
													<td>Gavin Cortez</td>
													<td>Team Leader</td>
													<td>San Francisco</td>
													<td>22</td>
													<td>2008/10/26</td>
													<td>$235,500</td>
												</tr>
												<tr>
													<td>Martena Mccray</td>
													<td>Post-Sales support</td>
													<td>Edinburgh</td>
													<td>46</td>
													<td>2011/03/09</td>
													<td>$324,050</td>
												</tr>
												<tr>
													<td>Unity Butler</td>
													<td>Marketing Designer</td>
													<td>San Francisco</td>
													<td>47</td>
													<td>2009/12/09</td>
													<td>$85,675</td>
												</tr>
												<tr>
													<td>Howard Hatfield</td>
													<td>Office Manager</td>
													<td>San Francisco</td>
													<td>51</td>
													<td>2008/12/16</td>
													<td>$164,500</td>
												</tr>
												<tr>
													<td>Hope Fuentes</td>
													<td>Secretary</td>
													<td>San Francisco</td>
													<td>41</td>
													<td>2010/02/12</td>
													<td>$109,850</td>
												</tr>
												<tr>
													<td>Vivian Harrell</td>
													<td>Financial Controller</td>
													<td>San Francisco</td>
													<td>62</td>
													<td>2009/02/14</td>
													<td>$452,500</td>
												</tr>
												<tr>
													<td>Timothy Mooney</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>37</td>
													<td>2008/12/11</td>
													<td>$136,200</td>
												</tr>
												<tr>
													<td>Jackson Bradshaw</td>
													<td>Director</td>
													<td>New York</td>
													<td>65</td>
													<td>2008/09/26</td>
													<td>$645,750</td>
												</tr>
												<tr>
													<td>Olivia Liang</td>
													<td>Support Engineer</td>
													<td>Singapore</td>
													<td>64</td>
													<td>2011/02/03</td>
													<td>$234,500</td>
												</tr>
												<tr>
													<td>Bruno Nash</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>38</td>
													<td>2011/05/03</td>
													<td>$163,500</td>
												</tr>
												<tr>
													<td>Sakura Yamamoto</td>
													<td>Support Engineer</td>
													<td>Tokyo</td>
													<td>37</td>
													<td>2009/08/19</td>
													<td>$139,575</td>
												</tr>
												<tr>
													<td>Thor Walton</td>
													<td>Developer</td>
													<td>New York</td>
													<td>61</td>
													<td>2013/08/11</td>
													<td>$98,540</td>
												</tr>
												<tr>
													<td>Finn Camacho</td>
													<td>Support Engineer</td>
													<td>San Francisco</td>
													<td>47</td>
													<td>2009/07/07</td>
													<td>$87,500</td>
												</tr>
												<tr>
													<td>Serge Baldwin</td>
													<td>Data Coordinator</td>
													<td>Singapore</td>
													<td>64</td>
													<td>2012/04/09</td>
													<td>$138,575</td>
												</tr>
												<tr>
													<td>Zenaida Frank</td>
													<td>Software Engineer</td>
													<td>New York</td>
													<td>63</td>
													<td>2010/01/04</td>
													<td>$125,250</td>
												</tr>
												<tr>
													<td>Zorita Serrano</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>56</td>
													<td>2012/06/01</td>
													<td>$115,000</td>
												</tr>
												<tr>
													<td>Jennifer Acosta</td>
													<td>Junior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>43</td>
													<td>2013/02/01</td>
													<td>$75,650</td>
												</tr>
												<tr>
													<td>Cara Stevens</td>
													<td>Sales Assistant</td>
													<td>New York</td>
													<td>46</td>
													<td>2011/12/06</td>
													<td>$145,600</td>
												</tr>
												<tr>
													<td>Hermione Butler</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>47</td>
													<td>2011/03/21</td>
													<td>$356,250</td>
												</tr>
												<tr>
													<td>Lael Greer</td>
													<td>Systems Administrator</td>
													<td>London</td>
													<td>21</td>
													<td>2009/02/27</td>
													<td>$103,500</td>
												</tr>
												<tr>
													<td>Jonas Alexander</td>
													<td>Developer</td>
													<td>San Francisco</td>
													<td>30</td>
													<td>2010/07/14</td>
													<td>$86,500</td>
												</tr>
												<tr>
													<td>Shad Decker</td>
													<td>Regional Director</td>
													<td>Edinburgh</td>
													<td>51</td>
													<td>2008/11/13</td>
													<td>$183,000</td>
												</tr>
												<tr>
													<td>Michael Bruce</td>
													<td>Javascript Developer</td>
													<td>Singapore</td>
													<td>29</td>
													<td>2011/06/27</td>
													<td>$183,000</td>
												</tr>
												<tr>
													<td>Donna Snider</td>
													<td>Customer Support</td>
													<td>New York</td>
													<td>27</td>
													<td>2011/01/25</td>
													<td>$112,000</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Hoverable Rows Table</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Valex Hoverable Rows Table.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive hoverable-table">
										<button id="button" class="btn btn-primary mg-b-20">Delete selected row</button>
										<table id="example-delete" class="table text-md-nowrap">
											<thead>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>2011/04/25</td>
													<td>$320,800</td>
												</tr>
												<tr>
													<td>Garrett Winters</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>63</td>
													<td>2011/07/25</td>
													<td>$170,750</td>
												</tr>
												<tr>
													<td>Ashton Cox</td>
													<td>Junior Technical Author</td>
													<td>San Francisco</td>
													<td>66</td>
													<td>2009/01/12</td>
													<td>$86,000</td>
												</tr>
												<tr>
													<td>Cedric Kelly</td>
													<td>Senior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2012/03/29</td>
													<td>$433,060</td>
												</tr>
												<tr>
													<td>Airi Satou</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>33</td>
													<td>2008/11/28</td>
													<td>$162,700</td>
												</tr>
												<tr>
													<td>Brielle Williamson</td>
													<td>Integration Specialist</td>
													<td>New York</td>
													<td>61</td>
													<td>2012/12/02</td>
													<td>$372,000</td>
												</tr>
												<tr>
													<td>Herrod Chandler</td>
													<td>Sales Assistant</td>
													<td>San Francisco</td>
													<td>59</td>
													<td>2012/08/06</td>
													<td>$137,500</td>
												</tr>
												<tr>
													<td>Rhona Davidson</td>
													<td>Integration Specialist</td>
													<td>Tokyo</td>
													<td>55</td>
													<td>2010/10/14</td>
													<td>$327,900</td>
												</tr>
												<tr>
													<td>Colleen Hurst</td>
													<td>Javascript Developer</td>
													<td>San Francisco</td>
													<td>39</td>
													<td>2009/09/15</td>
													<td>$205,500</td>
												</tr>
												<tr>
													<td>Sonya Frost</td>
													<td>Software Engineer</td>
													<td>Edinburgh</td>
													<td>23</td>
													<td>2008/12/13</td>
													<td>$103,600</td>
												</tr>
												<tr>
													<td>Jena Gaines</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>30</td>
													<td>2008/12/19</td>
													<td>$90,560</td>
												</tr>
												<tr>
													<td>Quinn Flynn</td>
													<td>Support Lead</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2013/03/03</td>
													<td>$342,000</td>
												</tr>
												<tr>
													<td>Charde Marshall</td>
													<td>Regional Director</td>
													<td>San Francisco</td>
													<td>36</td>
													<td>2008/10/16</td>
													<td>$470,600</td>
												</tr>
												<tr>
													<td>Haley Kennedy</td>
													<td>Senior Marketing Designer</td>
													<td>London</td>
													<td>43</td>
													<td>2012/12/18</td>
													<td>$313,500</td>
												</tr>
												<tr>
													<td>Tatyana Fitzpatrick</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>19</td>
													<td>2010/03/17</td>
													<td>$385,750</td>
												</tr>
												<tr>
													<td>Michael Silva</td>
													<td>Marketing Designer</td>
													<td>London</td>
													<td>66</td>
													<td>2012/11/27</td>
													<td>$198,500</td>
												</tr>
												<tr>
													<td>Paul Byrd</td>
													<td>Chief Financial Officer (CFO)</td>
													<td>New York</td>
													<td>64</td>
													<td>2010/06/09</td>
													<td>$725,000</td>
												</tr>
												<tr>
													<td>Gloria Little</td>
													<td>Systems Administrator</td>
													<td>New York</td>
													<td>59</td>
													<td>2009/04/10</td>
													<td>$237,500</td>
												</tr>
												<tr>
													<td>Bradley Greer</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>41</td>
													<td>2012/10/13</td>
													<td>$132,000</td>
												</tr>
												<tr>
													<td>Dai Rios</td>
													<td>Personnel Lead</td>
													<td>Edinburgh</td>
													<td>35</td>
													<td>2012/09/26</td>
													<td>$217,500</td>
												</tr>
												<tr>
													<td>Jenette Caldwell</td>
													<td>Development Lead</td>
													<td>New York</td>
													<td>30</td>
													<td>2011/09/03</td>
													<td>$345,000</td>
												</tr>
												<tr>
													<td>Yuri Berry</td>
													<td>Chief Marketing Officer (CMO)</td>
													<td>New York</td>
													<td>40</td>
													<td>2009/06/25</td>
													<td>$675,000</td>
												</tr>
												<tr>
													<td>Caesar Vance</td>
													<td>Pre-Sales Support</td>
													<td>New York</td>
													<td>21</td>
													<td>2011/12/12</td>
													<td>$106,450</td>
												</tr>
												<tr>
													<td>Doris Wilder</td>
													<td>Sales Assistant</td>
													<td>Sidney</td>
													<td>23</td>
													<td>2010/09/20</td>
													<td>$85,600</td>
												</tr>
												<tr>
													<td>Angelica Ramos</td>
													<td>Chief Executive Officer (CEO)</td>
													<td>London</td>
													<td>47</td>
													<td>2009/10/09</td>
													<td>$1,200,000</td>
												</tr>
												<tr>
													<td>Gavin Joyce</td>
													<td>Developer</td>
													<td>Edinburgh</td>
													<td>42</td>
													<td>2010/12/22</td>
													<td>$92,575</td>
												</tr>
												<tr>
													<td>Jennifer Chang</td>
													<td>Regional Director</td>
													<td>Singapore</td>
													<td>28</td>
													<td>2010/11/14</td>
													<td>$357,650</td>
												</tr>
												<tr>
													<td>Brenden Wagner</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>28</td>
													<td>2011/06/07</td>
													<td>$206,850</td>
												</tr>
												<tr>
													<td>Fiona Green</td>
													<td>Chief Operating Officer (COO)</td>
													<td>San Francisco</td>
													<td>48</td>
													<td>2010/03/11</td>
													<td>$850,000</td>
												</tr>
												<tr>
													<td>Shou Itou</td>
													<td>Regional Marketing</td>
													<td>Tokyo</td>
													<td>20</td>
													<td>2011/08/14</td>
													<td>$163,000</td>
												</tr>
												<tr>
													<td>Michelle House</td>
													<td>Integration Specialist</td>
													<td>Sidney</td>
													<td>37</td>
													<td>2011/06/02</td>
													<td>$95,400</td>
												</tr>
												<tr>
													<td>Suki Burks</td>
													<td>Developer</td>
													<td>London</td>
													<td>53</td>
													<td>2009/10/22</td>
													<td>$114,500</td>
												</tr>
												<tr>
													<td>Prescott Bartlett</td>
													<td>Technical Author</td>
													<td>London</td>
													<td>27</td>
													<td>2011/05/07</td>
													<td>$145,000</td>
												</tr>
												<tr>
													<td>Gavin Cortez</td>
													<td>Team Leader</td>
													<td>San Francisco</td>
													<td>22</td>
													<td>2008/10/26</td>
													<td>$235,500</td>
												</tr>
												<tr>
													<td>Martena Mccray</td>
													<td>Post-Sales support</td>
													<td>Edinburgh</td>
													<td>46</td>
													<td>2011/03/09</td>
													<td>$324,050</td>
												</tr>
												<tr>
													<td>Unity Butler</td>
													<td>Marketing Designer</td>
													<td>San Francisco</td>
													<td>47</td>
													<td>2009/12/09</td>
													<td>$85,675</td>
												</tr>
												<tr>
													<td>Howard Hatfield</td>
													<td>Office Manager</td>
													<td>San Francisco</td>
													<td>51</td>
													<td>2008/12/16</td>
													<td>$164,500</td>
												</tr>
												<tr>
													<td>Hope Fuentes</td>
													<td>Secretary</td>
													<td>San Francisco</td>
													<td>41</td>
													<td>2010/02/12</td>
													<td>$109,850</td>
												</tr>
												<tr>
													<td>Vivian Harrell</td>
													<td>Financial Controller</td>
													<td>San Francisco</td>
													<td>62</td>
													<td>2009/02/14</td>
													<td>$452,500</td>
												</tr>
												<tr>
													<td>Timothy Mooney</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>37</td>
													<td>2008/12/11</td>
													<td>$136,200</td>
												</tr>
												<tr>
													<td>Jackson Bradshaw</td>
													<td>Director</td>
													<td>New York</td>
													<td>65</td>
													<td>2008/09/26</td>
													<td>$645,750</td>
												</tr>
												<tr>
													<td>Olivia Liang</td>
													<td>Support Engineer</td>
													<td>Singapore</td>
													<td>64</td>
													<td>2011/02/03</td>
													<td>$234,500</td>
												</tr>
												<tr>
													<td>Bruno Nash</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>38</td>
													<td>2011/05/03</td>
													<td>$163,500</td>
												</tr>
												<tr>
													<td>Sakura Yamamoto</td>
													<td>Support Engineer</td>
													<td>Tokyo</td>
													<td>37</td>
													<td>2009/08/19</td>
													<td>$139,575</td>
												</tr>
												<tr>
													<td>Thor Walton</td>
													<td>Developer</td>
													<td>New York</td>
													<td>61</td>
													<td>2013/08/11</td>
													<td>$98,540</td>
												</tr>
												<tr>
													<td>Finn Camacho</td>
													<td>Support Engineer</td>
													<td>San Francisco</td>
													<td>47</td>
													<td>2009/07/07</td>
													<td>$87,500</td>
												</tr>
												<tr>
													<td>Serge Baldwin</td>
													<td>Data Coordinator</td>
													<td>Singapore</td>
													<td>64</td>
													<td>2012/04/09</td>
													<td>$138,575</td>
												</tr>
												<tr>
													<td>Zenaida Frank</td>
													<td>Software Engineer</td>
													<td>New York</td>
													<td>63</td>
													<td>2010/01/04</td>
													<td>$125,250</td>
												</tr>
												<tr>
													<td>Zorita Serrano</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>56</td>
													<td>2012/06/01</td>
													<td>$115,000</td>
												</tr>
												<tr>
													<td>Jennifer Acosta</td>
													<td>Junior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>43</td>
													<td>2013/02/01</td>
													<td>$75,650</td>
												</tr>
												<tr>
													<td>Cara Stevens</td>
													<td>Sales Assistant</td>
													<td>New York</td>
													<td>46</td>
													<td>2011/12/06</td>
													<td>$145,600</td>
												</tr>
												<tr>
													<td>Hermione Butler</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>47</td>
													<td>2011/03/21</td>
													<td>$356,250</td>
												</tr>
												<tr>
													<td>Lael Greer</td>
													<td>Systems Administrator</td>
													<td>London</td>
													<td>21</td>
													<td>2009/02/27</td>
													<td>$103,500</td>
												</tr>
												<tr>
													<td>Jonas Alexander</td>
													<td>Developer</td>
													<td>San Francisco</td>
													<td>30</td>
													<td>2010/07/14</td>
													<td>$86,500</td>
												</tr>
												<tr>
													<td>Shad Decker</td>
													<td>Regional Director</td>
													<td>Edinburgh</td>
													<td>51</td>
													<td>2008/11/13</td>
													<td>$183,000</td>
												</tr>
												<tr>
													<td>Michael Bruce</td>
													<td>Javascript Developer</td>
													<td>Singapore</td>
													<td>29</td>
													<td>2011/06/27</td>
													<td>$183,000</td>
												</tr>
												<tr>
													<td>Donna Snider</td>
													<td>Customer Support</td>
													<td>New York</td>
													<td>27</td>
													<td>2011/01/25</td>
													<td>$112,000</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

			<!-- Sidebar-right-->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="panel panel-primary card mb-0 box-shadow">
					<div class="tab-menu-heading border-0 p-3">
						<div class="card-title mb-0">Notifications</div>
						<div class="card-options ml-auto">
							<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
						</div>
					</div>
					<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
						<div class="tabs-menu ">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class=""><a href="#side1" class="active" data-toggle="tab"><i class="ion ion-md-chatboxes tx-18 mr-2"></i> Chat</a></li>
								<li><a href="#side2" data-toggle="tab"><i class="ion ion-md-notifications tx-18  mr-2"></i> Notifications</a></li>
								<li><a href="#side3" data-toggle="tab"><i class="ion ion-md-contacts tx-18 mr-2"></i> Friends</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active " id="side1">
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-primary brround avatar-md">CH</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>New Websites is Created</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">30 mins ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-danger brround avatar-md">N</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare For the Next Project</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">2 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-info brround avatar-md">S</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Decide the live Discussion</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">3 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-warning brround avatar-md">K</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Meeting at 3:00 pm</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">4 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-success brround avatar-md">R</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">1 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-pink brround avatar-md">MS</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">1 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-purple brround avatar-md">L</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">45 mintues ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center p-3">
									<div class="">
										<span class="avatar bg-blue brround avatar-md">U</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">2 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="tab-pane  " id="side2">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/1.jpg"></span>
										</div>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/11.jpg"></span>
										</div>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/6.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> Hey! there I' am available....
											<div class="small text-muted">
												12 mintues ago
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane  " id="side3">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/11.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/13.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/4.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/7.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/2.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/11.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/9.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/4.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/Sidebar-right-->

			<!-- Message Modal -->
			<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog modal-dialog-right chatbox" role="document">
					<div class="modal-content chat border-0">
						<div class="card overflow-hidden mb-0 border-0">
							<!-- action-header -->
							<div class="action-header clearfix">
								<div class="float-left hidden-xs d-flex ml-2">
									<div class="img_cont mr-3">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img" alt="img">
									</div>
									<div class="align-items-center mt-2">
										<h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
										<span class="dot-label bg-success"></span><span class="mr-3 text-white">online</span>
									</div>
								</div>
								<ul class="ah-actions actions align-items-center">
									<li class="call-icon">
										<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#audiomodal">
											<i class="si si-phone"></i>
										</a>
									</li>
									<li class="video-icon">
										<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#videomodal">
											<i class="si si-camrecorder"></i>
										</a>
									</li>
									<li class="dropdown">
										<a href="" data-toggle="dropdown" aria-expanded="true">
											<i class="si si-options-vertical"></i>
										</a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><i class="fa fa-user-circle"></i> View profile</li>
											<li><i class="fa fa-users"></i>Add friends</li>
											<li><i class="fa fa-plus"></i> Add to group</li>
											<li><i class="fa fa-ban"></i> Block</li>
										</ul>
									</li>
									<li>
										<a href=""  class="" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true"><i class="si si-close text-white"></i></span>
										</a>
									</li>
								</ul>
							</div>
							<!-- action-header end -->

							<!-- msg_card_body -->
							<div class="card-body msg_card_body">
								<div class="chat-box-single-line">
									<abbr class="timestamp">February 1st, 2019</abbr>
								</div>
								<div class="d-flex justify-content-start">
									<div class="img_cont_msg">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Hi, how are you Jenna Side?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end ">
									<div class="msg_cotainer_send">
										Hi Connor Paige i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end ">
									<div class="msg_cotainer_send">
										You welcome Connor Paige
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start">
									<div class="img_cont_msg">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Okay Bye, text you later..
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<!-- msg_card_body end -->
							<!-- card-footer -->
							<div class="card-footer">
								<div class="msb-reply d-flex">
									<div class="input-group">
										<input type="text" class="form-control " placeholder="Typing....">
										<div class="input-group-append ">
											<button type="button" class="btn btn-primary ">
												<i class="far fa-paper-plane" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div><!-- card-footer end -->
						</div>
					</div>
				</div>
			</div>

			<!--Video Modal -->
			<div id="videomodal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content bg-dark border-0 text-white">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Valex Video call</h5>
							<img src="../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="mt-5">
								<div class="row">
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-video-slash"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
											<i class="fas fa-phone bg-danger text-white"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-microphone-slash"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!-- Audio Modal -->
			<div id="audiomodal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content border-0">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Valex Voice call</h5>
							<img src="../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="mt-5">
								<div class="row">
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-volume-up bg-light"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
											<i class="fas fa-phone text-white bg-success"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape  rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-microphone-slash bg-light"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!-- Footer opened -->
			<div class="main-footer ht-40">
				<div class="container-fluid pd-t-0-f ht-100p">
					<span>Copyright © 2021 <a href="#">Valex</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
				</div>
			</div>
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!-- JQuery min js -->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap Bundle js -->
		<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Ionicons js -->
		<script src="../assets/plugins/ionicons/ionicons.js"></script>

		<!-- Moment js -->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!-- P-scroll js -->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- Internal Data tables -->
		<script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="../assets/plugins/datatable/js/responsive.dataTables.min.js"></script>
		<script src="../assets/plugins/datatable/js/jquery.dataTables.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="../assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="../assets/plugins/datatable/js/pdfmake.min.js"></script>
		<script src="../assets/plugins/datatable/js/vfs_fonts.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="../assets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>

		<!--Internal  Datatable js -->
		<script src="../assets/js/table-data.js"></script>

		<!-- Rating js-->
		<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="../assets/plugins/rating/jquery.barrating.js"></script>

		<!-- Sidebar js -->
		<script src="../assets/plugins/side-menu/sidemenu.js"></script>

		<!-- Right-sidebar js -->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- Sticky js -->
		<script src="../assets/js/sticky.js"></script>

		<!-- eva-icons js -->
		<script src="../assets/js/eva-icons.min.js"></script>

		<!-- custom js -->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>