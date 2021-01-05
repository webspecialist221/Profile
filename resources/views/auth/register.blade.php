<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Xmee | Login and Register Form Html Templates</title>
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
	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
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
							<!-- <a href="login-1.html" class="fxt-logo"><img src="img/logo-1.png" alt="Logo"></a> -->
							<div class="fxt-page-switcher">
								<a href="{{url('login')}}" class="btn btn-light btn-outline-danger">Log In</a>
								<!-- <a href="login-1.html" class="btn btn-light btn-outline-danger ml-2">Edit Profile</a> -->
							</div>
						</div>
						<div class="fxt-form">
							<h2>Register</h2>
							<p>Create an account</p>
							<form method="POST" action="{{ route('register') }}" id="form1">
                        		@csrf
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Enter Your Name" autofocus><i class="fas fa-user"></i>

										@error('name')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Enter Your Email Address" ><i class="fas fa-envelope"></i>
										@error('email')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
									</div>

								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter your Address" id="address" value="{{ old('adddress') }}" autocomplete="adddress">
										<i class="fas fa-map-marker-alt"></i>
										@error('address')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input type="text" class="form-control @error('skills') is-invalid @enderror" name="skills" placeholder="Enter Your Skill" id="skills" value="{{ old('skills') }}" autocomplete="skills">
										<i class="fas fa-clipboard"></i>
										@error('skills')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Enter Your Password">
										<i class="fas fa-lock"></i>
										@error('password')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Confirm Password">
										<i class="fas fa-lock"></i>
										
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<input type="text" id="date" name="age" class="form-control" placeholder="Enter Your Date of Birth">
										<i class="fas fa-calendar-alt"></i>
										
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-4">
										<button type="submit" class="fxt-btn-fill">Register</button>
									</div>
								</div>
							</form>
						</div>
						<div class="fxt-footer">
							<ul class="fxt-socials">
								<li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-5"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="fxt-google fxt-transformY-50 fxt-transition-delay-7"><a href="#" title="google"><i class="fab fa-google-plus-g"></i></a></li>
								<li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-8"><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								<li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-8">
									<a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12 fxt-none-767 fxt-bg-img" data-bg-image="img/figure/bg1-r.jpg"></div>
			</div>
		</div>
	</section>
	<!-- jquery-->
	<script src="{{ asset('js/jquery-3.5.0.min.js')}}"></script>
	<script src="{{ asset('js/jquery.validate.min.js')}}"></script>
	 <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
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

	<script>
		$(document).ready(function(){
			$.validator.addMethod("minAge", function(value, element, min) {
			    var today = new Date();
			    var birthDate = new Date(value);
			    var age = today.getFullYear() - birthDate.getFullYear();
			 
			    if (age > min+1) { return true; }
			 
			    var m = today.getMonth() - birthDate.getMonth();
			 
			    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) { age--; }
			 
			    return age >= min;
			}, "You are not old enough!");
           $('#form1').validate({
              rules:{
              	name:{
              		required:true
              	},
              	age: {
		            required: true,
		            minAge: 18
		        },
              	email:{
              		required:true
              	},
              	address:{
              		required:true
              	},
              	skills:{
              		required:true
              	},
              	password: "required",
			    password_confirmation: {
			      equalTo: "#password"
			    },
              },
              messages:{
              	name:{
              		required: "Name Field is required"
              	},
              	age: {
		            required: "Please enter you date of birth.",
		            minAge: "You must be at least 18 years old!"
		        },
              	email:{
              		required: "Email Field is required"
              	},
              	address:{
              		required: "Address Field is required"
              	},
              	skills:{
              		required: "Skills Field is required"
              	},
              	password:{
              		required: "Password Field is required"
              	},
              	password_confirmation:{
              		equalTo: "Password Not Matched"
              	},
              	password_confirmation:{
              		required: "Confirm Password Field is required"
              	}
              }
           });

            $(function() {
            $( "#date" ).datepicker({
               changeMonth:true,
               changeYear:true,
               yearRange: '1970:2021',
            });
         });
		});
	</script>

</body>
</html>