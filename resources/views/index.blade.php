

@extends('master')

@section('index_section')

<body>

<div class="container-fluid">
	<h6 class="alert alert-primary alert-sm" role="alert" style="width:80%;"> List of all students</h6>

	<table class="table table-striped table-bordered table-sm table-hover">
      <thead>
        <tr>
          <th scope="col">S/N</th>
          <th scope="col">NAME</th>
          <th scope="col">REGISTRATION ID</th>
          <th scope="col">DEPARTMENT</th>
          <th scope="col">INFO</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody>

	@foreach ($access_as_student as $indexstudent)
	
	@php 
	$i=0; 
	$i=$i+1; 
	@endphp
        <tr>
          <th>{{ $i}}</th>
          <td>{{ $indexstudent->name }}</td>
          <td>{{ $indexstudent->registration_id }}</td>
          <td>{{ $indexstudent->department_name }}</td>
          <td>{{ $indexstudent->info }}</td>
          <td>
            <a href="#" style="text-style:none;"><button class="btn btn-success btn-sm">EDIT</button></a>
            <a href="#" style="text-style:none;"><button class="btn btn-danger btn-sm">DELETE</button></a>
          </td>
        </tr>

	@endforeach

	  </tbody>
    </table>
</div>

@endsection

