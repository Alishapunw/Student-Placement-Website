@extends('layout.app')
@section('content')
{{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<script src="{{  asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/validation.js') }}"></script> --}}
<head>
 {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  --}}
  <link href ="{{asset('css/team.css')}}" rel="stylesheet">
 
<style>

.row-flex{
    display:flex;
    flex-wrap: nowrap;
    justify-content: space-evenly;
    width: 75%;
   
    }

    div.gallery {
        color:#204184;
  align-content: center;

}
</style> 


</head>   


<body>
<br>
<br>
<br>
<div class="container-fluid">
      
      <div class="container">
        <br><br><br>
         <p><strong><h2 style="text-align: center; color:#204184;">The Training &amp; Placement Cell</h2></strong></p>
        <br>
        <!--<h4><li><strong>Training &amp; Placement Officer: </strong>Nagananda A.</li></h4>-->
        <div class="row">
          
          <div class="column" >
          <div class="card">
            <img class="card-img-top" src="images/Nagananda_Sir.jpg"  alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><strong>Nagananda A.</strong><br>Training & Placement <br>Officer</p>
            </div>
          </div>
        </div>
        <!--<h4><li><strong>Deputy Training &amp; Placement Officer: </strong> Dashrath Mane</li></h4>-->
        <div class="column" >
            <div class="card">
              <img class="card-img-top" src="images/DashrathMane2.jpg"  alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><strong>Dashrath Mane</strong><br>Deputy Training & Placement Officer</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
</div>
        <br><br>
        <div class="container" style="text-align: center;">
          <p><strong><h4 style='color:#204184;'>Placement In-Charges</h4></strong></p>
        </div>
        <div class="container" style="text-align:center">
          <div class="row">
            <!--<li>Mrs. Sarika Kuhikar (Electronics Engineering)</li>-->
            <div class="column">
              <div class="card">
                <img class="card-img-top" src="images/SarikaKuhikar2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><strong>Mrs. Sarika Kuhikar </strong><br>Electronics Engineering</p>
                </div>
              </div>
            </div>
            <!--<li>Mrs. Indu Dokare (Computer Engineering)</li>-->
            <div class="column">
              <div class="card">
                <img class="card-img-top" src="images/indu_mam2.jpg"  alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><strong>Mrs. Indu Dokare </strong><br>Computer Engineering</p>
                </div>
              </div>
            </div>
            <!--<li>Mr. Prasad Godse (Instrumentation)</li>-->
            <div class="column">
              <div class="card">
                <img class="card-img-top" src="images/Mr.Prasad K Godse2.jpg"  alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><strong>Mr. Prasad Godse </strong><br>Instrumentation</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!--<li>Dr. (Mrs.) Ranjan Bala Jain (Electronics &amp; Telecommunication)</li>-->
            <div class="column">
              <div class="card">
                <img class="card-img-top" src="images/Ranjan_Mam2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><strong>Dr. Ranjan Bala Jain </strong><br>Electronics & Telecommunication</p>
                </div>
              </div>
            </div>
            <!--<li>Mrs. Vidya Poojari (Information Technology)</li>-->
            <div class="column">
              <div class="card">
                <img class="card-img-top" src="images/Vidya Pujari2.jpg"  alt="Card image cap">
                <div class="card-body">
                  <p class="card-text" ><strong>Mrs. Vidya Poojari</strong><br>Information Technology</p>
                </div>
              </div>
            </div>
            <!--<li>Mr. Ramesh Solanki (Masters of Computer Application)</li>-->
            <div class="column">
              <div class="card">
                <img class="card-img-top" src="images/RameshSolanki2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><strong>Mr. Ramesh Solanki </strong><br>Masters of Computer Application</p>
                </div>
              </div>
            </div>
            
          </div>

        </div>
        <!--<div class="container" style="text-align: center;">
          <p><strong><h4 style='color:#204184;'>Website Team</h4></strong></p>
        </div>
        <div class="container" style="text-align:center">
            <div class="row">
              
              <div class="column" >
              <div class="card">
                <img class="card-img-top" src="images/Nagananda_Sir.jpg"  alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><strong>Mrs. Priya RL</strong><br>Team Mentor</p>
                </div>
              </div>
            </div>
            
            
              
            </div>
            <div class="row">
          
              <div class="col-md-2" >
              <div class="card">
                <img class="card-img-top" src="images/Nagananda_Sir.jpg"  alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><strong>Kunal Bathija</strong></p>
                </div>
              </div>
            </div>
            <div class="col-md-2" >
              <div class="card">
                <img class="card-img-top" src="images/Nagananda_Sir.jpg"  alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><strong>Kuldeep Singh</strong></p>
                </div>
              </div>
            </div>
        
            <div class="col-md-2" >
            <div class="card">
              <img class="card-img-top" src="images/Nagananda_Sir.jpg"  alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><strong>Dhanashree Shetty</strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-2" >
            <div class="card">
              <img class="card-img-top" src="images/Nagananda_Sir.jpg"  alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><strong>Gayatri Patil</strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-2" >
            <div class="card">
              <img class="card-img-top" src="images/Nagananda_Sir.jpg"  alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><strong>Alisha Punwani</strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="column" >
          <div class="card">
            <img class="card-img-top" src="images/Nagananda_Sir.jpg"  alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><strong>Abhay Tiwari</strong></p>
            </div>
          </div>
        </div>
        <div class="column" >
          <div class="card">
            <img class="card-img-top" src="images/Nagananda_Sir.jpg"  alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><strong>Aditya Raute</strong></p>
            </div>
          </div>
        </div>
      </div>-->
      
      <center><h6 style="color:#204184;">Website team</h6><font style="color:#204184;">Guided by Mrs. Priya R.L.</font> 
      <br>
      <br>
      <div class="row-flex">
          
          <div class="gallery">
              <p>Kunal Bathija</p>
          </div>
          <div class="gallery">
              <p>Gayatri Patil</p>
          </div>
          <div class="gallery">
              <p>Kuldeep Singh</p>
          </div>
          <div class="gallery">
              <p>Dhanashree Shetty</p>
          </div>
          <div class="gallery">
              <p>Aditya Raute</p>
          </div>
          <div class="gallery">
              <p>Abhay Tiwari</p>
          </div>
          <div class="gallery">
              <p>Alisha Punwani</p>
          </div>
    
    
        </div>
        </center>
        
             <!--<div class="container">
                
                <p><h6 style="color:#204184;">Website team</h6></p>
                <font>Guided by Mrs. Priya R.L.</font> 
                <ul type="square">
                    <li>Kunal Bathija</li>
                    <li>Kuldeep Singh</li>
                    <li>Gayatri Patil</li>
                    <li>Dhanashree Shetty</li>
                    <li>Abhay Tiwari</li>
                    <li>Aditya Raute</li>
                    <li>Alisha Punwani</li>
                </ul>
                
            </div> -->
          </div>
</body>
@endsection
