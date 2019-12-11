
@extends('layout.app')
@section('content')
{{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<script src="{{  asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/validation.js') }}"></script> --}}
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.css">

        <link href="{{asset('css/half-slider.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap-4-hover-navbar.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="{{asset('css/p_tslide.css')}}" rel="stylesheet">
        <link href="{{asset('css/styles2.css')}}" rel="stylesheet">
        <link href ="{{asset('css/homepage.css')}}" rel="stylesheet">

      
</head>   

<body>   
  <br>

<div id="myCarousel" class="carousel slide col-md-10 col-md-offset-1" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <!--<li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>-->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{ asset('images/Untitled.jpg') }}"  style="width:100%; margin-top: 60px ;"  id="vivek">
        
      </div>
      
      <div class="item">
      <img src="{{asset('images/faculty.jpg')}}"  style="width:100%;object-fit: cover ;margin-top: 60px ;"  id="vivek">
      <div class="carousel-caption">
        <h3>Placement Incharges</h3>
        </div>
      </div>

      <div class="item">
      <img src="{{asset('images/events/qu1.jpg')}}"  style="width:100%; margin-top: 60px ;"  id="vivek">
      <div class="carousel-caption">
        <h3>QUANTIPHI</h3>
        </div>
      </div>
    
      <!--<div class="item">
      <img src="{{asset('images/events/accp2.jpg')}}"  style="width:100%; margin-top: 60px ;"  id="vivek">
      <div class="carousel-caption">
        <h3>ACCENTURE PLACEMENT DRIVE</h3>
        </div>
      </div>

      <div class="item">
      <img src="{{asset('images/events/accp3.jpg')}}"  style="width:100%; margin-top: 60px ; height: 98%"  id="vivek">
      <div class="carousel-caption">
        <h3>ACCENTURE PLACEMENT DRIVE</h3>
        </div>
      </div>


      <div class="item">
      <img src="{{asset('images/events/nm2.jpg')}}"  style="width:100%; margin-top: 60px ;"  id="vivek">
      <div class="carousel-caption">
        <h3>NETWORK MARVELL DRIVE</h3>
        </div>
      </div>-->


      <!--<div class="item">
      <img src="{{asset('images/events/mca1.jpg')}}"  style="width:100%; margin-top: 60px ; height: 98%"  id="vivek">
      <div class="carousel-caption">
        <h3>MCA ALUMNI INTERACTION</h3>
        </div>
      </div>-->
   </div>
</div>

    <!--Left and right controls 
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>-->
<br>   
<hr>
<marquee><a href="{{route('statistics')}}"><font color="red"><b>NEW  </b>2019-20 statistics live!Click Here.</font></a>
<!--<font color="red">Currently mobile view is unstable, kindly switch to desktop.</font>--></marquee>
 <hr>  

<div style="width: 75%;" class="container login-container">
      <div class="row">
          <div class="col-md-6 login-form-1">
            <form method="post" action="{{ route('login') }}">
              {{csrf_field()}}
              @if(session('error'))
                <center><p style="color: #f05837;">{{ session('error') }}</p></center>
              @endif
              <h3>Login as Student</h3>
              
                  <div class="form-group" data-validate="Username is required">
                      <input type="text" class="form-control" name="username" id="username" placeholder="Your username"  required="" >
                    </div>
                  
                  <div class="form-group" data-validate = "Password is required">
                      <input type="password" class="form-control" name="pass"  id="pass" placeholder="Your password" required="">
                  </div>
                  <input type="checkbox" onclick="myFunction()"><font style="color: white;">Show Password</font>
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
                  <div class="form-group">
                      <input type="submit" class="btnSubmit" style="color:black;" >
                  </div>
                  <div class="form-group">
                      <a href="{{ route('forgetPassword') }}" class="btnForgetPwd">Forgot Password?</a>
                  </div>
                  <div class="form-group">
                      <a href="{{ route('register') }}" class="btnForgetPwd">Don't have an account? Sign up</a>
                  </div>
              </form>
          </div>

          <div class="col-md-6 login-form-2">
              <div class="login-logo">
                  <img src="{{asset('images/rocket.png')}}" id ="rocket" alt=""/>
              </div>
              <form method="post" action="{{ route('recruiter_login') }}">
              {{csrf_field()}}
              
              <h3>Login as Recruiter</h3>
              
                  <div class="form-group" data-validate="Username is required">
                      <input type="text" class="form-control" name="username" placeholder="Your username" required="">
                  </div>
                  <div class="form-group" data-validate = "Password is required">
                      <input type="password" class="form-control" name="pass"  id="pass" placeholder="Your password" required="">
                  </div>
                  
                  <div class="form-group">
                      <input type="submit" class="btnSubmit" style="color:black;" >
                  </div>
                  <div>
                    <br>
                    <a href="{{('admin_login')}}"><font style=" text-shadow: 0.5px 0.1px blue; color: #ffffff; text-decoration:none; font-size: 2.0rem; margin: 1rem; ">College admin Login</font></a>
                  </div>
                  
              </form>
          </div>
      </div>
</div>
<center>
<div id="download" >
    <!--<h2 style="text-shadow: 0.5px 0.1px blue">Downloads</h2>-->    
    <ul>
      <button style="height=20px;width="30px;"><li><a href="https://vesittpc.ves.ac.in/wp-content/uploads/2017/01/Placement-RULES-2016-2017.pdf">Download Placement Policy</a> </li></button>
          <!--<button><li><a style="padding-left:10px; padding-right:10px;" href="">Placement Policy</a></li></button>-->
      </ul>
  </div>
</center>
<br>
<!--<div>
  <a href="{{('admin_login')}}"><font style=" text-shadow: 0.5px 0.1px blue ; color: #152c84; text-decoration:none; font-size: 2.3rem; margin: 1rem; ">Admin Login</font></a>
</div>-->

<br>

  <center><h2 style="text-shadow: 0.5px 0.5px blue">Our Leading Recruiters</h2></center>
<div class="recruit">
  

  <div class="row-flex">
    
    <div class="gallery ">
      <br><br>
    <a target="_blank" href="https://www.morganstanley.com/">
      <img src="{{asset('images/past/morganstanley.png')}}">
    </a>
  </div>

  <div class="gallery ">
    <br><br>
    <a target="_blank" href="https://www.nomura.com/">
      <img src="{{asset('images/past/nomura.png')}}" >
    </a>
    
  </div>

  <div class="gallery ">
    <br>
    <a target="_blank" href="https://maqsoftware.com/">
      <img src="{{asset('images/past/maqsoftware.png')}}">
    </a>
    
  </div>

  <div class="gallery">
    <a target="_blank" href="http://www.larsentoubro.com/">
      <img src="{{asset('images/.picasaoriginals/4.png')}}">
    </a>
  </div>

  <div class="gallery ">
    <a target="_blank" href="https://www.ivp.in/">
      <img src="{{asset('images/past/ivp.png')}}">
    </a>
  </div>

  <div class="gallery">
    <br>
    <a target="_blank" href="https://www.tcs.com/">
      <img src="{{asset('images/past/tcs.png')}}">
    </a>
  </div>
  </div>
  <br>


</div>


</body>
@endsection
