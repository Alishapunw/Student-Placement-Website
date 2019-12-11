@extends('layout.app')
@section('content')
    <head>
	<title>Placement</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-05.jpg);">
					<span class="login100-form-title-1">
						Login
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="{{ route('login') }}">
										{{csrf_field()}}
					@if(session('error'))
						<p><font  style="color: blue;">{{ session('error') }}</font></p>
					@endif
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username" required="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass"  id="pass" placeholder="Enter password" required="">
						<span class="focus-input100"></span>
					</div>
					<input type="checkbox" onclick="myFunction()">
					
					<div class="flex-sb-m w-full p-b-30">Show Password</div>
					<script>
					function myFunction() {
					  var x = document.getElementById("pass");
					  if (x.type === "password") {
					    x.type = "text";
					  } else {
					    x.type = "password";
					  }
					}
					</script>

					<div class="flex-sb-m w-full p-b-30">
						<!-- <div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div> -->

						<div>
							<a href="{{ route('forgetPassword') }}" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
							Login
						</button></a>
					</div>

					<div class="flex-sb-m w-full p-b-20">
						<div class="col-md-16s">
							<br>
							<a href="{{ route('register') }}" class="txt1">
								 Do you have an account? sign up
							</a>
						</div>
					</div>

					</div>
				</form>
			</div>
		</div>
	</div>
	</body>
@endsection