

@extends('master')

@section('index_section')

<body>

<div class="container-fluid">
  <div class="container-fluid" style="font-size: 20px;">
    <h6 class="alert alert-primary alert-sm" role="alert" style="border-radius: 0px;"> List of all students</h6>  
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
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif



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
 
  @php $i=0; @endphp

	@foreach ($access_as_student as $indexstudent)
	

	@php $i=$i+1; @endphp 
	
        <tr>
          <th>{{ $i}}</th>
          <td>{{ $indexstudent->name }}</td>
          <td>{{ $indexstudent->registration_id }}</td>
          <td>{{ $indexstudent->department_name }}</td>
          <td>{{ $indexstudent->info }}</td>
          <td>
            <a href="{{route('edit',$indexstudent->id)}}" style="text-style:none;"><button class="btn btn-success btn-sm">EDIT</button></a>
            <a href="#" style="text-style:none;"><button class="btn btn-danger btn-sm">DELETE</button></a>
          </td>
        </tr>
	@endforeach

	  </tbody>
    </table>
</div>

@endsection

