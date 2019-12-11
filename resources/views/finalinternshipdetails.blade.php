@extends('layout.app1')
@section('content')

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
         
         <form method="post" action="{{ route('internship_details') }}">
            {{csrf_field()}}

            <div class="form-group card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
               <div class="card-header">
                  <center><h1>Internship Details</h1></center>
               </div>
            <div class="card-body">
               <div class="form-group col-md-12">

 <div class="row">
              <div class="form-group col-md-6">
                        <label for="email">Email-Id</label>
                        <input type="text" class="form-control" id="email" name="email"  placeholder="Enter Email-Id" >
                     </div>
                     
                     <div class="form-group col-md-6">
                        <label for="Class">Class</label>
                        <input type="text" class="form-control" id="Class" name="Class" 
                         placeholder="Enter your Class" required="">
                     </div>
                  </div>

 <div class="row">
              
                     <div class="form-group col-md-6">
                        <label for="last_name">Company Name</label>
                        <input type="text" class="form-control" id="company" name="company" 
                         placeholder="Company name" required="">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="startdate">Start Date</label>
                        <input type="text" class="form-control" id="startdate" name="startdate" 
                         placeholder="Start Date(DD/MM/YY)" required="">
                     </div>
                  </div>

<div class="row">
                    
                     <div class="form-group col-md-6">
                        <label for="startdate">End Date</label>
                        <input type="text" class="form-control" id="enddate" name="enddate" 
                         placeholder="End Date(DD/MM/YY)" required="">
                     </div>
                  </div>

<div class="row">
                     <div class="form-group col-md-6">
                        <label for="Description">Description</label>
                        <textarea class="form-control" id="Description" name="Description" 
                         placeholder="Enter Description">
                        </textarea>
                     </div>
                   </div>



 <div class="row">
                     <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success shadow mb-5 rounded" id="internship_details_submit"  name="internship_details_submit" style="width: 100%;">Submit</button>
                     </div>
                  </div>

</div>
</div>
</div>
</form>
</div>
</div>
</div>
</body>
@endsection