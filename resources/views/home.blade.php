<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>User Profile</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png')}}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css')}}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('font/flaticon.css')}}">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('style.css')}}">
	<link rel="stylesheet" href="{{ asset('css/screen.css')}}">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<section class="fxt-template-animation fxt-template-layout1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
							<div class="fxt-page-switcher">
								<a href="{{url('activity')}}" class="btn btn-light btn-outline-danger">Activity Log</a>
								<a href="{{url('edit-profile',Auth::user()->id)}}" class="btn btn-light btn-outline-danger ml-2">Edit Profile</a>
								<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-danger ml-2"><span class="fas fa-power-off"></span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
							</div>
						</div>
						<div class="fxt-form">
							<h2 class="text-danger">Welcome!</h2>
							<h5 class="pl-4 text-dark mb-4">Saddam Hussain</h5>
							
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<h5><span class=" pr-3 fas fa-envelope text-danger"></span><span class="pl-2">Webspecialist221@gmail.com</span></h5>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<h5><span class=" pr-3 far fa-clipboard text-danger"></span><span class="pl-2">Laravel Developer</span></h5>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<h5><span class=" pr-3 fas fa-map-marker-alt text-danger"></span><span class="pl-2">Peshawar, Khyber Pukhtunkhwa, Pakistan</span></h5>
									</div>
								</div>
								
						</div>
						
					</div>
				</div>
				<div class="col-md-6 col-12 fxt-none-767 fxt-bg-img" data-bg-image="{{ asset('img/figure/bg1-l.jpg')}}"></div>
			</div>
		</div>
	</section>
	<!-- jquery-->
	<script src="{{ asset('js/jquery-3.5.0.min.js')}}"></script>
	<script src="{{ asset('js/jquery.validate.min.js')}}"></script>
	<!-- Popper js -->
	<script src="{{ asset('js/popper.min.js')}}"></script>
	<!-- Bootstrap js -->
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<!-- Imagesloaded js -->
	<script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
	<!-- Validator js -->
	<script src="{{ asset('js/validator.min.js')}}"></script>
	<!-- Custom Js -->
	<script src="{{ asset('js/main.js')}}"></script>

</body>
</html>