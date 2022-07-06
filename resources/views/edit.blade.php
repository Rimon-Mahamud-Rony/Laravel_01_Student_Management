@extends('master')

@section('title')
Edit Student | Student Management
@endsection

@section('edit_students_information')

<div class="container-fluid">
	<div class="container-fluid">
    	<h6 class="alert alert-primary alert-sm" style="border-radius: 0px;">Create New Students</h6> 
  	</div>

@if (Auth::Check())

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

	@else
		<div class="card col-sm-8" style="margin-left: 15%;">
		  <h4 ><div class="card-header alert alert-danger" style="color:red;">
		    You are not Logged in !!
		  </div></h4>
		  <div class="card-body">
		    <h5 class="card-title" style="color:green;">Please log in first to update the student records</h5><hr>
		    <p class="card-text">You have to log in, if you registerd before. If you are not registerd yet, plese complete your registration at first</p>
		    <a href="{{route('register')}}" class="btn btn-lg btn-primary" style="border-radius:0px;"><h2>Register</h2></a>
		    
		    <a href="{{route('login')}}" class="btn btn-lg btn-info" style="border-radius:0px;"> <h2>Log In</h2> </a>

		  </div>
		</div>

	@endif 
@endsection