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

                    


                    <div class="card">
                      <div class="card-header alert alert-success">
                        <h4>{{ __('You are now logged in!') }}</h4>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Please log in to add new student to the records</h5>
                        <p class="card-text">You have to log in, if you registerd before. If you are not registerd yet, plese complete your registration at first</p>
                        <a href="{{route('create')}}" class="btn btn-primary">Add new student</a>

                        <a href="{{route('index')}}" class="btn btn-info"> List of all the students </a>

                      </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
