<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>User Activity Log</title>
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
	<div class="container-fluid">
		<div class="row pt-5">
			<div class="col-2"></div>			
			<div class="col-8">
				<div class="fxt-content">
						<div class="fxt-header">
							<div class="fxt-page-switcher">
								<a href="{{url('home')}}" class="btn btn-light btn-outline-danger ml-2">Profile</a>
								<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-danger ml-2"><span class="fas fa-power-off"></span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
							</div>
						</div>
						<div class="fxt-form pt-5">
							<h2 class="text-danger">Activity Log</h2>
							<!-- <h5 class="pl-4 text-dark">Activity Log</h5> -->
							
								<table class="table table-hover" >
								    <thead class="thead-inverse text-dark">
								        <tr>
								            <th>#</th>
								            <th>Log Name</th>
								            <th>Event</th>
								            <th>Old Name</th>
								            <th>Updated Name</th>
								            <th>Old Address</th>
								            <th>Updated Address</th>
								            <th>Old Skills</th>
								            <th>Updated Skills</th>
								            <th>Old Email</th>
								            <th>Updated Email</th>
								            <th>Password</th>
								        </tr>
								        
								    </thead>
								    <tbody>
								    	@foreach($activities as $key=>$activity)
								        <tr>
								            <td>{{$key + 1}}</td>
								            <td>{{$activity->log_name}}</td>
								            <td>{{$activity->description}}</td>
								            <td>
								            	 {{empty(json_decode($activity->properties)->old->name) ? '' : json_decode($activity->properties)->old->name}}
								            </td>
								            <td>
								            	 {{empty(json_decode($activity->properties)->attributes->name) ? '' : json_decode($activity->properties)->attributes->name}}
								            </td>
								            <td>
								            	 {{empty(json_decode($activity->properties)->old->address) ? '' : json_decode($activity->properties)->old->address}}
								            </td>
								            <td>
								            	 {{empty(json_decode($activity->properties)->attributes->address) ? '' : json_decode($activity->properties)->attributes->address}}
								            </td>
								            <td>
								            	 {{empty(json_decode($activity->properties)->old->skills) ? '' : json_decode($activity->properties)->old->skills}}
								            </td>
								            <td>
								            	 {{empty(json_decode($activity->properties)->attributes->skills) ? '' : json_decode($activity->properties)->attributes->skills}}
								            </td>
								            <td>
								            	 {{empty(json_decode($activity->properties)->old->email) ? '' : json_decode($activity->properties)->old->email}}
								            </td>
								            <td>
								            	 {{empty(json_decode($activity->properties)->attributes->email) ? '' : json_decode($activity->properties)->attributes->email}}
								            </td>
								            <td>
								            	 {{empty(json_decode($activity->properties)->attributes->password) ? 'Password is Not Updated' : 'Password is Updated'}}
								            </td>
								        </tr>
								        @endforeach
								    </tbody>
								</table>
						</div>
					</div>
			</div>			
			<div class="col-2"></div>			
		</div>
	</div>
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