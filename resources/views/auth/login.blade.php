<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PointOfSell</title>
    <!-- font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- bootstarp link -->
    <link rel="stylesheet" href="{{asset('build/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/js/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/style.css')}}">
</head>

<body style="color: #6C757D;">
    <section class="vh-100" style="margin-top:100px">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="{{asset('storage/public/images/giphy.gif')}}" class="img-fluid px-5" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-linkedin-in"></i>
                  </button>
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Or</p>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" name="email" id="form3Example3" class="form-control form-control-lg @error('email', 'post') is-invalid @enderror" placeholder="Enter a valid email address" value="{{old('email')}}"/>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" name="password" id="form3Example4" class="form-control form-control-lg @error('password', 'post') is-invalid @enderror" placeholder="Enter password"/>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" name="remember" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-body">Forgot password?</a>
                @endif
                </div>
    
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" name="logInBtn" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('register') }}"class="link-danger">Register</a></p>
                </div>
      
              </form>
      
              <hr>
              <h5>Didn't Your varification Email..? <a href="#">Resend</a></h5>
            </div>
          </div>
        </div>
      </section>

</body>
</html>

