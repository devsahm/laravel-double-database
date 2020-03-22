<!doctype html>
<html class="fixed">
	
<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Agent | User Profile</title>
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
						<h2>User Profile</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="/home">
										<i class="fa fa-home"></i>
									</a>
								</li>
								
								<li><span>User Profile</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

					<div class="row">
						<div class="col-md-4 col-lg-3">

							<section class="panel">
								<div class="panel-body">
									<div class="thumb-info mb-md">
										<img src="/profileimage/{{Auth::user()->avatar}}" class="rounded img-responsive" style=" width: 189; height: 189;" alt="John Doe">
										<div class="thumb-info-title">
											<span class="thumb-info-inner">{{ Auth::user()->name}}</span>
											<span class="thumb-info-type">Level {{ Auth::user()->level }}</span>
										</div>
									</div>

									<div class="widget-toggle-expand mb-md">
										<div class="widget-header">
											<h6>Profile Completion</h6>
											<div class="widget-toggle">+</div>
										</div>
										<div class="widget-content-collapsed">
											<div class="progress progress-xs light">
												@if(Auth::user()->lastname==null)
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
													50%
												</div>
												@elseif(Auth::user()->lastname!= null && Auth::user()->avatar!="demo.png")
												<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%; background:#50d28a; ">
													100%
												</div>
												@endif
											</div>
										</div>
										<div class="widget-content-expanded">
											<ul class="simple-todo-list">
												@if(Auth::user()->lastname==null)
												<li class="">Update Profile Picture</li>
												<li class="">Update Personal Information</li>
												@elseif(Auth::user()->lastname!= null && Auth::user()->avatar!="demo.png")
												<li class="completed" style="color: black;">Profile Picture Updated</li>
												<li class="completed" style="color: black;">Personal Information Update</li>
												@endif
												<!-- <li>Update Social Media</li>
												<li>Follow Someone</li> -->
											</ul>
										</div>
									</div>

								</div>
							</section>



						

						</div>
						<div class="col-md-8 col-lg-6">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="active">
										<a href="#overview" data-toggle="tab">Overview</a>
									</li>
									<li>
										<a href="#edit" data-toggle="tab">Edit Profile</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="overview" class="tab-pane active">
										<h4 class="mb-md">Update Status</h4>

										<section class="simple-compose-box mb-xlg">
											<form method="get" action="http://preview.oklerthemes.com/">
												<textarea name="message-text" data-plugin-textarea-autosize placeholder="What's on your mind?" rows="1"></textarea>
											</form>
											<div class="compose-box-footer">
												<ul class="compose-toolbar">
													<li>
														<a href="#"><i class="fa fa-camera"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-map-marker"></i></a>
													</li>
												</ul>
												<ul class="compose-btn">
													<li>
														<a class="btn btn-primary btn-xs">Post</a>
													</li>
												</ul>
											</div>
										</section>

										
									</div>
									<div id="edit" class="tab-pane">
										@include('success')
										@include('customerror.cerrors')
										<form class="form-horizontal" method="post" action="/updateprofile/{{Auth::user()->id}}" enctype="multipart/form-data">
											@csrf
											@method('PATCH')
											<h4 class="mb-xlg">Personal Information</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Email Address</label>
													<div class="col-md-8">
														<input type="email" class="form-control" id="profileCompany" value="{{Auth::user()->email}}" readonly>
													</div>
												</div>
												 

												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">First Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileFirstName" name="firstname" value="{{Auth::user()->firstname}}">
														@error('firstname')
					                                <span class="invalid-feedback" style="color: red;"  role="alert">
					                                    <strong>{{ $message }}</strong>
					                                </span>
					                              @enderror
													</div>
												</div>
												 
												

												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">Last Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileLastName" name="lastname" value="{{Auth::user()->lastname}}">
														 @error('lastname')
					                                <span class="invalid-feedback" style="color: red;"  role="alert">
					                                    <strong>{{ $message }}</strong>
					                                </span>
					                              @enderror
													</div>
												</div>
												


												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">Phone Number</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileLastName" name="phone_number" value="{{Auth::user()->phone_number}}">

														 @error('phone_number')
					                                <span class="invalid-feedback" style="color: red;"  role="alert">
					                                    <strong>{{ $message }}</strong>
					                                </span>
					                              @enderror
													</div>
												</div>
												
												
												
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Profile Picture</label>
													<div class="col-md-8">
														<input type="file" class="form-control"  name="image">
														 @error('image')
					                                <span class="invalid-feedback" style="color: red;"  role="alert">
					                                    <strong>{{ $message }}</strong>
					                                </span>
					                              @enderror
													</div>
												</div>
												

											</fieldset>

											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary" style="background: #50d28a; color: white;">Submit</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>
												</form>

											<hr class="dotted tall">
											<h4 class="mb-xlg">Change Password</h4>
											<form action="/updatepassword/{{Auth::user()->id}}" method="post">
												@csrf
												@method('PATCH')
											<fieldset class="mb-xl">
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPassword">Current Password</label>
													<div class="col-md-8">
														<input type="password" class="form-control" id="profileNewPassword" name="oldpassword">
													</div>
												</div>


												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
													<div class="col-md-8">
														<input type="password" class="form-control" id="profileNewPassword" name="password">
														@error('password')
														<span class="invalid-feedback" style="color: red;"  role="alert">
					                                    <strong>{{ $message }}</strong>
					                                </span>
														@enderror
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
													<div class="col-md-8">
														<input type="password" class="form-control" id="profileNewPasswordRepeat" name="password_confirmation">
													</div>
												</div>
											</fieldset>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary"  style="background: #50d28a; color: white;">Submit</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-3">

							<h4 class="mb-md">Profit and Balance Stat</h4>
							<ul class="simple-card-list mb-xlg">
								<li class="primary">
									<h3>{{$today_transaction}}</h3>
									<p>Today's Transation</p>
								</li>
								<li class="info">
									<h3><span>&#8358;</span> {{(float)$profit}}</h3>
									<p>Total Profit </p>
								</li>
								<li class="primary" style="background:#3d4351; color: white;">
									<h3>{{$agents->count()}}</h3>
									<p>Total Transaction</p>
								</li>

								<li style="background: #50d28a; color: white;">
									<h3><span>&#8358;</span>{{(float)$wallet}}</h3>
									<p>Wallet Balance </p>
								</li>

							</ul>

							<h4 class="mb-md">Current Agent Level</h4>
							<ul class="simple-bullet-list mb-xlg">
								<li class="red">
									@if(Auth::user()->level == null)
									<span class="title">No Level(Please generate your referral code to earn a level)</span>
									@else
									<span class="title">Level {{Auth::user()->level}}</span>
									@endif
									<!-- <span class="description truncate">Lorem ipsom dolor sit.</span> -->
								</li>
								<!-- <li class="green">
									<span class="title">Current Agent Level</span>
									<span class="description truncate">Lorem ipsom dolor sit amet</span>
								</li>
								<li class="blue">
									<span class="title">Porto HTML5 Template</span>
									<span class="description truncate">Lorem ipsom dolor sit.</span>
								</li>
								<li class="orange">
									<span class="title">Tucson Template</span>
									<span class="description truncate">Lorem ipsom dolor sit.</span>
								</li> -->
							</ul>

							
						</div>

					</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2016-04-19T00:00+00:00">04/19/2016</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
						
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="/assets/vendor/jquery/jquery.js"></script>		<script src="/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="/assets/vendor/jquery-cookie/jquery-cookie.js"></script>		<script src="/assets/vendor/style-switcher/style.switcher.js"></script>		<script src="/assets/vendor/bootstrap/js/bootstrap.js"></script>		<script src="/assets/vendor/nanoscroller/nanoscroller.js"></script>		<script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="/assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->		<script src="/assets/vendor/autosize/autosize.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/assets/javascripts/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
	</body>

<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.5.4/pages-user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Dec 2016 16:29:12 GMT -->
</html>