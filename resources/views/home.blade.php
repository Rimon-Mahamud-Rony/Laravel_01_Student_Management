@extends('auth.login_master')
@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    


                    <div class="card col-sm-10" style="margin-left: 5%;">
                      <h4 ><div class="card-header alert alert-success" style="color:green;">
                        You are now Logged in !!
                      </div></h4>
                      <div class="card-body">
                        <h5 class="card-title" style="color:green;" >Now you can add new student or edit old student information!</h5> <hr>
                        <p class="card-text">You have to be logged in, if you registerd before. If you are not registerd yet, plese complete your registration at first</p>
                        <a href="{{route('create')}}" class="btn btn-lg btn-primary" style="border-radius:0px;"><h4>Add new student</h4></a>

                        <a href="{{route('index')}}" class="btn btn-lg btn-info" style="border-radius:0px;"> <h4> List of all the students</h4> </a>

                      </div>
                    </div>

                </div>
        </div>
    </div>
</div>
@endsection
