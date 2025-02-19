@extends('layouts.testHome')
@section('content')
<div class="container p-0">
    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('assets/img/carousel-1.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="mb-3 text-white font-weight-bold">Lorem ipsum dolor sit amet</h2>
                    <div class="d-flex text-white">
                        <small class="mr-2"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                        <small class="mr-2"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                    <a href="" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('assets/img/carousel-2.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="text-white font-weight-bold">Lorem ipsum dolor sit amet</h2>
                    <div class="d-flex">
                        <small class="mr-2"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                        <small class="mr-2"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                    <a href="" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('assets/img/carousel-3.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="text-white font-weight-bold">Lorem ipsum dolor sit amet</h2>
                    <div class="d-flex">
                        <small class="mr-2"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                        <small class="mr-2"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                    <a href="" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- Blog List Start -->
@foreach ($posts as $post )
    
<div class="container bg-white pt-5">
    <div class="row blog-item px-3 pb-5">
        <div class="col-md-5">
            <img class="img-fluid mb-4 mb-md-0" src="{{asset('uploads/'.$post->image)}}" alt="{{$post->title}}">
        </div>
        <div class="col-md-7">
            <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">{{$post->title}}</h3>
            <div class="d-flex mb-3">
                <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> {{$post->created_at->format('d-M-Y')}}</small>
                <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
            </div>
            <p>
                {{Str::words($post->body,1)}}
            </p>
            <a class="btn btn-link p-0" href="show/{{$post->id}}">Read More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    @endforeach
    
</div>
<!-- Blog List End -->

{{ $posts->links('pagination::bootstrap-4') }}
<!-- Subscribe Start -->
<div class="container py-5 px-4 bg-secondary text-center">
    <h1 class="text-white font-weight-bold">Subscribe My Newsletter</h1>
    <p class="text-white">Subscribe and get my latest article in your inbox</p>
    <form class="form-inline justify-content-center">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Your Email">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Subscribe</button>
            </div>
          </div>
    </form>
</div>
<!-- Subscribe End -->


<!-- Blog List Start -->

</div>
@endsection