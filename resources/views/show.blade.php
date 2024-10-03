@extends('layouts.testHome')
@section('content')
<div class="container py-5 px-2 bg-white">
    <div class="row px-4">
        <div class="col-12">
            <img class="img-fluid mb-4" src="{{asset('uploads/'.$post->image)}}" alt="Image">
            <h2 class="mb-3 font-weight-bold">{{$post->title}}</h2>
            <div class="d-flex">
                <p class="mr-3 text-muted"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</p>
                <p class="mr-3 text-muted"><i class="fa fa-folder"></i> Web Design</p>
                <p class="mr-3 text-muted"><i class="fa fa-comments"></i> 15 Comments</p>
            </div>
            <p>{{$post->body}}</p>
            
            <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit voluptua eos. Dolores et no stet magna et gubergren amet dolor sit, lorem dolore est vero et.</p>
        </div>
        
        <div class="col-12 py-4">
            <div class="btn-group btn-group-lg w-100">
                <button type="button" class="btn btn-outline-primary"><i class="fa fa-angle-left mr-2"></i> Previous</button>
                <button type="button" class="btn btn-outline-primary">Next<i class="fa fa-angle-right ml-2"></i></button>
            </div> 
        </div>
        
        
    </div>
</div>

@endsection
@section('title')
My Blog Details
@endsection