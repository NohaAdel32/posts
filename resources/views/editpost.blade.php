@extends('layouts.testHome')
@section('content')

<div class="col-12">
    <h3 class="mb-4 font-weight-bold">Add My Blog</h3>
     <div class="row">
        @if(session('success'))
      <div class="alert alert-success">
      {{session('success')}}
      </div>
      @endif
    </div>
    <form action="{{route('updatePost',$posts->id)}}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" id="name" name="title" required="required" value="{{$posts->title}}">
            <div style="color : red;">
                @error('title')
                  {{$message}}
                @enderror</div>
        </div>
        <div class="form-group">
            <label for="message">Content</label>
            <textarea id="message" cols="30" rows="5" class="form-control" name="body" required="required" >{{$posts->body}}</textarea>
            <div style="color : red;">
                @error('body')
                  {{$message}}
                @enderror</div>
        </div>
        <div class="form-group">
            <input type="file" class="form-control" id="image" name="image" >
            <div style="color : red;">
                @error('body')
                  {{$message}}
                @enderror</div>
                <br>
                <img src="{{ asset('uploads/'.$posts->image) }}" alt="{{$posts->title}}" style="width:200px;">
        </div>
        <div class="form-group">
            <input type="submit" value="Edit Blog " class="btn btn-primary">
        </div>
</div>
@endsection
@section('title')
Add My Blog
@endsection