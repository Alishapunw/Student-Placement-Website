

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
         {{-- Academic Details  --}}
         <form method="post" action="{{ route('academic_details') }}">
            {{csrf_field()}}
            <div class="form-group card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
               <div class="card-header">
                  <center><h1>Academic Details - MCA</h1></center>
               </div>
            <div class="card-body">
               <div class="form-group col-md-12">
                  


            
               <div class="row">
                     <div class="form-group col-md-12">
                        <label for="email">Email-Id</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user[0]->email }}" placeholder="Enter Email-Id" readonly>
                     </div>
                  </div>      
                  
            <div class="row">
               <div class="form-group col-md-6">
                    
                     <label for="ssc" style="display:block;">SSC </label>
                           <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="sscOptions" checked id="percentage" value="%">
                                 <label class="form-check-label" for="percentage">%</label>
                                 </div>

                                 <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="sscOptions" id="cgpa" value="CGPA out of 10">
                                 <label class="form-check-label" for="cgpa">CGPA</label>

                           </div>
                     <input type="number" class="form-control" id="ssc" name="ssc" value="" placeholder=" "  >
                     
               </div>


<!-- hsc -->
               <div class="form-group col-md-6">
                    
                    <label for="hsc" style="display:block;">HSC </label>
                          <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hscOptions" checked id="percentage" value="%">
                                <label class="form-check-label" for="percentage">%</label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hscOptions" id="cgpa" value="CGPA out of 10">
                                <label class="form-check-label" for="cgpa">CGPA</label>

                          </div>
                          
                    <input type="number" class="form-control" id="hsc" name="hsc" value="" placeholder=" "  >
                   
                    
              </div>


            </div>


           

            <hr>
            <b> <p>Year Gap</p></b>
            <div class="row">
            
                     <div class="form-group col-md-4">
                       
                       <label for="">After 10th</label>

                       <input type="number" class="form-control" id="yearGap" name="yearGap" value="" placeholder="">
                    </div>
            
                    <div class="form-group col-md-4">
                       
                       <label for="">After 12th</label>

                       <input type="number" class="form-control" id="yearGap" name="yearGap" value="" placeholder="">
                    </div>

                    <div class="form-group col-md-4">
                       
                       <label for="">BCA</label>

                       <input type="number" class="form-control" id="yearGap" name="yearGap" value="" placeholder="">
                    </div>
                    
            </div>
            <hr>
            <div class="row">
               
               <div class="form-group col-md-12">
                      <b> <p> Special Entry</p></b>
                        
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="specialEntry" id="noSpecialEntry" value="noSpecialEntry" checked onclick="disableTextArea();">
                                <label class="form-check-label" for="noSpecialEntry" onclick="disableTextArea();">No</label>
                         </div>
                       

                         <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="specialEntry" id="transfer" value="transfer"  onclick="disableTextArea();">
                                <label class="form-check-label" for="transfer" onclick="disableTextArea();">Transfer</label>
                         </div>
                       
                         <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="specialEntry" id="another" onclick="enableTextArea();" value="another">
                                <label class="form-check-label" for="another" onclick="enableTextArea();">Another Reason</label>

                                 <textarea  class="form-control" disabled name='anotherReason' id="anotherReason" rowspan="5" placeholder="Specify reason for Special Entry "></textarea>

                                 <script> function enableTextArea(){ $("#anotherReason").removeAttr("disabled").focus(); }
                                          function disableTextArea(){
                                             $("#anotherReason").val('');
                                              $("#anotherReason").attr("disabled",""); } 
                                </script>
                               
                          </div>


               </div>
             
            </div>
            <hr>         
            


            <!-- specially abled children -->

            <div class="row">
               
               <div class="form-group col-md-12">
                      <b> <p> Specially Person</p></b>
                        
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="speciallyAbled" id="noSpeciallyAbled" value="noSpeciallyAbled" checked onclick="disableSpecialTextArea();">
                                <label class="form-check-label" for="noSpeciallyAbled" onclick="disableTextArea();">No</label>
                         </div>
                       

                      
                       
                         <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="speciallyAbled" id="speciallyAbled" value="speciallyAbled"  onclick="enableSpecialTextArea();">
                                <label class="form-check-label" for="speciallyAbled" onclick="enableSpecialTextArea();">Yes</label>
                                </div>
                                 <textarea  class="form-control " disabled name='reasonSpeciallyAbled' id="reasonSpeciallyAbled" rowspan="5" placeholder="Describe"></textarea>

                                 <script> function enableSpecialTextArea(){
                                     $("#reasonSpeciallyAbled").removeAttr("disabled").focus();
                                     $("#uploadSpecialCerti").attr("disabled",false);


                                      }
                                          function disableSpecialTextArea(){
                                             $("#reasonSpeciallyAbled").val('');
                                             $("#reasonSpeciallyAbled").attr("disabled",""); 
                                             $("#uploadSpecialCerti").attr("disabled",true);
                                             } 
                                </script>
                        
               <br>
               <input type="button" class="btn btn-outline-success" id="uploadSpecialCerti" disabled=true value="Upload Certificate">
               </div>
               
            </div>
            <hr>  

            <!-- placement number -->
            <div class="row">
                  <div class="col-md-12">
                  <p> Placement Reg. No. </p>
                 
                  <input type="text" class="form-control" name="prn" id="prn">
                  </div>
            </div>
            
