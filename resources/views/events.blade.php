@extends('layout.app')
@section('content')

{{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<script src="{{  asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/validation.js') }}"></script> --}}
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="{{asset('css/event.css')}}">
        <link href="{{asset('css/styles2.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <style>
      
      h2 {margin:2rem 0;}

        * {
  box-sizing: border-box;
}

body {
  margin: 0px;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 20px;
  margin-left:20px;
  margin-right:20px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 33.33%; /* IE10 */
  flex: 33.33%;
  max-width: 33.33%;
  padding: 0 4px;
}



/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.column img {
  margin-top: 20px;
  vertical-align: middle;
  width: 100%;
}

.text-wrapper {
    margin-top: 70px;
    margin-bottom:0px;
  width: 400px;
  height: 90px;
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  color: #fff;
  opacity: 0;
}

.text-wrapper:hover {
  transition: all 0.8s ease;
  background: rgba(0, 0, 0, 0.6);
  opacity: 1;
}

.name {
    margin-left: 50px;
    margin-right:30%;
  font-size: 1.8em;
}


/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}



</style>
        </head>

<body>

<!-- Header -->
<div class="header">
<br><br><br>
<p><strong><h2 style="text-align: center; color:#204184;">Our Upcoming Events</h2></strong></p>


<div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column1">Event Name</th>
                                    <th class="cell100 column2">Event Description</th>
                                    <th class="cell100 column3">Venue</th>
                                    <th class="cell100 column4">Date</th>
                                    <th class="cell100 column5">Time</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

</div>
<div class="table100-body js-pscroll">
                        <table>
                            @foreach ($user as $users)

                            <tbody>
                                <tr class="row100 body">
                                    <td class="cell100 column1">{{ $users->event_name}}</td>
                                    <td class="cell100 column2" style="text-align: justify;">{{ $users->event_des }}</td>
                                    <td class="cell100 column3">{{ $users->venue}}</td>
                                    <td class="cell100 column4">{{ $users->date }}</td>
                                    <td class="cell100 column5">{{ $users->time }}</td>
                                </tr>

                            </tbody>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>


<div class="header">
<br>
<p><strong><h2 style="text-align: center; color:#204184;">Our Recent Events</h2></strong></p>
</div>

</div>

<div class="container" style="background-color:#fffaf0;">

  <br><br>
  <div class="card-deck">
    
    <div class="card" style=" background:rgb(248,248,255)">
      <img class="card-img-top img-fluid" src="{{asset('images/events/er1.jpg')}}" alt="Card image cap" style=" width:100%;height:90%">
      
      <div class="card-body ">
       <center> <h4 class="card-title"  style="color:#204184";>ElasticRun DREAM DRIVE </h4> </center>
       <center> <p class="card-text">
       <!--<a href="#" class="btn btn-info" role="button">More Images</a>-->
               <br>
  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal1">+</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog-centered" >
    
      <!-- Modal content-->
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body1">
          <br><br><br><br><br><br>
          <p><strong>ElasticRun DREAM DRIVE</strong></p>

          <p>More Images</p>
        
          <img src="{{asset('images/events/er1.jpg')}}" style="width:60%">
          <br><br><br><br>
          <img src="{{asset('images/events/er2.jpg')}}" style="width:60%">
          <br><br><br><br>
          <img src="{{asset('images/events/er3.jpg')}}" style="width:60%">
          <br><br><br><br>

        
        <div class="modal-footer">
        <button type="button" style="text-align: center;" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
 </div>
       </p> 
        </center>
      </div>
    </div>
   

    <div class="card" style=" background:rgb(248,248,255)">
      <img class="card-img-top img-fluid" src="{{asset('images/events/accp2.jpg')}}" alt="Card image cap" style=" width:100%;height:90%">
      
      <div class="card-body ">
       <center> <h4 class="card-title" style="color: #204184";>ACCENTURE PLACEMENT DRIVE</h4> </center>
       <center> <p class="card-text">
       <!--<a href="#" class="btn btn-info" role="button">More Images</a>-->
               <br>
  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal2">+</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
     <div class="modal-dialog-centered" >
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body2">
           <br><br><br><br><br><br>
          <p><strong>ACCENTURE PLACEMENT DRIVE</strong></p>
          <p>More Images</p>
          <img src="{{asset('images/events/accp1.jpg')}}" style="width:60%">
          <br><br><br><br>
          <img src="{{asset('images/events/accp2.jpg')}}" style="width:60%">
          <br><br><br><br>
          <img src="{{asset('images/events/accp3.jpg')}}" style="width:60%">
          <br><br><br><br>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
       </p> 
        </center>
      </div>
    </div>
   
   
  
    

    <div class="card" style=" background:rgb(248,248,255)">
      <img class="card-img-top img-fluid" src="{{asset('images/events/nm1.jpg')}}" alt="Card image cap" style=" width:100%;height:90%">
      
      <div class="card-body ">
       <center> <h4 class="card-title"  style="color: #204184";>NETWORK MARVELL DRIVE</h4> </center>
       <center> <p class="card-text">
       <!--<a href="#" class="btn btn-info" role="button">More Images</a>-->
               <br>
  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal3">+</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
     <div class="modal-dialog-centered" >
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body3">
           <br><br><br><br><br><br>
          <p><strong>NETWORK MARVELL DRIVE</strong></p>
          <p>More Images</p>
          <img src="{{asset('images/events/nm1.jpg')}}" style="width:60%">
          <br><br><br><br>
          <img src="{{asset('images/events/nm2.jpg')}}" style="width:60%">
          <br><br><br><br>
          <img src="{{asset('images/events/nm3.jpg')}}" style="width:60%">
          <br><br><br><br>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
       </p> 
        </center>
      </div>
    </div>
   
   </div>
