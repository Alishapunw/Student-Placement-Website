
<html style="overflow-x:hidden; ">
  <head>
   <!--  {{-- Required meta tags --}} -->
    <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/cropped-favicon.png') }}" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    

      <!--JavaScript at end of body for optimized loading-->
      
    
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <meta http-equiv="pragma" content="no-cache"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- {{-- Bootstrap CSS --}} -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}" type="text/css">
   {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Bree+Serif&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
--}}

  {{-- Title --}}
    <title>VESIT Training & Placement Cell</title>


  </head>

  

  <header style="z-index: 9999; position: fixed;">
      <div class='preheader' >
          <div class="left-flex"> 
            <font>022-25227460</font>
            <span></span>
            <font>tpo@ves.ac.in</font>
          </div>
          <!--<div class="right-flex"> 
            <ul>
                <li ><a href='#'>Search</a></li>
                <li ><a href='#'>Updates</a></li>
                <li ><a href='#'>Blog</a></li>
                    </ul>
            </div>-->
      
          </div>
      
<!-- Side nav-->
<div id="mySidenav" class="slidenav" style="">
    <div class="header">
        <h3>VESIT TPC</h3>
    </div>


  <a href="javascript:void(0)" class="closebtn" >
      <i class="fa fa-arrow-left" onclick="closeNav()" aria-hidden="true" style="color:white"></i>
    <!--<i class=" fa fa-times"  onclick="closeNav()" aria-hidden="true" style="color:white"></i>-->
  </a>
  <a href="{{ route('homepage') }}" style='text-decoration:none;color:white;'>Home</a>
  <a href="{{ route('events') }}" style='text-decoration:none;color:white'>Events</a>
  <a href="{{ route('statistics') }}" style='text-decoration:none;color:white'>Statistics</a>
  <a href="{{ route('rules') }}" style='text-decoration:none;color:white'>Rules</a>
  <a href="{{ route('recruiters') }}" style='text-decoration:none;color:white'>Recruiters</a>
  <a href="{{ route('team_page') }}" style='text-decoration:none;color:white'>Team</a>
  <a href="{{ route('contact_us') }}" style='text-decoration:none;color:white'>Contact</a>
</div>



<nav id="navbar">
  <div class="nav-wrapper">
    
    <div class="logo">
      

      <a href="{{route('homepage')}}">
    <img height="80% width="80%" style="margin = auto;"src="images/cropped-favicon.png"></a>
      <span class='large' style="font-family: Segoe;">Training & Placement Cell</span>
      

      <!--<span class='short' style='font-size: 8vw;'> TPC</span>-->
    </div>
    <div class="toggle">
      <i class=" fa fa-bars"  onclick="openNav()" aria-hidden="true"></i>
    </div>
   
    <ul id="menu">
      <li ><a href="{{ route('homepage') }}">Home</a></li>
      <li><a href="{{ route('events') }}">Events</a></li>
      <li><a href="{{ route('statistics') }}">Statistics</a></li>
      <li><a href="{{ route('rules') }}">Rules</a></li> 
      <li><a href="{{ route('recruiters') }}">Recruiters</a></li>
      <li><a href="{{ route('team_page') }}">Team</a></li>
      <li><a href="{{ route('contact_us') }}">Contact</a></li>
    
    </ul>
  
  </div>

</nav>


 
  </header>

  <body id='main'>
    
        @yield('content')
   <br>
   <br>
   <br>
   <footer class="footer vesitfooter" style="padding-top: 2%; padding-bottom: 2%;">
    <div class="container">
        <div class="row">
            <div class="col-md-4" style='margin-bottom:15px;'>
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('images/newicon.png')}}" style="max-height: 50px;" alt="VESIT">
                    </div>
                    <div class="col-md-10">
                        <span class="font-weight-bold">Vivekanand Society's Institute Of Technology</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <span class="font-weight-bold">
                                Hashu Adwani Memorial Complex, Collector's Colony, Chembur, Mumbai, Maharashtra 400074
                        </span>
                        <br>
                        <span>VESIT Directory</span>
                    </div>
                    <br>
                </div>
            </div> 
           
            <div class="col-md-3">
                <strong style='text-decoration: underline'>Useful Links</strong>
                <ul class="list-unstyled">
                    <li><a href="{{ route('homepage') }}">Home</a></li>
                    <li><a href="{{ route('events') }}">Events</a></li>
                    <li><a href="{{ route('statistics') }}">Statistics</a></li>
                    <li><a href="{{ route('rules') }}">Rules</a></li>
                    <li><a href="{{ route('recruiters') }}">Recruiters</a></li>
                    <li><a href="{{ route('team_page') }}">Team</a></li>
                    <li><a href="{{ route('contact_us') }}">Contact</a></li>
                   
                </ul>
                <br>
            </div>
            <div class="col-md-3">
                <strong style='text-decoration: underline'>Other Links</strong>
                <ul class="list-unstyled">
                   <li><a href="#">Complaints</a></li>
                    <li><a href="#">Edugrievance</a></li>
                    <li><a href="#">Students and Faculty</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Nptel</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <br>
            </div>
            <div class="col-md-2">
                <strong style='text-decoration: underline'>Social Links</strong>

                <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-facebook-square fa-lg" style="margin-right: 5px; " aria-hidden="true"></i>Facebook</a></li>
                    <li><a href="#"><i class="fa fa-instagram  fa-lg" style="margin-right: 5px;" aria-hidden="true"></i>Instagram</a></li>
                    <li><a href="#"><i class="fa fa-twitter-square  fa-lg" style="margin-right: 5px;" aria-hidden="true"></i>Twitter</a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square  fa-lg" style="margin-right: 5px;" aria-hidden="true"></i>LinkedIn</a></li>
                    <li><a href="#"><i class="fa fa-youtube-square  fa-lg" style="margin-right: 5px;" aria-hidden="true"></i>YouTube</a></li>
                  
                </ul>
                <br>
            </div>
        </div>
    </div>
    <br>
</footer>

    <footer class='bottomfooter'>
      <p> &copy; VESIT TPC, Developed and Maintained by VESIT Student and Staff Team.</p>
    </footer>




    <script>
      
            function openNav() {
              document.getElementById("mySidenav").style.display = "block";
              document.getElementById("mySidenav").style.position = 'absolute';
              document.getElementById('navbar').style.position='static';
              document.getElementById("mySidenav").style.zIndex= document.getElementById('navbar').style.zIndex+1;
              document.body.style.opacity = 0.9;
              setTimeout(() => {
                closeNav();
              }, 8000);
              
            }

            function closeNav() {
              document.getElementById("mySidenav").style.display = "none";
              document.body.style.opacity = 1;
            }
            
   


      // function openNav() {
      //   document.getElementById("mySidenav").style.display = "block";
      //   document.getElementById('main').style.opacity=0.9;
      // }
      
      // function closeNav() {
      //   document.getElementById("mySidenav").style.display = "none";
      //   document.body.style.opacity = 1;
      // }
      </script>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <script src="js/bootstrap-4-hover-navbar.js"></script>
    {{-- Javascript --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
  </body>
</html>
