<!doctype html>
<html class="fixed">
	
<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.5.4/pages-recover-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Dec 2016 16:28:08 GMT -->
<head>

		<!-- Basic -->
		<meta charset="UTF-8">

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
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="../../index-2.html" class="logo pull-left">
					<img src="/assets/images/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none" style="background:#50d28a; color: white;"><i class="fa fa-user mr-xs"></i> Recover Password</h2>
					</div>
					<div class="panel-body">
						<div class="alert alert-info">
							<p class="m-none text-weight-semibold h6">Enter your e-mail below and we will send you reset instructions!</p>
						</div>
						  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

						 <form method="POST" action="{{ route('password.email') }}">
                        @csrf
							<div class="form-group mb-none">
								<div class="input-group">
									
									 <input id="email" type="email" placeholder="E-mail" class="form-control input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" style="color: red;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

									<span class="input-group-btn">
										<button class="btn btn-primary btn-lg" type="submit" style="background:#3d4351; color: white;">Reset!</button>
									</span>
								</div>
							</div>

							<p class="text-center mt-lg">Remembered? <a href="/login" style="color:#50d28a;">Sign In!</a></p>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright {{now()->year}}. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="/assets/vendor/jquery/jquery.js"></script>		<script src="/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="/assets/vendor/jquery-cookie/jquery-cookie.js"></script>		<script src="/assets/vendor/style-switcher/style.switcher.js"></script>		<script src="/assets/vendor/bootstrap/js/bootstrap.js"></script>		<script src="/assets/vendor/nanoscroller/nanoscroller.js"></script>		<script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="/assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/assets/javascripts/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		<!-- <script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script> -->
	</body>

<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.5.4/pages-recover-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Dec 2016 16:28:08 GMT -->
</html>