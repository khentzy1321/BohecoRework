<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap1.min.css">

    <!-- Style -->
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <link rel="stylesheet" href="css/register.css">



    <link rel = "stylesheet" href = "{{asset ('resources/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <link rel = "stylesheet" href = "{{asset('resources/animate.css-main/animate.css')}}">

    <title>Register</title>
  </head>
  <body>
    <main>
      <div class="box">
          <div class="form-wraps">
          <form method="POST" action="{{ route('register') }}" class="validate-form">
                        @csrf
                        <a href="/">
                            <div class="logo">
                              <img src="./images/logo.png"  alt="logo">
                            </div>
                        </a>
                        <div class="heading">
                            <h3 class="text-center">SIGN UP</h3>
                        </div>
                        <div class="register-form">
                            <div class="input-wrap input-group">

                                <input type="text" class="inp-field form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name">
                                {{-- <label><i class="fas fa-user"></i> Name</label> --}}
                                @error('name')
                                <div class="invalid-feedback">
                                    <p style="font-size: 0.7rem;"><strong>{{ $message }}</strong></p>
                                </div>
                                @enderror
                            </div>

                            <div class="input-wrap input-group">
                                <input type="email" class="inp-field form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">
                                {{-- <label> <i class="fas fa-envelope"></i> Email</label> --}}
                                @error('email')
                                <div class="invalid-feedback">
                                    <p style="font-size: 0.7rem;"><strong>{{ $message }}</strong></p>
                                </div>
                                @enderror
                           </div>
                            <div class="input-wrap input-group">
                                <input type="password" class="inp-field form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                {{-- <label> <i class="fas fa-lock"></i> Password</label> --}}
                                @error('password')
                                <div class="invalid-feedback">
                                    <p style="font-size: 0.7rem;"><strong>{{ $message }}</strong></p>
                                </div>
                                @enderror
                           </div>

                            <div class="input-wrap input-group">
                                <input type="password" class="inp-field form-control @error('password_confirmation') is-invalid @enderror" id="passwword-confirm" name="password_confirmation" placeholder="Confirm Password">
                                {{-- <label> <i class="fas fa-unlock"></i> Confirm Password</label> --}}
                                @error('password_confirmation')
                                <div class="invalid-feedback">
                                    <p style="font-size: 0.7rem;"><strong>{{ $message }}</strong></p>
                                </div>
                                @enderror
                           </div>

                           <div class="btn-sub">
                           <button type="submit" class="btn btn-primary">
                                    REGISTER
                                </button>
                           </div>
                        </div>
                         <div class="bot">
                            <h6 class="text-dark">Already have an account?</h6>
                            <a href="{{ route('login') }}" class="toggle">Click here</a>
                            <div>
                                <div class="mt-3">
                                <h6 class="text-dark">or</h6>
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
      <script src="{{asset('js/loginregister.js')}}"></script>
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
