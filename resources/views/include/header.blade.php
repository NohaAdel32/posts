<div class="container py-5 px-2 bg-primary">
    <div class="row py-5 px-4">
        <div class="col-sm-6 text-center text-md-left">
            <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">@yield('title')</h1>
        </div>
        <div class="col-sm-6 text-center text-md-right">
            <div class="d-inline-flex pt-2">
                <h4 class="m-0 text-white"><a class="text-white" href="{{route('index')}}">Home</a></h4>
                <h4 class="m-0 text-white px-2">/</h4>
                <h4 class="m-0 text-white">@yield('title')</h4>
            </div>
        </div>
    </div>
</div>