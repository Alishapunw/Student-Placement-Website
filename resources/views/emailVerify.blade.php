@extends('layout.app')
@section('content')
<head>
	<title>Placement</title>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body onload="load('{{$send}}')" >
	<script type="text/javascript">

			function load(a)
			{
					if(a == 1)
					{

                                document.getElementById('username').disabled =true;
                                document.getElementById('genOTP').disabled =true;
                               document.getElementById("genOTP").style.backgroundColor = "black";
                                document.getElementById('emailotp').disabled =false;
                                document.getElementById('otpBtn').disabled =false;
                                document.getElementById("otpBtn").style.backgroundColor = "green";
                             
					}
				
			}       
      </script>
	
	<div class="limiter">
{{ $send }}
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-05.jpg);">
					<span class="login100-form-title-1">
						Email Verification
					</span>
				</div>

				<form class="login100-form validate-form"  method="post" action="{{ route('sendmail') }}" >
					{{csrf_field()}}
					@if(session('error'))
						<center><p>{{ session('error') }}</p></center>
					@endif

					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="username" id="username" value="{{ $data['email'] }}" placeholder="Enter Email">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" id="genOTP" name="genOTP" class="login100-form-btn" onclick="getMessage()">
							Generate OTP
						</button>
					</a>
					</div>
					<script >
					 function getMessage(){
                               
                               var num = document.getElementById('username').value;
                            if (num == "") {
                              alert("Please Enter Email ID.");
                              document.getElementById('email').focus();
                            }
                            else
                            {
                              
                                document.getElementById('username').disabled =true;
                                document.getElementById('genOTP').disabled =true;
                               document.getElementById("genOTP").style.backgroundColor = "black";
                                document.getElementById('emailotp').disabled =false;
                                document.getElementById('otpBtn').disabled =false;
                                document.getElementById("otpBtn").style.backgroundColor = "green";
                              
                            }


                           	</script>
                      </form>
                      <form class="login100-form validate-form" method="post" action="{{ route('otpVerify') }}" >  
                      {{csrf_field()}}   	
					<div class="wrap-input100 validate-input m-b-18" >
						<span class="label-input100 ">OTP</span>
						
						<input class="input100" type="text" name="emailotp" id="emailotp" placeholder="Enter your OTP">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button style="background: black" type="submit" id="otpBtn" class="login100-form-btn" >
							Verify Email
						</button>
					</a>
					</div>

					
					
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
@endsection