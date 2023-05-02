@extends('main')
@section('content')
    <section class="news">
        <div class="container-fluid mt-4">
            <div class="card-header1 text-muted">
                <h1 class="text-dark text-center">LATEST NEWS</h1>
                @role('admin')
                    <div class="card-header2">
                        <a href="{{ route('news.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                    </div>
                @endrole
            </div>

            @foreach ($news as $new)
                <div class="container-fluid bg-white mt-2" style="border-radius: 3px; box-shadow: 2px 2px 5px #222222;">
                    <div class="row">
                        <div class="col-md-4" style="box-shadow: 2px 2px 5px #1b1b1b">
                            <div id="myCarousel-{{ $new->id }}" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#myCarousel-{{ $new->id }}" data-bs-slide-to="0" class="active"></li>
                                        <li data-bs-target="#myCarousel-{{ $new->id }}" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#myCarousel-{{ $new->id }}" data-bs-slide-to="2"></li>
                                    </ol>
                                    @foreach (json_decode($new->image, true) as $index => $img)
                                        <div class="carousel-item @if($index == 0) active @endif">
                                            <figure>
                                                <img class="mt-3" src="{{ url('uploads/news/' . $img) }}" alt="Image" style="height: 260px">
                                            </figure>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card-body">

                                <p class="card-title article-title mt-4">{{ $new->title }}</p>

                                <p class="article-subtitle mt-2">{{ Carbon\Carbon::parse($new->dateTime)->format('M d, Y') }}</p>
                                <div class="card-text">
                                    <div class="parent">
                                        <div class="block-ellipsis">
                                            <figure><img src="{{ url('uploads/news/' . $img) }}" alt="Image" style="height: 260px;">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="d-flex justify-content-start mt-3">
                                    <p class="ellipsis">{{ $new->article }}</p>
                                </div>
                                <tr>
                                    <div class="d-flex justify-content-end mb-2">
                                        <input type="hidden" class="delete_val" value="{{ $new->id }}">
                                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#newsView-{{ $new->id }}">
                                            <i class="fa fa-share"></i>Read Article
                                        </button>
                                        @include('news.view')
                                        @role('admin')
                                            <a href="{{ route('news.edit', $new) }}">
                                                <button class="btn btn-success mx-1" type="submit"><i
                                                        class="fas fa-edit"></i></i></button>
                                            </a>

                                            <form id="delete-form-{{ $new->id }}"
                                                action="{{ route('news.destroy', $new->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" data-placement="bottom"
                                                    onclick="deleteData({{ $new->id }},'{{ $new->title }}')"
                                                    class="btn btn-danger btndelete"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>

                                    </tr>
                                @endrole
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                function deleteData(id, title) {
                    Swal.fire({
                        title: 'Are you sure you want to delete this?',
                        text: `Title:" ${title}".`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Proceed'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('delete-form-' + id).submit();
                        }
                    })
                }


                $(document).ready(function () {
                    $('#myCarousel').carousel({
                        interval: 500, // Time to wait between slide transitions, in milliseconds
                        pause: 'hover', // Pause on hover
                        ride: 'carousel' // Enable automatic sliding
                    });
                });

                 $('.carousel-indicators li').click(function () {
                    var index = $(this).data('bs-slide-to');
                    $('#myCarousel-{{ $new->id }}').carousel(index);
                });

            </script>
        </div>
        <div class="card-footer py-4">
            <div class="d-flex justify-content-center">
                {{ $news->links() }}
            </div>
        </div>
        </div>

        <style>
            .card-header1 {
                overflow: hidden;
                /* background-color: #f1f1f1; */
                padding: 20px 10px;
            }

            .card-header1 h1 {
                /* display: inline; */
                text-align: center;
                color: black;

            }

            .card-header2 a {
                float: right;
            }

            .hrr {
                margin-top: 6px;
                opacity: 0.2;
                color: gray;


            }

            .ellipsis {
                width: 100%;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;

            }
            .carousel-item {
        transition: transform 0.6s ease-in-out;
        transform: translateX(100%); /* Change to 100% for sliding left */
    }

            .carousel-item.active,
            .carousel-item-next,
            .carousel-item-prev {
                transform: translateX(0);
            }
            .carousel-item-next:not(.carousel-item-left),
            .active.carousel-item-right {
                transform: translateX(-100%); /* Change to -100% for sliding right */
            }
            .carousel-item-prev:not(.carousel-item-right),
            .active.carousel-item-left {
                transform: translateX(100%); /* Change to 100% for sliding left */
            }

        </style>

    </section>
@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
{{-- <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js
"></script> --}}

{{--
<!-- magnific popup -->
<script src="{{asset('resources/Magnific-Popup-master/dist/jquery.magnific-popup.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('resources/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>
<!-- wow js -->
<script src="{{asset('resources/WOW-master/dist/wow.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script> --}}
{{-- Custom Js --}}
{{-- <script src="{{asset('js/script.js')}}">
<script type='text/javascript' src='https://boheco1.com/wp-includes/js/wp-embed.min.js?ver=5.4.12'></script>
<script type='text/javascript' src='https://boheco1.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
 --}}



{{--
</body>
</html> --}}
