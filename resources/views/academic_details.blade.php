

@extends('layout.app1')
@section('content')
{{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<script src="{{  asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/validation.js') }}"></script> --}}
      


<body>
<div class="container-fluid">
   <div class="row content">
      <div class="col-sm-3" style="padding-left: 7%">
         <div class="list-group form-group" style="max-width: 100%; ">
            <a href="{{ route('student_details') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading">Student <br>Details&nbsp; 
               </h5>
            </a>
            <a href="{{ route('academic_details') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading" style="font-style: italic;">Academic <br>Details &nbsp;                         
               </h5>
            </a>
            <a href="{{ route('upload_resume') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading">Upload <br>Files&nbsp;
               </h5>
            </a>
            <a href="{{ route('final_details') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading">Final<br>Details&nbsp;          
               </h5>
            </a>
             <a href="{{ route('placement_apply') }}" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Company <br>Offers&nbsp;
            </h5>
          </a>
             <a href="{{ route('applied_companies') }}" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Applied <br>Companies&nbsp;
            </h5>
            </a> 
            
            <a href="{{ route('internship_details') }}" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Internship <br>Details&nbsp;
            </h5>
            </a>


         </div>
      </div>
      <div class="col-md-7">
         {{-- Academic Details --}}
         <form method="post" action="{{ route('select_academics') }}">
            {{csrf_field()}}
            <div class="form-group card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
               <div class="card-header">
                  <center><h1>Academic Details</h1></center>
               </div>
            <div class="card-body">
               <div class="form-group col-md-12">
                  
                  <div class="row">
                  <div class="form-group col-md-8">
                                             <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="CourseOption" id="BE" value="BE"  onclick="showDSE(0);"  >
                           <label class="form-check-label" for="BE">BE</label>
                           </div>
                           <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="CourseOption" id="MCA" value="MCA" checked onclick="showDSE(1);">
                           <label class="form-check-label" for="MCA">MCA</label>
                           </div>

                           <div id="dseOption" style="display:none;">
                           <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="CourseOptionBE" id="DSE" value="DSE" >
                           <label class="form-check-label" for="DSE">DSE</label>
                           </div>
                           
                           <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="CourseOptionBE" id="FirstYearAdmission" value="FirstYearAdmission" >
                           <label class="form-check-label" for="FirstYearAdmission">First Year Admission</label>
                           </div>

                           </div>
                           <button class="btn btn-outline-success display-block" type="submit" name="submit" value="Submit">Submit</button>

                           <script> 

                           function showDSE(code) {
                             if(code==0){
                              document.getElementById("dseOption").style.display="block";
                              
                             }
                             else  {
                                document.getElementById("dseOption").style.display="none";
                               }

                             

                           }

                            </script>
                  </div>

              
                    
                  </div>
                  
                  
                
               </div>
            </div>
            </div>
         </form>
      </div>
      <div class="col-sm-2"></div>
   </div>
</div>
</body>
@endsection
