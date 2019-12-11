@extends('layout.app2')
@section('content')



<body>
<div class="container-fluid">
         <form method="post" action="{{ route('admin_homepage') }}">
            {{csrf_field()}}
            <div class="form-group card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
               <div class="card-header">
                  <center><h1>Add Company Details</h1></center>
               </div>
            <div class="card-body">
               <div class="form-group col-md-12">

                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="c_name">Company Name</label>
                        <input type="text" class="form-control" id="c_name" name="c_name"  required>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="for_dept">For Department</label>
                        <br>
                       <select class="form-control" id="for_dept" name="for_dept">
                           <option>Select Branch</option>
                           <option value="CMPN">CMPN</option>
                           <option value="IT">IT</option>
                           <option value="ETRX">ETRX</option>
                           <option value="EXTC">EXTC</option>
                           <option value="INST">INST</option>
                           <option value="MCA">MCA</option>
                     </select>
                     </div>
                  </div>

                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="email">Email-Id</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="For Recruiter">
                     </div>
                  </div>

                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="intake">Intake</label>
                        <input type="text" class="form-control" id="intake" name="intake" >
                     </div>
                     <div class="form-group col-md-6">
                        <label for="vacancies">Vacancies</label>
                        <input type="text" class="form-control" id="vacancies" name="vacancies" >
                     </div>

                  </div>


                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="minPointer">Minimum Pointer</label>
                        <input type="text" class="form-control" id="minPointer" name="minPointer" >
                     </div>
                     <div class="form-group col-md-6">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="IT/Bank/Private etc">
                     </div>

                  </div>

                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="c_type">Type</label>

                        <select class="form-control" id="c_type" name="c_type">

                           <option value="Dream">Dream</option>
                           <option value="Non-Dream">Non-Dream</option>
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="max_salary">Maximum Salary Offered</label>
                        <input type="text" class="form-control" id="max_salary" name="max_salary" placeholder="Rs per annum">
                     </div>


                  </div>
                  <br>
                  <center>
                  <button type="submit" class="btn btn-success shadow mb-5 rounded" id="submit"  name="submit" style="width: 25%;">Submit</button>
               </center>

               </div>
            </div>
            </div>
         </form>


</div>

<div class="container-fluid">
         <form method="post" action="{{ route('update_stats') }}">
            {{csrf_field()}}
            <div class="form-group card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
               <div class="card-header">
                  <center><h1>Change Statistics</h1></center>
               </div>
            <div class="card-body">

                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="branch">Department</label>

                        <br>
                       <select class="form-control" id="branch" name="branch">
                           <option>Select Branch</option>
                           <option value="CMPN">CMPN</option>
                           <option value="IT">IT</option>
                           <option value="ETRX">ETRX</option>
                           <option value="EXTC">EXTC</option>
                           <option value="INST">INST</option>
                           <option value="MCA">MCA</option>
                     </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="total_students">Total Students</label>
                        <input type="text" class="form-control" id="total_students" name="total_students"  required >
                     </div>
                  </div>

                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="applied_students">Applied Students</label>
                        <input type="text" class="form-control" id="applied_students" name="applied_students"  required >
                     </div>
                     <div class="form-group col-md-6">
                        <label for="for_higher_studies">Students for higher studeies</label>
                        <input type="text" class="form-control" id="for_higher_studies" name="for_higher_studies"  required >
                     </div>
                  </div>


                  <div class="row">
                     <div class="form-group col-md-12">
                        <label for="placed_students">Placed Students</label>
                        <input type="text" class="form-control" id="placed_students" name="placed_students"  required >
                     </div>
                  </div>



                  <center>
                  <button type="submit" class="btn btn-success shadow mb-5 rounded" id="submit"  name="submit" style="width: 25%;">Submit</button>
                  </center>

               </div>
               </div>

               </div>


         </form>










<div class="container-fluid">
         <form method="post" action="{{ route('event_register') }}">
            {{csrf_field()}}
            <div class="form-group card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
               <div class="card-header">
                  <center><h1>Add Event</h1></center>
               </div>
            <div class="card-body">
               <div class="form-group col-md-12">

                  <div class="row">
                     <div class="form-group col-md-12">
                        <label for="event_des">Event Name</label>
                        <input type="text" class="form-control" id="event_name" name="event_name"  required>
                     </div>
                  </div>

                  <div class="row">
                     <div class="form-group col-md-12">
                        <label for="event_name">Event Description</label>
                        <textarea class="form-control" id="event_des" name="event_des" required></textarea>
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col-md-12">
                        <label for="venue">Venue</label>
                        <input type="text" class="form-control" id="venue" name="venue" required></input>
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date"  >
                     </div>
                     <div class="col-md-6">
                        <label for="time">Time </label>
                        <input type="time" class="form-control" id="time" name="time" >
                     </div>
                  </div>

                  <center>
                  <button type="submit" class="btn btn-success shadow mb-5 rounded" id="submit"  name="submit" style="width: 25%;">Submit</button>
                  </center>

               </div>
               </div>

               </div>


         </form>

</div>


</body>



@endsection
