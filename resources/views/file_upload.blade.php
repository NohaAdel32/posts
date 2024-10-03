@extends('layouts.testHome')
@section('content')

<br>
    <br>
    <br>
    <br>
<form action="{{ route('storeFile') }}" method="POST" enctype="multipart/form-data">
<div class="row">
        @if (session('success'))
 <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    </div>
    @csrf
    <input type="hidden" name="post_id" value="{{ $posts->id }}">
    <div style=" width:100px; height:300px">
    <label for="file">Upload File:</label>
    <input type="file" name="file" required>
    <div style="color : red;">
        @error('file')
          {{$message}}
        @enderror</div>
    <br>
    <br>
    <button type="submit">Upload</button>
</form>
</div>
<br>
    <br>
    <br>
    <br>
@endsection
@section('title')
Upload
@endsection