<hr>

            <div class="row">
                  <div class="col-md-6">
                  <p>Facebook id link </p>
                 
                  <input type="text" class="form-control" name="fb" id="fb">
                  </div>

                  <div class="col-md-6">
                  <p>LinkedIn id link </p>
                 
                  <input type="text" class="form-control" name="fb" id="fb">
                  </div>

            </div>
            <hr>
            
        
@if(0)
 <!-- put special entries for dse -->
 
@else 
                  
                  {{-- 
                  <div class="row">
                     <div class="form-group col-md-6">
                        <label>Date Of Birth</label>
                     </div>
                  </div> --}}
                  
                  <div class="row">
                     <div class="form-group col-md-3">
                        <label for="sem1_cgpa">Sem 1 CGPA</label>
                        <input type="number" class="form-control" id="sem1_cgpa" name="sem1_cgpa" value="{{ $user[0]->sem1_cgpa }}" placeholder="Enter Sem 1 CGPA">
                     </div>
                     <div class="form-group col-md-3">
                        <label for="sem2_cgpa">Sem 2 CGPA</label>
                        <input type="number" class="form-control" id="sem2_cgpa" name="sem2_cgpa" value="{{ $user[0]->sem2_cgpa }}" placeholder="Enter Sem 2 CGPA">
                     </div>

                     <div class="form-group col-md-3">
                        <label for="sem3_cgpa">Sem 3 CGPA</label>
                        <input type="number" class="form-control" id="sem3_cgpa" name="sem3_cgpa" value="{{ $user[0]->sem3_cgpa }}"     placeholder="Enter Sem 3 CGPA" required="">
                     </div>


                     <div class="form-group col-md-3">
                        <label for="sem4_cgpa">Sem 4 CGPA</label>
                        <input type="number" class="form-control" id="sem2_cgpa" name="sem4_cgpa" value="{{ $user[0]->sem4_cgpa }}" placeholder="Enter Sem 4 CGPA" required="">
                     </div>

                  </div>

                  <div class="row">
                     <div class="form-group col-md-3">
                        <label for="sem5_cgpa">Sem 5 CGPA</label>
                        <input type="number" class="form-control" id="sem1_cgpa" name="sem1_cgpa" value="" placeholder="Enter Sem 5 CGPA">
                     </div>
                     <div class="form-group col-md-3">
                        <label for="sem6_cgpa">Sem 6 CGPA</label>
                        <input type="number" class="form-control" id="sem2_cgpa" name="sem2_cgpa" value="" placeholder="Enter Sem 6 CGPA">
                     </div>

                  
                  <div class="row">
                    
                     <div class="form-group col-md-8">
                        <label for="avg_cgpa" >Average CGPA</label>
                        <input type="text" class="form-control" id="avg_cgpa" name="avg_cgpa" value="{{ $user[0]->avg_cgpa }}" placeholder="Enter Average CGPA" required="">
                     </div>
                  </div>
                  
                  <!-- <div class="row">
                     <div class="form-group col-md-4">
                        <label for="gap">Gap Year</label>
                        <input type="text" class="form-control" id="gap" name="gap" value="{{ $user[0]->gap}}" placeholder="Enter gap year">
                     </div>
                     
                  </div> -->
                  
               
                  
                  {{-- <div class = "row">
                     <div class="form-group col-md-6">
                        <label for="check_adhar">write your comment?</label><br> 
                        <input type="checkbox" name="terms" id="terms" value="terms"  />Terms & sondition
                        
                     </div>
                      <div class="form-group col-md-6">
                        <textarea rows="4" cols="40" id = "comments" name = "comments" placeholder="write your comments"></textarea>
                     </div>
                  </div> --}}
                     </div>
                  <div class="row">
                     <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success shadow mb-5 rounded col-md-12" 
                        id="academic_details_submit"  name="academic_details_submit" style="width: 100%;">Continue</button>
                     </div>
                  </div>
  @endif                
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
