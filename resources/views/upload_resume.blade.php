@extends('layout.app1')
@section('content')
<head>

  <link rel="stylesheet" type="text/css" href="{{asset('css/button.css')}}">
{{--
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<script src="{{  asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/validation.js') }}"></script> --}}

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->






</head>
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
               <h5 class="list-group-item-heading" >Academic <br>Details &nbsp;                         
               </h5>
            </a>
            <a href="{{ route('upload_resume') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading" style="font-style: italic;">Upload <br>Files&nbsp;
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
      <div class="col-md-8">


      <div class="form-group card shadow-lg p-3 mb-5 bg-white rounded col-md-12" style="max-width: 100%;">
         <div class="card-header">
            <center><h1>Upload Files</h1></center>
         </div>

         @if(session('success'))
            <p><font  style="color: blue;">{{ session('success') }}</font></p>
          @endif
           @if($errors->any())

                    @if($errors->first()=="Resume Updated successfully.")
                    <h4 id="showError" style="color:green;">{{$errors->first()}}</h4>
                    @else <h4 style="color:red;">{{$errors->first()}}</h4>
                    @endif
                  @endif
          <br>

          <div class="row">
            <div class="col-md-6">
              <form action="{{ route('upload_resume') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field()}}




                  <div class="row">

                    <div class="col-md-6">
                      <input type="file" name="resume" id="resume" class="">
                      <small style="color:red;">Upload .pdf file only</small>
                    </div>

                    <div class="col-md-6">
                      <button id="button" class="login100-form-btn " type="submit">Upload Resume</button>
                    </div>

                  </div>
              </form>
            </div>

            <div class="col-md-6">
              <div class="row">
                <div class=col-md-6>
                  <button class="login100-form-btn" type="submit" type="button" data-toggle="modal" data-target="#showResume"  class="btn" >View</button>
                </div>
                <div class="col-md-6">
                  <a href="{{route('delete','resume')}}"><button class="login100-form-btn" type="submit">Delete</button></a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>

          <div class="row">
            <div class="col-md-6">
              <form action="{{ route('upload_photo') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field()}}




                  <div class="row">

                    <div class="col-md-6">
                      <input type="file" name="photo" id="photo" class="">
                      <small style="color:red;">Upload .jpg or .png file only</small>
                    </div>

                    <div class="col-md-6">
                      <button id="button" class="login100-form-btn " type="submit">Upload Photo</button>
                    </div>

                  </div>
              </form>
            </div>

            <div class="col-md-6">
              <div class="row">
                <div class=col-md-6>
                  <button class="login100-form-btn" type="submit" type="button" data-toggle="modal" data-target="#showPhoto"  class="btn" >View</button>
                </div>
                <div class="col-md-6">
                  <a href="{{route('delete','photo')}}"><button class="login100-form-btn" type="submit">Delete</button></a>
                </div>
              </div>
            </div>
          </div>
      </div>






      <div class="col-sm-1"></div>
    </div>
  </div>


  <div style="margin-top: 2.5%;" class="modal fade" id="showResume" role="dialog">
  <div class="modal-dialog" >
    <div class="modal-content" >
      <div class="modal-header" style="margin-top: 25px;">
        <h4 class="modal-title">Your Resume</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body" >
        @if($user[0]->resume_path == NULL)
            <h4>Please Upload First</h4>
        @else
              

        <object data="{{ asset('uploads/'.$user[0]->resume_path) }}" type="application/pdf" width="100%" height="700px">
      <embed src="{{ asset('uploads/'.$user[0]->resume_path) }}" width="100%" height="700px" />
      </embed>
      </object>
      @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div style="margin-top: 2.5%;" class="modal fade" id="showPhoto" role="dialog">
  <div class="modal-dialog" >
    <div class="modal-content" >
      <div class="modal-header" style="margin-top: 25px;">
        <h4 class="modal-title">Your Photo</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body" >
        @if($user[0]->photo_path == NULL)
            <h4>Please Upload First</h4>
        @else
              

        <object data="{{ asset('/uploads/'.$user[0]->photo_path) }}" type="application/jpg" width="100%" height="700px">
      <embed src="{{ asset('/uploads/'.$user[0]->photo_path) }}" width="100%" height="700px" />
      </embed>
      </object>
      @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>









</body>
@endsection
