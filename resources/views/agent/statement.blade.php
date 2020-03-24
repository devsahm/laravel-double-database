<!doctype html>
<html class="fixed">
	
<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.5.4/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Dec 2016 16:26:25 GMT -->
<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Agent | African Money</title>
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

		<!-- Specific Page Vendor CSS -->		<link rel="stylesheet" href="/assets/vendor/jquery-ui/jquery-ui.css" />		<link rel="stylesheet" href="/assets/vendor/jquery-ui/jquery-ui.theme.css" />		<link rel="stylesheet" href="/assets/vendor/select2/css/select2.css" />		<link rel="stylesheet" href="/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />		<link rel="stylesheet" href="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />		<link rel="stylesheet" href="/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />		<link rel="stylesheet" href="/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />		<link rel="stylesheet" href="/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />		<link rel="stylesheet" href="/assets/vendor/dropzone/basic.css" />		<link rel="stylesheet" href="/assets/vendor/dropzone/dropzone.css" />		<link rel="stylesheet" href="/assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />		<link rel="stylesheet" href="/assets/vendor/summernote/summernote.css" />		<link rel="stylesheet" href="/assets/vendor/codemirror/lib/codemirror.css" />		<link rel="stylesheet" href="/assets/vendor/codemirror/theme/monokai.css" />

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
						<h2>Account Statement</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="/home">
										<i class="fa fa-home"></i>
									</a>
								</li>
								
								<li><span>Generate Account Statement</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						
						
						<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>
						
										<h2 class="panel-title">Select Range and generate</h2>
									</header>
									<div class="panel-body">
										@include('customerror.cerrors')
										<form class="form-horizontal form-bordered" action="/generate/statement" method="post">
											@csrf

											<div class="form-group">
												<label class="col-md-3 control-label">Date range</label>
												<div class="col-md-6">
													<div class="input-daterange input-group" data-plugin-datepicker>
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" class="form-control" name="start_date" required>
														 @error('start_date')
							                                <span class="invalid-feedback" style="color: red;"  role="alert">
							                                    <strong>{{ $message }}</strong>
							                                </span>
							                              @enderror
														<span class="input-group-addon">to</span>
														<input type="text" class="form-control" name="end_date" required>
														@error('end_date')
							                                <span class="invalid-feedback" style="color: red;"  role="alert">
							                                    <strong>{{ $message }}</strong>
							                                </span>
							                              @enderror
													</div>
												</div>
											</div>
						
											
						
											<div class="form-group">
												<label class="col-md-3 control-label"></label>
												<div class="col-md-3">
													<input type="submit" name="" value="Generate" class="btn btn-info">
												</div>
											</div>
						
										</form>
									</div>
								</section>
							</div>
						</div>
						
						
						
						
						
					<!-- end: page -->
				</section>
			</div>

			
		</section>

		<!-- Vendor -->
		<script src="/assets/vendor/jquery/jquery.js"></script>		<script src="/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="/assets/vendor/jquery-cookie/jquery-cookie.js"></script>		<script src="/assets/vendor/style-switcher/style.switcher.js"></script>		<script src="/assets/vendor/bootstrap/js/bootstrap.js"></script>		<script src="/assets/vendor/nanoscroller/nanoscroller.js"></script>		<script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="/assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->		<script src="/assets/vendor/jquery-ui/jquery-ui.js"></script>		<script src="/assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>		<script src="/assets/vendor/select2/js/select2.js"></script>		<script src="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>		<script src="/assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>		<script src="/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>		<script src="/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>		<script src="/assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js"></script>		<script src="/assets/vendor/fuelux/js/spinner.js"></script>		<script src="/assets/vendor/dropzone/dropzone.js"></script>		<script src="/assets/vendor/bootstrap-markdown/js/markdown.js"></script>		<script src="/assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>		<script src="/assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>		<script src="/assets/vendor/codemirror/lib/codemirror.js"></script>		<script src="/assets/vendor/codemirror/addon/selection/active-line.js"></script>		<script src="/assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>		<script src="/assets/vendor/codemirror/mode/javascript/javascript.js"></script>		<script src="/assets/vendor/codemirror/mode/xml/xml.js"></script>		<script src="/assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>		<script src="/assets/vendor/codemirror/mode/css/css.js"></script>		<script src="/assets/vendor/summernote/summernote.js"></script>		<script src="/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>		<script src="/assets/vendor/ios7-switch/ios7-switch.js"></script>		<script src="/assets/vendor/bootstrap-confirmation/bootstrap-confirmation.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/assets/javascripts/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
		<!-- Examples -->
		<script src="/assets/javascripts/forms/examples.advanced.form.js"></script>

	</body>

<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.5.4/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Dec 2016 16:26:44 GMT -->
</html>