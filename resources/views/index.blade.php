

@extends('master')

@section('title')
Student List | Student Management
@endsection

@section('index_section')

<body>

<div class="container-fluid">
  <div class="container-fluid" style="font-size: 20px;">
    <div class="alert alert-primary alert-sm" role="alert" style="border-radius: 0px; font-size: 12px;"> List of all students</div>  
  </div>
	


<!--
<?/*
$arr[]=''; 
$numItems = count($arr);
$i = 0;
foreach($arr as $access_as_student=>$indexstudent) {
  if(++$i === $numItems) {
    echo "last index!";
  }
}  
*/?>-->

@if (Session::has('message'))
   <div class="alert alert-warning" style="border-radius:0px; width:70%; margin-left: 15%;  text-align: center; font-size: 12px;">{{ Session::get('message') }}</div>
@endif



	<table class="table table-striped table-bordered table-sm table-hover" style="font-size:13px;">
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
 
  @php $i=0; @endphp

	@foreach ($access_as_student as $indexstudent)
	

	@php $i=$i+1; @endphp 
	
        <tr style="padding: 20%;">
          <th>{{ $i}}</th>
          <td>{{ $indexstudent->name }}</td>
          <td>{{ $indexstudent->registration_id }}</td>
          <td>{{ $indexstudent->department_name }}</td>
          <td>{{ $indexstudent->info }}</td>
          <td>
            <a href="{{route('edit',$indexstudent->id)}}" style="text-style:none;"><button class="btn btn-success btn-sm">EDIT</button></a>
            @if (Auth::Check())
            <a href="{{route('delete',$indexstudent->id)}}" style="text-style:none;"><button class="btn btn-danger btn-sm">DELETE</button></a>
            @endif
          </td>
        </tr>
	@endforeach

	  </tbody>
    </table>
</div>

@endsection

