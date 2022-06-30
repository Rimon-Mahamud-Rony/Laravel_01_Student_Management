@extends('master')

@section('title')
Edit Student | Student Management
@endsection

@section('edit_students_information')

<div class="container-fluid">
	<div class="container-fluid">
    	<h6 class="alert alert-primary alert-sm" style="border-radius: 0px;">Create New Students</h6> 
  	</div>

  	<div class="container-fluid col-sm-6">
		<form class="form-horizontal" action="{{route('update', $ct_st_id)}}" method="post">
			 @csrf
		  <div class="mb-3">
		    <label class="form-label">Name</label>
		    <input type="text" class="form-control" name="name" value="{{$ct_st_id->name}}">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Registration No</label>
		    <input type="number" class="form-control" name="reg_id" value="{{$ct_st_id->registration_id}}">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Department Name</label>
		    <input type="text" class="form-control" name="dept_name" value="{{$ct_st_id->department_name}}">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Info</label>
		    <textarea name="info" rows="4" cols="80" >{!!$ct_st_id->info!!}</textarea>
		  </div>
		  
		  <button type="submit" class="btn btn-primary btn-sm" style="float: right;">Register Student</button>
		</form>
	</div>
</div>

@endsection