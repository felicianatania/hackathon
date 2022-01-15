<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/view.css') }}" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/favicon.ico') }}">
    <title>View Group Data</title>
  </head>
  <body>
    <!-- navbar-start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container-md">
        <div>
          <a class="navbar-brand" href="{{url('/home')}}"
            ><span><i class="fab fa-hackerrank"></i></span
          ></a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-center"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{url('/home')}}">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('getGroupsDashboard')}}">DASHBOARD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('getGroups')}}">PARTICIPANT</a>
            </li>
          </ul>
        </div>
        <!-- <button type="button" class="logout"></button> -->
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="button logout">
                <span><i class="fas fa-sign-in-alt"></i></span> LOGOUT
                {{-- <button type="submit" class="button logout" role="button">Logout</button> --}}
            </button>
        </form>
      </div>
    </nav>

    <!-- navabr-end -->

    <!-- view-start -->
    <!-- welcome -->
    {{-- <div class="container d-flex justify-content-center align-items-center">
      <div class="view">
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="">leader</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('getMemberByIdView', ['id'=>$group->id, 'memberNo'=>1])}}">Member 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Member 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Member 3</a>
          </li>
        </ul> --}}

        @yield('panel')
    </body>
</html>
