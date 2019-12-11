@extends('layout.app1')
@section('content')
<body>
    @if(session('success'))
    <center><p style="color: #f05837;">{{ session('success') }}</p></center>
   @endif
   <div class="container-fluid">
        <div class="row content">
          <div class="col-sm-3" style="padding-left: 7%">
            <div class="list-group form-group" style="max-width: 100%;">
                <a href="{{ route('student_details') }}" class="list-group-item shadow-lg">
                    <h5 class="list-group-item-heading">Student <br>Details&nbsp;</h5>
                </a>
                <a href="{{ route('academic_details') }}" class="list-group-item shadow-lg">
                    <h5 class="list-group-item-heading">Academic <br>Details&nbsp;</h5>
                </a>
                <a href="{{ route('upload_resume') }}" class="list-group-item shadow-lg">
                    <h5 class="list-group-item-heading">Upload <br>Resume&nbsp;</h5>
                </a>
                <a href="{{ route('final_details') }}" class="list-group-item shadow-lg">
                    <h5 class="list-group-item-heading">Final<br>Details&nbsp;
                </h5>
                </a>
                <a href="{{ route('placement_apply') }}" class="list-group-item shadow-lg">
                    <h5 class="list-group-item-heading">Company<br>Offers&nbsp;</h5>
                </a>
                <a href="{{ route('applied_companies') }}" class="list-group-item shadow-lg">
                    <h5 class="list-group-item-heading" style="font-style: italic;">Applied<br>Companies&nbsp;
                    </h5>
                </a>

               <a href="{{ route('internship_details') }}" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Internship <br>Details&nbsp;
            </h5>
            </a>

            </div>
          </div>
          <div class="col-md-8">
            {{--Applied Companies--}}
            <form method= "post" action="{{ route('applied_companies') }}">
                {{csrf_field()}}
                <div class="form-group card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
                    <div class="card-header">
                       <center><h1>Applied Companies</h1></center>
                    </div>

                    <div class="card-body">
                            <div class="form-group col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <!--<input type="text" class="form-control" id="company_name" name="company_name" value="" placeholder="Company Name" readonly>-->
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Company Name</th>
                                                <th>Applied Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user as $users)
                                                    <tr>
                                                    <td>{{$users->c_name}}</td>
                                                    <td>{{ Carbon\Carbon::parse($users->created_at)->format('d-m-Y ') }}</td>
                                                    </tr>
                                                @endforeach                                          
                                            </tbody>
                                        </table>
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