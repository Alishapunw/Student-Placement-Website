@extends('layout.app1')
@section('content')
<head>
    <script>
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<div class="container-fluid">
   <div class="row content">
      <div class="col-sm-3" style="padding-left: 7%">
         <div class="list-group form-group" style="max-width: 100%; ">
            <a href="{{ route('student_details') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading" style="font-style: italic;">Student <br>Details&nbsp; 
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
         
         <form method="post" action="{{ route('student_details') }}">
            {{csrf_field()}}
            <div class="form-group card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
               <div class="card-header">
                  <center><h1>Student Details</h1></center>
               </div>
            <div class="card-body">
               <div class="form-group col-md-12">

               <!-- <div class="row">

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                        <label class="input-group-text" for="courseName">Course Name</label>
                  </div>
                  <select class="custom-select" id="courseName" onchange="courseSelected();">
                        <option selected>Choose...</option>
                        <option value="1">BE (First Year Admission)</option>
                        <option value="2">BE (DSE)</option>
                        <option value="3">MCA</option>
                  </select>
             </div> 

               </div> -->

                  <div class="row">
              
                     <div class="form-group col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user[0]->first_name }}" placeholder="Enter your first name" required="">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="middle_name">Middle Name</label>
                        <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ $user[0]->middle_name }}" placeholder="Enter your middle name" required="">
                     </div>
                  </div>
                  <div class="row">
              
                     <div class="form-group col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user[0]->last_name }}" placeholder="Enter your last name" required="">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="mother_name">Mother's Name</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{ $user[0]->mother_name }}" placeholder="Mother's name" required="">
                     </div>
                  </div>
                  <div class="row">
                    
                     <div class="form-group col-md-6">
                        <label for="email">Email-Id</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $user[0]->email }}" placeholder="Enter Email-Id" readonly>
                     </div>

                     <div class="form-group col-md-6">
                        <label for="alter_mail">Alternate Email-Id</label>
                        <input type="email" class="form-control" id="alter_mail"  name="alter_mail" value="{{ $user[0]->alter_mail }}" placeholder="Enter alternate Email-Id" required="">
                     </div>
                  </div>
<hr>
                  <p><b>Contact No.</b></p>
                  <div class="row">
                   
                    <div class="form-group col-md-4">
                    <label for="phone_personal">Personal</label>
                    <input type="text" class="form-control" name="phone_personal" maxlength="10" onkeypress="return isNumber(event)" id="phone_personal" value="{{ $user[0]->phone_personal }}" required>
                    </div>

                    <div class="form-group col-md-4">
                    <label for="phone_guardian">Guardian</label>
                    <input type="text" class="form-control" name="phone_guardian" maxlength="10" onkeypress="return isNumber(event)" value="{{ $user[0]->phone_guardian }}" id="phone_guardian">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="phone_parent">Parent's(any one)</label>
                    <input type="text" class="form-control" name="phone_parent" maxlength="10" onkeypress="return isNumber(event)" value="{{ $user[0]->phone_parent }}" id="phone_parent" >
                    </div>

                  </div>  

<hr>

                <!-- <p><b>Internship Details</b></p>
                <div class="row">
                     
                     <div class="form-group col-md-12" id="addInterDetails">
                     
                        <button type="button" onclick="addInternshipFields();" name="addInternship" id="addInternship" class="btn btn-outline-success">+</button>

                     </div>
                
                </div>
                  <div class="row">
                    <div class="form-group col-md-12" id="internShip">
                        <script>
                        function addInternshipFields(){
                         
                       var parent=document.getElementById("internShip");
                              var hr= document.createElement("hr");
                              // hr.setAttribute("style","height:2px; background-color:red;");
                             

                        var grandParent=document.createElement("div");
                              grandParent.setAttribute("class","card border border-danger"); 
                              grandParent.setAttribute("style","margin-bottom:15px;"); 


                              grandParent.appendChild(hr);
                          
                              var i=Math.round(Math.random()*3000);


                            var div=document.createElement("div");
                                    div.setAttribute("class","form-group col-md-12")
                                            var  cancelBtn=document.createElement("buttton");
                                                    cancelBtn.setAttribute("onclick","deleteInternship(this)");
                                                    cancelBtn.setAttribute("class","btn btn-outline-danger");
                                                    cancelBtn.innerHTML="Cancel";
                                                    div.appendChild(cancelBtn);
                             
                                          

                                                    grandParent.appendChild(div);
                            
                                var div=document.createElement("div");
                                    div.setAttribute("class","form-group col-md-12")
                                            var  organisationLabel=document.createElement("label");
                                                    organisationLabel.setAttribute("for","orgName");
                                                    organisationLabel.innerHTML="Organisation:";
                                                    div.appendChild(organisationLabel);

                                            var orgInput=document.createElement("input");
                                                orgInput.setAttribute("type","text");
                                                orgInput.setAttribute("class","form-control");  
                                                div.appendChild(orgInput);

                                                    grandParent.appendChild(div);
                                                   
                                                

                                 var div=document.createElement("div");
                                     div.setAttribute("class","form-group col-md-12")
                                            var  duration=document.createElement("label");
                                                    duration.setAttribute("for","duration");
                                                    duration.innerHTML="Duration(Start date-End Date):";
                                                    div.appendChild(duration);

                                            var durInput=document.createElement("input");
                                                durInput.setAttribute("type","text");
                                                durInput.setAttribute("class","form-control");  
                                                div.appendChild(durInput);

                                                grandParent.appendChild(div);
                                                 

                                 var div=document.createElement("div");
                                     div.setAttribute("class","form-group col-md-12")
                                            var  domain=document.createElement("label");
                                                    domain.setAttribute("for","domain");
                                                    domain.innerHTML="Domain:";
                                                    div.appendChild(domain);

                                            var domInput=document.createElement("input");
                                                domInput.setAttribute("type","text");
                                                domInput.setAttribute("class","form-control");  
                                                div.appendChild(domInput);

                                                grandParent.append(div);
                                                

                                  var div=document.createElement("div");
                                     div.setAttribute("class","form-group col-md-12")
                                          
                                       var inDiv=document.createElement("div");
                                           inDiv.setAttribute("class","form-check form-check-inline");

                                            var typeInput=document.createElement("input");
                                                typeInput.setAttribute("type","radio");
                                                typeInput.setAttribute("name","typeOfInternship"+i);
                                                typeInput.setAttribute("value","online");
                                                typeInput.setAttribute("id","online");
                                                typeInput.setAttribute("class","form-check-input");
                                                 
                                                inDiv.appendChild(typeInput);
                                               
                                                


                                            var  Type=document.createElement("label");
                                                    Type.setAttribute("for","Type");
                                                    Type.innerHTML="Online";
                                                    Type.setAttribute("class","form-check-label");
                                                    inDiv.appendChild(Type);
                                                    div.appendChild(inDiv); 

                                        var inDiv=document.createElement("div");
                                           inDiv.setAttribute("class","form-check form-check-inline");

                                            var typeInput=document.createElement("input");
                                                typeInput.setAttribute("type","radio");
                                                typeInput.setAttribute("class","form-check-input");
                                                typeInput.setAttribute("name","typeOfInternship"+i++);
                                                typeInput.setAttribute("value","offline");
                                                typeInput.setAttribute("id","offline");
                                                
                                                inDiv.appendChild(typeInput); 
                                                div.appendChild(inDiv);
                                                


                                            var  Type=document.createElement("label");
                                                    Type.setAttribute("for","Type");
                                                    Type.innerHTML="Offline";
                                                    Type.setAttribute("class","form-check-label");
                                                    inDiv.appendChild(Type);
                                                    div.appendChild(inDiv);
                                                       
                                                    grandParent.appendChild(div);
                                                    grandParent.appendChild(document.createElement("br"));

                                            parent.appendChild(grandParent);        
                                           

                        }


                        function deleteInternship($this){
                           console.log($this.parentElement.parentElement.parentElement.removeChild($this.parentElement.parentElement));
                        }



                           

                        </script>

                     
                    </div>
                  </div>  
