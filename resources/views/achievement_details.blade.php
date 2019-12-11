@extends('layout.app1')
@section('content')
{{-- 
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<script src="{{  asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/validation.js') }}"></script> --}}
<body>
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3" style="padding-left: 7%">
        <div class="list-group form-group" style="max-width: 100%;">
          <a href="{{ route('student_details') }}" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Student <br>Details&nbsp;
              {{-- @if($user[0]->is_personal_completed == 1)
              <i class="fas fa-check-circle" style="float: right; padding-right: 9.2%;"></i>&nbsp;
              @else
              <i class="fas fa-times-circle" style="float: right; padding-right: 9.2%;"></i>&nbsp;
              @endif --}}
            </h5>
          </a>
          <a href="{{ route('academic_details') }}" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Academic <br>Details&nbsp;
              {{-- @if($user[0]->is_academic_completed == 1)
              <i class="fas fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
              @else
              <i class="fas fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
              @endif --}}            
            </h5>
          </a>
          <a href="{{ route('achievement_details') }}" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Achievement <br>Details&nbsp;
              {{-- @if($user[0]->is_family_details_completed == 1)
              <i class="fas fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
              @else
              <i class="fas fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
              @endif --}}
            </h5>
          </a>
           <a href="{{ route('placement_apply') }}" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Placement&nbsp;
              {{-- @if($user[0]->is_family_details_completed == 1)
              <i class="fas fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
              @else
              <i class="fas fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
              @endif --}}
            </h5>
          </a>
          {{-- 
          <a href="" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Applied Companies&nbsp;
              <i class="fas fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
              <i class="fas fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
            </h5>
          </a>
          --}}
          {{-- <a style="height: 0.5rem">&nbsp;</a>
          <a href="" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Student Achievement&nbsp;
            </h5>
          </a>
          <a href="" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Student Alumni&nbsp;
            </h5>
          </a>
          --}}
        </div>
      </div>
      <div class="col-md-8">
        {{-- Achievement Details --}}
        <form method= "post" action="{{ route('achievement_details') }}">
          {{csrf_field()}}
          <div class="form-group card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
            <div class="card-header">
              <center>
                <h1>Achievement Details</h1>
              </center>
            </div>
            <div class="card-body">
              <div class="form-group col-md-12">
                <div class="row">
                  <div class="form-group col-md-6 col-sm-12">
                    <label for="email">Email-Id</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user[0]->email }}" placeholder="Enter Email-Id" disabled="">
                  </div>
                  <div class="form-group col-md-6 col-sm-12">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" value="" placeholder="Enter Category">
                  </div>
                </div>
                {{-- 
                <div class="row">
                  <div class="form-group col-md-6 col-sm-12">
                    <label>Date Of Birth</label>
                  </div>
                </div>
                --}}
                <div class="row">
                  <div class="form-group col-md-6 col-sm-12">
                    <label for="level">Level</label>
                    <input type="text" class="form-control" id="level" name="level" value="" placeholder="Enter level">
                  </div>
                  <div class="form-group col-md-6 col-sm-12">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="" placeholder="Enter Type">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6 col-sm-12">
                    <label for="ach_year">Achievement Year</label>
                    <input type="text" class="form-control" id="ach_year" name="ach_year" value="" placeholder="Achievement Year">   
                    {{-- <script type="text/javascript">
                      var dt = new Date();
                      var year = 1990;
                      var till = dt.getYear() + 1899;
                      var options = "";
                      var x = {{ $year}};
                      for(var y=till; y>=year; y) {
                         if(y==x) {
                               options += "<option value="+y+" selected>"+ y +"</option>";   
                         }
                         else {
                               options += "<option value="+y+">"+ y +"</option>";
                         }
                      }
                      document.getElementById("dob_year").innerHTML = options;
                    </script> --}}
                  </div>
                  <div class="form-group col-md-6 col-sm-12">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="" placeholder="Enter Description">
                  </div>
                </div>
                {{--  
                <div class="row">
                  <div class="form-group col-md-8">
                    <label for="certi_path">Certificate</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="certi_path">Upload</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="certi_path" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="certi_path">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                --}} 
                {{-- 
                <div class = "row">
                  <div class="form-group col-md-6 col-sm-12">
                    <label for="check_adhar">write your comment?</label><br> 
                    <input type="checkbox" name="terms" id="terms" value="terms"  />Terms & sondition
                  </div>
                  <div class="form-group col-md-6 col-sm-12">
                    <textarea rows="4" cols="40" id = "comments" name = "comments" placeholder="write your comments"></textarea>
                  </div>
                </div>
                --}}
                <div class="row">
                  <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-success shadow mb-5 rounded" id="achievement_details_submit"  name="achievement_details_submit" style="width: 100%;">Add Achievement</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
            <div class="card-header">
              <center>
                <h1>Achievement Details</h1>
              </center>
            </div>
            <div class="card-body">
              <table class="table table-bordered" style="border: 2px solid;">
                <thead>
                  <th>Sr. No.</th>
                  <th>Category</th>
                  <th>Level</th>
                  <th>Type</th>
                  <th>Achievement Year</th>
                  <th>Description</th>
                </thead>
                <tbody>
                  @foreach($user as $key=>$users)
                  <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $users->category }}</td>
                  <td>{{ $users->level }}</td>
                  <td>{{ $users->type }}</td>
                  <td>{{ $users->ach_year }}</td>
                  <td>{{ $users->description}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>
</body>
@endsection