<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Point Of Sell</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: #EEEEEE;">
    <div class="container">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link btn btn-outline-info" href="{{ url('/dashboard') }}">Dashboard</a>
          </li>
        </ul>
        <!-- Left links -->
  
        <div class="d-flex align-items-center">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0  sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                <button type="button" class="btn btn-link me-2">
                <a class="btn btn-outline-primary" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log In</a>
                </button>
        
                    @if (Route::has('register'))
                    <button type="button" class="btn btn-link me-2">
                        <a class="btn btn-outline-primary" href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    </button>
                    @endif
                @endauth
            </div>
        @endif
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar -->  
        <div class="text-center" style="margin-top:200px; color:#444444">
            <h4>Welcome to My Site</h4>
            <h5>Point Of Sell</h5>


        </div>
   {{--      <div class="text-center">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                <a class="btn btn-primary" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log In</a>
        
                    @if (Route::has('register'))
                        <a class="btn btn-primary" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        </div> --}}
    </div>

</body>
</html>