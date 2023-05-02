@extends('main')
@section('content')
<section class="more">


    <header class="mt-5">
        <img src="{{asset('images/logo.png')}}" alt="Company Name Logo" class="logo-more" style="box-shadow: 2px 2px 5px #1b1b1b;">
    </header>

    <div class="container-fluid mt-5">
        <div class="card" style="box-shadow: 2px 2px 5px #181818; padding: 50px;">
            <div class="card-body">
                <h1 class="text-center" style="font-family:Times New Roman;">DIRECTORS</h1>

            <div class="mt-2">
                <img style="box-shadow: 2px 2px 5px #181818; background-color: rgb(251, 255, 0); padding: 5px;" src="{{asset('images/director.jpg')}}" alt="Image">
            </div>
        </div>
        </div>
        <div class="card mt-2" style="box-shadow: 2px 2px 5px #181818; padding: 50px;">
            <div class="card-body">
                <h1 class="text-center" style="font-family:Times New Roman;">MANAGERS</h1>
            <div class="mt-2">
                <img style="box-shadow: 2px 2px 5px #181818; background-color: rgb(251, 255, 0); padding: 5px;" src="{{asset('images/manager.jpg')}}" alt="Image">
            </div>
        </div>

        </div>
    </div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</section>

@endsection


