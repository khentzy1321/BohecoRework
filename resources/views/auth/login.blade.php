<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="css/bootstrap1.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/login.css">


    <link rel = "stylesheet" href = "{{asset ('resources/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <link rel = "stylesheet" href = "{{asset('resources/animate.css-main/animate.css')}}">

    <title>LOGIN</title>
  </head>
  <body>
    <main>
          <div class="form-wraps">
            <!-- <div>
            @error('email')
              <span class="alert alert-danger" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            @error('password')
              <span class="alert alert-danger" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div> -->

      <div class="box">
          <form method="POST" action="{{ route('login') }}" class="validate-form">
                        @csrf
                        <a href="/">
                          <div class="logo">
                            <img src="./images/logo.png" alt="logo">

                        </div>
                        </a>
                        <div class="heading">
                            <h2>WELCOME BACK</h2>
                            <div class="loginn mb-3">
                              <h3 class="text-center">LOGIN</h3>
                            </div>
                        </div>
                        <div class="actual-form ">
                            <div class="input-wrap input-group " >

                              <input type="email"
                                class="inp-field form-control @error('email') is-invalid @enderror"
                                id="email" name="email" placeholder="Email"  value="{{ old('email') }}">
                                <!-- <label for="inputEmail"><i class="fas fa-envelope"></i> Email</label> -->
                                @error('email')
                                    <div class="invalid-feedback">
                                        <p style="font-size: 0.7rem;"><strong>{{ $message }}</strong></p>
                                    </div>
                                @enderror
                              </div>
                            <div class="input-wrap input-group" >
                                <input type="password"
                                class="inp-field form-control @error('password') is-invalid @enderror"
                                id="pass" name="password" placeholder="Password">
                                <!-- <label> <i class="fas fa-lock"></i> Password</label> -->
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <p style="font-size: 0.7rem;"><strong>{{ $message }}</strong></p>
                                    </span>
                                @enderror

                           </div>
                           <div class="btn-sub">
                           <button type="submit" name="login" id="login" class=" btn btn-primary" value="{{'login'}}">LOGIN</button>
                           </div>
                        </div>
                          <div class="btnlog">
                          <a href="{{route('password.request')}}" class="fp">Forgot password?</a>
                         </div>
                         <div class="bot">
                            <h6 class="text-dark">Create Account?</h6>
                            <a href="{{ route('register') }}" class="toggle">Sign up here</a>
                            <div>
                            <span class="or">&mdash; or &mdash;</span>
                            </div>
                            <div class="icons">
                            <a href="https://www.facebook.com/BOHECO1officialpage/" class="fb">
                               <img src="/images/icons/facebook.png" alt="facebook">
                                </a>
                                <a href="#" class="yt">
                                <img src="/images/icons/youtube.png" alt="youtube">
                                </a>
                                <a href="https://boheco1.com/" class="goog">
                                    <img src="/images/icons/google.png" alt="google">
                                </a>
                              </div>

                         </div>

                    </form>

              </div>
           </div>
        <div class="carousel">
          <div class="con">
            <div class="container wow animate__animated animate__fadeInLeft animate__slow">
              <h3 class="text-center text-warning">MISSION</h3>
              <p><h6 class="text-light text-center">
                To deliver quality electric services consistent
               with our core values,  <br> taking
                advantage of the latest technologies of the  resources
                <br> for member-consumer-owner-satistfaction
              </h6></p>
            </div>
            <div class="container wow animate__animated animate__fadeInRight animate__slow">
              <h3 class="text-center text-warning">VISION</h3>
              <p><h6 class="text-light text-center">The premier electric power
                provider improving the lives of every  <br> BOHOLANO</h6></p>
            </div>
          </div>
      </div>
    </main>
    <script src="{{asset('js/loginregister.js')}}"></script>
    <!-- <script src="{{asset('js/main.js')}}"></script> -->
    <script src = "{{asset('resources/WOW-master/dist/wow.js')}}"></script>
  </body>
  <style>
    .con{
      margin-top:200px;
      align-items:center;
    }
    h6{
      font-size: 1.0rem;
    }
  </style>

  <script>
   (function () {
  'use strict'
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.validate-form')
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
})()
  </script>

</html>