<br><br><br>
   <div class="card-deck">


    <div class="card" style=" background:rgb(248,248,255)">
      <img class="card-img-top img-fluid" src="{{asset('images/events/mca1.jpg')}}" alt="Card image cap" style=" width:100%;height:90%">
      
      <div class="card-body ">
       <center> <h4 class="card-title" style="color: #204184";>MCA ALUMNI INTERACTION</h4> </center>
       <center> <p class="card-text">
       <!--<a href="#" class="btn btn-info" role="button">More Images</a>-->
               <br>
  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal4">+</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog-centered" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body4">
           <br><br><br><br><br><br>
          <p><strong>MCA ALUMNI INTERACTION</strong></p>
          <p>More Images</p>
          <img src="{{asset('images/events/mca1.jpg')}}" style="width:60%">
          <br><br><br><br>
          <img src="{{asset('images/events/mca2.jpg')}}" style="width:60%">
          <br><br><br><br>
          <img src="{{asset('images/events/mca3.jpg')}}" style="width:60%">
          <br><br><br><br>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
       </p> 
        </center>
      </div>
    </div>

    <div class="card" style=" background:rgb(248,248,255)">
      <img class="card-img-top img-fluid" src="{{asset('images/events/bnm1.jpg')}}" alt="Card image cap" style=" width:100%;height:90%">
      
      <div class="card-body ">
       <center> <h4 class="card-title" style="color: #204184";>BURNS AND MCDOWELL DRIVE</h4> </center>
       <center> <p class="card-text">
       <!--<a href="#" class="btn btn-info" role="button">More Images</a>-->
               <br>
  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal5">+</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog-centered" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body5">
           <br><br><br><br><br><br>
          <p><strong>BURNS AND MCDOWELL DRIVE</strong></p>
          <p>More Images</p>
          <img src="{{asset('images/events/bnm1.jpg')}}" style="width:60%">
          <br><br><br><br>
          <img src="{{asset('images/events/bnm2.jpg')}}" style="width:60%">
          <br><br><br><br>
          <img src="{{asset('images/events/bnm3.jpg')}}" style="width:60%">
          <br><br><br><br>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
       </p> 
        </center>
      </div>
    </div>
   
   <div class="card" style=" background:rgb(248,248,255)">
      <img class="card-img-top img-fluid" src="{{asset('images/events/llp1.jpg')}}" alt="Card image cap" style=" width:100%;height:90%">
      
      <div class="card-body ">
       <center> <h4 class="card-title" style="color: #204184";>ACUCERT LAB LLP DRIVE</h4> </center>
       <center> <p class="card-text">
       
        <!-- Trigger the modal with a button -->
         <br>
  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal6">+</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal6" role="dialog">
   <div class="modal-dialog-centered" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body6">
           <br><br><br><br><br><br>
          <p><strong>ACUCERT LAB LLP DRIVE</strong></p>
          <p>More Images</p>
          <img src="{{asset('images/events/llp1.jpg')}}" style="width:60%">
          <br><br><br><br>
          <img src="{{asset('images/events/llp2.jpg')}}" style="width:60%">
          <br><br><br><br>
          <img src="{{asset('images/events/llp3.jpg')}}" style="width:60%">
          <br><br><br><br>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

       </p> 
        </center>
      </div>
    </div>
  
    
   
   </div>

 <br><br>
</div>


</body>




@endsection
