

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
               <h5 class="list-group-item-heading" >Student <br>Details&nbsp; 
               </h5>
            </a>
            <a href="{{ route('academic_details') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading">Academic <br>Details&nbsp;                         
               </h5>
            </a>
            <a href="{{ route('upload_resume') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading">Upload <br>Files&nbsp;
               </h5>
            </a>
            <a href="{{ route('final_details') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading" style="font-style: italic;">Final<br>Details&nbsp;          
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
                  <center><h1>Final Details</h1></center>
               </div>
            <div class="card-body">
                <center><h5>Name</h5></center>
                <div class="row">
                    <div class="col-sm-3"><input type="text" class="form-control" id="last_name" name="last_name" value="" readonly></div>
                    <div class="col-sm-3"><input type="text" class="form-control" id="first_name" name="first_name" value="" readonly></div>
                    <div class="col-sm-3"><input type="text" class="form-control" id="middle_name" name="middle_name" value="" readonly></div>
                    <div class="col-sm-3"><input type="text" class="form-control" id="mother_name" name="mother_name" value="" readonly></div>
               </div>
               <br>
               <div class="row">
                    <div class="col-sm-6">
                        <center><h5>E-mail</h5></center> 
                        <input type="email" class="form-control" id="email" name="email"  readonly>
                    </div>
                    <div class="col-sm-6">
                        <center><h5>Alternate E-mail</h5></center>
                        <input type="email" class="form-control" id="alter_mail" name="alter_mail" value="" readonly>
                    </div>
               </div>
               <br>
               <center><h5>Contact details</h5></center>
               <div class="row">
                    <div class="col-sm-4">
                        <center><h6>Personal</h6></center>
                        <input type="text" class="form-control" id="phone_personal" name="phone_personal" value="" readonly>
                    </div>
                    <div class="col-sm-4">
                        <center><h6>Guardian</h6></center>
                        <input type="text" class="form-control" id="phone-guardian" name="phone-guardian" value="" readonly>
                    </div>
                    <div class="col-sm-4">
                        <center><h6>Parent</h6></center>
                        <input type="text" class="form-control" id="phone-parent" name="phone-parent" value="" readonly>
                    </div>
               </div>
               <br>
               <div class="row">
                    <div class="col-sm-4">
                        <center><h5>Date of Birth</h5></center>
                        <input type="date" class="form-control" id="date" name="date" value="" readonly>
                    </div>
                    <div class="col-sm-4">
                        <center><h5>Blood Group</h5></center>
                        <input type="" class="form-control" id="blood_group" name="bloud_group" value="" readonly>
                    </div>
                    <div class="col-sm-4">
                        <center><h5>Gender</h5></center>
                        <input type="" class="form-control" id="gender" name="gender" value="" readonly>
                    </div>
               </div>
               <br>
               <div class="row">
                    <div class="col-sm-4">
                            <center><h5>UID</h5></center>
                            <input type="text" class="form-control" id="adhar" name="adhar" value="" readonly>
                    </div>
                    <div class="col-sm-4">
                            <center><h5>Shift</h5></center>
                            <input type="text" class="form-control" id="shift" name="shift" value="" readonly>
                    </div>
                    <div class="col-sm-4">
                            <center><h5>Year of joining</h5></center>
                            <input type="number" class="form-control" id="year_of_joining" name="year_of_joining" value="" readonly>
                    </div>
               </div>
               <br>
               <div id="addressblock">
                    <center><h5>Address</h5></center>
                    <input type="text" class="form-control" id="address" name="address" value="" readonly>
                    <br>
                    <center><h5>Correspondence Address</h5></center>
                    <input type="text" class="form-control" id="address-corress" name="address-corress" value="" readonly>
               </div>
               <br>
               <div id="course">
                  <div class="row">
                     <div class="col-sm-6">
                        <center><h5>Course</h5></center>
                        <input type="text" class="form-control" id="course" name="course" value="" readonly>
                     </div>
                     <div class="col-sm-6">
                        <center><h5>DSE/FE</h5></center>
                        <input type="text" class="form-control" id="admtype" name="admtype" value="" readonly>
                     </div>
                  </div>
               </div>
               <br>
               <div id="be_fe">
                  <div class="row">
                     <div class="col-sm-6">
                        <center><h5>SSC</h5></center>
                        <input type="text" class="form-control" id="ssc_fe" name="ssc_fe" value="" readonly>
                     </div>
                     <div class="col-sm-6">
                        <center><h5>HSC</h5></center>
                        <input type="text" class="form-control" id="hsc_fe" name="hsc_fe" value="" readonly>
                     </div>
                  </div>
                  <br>
                  <center><h5>Year Gap</h5></center>
                  <div class="row">
                     <div class="col-sm-4">
                        <center><h6>After 10th</h6></center>
                        <input type="text" class="form-control" id="yg1_fe" name="yg1_fe" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h6>After 12th</h6></center>
                        <input type="text" class="form-control" id="yg2_fe" name="yg2_fe" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h6>Engineering</h6></center>
                        <input type="text" class="form-control" id="yg3_fe" name="yg3_fe" value="" readonly>
                     </div>
                  </div>
                  <br>
                  <center><h5>Special Entry</h5></center>
                  <input type="text" class="form-control" id="sp_en_fe" name="sp_en_fe" value="" readonly>
                  <br>
                  <center><h5>Specially Abled Person</h5></center>
                  <input type="text" class="form-control" id="sp_eb_fe" name="sp_eb_fe" value="" readonly>
                  <button id="sp_eb_cert">View Certificate</button>
                  <br>
                  <div class="row">
                     <div class="col-sm-4">
                        <center><h5>Placement Reg.no</h5></center>
                        <input type="text" class="form-control" id="pl_reg_fe" name="pl_reg_fe" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h5>Facebook Id</h5></center>
                        <input type="text" class="form-control" id="fb_fe" name="fb_fe" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h5>LinkedIn Id</h5></center>
                        <input type="text" class="form-control" id="li_fe " name="li_fe" value="" readonly>
                     </div>
                  </div>
                  <br>
                  <center><h5>C.G.P.A.</h5></center>
                  <div class="row">
                     <div class="col-sm-3">
                        <center><h6>Sem 1</h6></center>
                        <input type="text" class="form-control" id="sem1_fe" name="sem1_fe" value="" readonly>
                     </div>
                     <div class="col-sm-3">
                        <center><h6>Sem 2</h6></center>
                        <input type="text" class="form-control" id="sem2_fe" name="sem2_fe" value="" readonly>
                     </div>
                     <div class="col-sm-3">
                        <center><h6>Sem 3</h6></center>
                        <input type="text" class="form-control" id="sem3_fe" name="sem3_fe" value="" readonly>
                     </div>
                     <div class="col-sm-3">
                        <center><h6>Sem 4</h6></center>
                        <input type="text" class="form-control" id="sem4_fe" name="sem4_fe" value="" readonly>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-sm-3">
                        <center><h6>Sem 5</h6></center>
                        <input type="text" class="form-control" id="sem5_fe" name="sem5_fe" value="" readonly>
                     </div>
                     <div class="col-sm-3">
                        <center><h6>Sem 6</h6></center>
                        <input type="text" class="form-control" id="sem6_fe" name="sem6_fe" value="" readonly>
                     </div>
                     <div class="col-sm-3">
                        <center><h6>Sem 7</h6></center>
                        <input type="text" class="form-control" id="sem7_fe" name="sem7_fe" value="" readonly>
                     </div>
                     <div class="col-sm-3">
                        <center><h6>Sem 8</h6></center>
                        <input type="text" class="form-control" id="sem8_fe" name="sem8_fe" value="" readonly>
                     </div>
                  </div>
                  <br>
                  <center><h5>Average C.G.P.A.</h5></center>
                  <input type="text" class="form-control" id="avg_fe" name="avg_fe" value="" readonly>
                  <br>
                  <center><h5>K.T.s</h5></center>
                  <div class="row">
                     <div class="col-sm-4">
                        <center><h6>Sem 4</h6></center>
                        <input type="text" class="form-control" id="kt4" name="kt4" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h6>Sem 3</h6></center>
                        <input type="text" class="form-control" id="kt5" name="kt5" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h6>Sem 3</h6></center>
                        <input type="text" class="form-control" id="kt6" name="kt6" value="" readonly>
                     </div>
                  </div>
                  <br>
                  <center><h5>Gap Year</h5></center>
                  <div class="row justify-content-center">
                     <div class="col-sm-4">
                        <input type="text" class="form-control" id="gap_year" name="gap_year" value="" readonly>
                     </div>
                  </div>
               </div>
               <div id="be_dse">
                  <div class="row">
                     <div class="col-sm-6">
                        <center><h5>SSC</h5></center>
                        <input type="text" class="form-control" id="ssc_dse" name="ssc_dse" value="" readonly>
                     </div>
                     <div class="col-sm-6">
                        <center><h5>HSC</h5></center>
                        <input type="text" class="form-control" id="hsc_dse" name="hsc_dse" value="" readonly>
                     </div>
                  </div>
                  <br>
                  <center><h5>Year Gap</h5></center>
                  <div class="row">
                     <div class="col-sm-4">
                        <center><h6>After 10th</h6></center>
                        <input type="text" class="form-control" id="yg1_dse" name="yg1_dse" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h6>After 12th</h6></center>
                        <input type="text" class="form-control" id="yg2_dse" name="yg2_dse" value="" readonly>
                     </div>
                     <div class="col-sm-4">  
                        <center><h6>BCA</h6></center>
                        <input type="text" class="form-control" id="yg3_dse" name="yg3_dse" value="" readonly>
                     </div>
                  </div>
                  <br>
                  <center><h5>Special Entry</h5></center>
                  <input type="text" class="form-control" id="sp_en_dse" name="sp_en_dse" value="" readonly>
                  <br>
                  <center><h5>Specially Abled Person</h5></center>
                  <input type="text" class="form-control" id="sp_eb_dse" name="sp_eb_dse" value="" readonly>
                  <button id="sp_eb_cert">View Certificate</button>
                  <br>
                  <div class="row">
                     <div class="col-sm-4">
                        <center><h5>Placement Reg.no</h5></center>
                        <input type="text" class="form-control" id="pl_reg_dse" name="pl_reg_dse" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h5>Facebook Id</h5></center>
                        <input type="text" class="form-control" id="fb_dse" name="fb_dse" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h5>LinkedIn Id</h5></center>
                        <input type="text" class="form-control" id="li_dse" name="li_dse" value="" readonly>
                     </div>
                  </div>
               </div>

               <div id="mca">
                  <div class="row">
                     <div class="col-sm-6">
                        <center><h5>SSC</h5></center>
                        <input type="text" class="form-control" id="ssc_mca" name="ssc_mca" value="" readonly>
                     </div>
                     <div class="col-sm-6">
                        <center><h5>HSC</h5></center>
                        <input type="text" class="form-control" id="hsc_mca" name="hsc_mca" value="" readonly>
                     </div>
                  </div>
                  <br>
                  <center><h5>Year Gap</h5></center>
                  <div class="row">
                     <div class="col-sm-4">
                        <center><h6>After 10th</h6></center>
                        <input type="text" class="form-control" id="yg1_mca" name="yg1_mca" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h6>After 12th</h6></center>
                        <input type="text" class="form-control" id="yg2_mca" name="yg2_mca" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h6>Engineering</h6></center>
                        <input type="text" class="form-control" id="yg3_mca" name="yg3_mca" value="" readonly>
                     </div>
                  </div>
                  <br>
                  <center><h5>Special Entry</h5></center>
                  <input type="text" class="form-control" id="sp_en_mca" name="sp_en_mca" value="" readonly>
                  <br>
                  <center><h5>Specially Abled Person</h5></center>
                  <input type="text" class="form-control" id="sp_eb_mca" name="sp_eb_mca" value="" readonly>
                  <button id="sp_eb_cert">View Certificate</button>
                  <br>
                  <div class="row">
                     <div class="col-sm-4">
                        <center><h5>Placement Reg.no</h5></center>
                        <input type="text" class="form-control" id="pl_reg_mca" name="pl_reg_mca" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h5>Facebook Id</h5></center>
                        <input type="text" class="form-control" id="fb_mca" name="fb_mca" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h5>LinkedIn Id</h5></center>
                        <input type="text" class="form-control" id="li_mca" name="li_mca" value="" readonly>
                     </div>
                  </div>
                  <center><h5>C.G.P.A.</h5></center>
                  <div class="row">
                     <div class="col-sm-4">
                        <center><h6>Sem 1</h6></center>
                        <input type="text" class="form-control" id="sem1_mca" name="sem1_mca" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h6>Sem 2</h6></center>
                        <input type="text" class="form-control" id="sem2_mca" name="sem2_mca" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h6>Sem 3</h6></center>
                        <input type="text" class="form-control" id="sem3_mca" name="sem3_mca" value="" readonly>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-sm-4">
                        <center><h6>Sem 4</h6></center>
                        <input type="text" class="form-control" id="sem4_mca" name="sem4_mca" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h6>Sem 5</h6></center>
                        <input type="text" class="form-control" id="sem5_mca" name="sem5_mca" value="" readonly>
                     </div>
                     <div class="col-sm-4">
                        <center><h6>Sem 6</h6></center>
                        <input type="text" class="form-control" id="sem6_mca" name="sem6_mca" value="" readonly>
                     </div>
                  </div>
                  <br>
                  <center><h5>Average C.G.P.A.</h5></center>
                  <input type="text" class="form-control" id="avg_mca" name="avg_mca" value="" readonly>
                  <br>
               </div>

            </div>
            <div class="row justify-content-center">
               <div class="col-sm-4"><button style="width:100%" class="btn btn-success shadow mb-5 rounded" id="prev">Previous</button></div>
               <div class="col-sm-4"><button style="width:100%" class="btn btn-success shadow mb-5 rounded" id="next">Next</button></div>
            </div>
            </div>
         </form>
      </div>
      <div class="col-sm-2"></div>
   </div>
</div>
</body>
@endsection
