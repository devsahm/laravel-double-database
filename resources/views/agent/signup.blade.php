<!doctype html>
<html class="fixed">
	
<!-- Mirrored from preview.oklerthemes.com/porto-admin/2.1.1/pages-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 14:07:51 GMT -->
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
		<link rel="stylesheet" href="/agentasset/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="/agentasset/vendor/animate/animate.css">

		<link rel="stylesheet" href="/agentasset/vendor/font-awesome/css/fontawesome-all.min.css" />
		<link rel="stylesheet" href="/agentasset/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="/agentasset/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/agentasset/css/theme.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/agentasset/css/custom.css">

		<!-- Head Libs -->
		<script src="/agentasset/vendor/modernizr/modernizr.js"></script>		<script src="master/style-switcher/style.switcher.localstorage.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="https://preview.oklerthemes.com/" class="logo float-left">
					<img src="img/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign Up</h2>
					</div>
					<div class="card-body">
						 @isset($url)
                        <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                        @endisset
                            @csrf
							<div class="form-group mb-3">
								<label>Name</label>
								
								<input type="text" class="form-control form-control-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
								 @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                  @endif
							</div>

							<div class="form-group mb-3">
								<label>E-mail Address</label>
								
								<input type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >
								@if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                 @endif
							</div>

							<div class="form-group mb-0">
								<div class="row">
									<div class="col-sm-6 mb-3">
										<label>Password</label>
										<input id="password" type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"   required>
										 @if ($errors->has('password'))
		                                <span class="invalid-feedback">
		                                    <strong>{{ $errors->first('password') }}</strong>
		                                </span>
                                      @endif
									</div>
									<div class="col-sm-6 mb-3">
										<label>Password Confirmation</label>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="AgreeTerms" name="agreeterms" type="checkbox"/>
										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary mt-2">Sign Up</button>
								</div>
							</div>

							<span class="mt-3 mb-3 line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-1 text-center">
								<a class="btn btn-facebook mb-3 ml-1 mr-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
								<a class="btn btn-twitter mb-3 ml-1 mr-1" href="#">Connect with <i class="fab fa-twitter"></i></a>
							</div>

							<p class="text-center">Already have an account? <a href="pages-signin.html">Sign In!</a></p>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2017. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="/agentasset/vendor/jquery/jquery.js"></script>		<script src="/agentasset/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="/agentasset/vendor/jquery-cookie/jquery-cookie.js"></script>		<script src="master/style-switcher/style.switcher.js"></script>		<script src="/agentasset/vendor/popper/umd/popper.min.js"></script>		<script src="/agentasset/vendor/bootstrap/js/bootstrap.js"></script>		<script src="/agentasset/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="/agentasset/vendor/common/common.js"></script>		<script src="/agentasset/vendor/nanoscroller/nanoscroller.js"></script>		<script src="/agentasset/vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="/agentasset/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/agentasset/js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/agentasset/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/agentasset/js/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
	</body>

<!-- Mirrored from preview.oklerthemes.com/porto-admin/2.1.1/pages-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 14:07:51 GMT -->
</html>