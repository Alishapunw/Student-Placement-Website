@section('content')
<div class="list-group form-group" style="max-width: 100%; padding-top: 120px;">
	<a href="{{ route('student_details') }}" class="list-group-item shadow-lg active">
  	<h5 class="list-group-item-heading">Student Details&nbsp;
  		<i class="far fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
  		<i class="far fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
  	</h5>
	</a>
	<a href="{{ route('academic_details') }}" class="list-group-item shadow-lg">
  	<h5 class="list-group-item-heading">Academic Details&nbsp;
  		<i class="far fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
  		<i class="far fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
  	</h5>
	</a>
	<a href="{{ route('family_details') }}" class="list-group-item shadow-lg">
  	<h5 class="list-group-item-heading">Family Details&nbsp;
  		<i class="far fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
  		<i class="far fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
  	</h5>
	</a>
	<a href="{{ route('student_achievement') }}" class="list-group-item shadow-lg">
  	<h5 class="list-group-item-heading">Student Achievement&nbsp;
  		<i class="far fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
  		<i class="far fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
  	</h5>
	</a>
	<a href="{{ route('student_alumni') }}" class="list-group-item shadow-lg">
  	<h5 class="list-group-item-heading">Student Alumni&nbsp;
  		<i class="far fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
  		<i class="far fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
  	</h5>
	</a>
	<a href="{{ route('payment') }}" class="list-group-item shadow-lg">
  	<h5 class="list-group-item-heading">Payment&nbsp;
  		<i class="far fa-check-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
  		<i class="far fa-times-circle" style="float: right; padding-right: 5%;"></i>&nbsp;
  	</h5>
	</a>
</div>
@endsection