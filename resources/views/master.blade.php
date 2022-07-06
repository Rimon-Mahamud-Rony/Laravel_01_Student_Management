<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    @yield('title','Student Management')
  </title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</head>
<body>

<!-- NAVBAR START-->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid" style="background-color: #416180;"> 
    <a class="navbar-brand" href="{{route('index')}}" style="color: white; ">STUDENT MANAGEMENT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}" style="color:white; ">STUDENT LIST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('create')}}" style="color: white; ">ADD STUDENT</a>
        </li>
      </ul>

      @if (Auth::Check())
        <ul class="navbar-nav" style="margin-left: 50%;">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}"><button class="btn btn-sm btn-secondary" style="color:yellow;">Go to {{ Auth::user()->name }}'s DASHBOARD</button></a>
            </li>
        </ul>
                              <div>
                                    <button class="btn btn-sm btn-danger"><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></button>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
      @else
        <ul class="navbar-nav" style="margin-left: 60%;">
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}"><button class="btn btn-sm btn-primary">Register </button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}" ><button class="btn btn-sm btn-success"> Log In </button></a>
          </li>
        </ul>
      @endif 
      
    </div>
  </div>
</nav>
<!-- NAVBAR END-->

<div class="container-fluid">

  
  
  <div id="content" class="container-fluid">
    <br>

    @yield('index_section')

    @yield('create_new_students')
    @yield('edit_students_information')

  </div>
</div>
    
    <script type="text/javascript" src="{{asset('js/parsley.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/parsley.min.js')}}"></script>  
    <script src="parsley.min.js"></script>
</body>
</html>