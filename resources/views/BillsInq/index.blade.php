<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOHECO I</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel = "stylesheet" href = "{{asset ('resources/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <link rel = "stylesheet" href = "{{asset('resources/animate.css-main/animate.css')}}">

    <link rel='stylesheet' id='tablepress-default-css'  href='https://boheco1.com/wp-content/plugins/tablepress/css/default.min.css?ver=1.11' type='text/css' media='all' />
</head>
<body>
    <header class="header" id="intro">
        @include('layouts.navbar')
    

    <div class="hero-div center container mb-5">
        <h1>BILLS INQUIRY</h1>

                <form action="">

                   <div class="input-block">
                    <label for="Bill Inquiry">
                        <input type="number" name="" placeholder="Input Account Number" >
                        <button type="submit" class="btn btn-primary btn-lg">Go</button>
                    </label>
                   </div>
                    
                </form>
       
    </div>

    </header>

    
    @include('layouts.footer')
    
    <script src = "{{asset('resources/jquery-3.5.1.js')}}"></script>
    <!-- magnific popup -->
    <script src = "{{asset('resources/Magnific-Popup-master/dist/jquery.magnific-popup.js')}}"></script>
    <!-- owl carousel -->
    <script src = "{{asset('resources/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>
    <!-- wow js -->
    <script src = "{{asset('resources/WOW-master/dist/wow.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    {{-- Custom Js --}}
    <script src = "{{asset('js/script.js')}}"></script>
</body>
<style>
    input{
        height: 50px;
        width: 300px;
        border-radius: 10px;
        text-align: center;
        border: 1px;
    }

</style>
</html>