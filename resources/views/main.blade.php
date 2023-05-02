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
    <link rel="stylesheet" href="{{asset ('resources/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('resources/animate.css-main/animate.css')}}">

    <link rel='stylesheet' id='tablepress-default-css'  href='https://boheco1.com/wp-content/plugins/tablepress/css/default.min.css?ver=1.11' type='text/css' media='all' />

    <script type='text/javascript' src='https://boheco1.com/wp-content/themes/julz-theme-2/js/jquery.js?ver=5.4.12'></script>
    <script type='text/javascript' src='https://boheco1.com/wp-content/themes/julz-theme-2/js/bootstrap.js?ver=5.4.12'></script>
    <script type='text/javascript' src='https://boheco1.com/wp-content/themes/julz-theme-2/js/myjs.js?ver=5.4.12'></script>
</head>
<style>

body {
    margin: auto;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    overflow: auto;
    background: linear-gradient( 50deg , #8bff6e5d 50%, rgba(253, 249, 10, 0.671) 52%, rgba(161, 161, 161, 0.61) 90%);
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    background-attachment: fixed;
}
p{
    font-family: 'Open Sans', sans-serif;

}

@keyframes gradient {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}

.wave {
    background: rgb(255 255 255 / 25%);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 12em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom: 0;
    left: 0;
    z-index: -1;
}

.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.10;
}

@keyframes wave {
    2% {
        transform: translateX(10);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1);
    }
}
</style>
<body>
    @include('layouts.nav')

        <div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>

            <div class="content">

                @yield('content')
                @include('sweetalert::alert')

                <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            </div>
        </div>
        @include('layouts.footer')




    <script src="{{asset('resources/jquery-3.5.1.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{asset('resources/Magnific-Popup-master/dist/jquery.magnific-popup.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{asset('resources/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('resources/WOW-master/dist/wow.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    {{-- Custom Js --}}
    <script src="{{asset('js/script.js')}}">
    <script type='text/javascript' src='https://boheco1.com/wp-includes/js/wp-embed.min.js?ver=5.4.12'></script>
    <script type='text/javascript' src='https://boheco1.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
    <script type='text/javascript' src='https://boheco1.com/wp-content/plugins/tablepress/js/jquery.datatables.min.js?ver=1.11'></script>
    <script type="text/javascript">

    jQuery(document).ready(function($){
    $('#tablepress-1').dataTable({"order":[],"orderClasses":false,"stripeClasses":["even","odd"],"pagingType":"simple"});
    });

</script>
</body>
</html>
