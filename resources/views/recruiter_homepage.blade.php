@extends('layout.app1')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/rec.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
</head>
<body>


<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Sr. No.</th>
									<th class="cell100 column2">Student Email</th>
									<th class="cell100 column3">Department</th>
									<th class="cell100 column4">Pointer</th>
									<th class="cell100 column5">View Resume</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<?php $x = '1' ?>
							
							@foreach($user as $users)
							
							
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">{{$x}}</td>
									<td class="cell100 column2">{{ $users->email }}</td>
									<td class="cell100 column3">{{ $users->branch}}</td>
									<td class="cell100 column4">{{ $users->avg_cgpa}}</td>
									<td class="cell100 column5"><button class="login100-form-btn" type="submit" type="button" data-toggle="modal" data-target="#showResume"  class="btn" >View</button></td>
								</tr>

							</tbody>
							<?php $x = $x+'1' ?>		
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


				<div class="modal fade" id="showResume" role="dialog">
  <div class="modal-dialog" >
    <div class="modal-content" >
      <div class="modal-header" style="margin-top: 25px;">
        <h4 class="modal-title">Your Resume</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body" >

        <object data="{{ asset('/uploads/'.$users->resume_path) }}" type="application/pdf" width="100%" height="700px">
      <embed src="{{ asset('/uploads/'.$users->resume_path) }}" width="100%" height="700px" />
      </embed>
      </object>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



</body>

@endsection