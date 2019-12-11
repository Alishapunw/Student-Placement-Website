@extends('layout.app')
@section('content')
{{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<script src="{{  asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/validation.js') }}"></script> --}}
      


<body>
<div class="container-fluid">
   <div class="row content">
      <div class="col-sm-3" style="padding-left: 7%">
         <div class="list-group form-group" style="max-width: 100%; padding-top: 120px;">
            <a href="{{ route('student_details') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading">Student Details&nbsp;
                  {{-- @if($user[0]->is_personal_completed == 1)
                  <i class="fas fa-check-circle" style="float: right; padding-right: 9.2%;"></i>&nbsp;
                  @else
                  <i class="fas fa-times-circle" style="float: right; padding-right: 9.2%;"></i>&nbsp;
                  @endif --}}
               </h5>
            </a>
            <a href="{{ route('academic_details') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading">Academic Details&nbsp;
                  {{-- @if($user[0]->is_academic_completed == 1)
                  <i class="fas fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
                  @else
                  <i class="fas fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
                  @endif --}}            
               </h5>
            </a>
            <a href="{{ route('achievement_details') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading">Achievement Details&nbsp;
                  {{-- @if($user[0]->is_family_details_completed == 1)
                  <i class="fas fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
                  @else
                  <i class="fas fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
                  @endif --}}
               </h5>
            </a>
            {{-- <a href="" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Applied Companies&nbsp;
               <i class="fas fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
               <i class="fas fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
            </h5>
            </a> --}}
            {{-- <a style="height: 0.5rem">&nbsp;</a>
            <a href="" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading">Student Achievement&nbsp;
               </h5>
            </a>
            <a href="" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading">Student Alumni&nbsp;
               </h5>
            </a> --}}
         </div>
      </div>
      <div class="col-md-7">
         {{-- Academic Details --}}
         <form>
            {{csrf_field()}}
            <div class="form-group card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
               <div class="card-header">
                  <center><h1>Academic Details</h1></center>
               </div>
            <div class="card-body">
               <div class="form-group col-md-12">
                  
                  <h4>You have successfully filled your form.</h4>
            </div>
            </div>
         </form>
      </div>
      <div class="col-sm-2"></div>
   </div>
</div>
</body>
@endsection
