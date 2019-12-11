@extends('layout.app1')
@section('content')
{{-- 
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<script src="{{  asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/validation.js') }}"></script> --}}
<body>
  @if(session('success'))
    <center><p style="color: #f05837;">{{ session('success') }}</p></center>
   @endif
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
               <h5 class="list-group-item-heading">Final<br>Details&nbsp;          
               </h5>
            </a>
             <a href="{{ route('placement_apply') }}" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading" style="font-style: italic;">Company <br>Offers&nbsp;
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
      <div class="col-md-8">
        {{-- Achievement Details --}}
        <form method= "post" action="{{ route('placement_apply') }}">
          {{csrf_field()}}
          <div class="card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
            <div class="card-header">
              <center>
                <h1>Company Offers</h1>
              </center>
            </div>
            <div class="card-body">
              <table class="table table-striped" >
                <?php $x = '1' ?>
                <thead >
                  <th>Sr. No.</th>
                  <th>Company name</th>
                  <th colspan="2">Description</th>
                  <th>Type</th>
                  <th>Apply</th>
                </thead>

                @foreach($user as $users)
                
                <tbody style="border-top 3px solid white ; ">
                   {{--@foreach($already as $alreadys) --}}
                  <tr style="border-top: 13px solid white">
                    <td rowspan="4  ">{{$x}}</td>
                    <td>{{ $users->c_name }}</td>
                    <td colspan="2">{{ $users->description }}</td>
                    <td>{{ $users->type }}</td>
                    <td rowspan="4" style="padding-top: 50px;">
                      <a href=" {{ route('apply',$users->c_id )  }}"><button type="button" class="btn btn-success shadow mb-5 rounded" id="apply_now"  name="apply_now" style="width: 100%;">Apply Now</button></a>
                    </td>
                  
                    
                 {{--@endforeach--}}
                    
                    
                  </tr>
                  <tr >
                    <td>Eligibility Criteria</td>
                    <td>Intake</td>
                    <td>Vacancies</td>
                    <td>Package</td>
                  </tr>
                  <tr>
                    <th>{{ $users->eligibility_creteria }}</th>
                    <th>{{ $users->intake }}</th>
                    <th>{{ $users->vacancies }}</th>
                    <th>{{ $users->max_salary }}</th>
                  </tr>
                 
                </tbody>
                <?php $x = $x+'1';?>  
                
                 @endforeach
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