<style>
    .modal{
        backdrop-filter: blur(5px);
    }
</style>

    <div class="modal fade" id="newsView-{{ $new->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <h6 class="text-muted mx-3 mt-2">{{ Carbon\Carbon::parse($new->dateTime)->format('M d, Y') }}</h6>
             <h4 class="text-dark text-center" style="font-weight: bolder;">{{ $new->title }}</h4>
            <div class="modal-body">
              <p><p class=" text-dark" style="padding-left: 10px; padding-right: 10px;">
                {{$new->article}}
            </p></p>
            </div>
            @foreach (json_decode($new->image, true) as $img)
            <div style="height: 80%;
            width: 100%; padding-left: 20px; padding-right: 20px;">
                    <figure style="box-shadow: 2px 4px 8px rgba(0,0,0,0.4); background-color: rgba(255, 251, 0, 0.712); "><img style="padding: 5px;" src="{{  url('uploads/news/' . $img) }}" alt="Image"></figure>
              
               </div>
            @endforeach
          </div>
        </div>
      </div>

{{-- <section class="news">
    <div class="container">
        <div class="card-header1 text-muted ">
            <h1 class=" text-light">NEWS <i class="fa fa-info-circle" aria-hidden="true"></i></h1>
            <div class="card-header2">
                <a href="{{ route('news.index') }}" class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            </div>
        </div>
        <hr>

        <section>



     <h2 class=" text-light text-center">{{$news->title}}</h2>
     @foreach (json_decode($news->image, true) as $img)
     <figure><img src="{{  url('uploads/news/' . $img) }}" style="height: 650px" alt="Image"></figure>
     @endforeach
			<h1></h1>

			<p class="mg text-muted" style="font-weight: 900">Eyes Here <i class="fas fa-eye"></i></p>
            <p class=" text-light">
                {{$news->article}}
            </p>
            <div class="date">
                <p class="p-date  text-light">Published Date:</p> <p class=" text-center" style="font-weight: 700; color:white; opacity:0.6">{{ Carbon\Carbon::parse($news->dateTime)->format('M d, Y') }}</p>
            </div>
			</section>
    </div>
</section>


    <script>
        function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
    </script> --}}


