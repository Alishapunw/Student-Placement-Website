@extends('layout.app')
@section('content')

<head>
	<title>Placement</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<!--<link rel="stylesheet" type="text/css" href="css/util.css">-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
		a{
			color: black;
		}
	</style>

</head>
<body>
	<br>
	<br>
	<br>
    
	<div class="limiter">
	    
		<div class="container-login100">
			<div class="wrap-login100">
			    <marquee><font color="red">Under maintenance</font></marquee>
                
				<div class="login100-form-title" style="background-image: url(images/bg-05.jpg);">
					<span class="login100-form-title-1">
						Sign Up
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="{{ route('register') }}">
					{{ csrf_field() }}
					@if(session('error'))
						<p><font  style="color: blue;">{{ session('error') }}</font></p>
					@endif
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Enter Email" required="">
						<span class="focus-input100"></span>
					</div>

					<!-- <div class="wrap-input100 validate-input m-b-18" data-validate = "Mobile no is required">
						<span class="label-input100 ">Mobile</span>

						<input class="input100" type="text" name="mobile" id="mobile" pattern="[789]{1}[0-9]{9}" placeholder="Enter Mobile No" required="">
						<span class="focus-input100"></span>
					</div> -->
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Required">
						<br>
						<span class="label-input100 ">Branch</span>
						<select style="margin-bottom: 1%;" class="input100" id="branch" name="branch">
               				<option>Select Branch</option>
               				<option value="CMPN">CMPN</option>
               				<option value="IT">IT</option>
               				<option value="ETRX">ETRX</option>
              				<option value="EXTC">EXTC</option>
              				<option value="INST">INST</option>
               				<option value="MCA">MCA</option>
            			</select>
            			
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Enter password" required="">
						<span class="focus-input100"></span>						
					</div>

					<label><input type="checkbox" onclick="myFunction()">Show Password</label>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Confirm</span>
						<input class="input100" type="password" name="password_confirmation"  id="password_confirmation" placeholder="Enter Confirm password" required="">
						<span class="focus-input100"></span>
					</div>
					
				
					
					
					

					<script>
					function myFunction() {
					  var x = document.getElementById("password");
					  if (x.type === "password") {
					    x.type = "text";
					  } else {
					    x.type = "password";
					  }
					}
					</script>

				<br>
				<br>
				<div class="container-login100-form-btn ">
					<button class="login100-form-btn" >
						Register
					</button>
				</div>
				
				<div class="flex-sb-m w-full p-b-20">
						<div class="col-md-16s">
							<br>
							<a href="{{ route('login') }}" class="txt1">
								 Already Registred?
							</a>
						</div>
					</div>
				


				</form>
			</div>
		</div>
	</div>



</body>

@endsection
