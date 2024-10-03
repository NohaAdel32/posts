@extends('layouts.testHome')
@section('content')
<div class="container bg-white pt-5">
    <div class="row">
    @if(session('danger'))
    <div class="alert alert-danger">
        {{session('danger')}}
    </div>
    @endif
</div>
 @foreach ($posts as $post)
    <div class="row blog-item px-3 pb-5">
        <div class="col-md-5">
            <img class="img-fluid mb-4 mb-md-0" src="{{ asset('uploads/'.$post->image) }}" alt="Image">
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
            <br>
            <a href="editPost/{{ $post->id }}" ><i class="fas fa-edit"></i></a>
            <a href="delete/{{ $post->id }}"  onclick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt"></i></a>
            @foreach ($post->files as $file)
            @if($file)
            <p>{{ $file->name }}</p>
    <p>File: <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank" download>download</a></p>
@endif
    @endforeach
            <a href="upload/{{$post->id}}"><i class="fas fa-upload"></i></a>
        </div>
    </div>
    @endforeach
    {{-- <div class="row px-3 pb-5">
        <nav aria-label="Page navigation">
          <ul class="pagination m-0 mx-3">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
               
              </a>
            </li>
          </ul>
        </nav>
    </div> --}}
    {{ $posts->links('pagination::bootstrap-4') }}
    
</div>

@endsection
@section('title')
My Blog
@endsection