@extends('layout.app1')
@section('content')

<style>
a:hover{
   background-color:#204a84;
   color:white;
   transition: transform .5s;
   transform: scale(1.1);
   border-radius:20px;
}


</style>




<body>
<div class="container-fluid">
   <div class="row content">
      <div class="col-sm-3" style="margin-right:-150px;;">
         <div class="list-group form-group" style="max-width: 60%; ">

            <a href="{{ route('student_details') }}" class="list-group-item shadow-lg ">
               <h5 class="list-group-item-heading">Student <br>Details&nbsp;</h5>
            </a>


            <a href="{{ route('academic_details') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading">Academic <br>Details&nbsp;</h5>
            </a>
            <a href="{{ route('upload_resume') }}" class="list-group-item shadow-lg">
               <h5 class="list-group-item-heading">Upload <br>Resume&nbsp; </h5>
            </a>
             <a href="{{ route('placement_apply') }}" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Company <br>Offers&nbsp;</h5>
          </a>


             <a href="{{ route('applied_companies') }}" class="list-group-item shadow-lg">
            <h5 class="list-group-item-heading">Applied <br>Companies&nbsp;</h5>
            </a> 


         </div>
      </div>


      <div class="col-md-10" >
        @yield('specificDetail')
        </div>
      <div class="col-sm-2"></div>
   </div>
</div>
<script>
$("a").click(function(){
   
   $(this).toggleClass("active");
   
   })
</script>
</body>
@endsection