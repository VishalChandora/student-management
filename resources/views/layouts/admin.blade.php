<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="/css/app.css" rel="stylesheet"  crossorigin="anonymous">

    <title>Student Management</title>
  </head>
  <body>
  <div id="app">
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Student Management</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav ml-auto">
            <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Sign out <span data-feather="log-out"></span></a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('teachers.index')}}">
              <span data-feather="user"></span>
              Teacher
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('students.index')}}">
              <span data-feather="users"></span>
              Student
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('attendances.create')}}">
              <span data-feather="plus-circle"></span>
              Add Attendance
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('attendances.index')}}">
              <span data-feather="plus-circle"></span>
              Add Marks
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('attendances.index')}}">
              <span data-feather="settings"></span>
              Change Password
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('attendances.index')}}">
              <span data-feather="log-out"></span>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
        </main>

    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      feather.replace()
    </script>
    </body>
</html>