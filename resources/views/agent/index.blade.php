<!doctype html>
<html class="fixed">
	
<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.5.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Dec 2016 16:28:06 GMT -->
<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Agents | African Money</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->		<link rel="stylesheet" href="/assets/vendor/jquery-ui/jquery-ui.css" />		<link rel="stylesheet" href="/assets/vendor/jquery-ui/jquery-ui.theme.css" />		<link rel="stylesheet" href="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />		<link rel="stylesheet" href="/assets/vendor/morris.js/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/assets/stylesheets/theme.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="/assets/vendor/modernizr/modernizr.js"></script>		<script src="/assets/vendor/style-switcher/style.switcher.localstorage.js"></script>

	</head><script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='../../../10.71.184.6_8080/www/default/base.js'></script>
	<body>
		<section class="body">

			<!-- start: header -->
			@include('admheader')
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				@include('aside')
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index-2.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						
						<div class="col-md-6 col-lg-12 col-xl-6">
							<div class="row">
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fa fa-life-ring"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Transactions</h4>
														<div class="info">
															<strong class="amount">{{$agents->count()}}</strong>
															<!-- <span class="text-primary">(14 unread)</span> -->
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="/transactions">(view all)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-secondary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon" >
													<div class="summary-icon bg-secondary">
														<i class="fa fa-money"></i>

													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Wallet Balance</h4>
														<div class="info">
															<strong class="amount"><span>&#8358;</span> {{$wallet}}</strong>
														</div>
													</div>
													<div class="summary-footer">
														@if($agents->count())
														<a href="/withdraw" class="text-muted text-uppercase">(withdraw)</a>
														@else
														<a href="#" class="text-muted text-uppercase">(Can't Withdrawal Yet )</a>
														@endif


													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Today's Transaction</h4>
														<div class="info">
															<strong class="amount">{{$today_transaction}}</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(statement)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-quartenary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quartenary">
														<i class="fa fa-user"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Referred User</h4>
														<div class="info">
															<strong class="amount">{{$user}}</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(report)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="row">
						<div class="col-md-6 col-lg-12 col-xl-6">
							<h2>Generate Referal Code</h2>
						</div>
						
					</div> -->
               	@if(Auth::user()->referal_code == null )
					<section class="panel panel-transparent">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
					
									<h2 class="panel-title">Generate Referral Code</h2>
								</header>
								<div class="panel-body">
									<section class="panel">
										<div class="panel-body">
											<div class="small-chart pull-right" id="sparklineBarDash"></div>
										
											
											<p class="text-xs" style="font: 70px;">You would get a commission on every transaction made by anyone that signs up to africa money through your referal code</p>

												<form method="post" action="/generate-referal-code/{{Auth::user()->id }}">
													@csrf
													@method('PATCH')
													<input type="submit" class="btn btn-info" value="Generate Referral Code">
												</form>
											
											
										</div>
									</section>

								</div>
							</section>

							@else

							<section class="panel panel-transparent">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
					
									<h2 class="panel-title">Referral Code Generated</h2>
								</header>
								@include('success')
								<div class="panel-body">
									<section class="panel">
										<div class="panel-body">
											<div class="small-chart pull-right" id="sparklineBarDash"></div>
										
											
											<p class="text-xs" style="font: 70px;">You would get a commission on every transaction made by anyone that signs up to africa money through your referal code</p>
											<div class="h4 text-weight-bold mb-none">Referral Code: {{Auth::user()->referal_code}}</div>	
										</div>
									</section>

								</div>
							</section>

											@endif
											
					
					
					
					
					<!-- end: page -->
				</section>
			</div>

			
		</section>

		<!-- Vendor -->
		<script src="/assets/vendor/jquery/jquery.js"></script>		<script src="/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="/assets/vendor/jquery-cookie/jquery-cookie.js"></script>		<script src="/assets/vendor/style-switcher/style.switcher.js"></script>		<script src="/assets/vendor/bootstrap/js/bootstrap.js"></script>		<script src="/assets/vendor/nanoscroller/nanoscroller.js"></script>		<script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="/assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->		<script src="/assets/vendor/jquery-ui/jquery-ui.js"></script>		<script src="/assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>		<script src="/assets/vendor/jquery-appear/jquery-appear.js"></script>		<script src="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>		<script src="/assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>		<script src="/assets/vendor/flot/jquery.flot.js"></script>		<script src="/assets/vendor/flot.tooltip/flot.tooltip.js"></script>		<script src="/assets/vendor/flot/jquery.flot.pie.js"></script>		<script src="/assets/vendor/flot/jquery.flot.categories.js"></script>		<script src="/assets/vendor/flot/jquery.flot.resize.js"></script>		<script src="/assets/vendor/jquery-sparkline/jquery-sparkline.js"></script>		<script src="/assets/vendor/raphael/raphael.js"></script>		<script src="/assets/vendor/morris.js/morris.js"></script>		<script src="/assets/vendor/gauge/gauge.js"></script>		<script src="/assets/vendor/snap.svg/snap.svg.js"></script>		<script src="/assets/vendor/liquid-meter/liquid.meter.js"></script>		<script src="/assets/vendor/jqvmap/jquery.vmap.js"></script>		<script src="/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>		<script src="/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/assets/javascripts/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
		<!-- Examples -->
		<script src="/assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>