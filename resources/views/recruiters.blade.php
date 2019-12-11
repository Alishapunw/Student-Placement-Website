@extends('layout.app')
@section('content')
<head>
<link rel="stylesheet" href="{{ asset('css/recrutstyle.css') }}" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1" />


</head>

<body>
<br><br><br><br>
<div class="container">
<p><strong><h2 style="text-align: center; color:#204184;">Our Recent Recruiters</h2></strong></p>
    <hr>
    
    <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/morganstanley.png')}}"><br>
            <div class="overlay">
           <h2>Morgan Stanley</h2>
           </div>
           </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/jpmc.jpg')}}">
            <div class="overlay">
                <h2>J.P.Morgan & Chase</h2>
            </div> </div>
            </div>



            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/nomura.png')}}">
            <div class="overlay">
                <h2>Nomura</h2>
            </div></div></div>

       
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/generalmills.png')}}">
            <div class="overlay">
            <h2>General Mills</h2>
            </div> </div> </div>
            </div>
            
            
            
            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/accenture.jpg')}}">
            <div class="overlay">
            <h2>Accenture</h2>
            </div></div></div>


            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/capgemini.jpg')}}">
            <div class="overlay">
            <h2>Capgemini</h2>
        </div></div></div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/lnt.jpg')}}">
            <div class="overlay">
            <h2>L&T Info</h2>
            </div></div></div>


            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/maqsoftware.png')}}">
            <div class="overlay">
            <h2>MAQ Software</h2>
            </div></div></div>
        </div>

           
           
            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/ivp.png')}}">
            <div class="overlay">
            <h2>Indus Valley Partners</h2>
            </div></div></div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/sap.jpg')}}">
            <div class="overlay">
            <h2>SAP Labs</h2>
            </div></div></div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/reliance.png')}}">
            <div class="overlay">
            <h2>Reliance Industries</h2>
            </div></div></div>
            
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/emerson.jpg')}}">
            <div class="overlay">
            <h2>Emerson</h2>
            </div></div></div>
            </div>

        <div class="row">
        <div class=" col-md-3 col-sm-4">
        <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/pragmatix.jpg')}}">
            <div class="overlay">
            <h2>Pragmatix Services</h2>
            </div></div></div>
            
       
            <div class="col-md-3 col-sm-4 ">
        <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/lntcore.jpg')}}">
            <div class="overlay">
            <h2>L&T Core</h2>
            </div></div></div>

            <div class=" col-md-3 col-sm-4 ">
        <div class="hovereffect">
            <img class="img-responsive" src="{{asset('images/place/tecnimont.jpg')}}">
            <div class="overlay">
            <h2>Tecnimont </h2>
            </div></div></div>
 </div>
 
    <br><br>
    <div class="container">
        <p><strong><h2 style="text-align: center; color:#204184;">Our past recruiters</h2></strong></p>
        <hr>
        <center><img id="tp" style="width:70%; height: 60%;" src="{{asset('images/past/pastrecruiters.jpg')}}"></center>
        <hr><br>
    </div>
</div>
</body>
@endsection
