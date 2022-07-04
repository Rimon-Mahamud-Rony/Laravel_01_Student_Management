@extends('master')

@section('title')
Create Student| Student Management
@endsection

@section('create_new_students')

@if (Auth::Check())

<div class="container-fluid">
	<div class="container-fluid">
    	<h6 class="alert alert-primary alert-sm" style="border-radius: 0px;">Create New Students</h6> 
  	</div>

@if ($errors->any())
    <div class="container-fluid">
        <ul>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" style="border-radius:30%; width:40%; margin-left: 30%;  text-align: center; font-size: 13px;">{{ $error }}</h6> 
            @endforeach
        </ul>
    </div>
@endif

  	<div class="container-fluid col-sm-6">
		<form class="form-horizontal" action="{{route('store')}}" method="post" data-parsley-validate >
			 @csrf
		  <div class="mb-3">
		    <label class="form-label">Name</label>
		    <input type="text" class="form-control" name="name" max="20" required >
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Registration No</label>
		    <input type="number" class="form-control" name="reg_id" required >
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Department Name</label>
		    <input type="text" class="form-control" name="dept_name" required >
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Info</label>
		    <textarea name="info" rows="4" cols="80"></textarea>
		  </div>
		  
		  <button type="submit" class="btn btn-primary btn-sm" style="float: right;">Register Student</button>
		</form>
	</div>
</div>

@else
	<div class="card">
	  <div class="card-header">
	    <h4 class="alert alert-warning">You are not Logged in !!</h4>
	  </div>
	  <div class="card-body">
	    <h5 class="card-title">Please log in to add new student to the records</h5>
	    <p class="card-text">You have to log in, if you registerd before. If you are not registerd yet, plese complete your registration at first</p>
	    <a href="{{route('register')}}" class="btn btn-primary">Register</a>

	    <a href="{{route('login')}}" class="btn btn-info"> Log In </a>

	  </div>
	</div>

@endif 

@endsection