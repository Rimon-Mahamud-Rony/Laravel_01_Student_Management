@extends('master')

@section('create_new_students')

<div class="container-fluid">
	<div class="container-fluid">
    	<h6 class="alert alert-primary alert-sm" style="border-radius: 0px;">Create New Students</h6> 
  	</div>

  	<div class="container-fluid col-sm-6">
		<form class="form-horizontal" action="{{route('store')}}" method="post">
			 @csrf
		  <div class="mb-3">
		    <label class="form-label">Name</label>
		    <input type="text" class="form-control" name="name">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Registration No</label>
		    <input type="number" class="form-control" name="reg_id">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Department Name</label>
		    <input type="text" class="form-control" name="dept_name">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Info</label>
		    <textarea name="info" rows="4" cols="80"></textarea>
		  </div>
		  
		  <button type="submit" class="btn btn-primary btn-sm" style="float: right;">Register Student</button>
		</form>
	</div>
</div>

@endsection