<hr> -->



                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="dob_year"><font style="color: #dc3545;">(DOB)</font>&nbsp;Year</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ $user[0]->dob}}" required="">
                        
                     </div>
                     <div class="form-group col-md-6">
                        <label for="blood_group">Blood Group</label>
                            <div class="input-group">
                                    <select class="form-control"  id="blood_group" name="blood_group"  >
                                      <option selected>{{ $user[0]->blood_group }}</option>
                                      <option value="O-">O-</option>
                                      <option value="O+">O+</option>
                                      <option value="A-">A-</option>
                                      <option value="A+">A+</option>
                                      <option value="B-">B-</option>
                                      <option value="B+">B+</option>
                                      <option value="AB-">AB-</option>
                                      <option value="AB+">AB+</option>
                                     </select>
                            </div>
                     </div>
                  
                  </div>
                     <div class="row">
                     <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                            <div class="input-group">
                                   
                                    <select class="form-control"  id="gender" name="gender"  >

                                      <option selected>{{ $user[0]->gender }}</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                     </select>
                            </div>


                     </div>
                     <div class="form-group col-md-6">
                        <label for="adhar">UID(Aadhar Number)</label>
                        <input type="text" class="form-control" id="adhar" name="adhar" onkeypress="return isNumber(event)" maxlength="12" value="{{ $user[0]->uid }}" placeholder="Enter UID" required="">
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="shift">Shift</label>
                        <div class="input-group">
                                   
                                   <select class="form-control"  id="shift" name="shift"   >
                                         <option selected>{{ $user[0]->shift }}</option>
                                         <option value="Morning">Morning</option>
                                      <option value="Evening">Evening</option>
                                        
                                    </select>
                           </div>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="year_of_joining">Year of Joining </label>
                        <input type="number" class="form-control" min="2017" max=<?php echo date("Y"); ?> id="year_of_joining" name="year_of_joining" value="{{ $user[0]->year_of_joining }}" placeholder="Enter year of joining" required="">
                     </div>
                  </div>
                  
                  <hr>
                  <b><p>Address</p></b>
                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="address_line_1">Address Line 1</label>
                        <input type="text" class="form-control" id="address_line_1" name="address_line_1" value="{{ $user[0]->address_line_1 }}" placeholder="Flat no./Apartment/Road" required="">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="address_line_2">Address Line 2 </label>
                        <input type="text" class="form-control" id="address_line_2" name="address_line_2" value="{{ $user[0]->address_line_2 }}" placeholder="Area/City" required="">
                     </div>
                  </div>


                  <div class="row"> 
                    <div class="form-group col-md-12">
                    <label for="address_corres">Address Of Correspondence</label>
                    <input type="text" class="form-control" name="address_corres" value="{{ $user[0]->address_corres }}" id="address_corres">
                    </div>
                  </div>
                  


                  @if($user[0]->student_details_completed == 1)
                  <div class="row">
                     <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success shadow mb-5 rounded" id="student_details_submit"  name="student_details_submit" style="width: 100%;" disabled>Continue</button>
                     </div>
                  </div>
                  @else
                  <div class="row">
                     <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success shadow mb-5 rounded" id="student_details_submit"  name="student_details_submit" style="width: 100%;" >Continue</button>
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
