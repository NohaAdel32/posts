<!DOCTYPE html>
<html lang="en">
    <head>
        @include('include.head')
    </head>

    <body>
        @include('include.nav')
                <!-- Navbar End -->
                @if(Request::route()->getName() != 'index')
            @include('include.header')  
            @endif  
                <!-- Carousel Start -->
                @yield('content')
                <!-- Blog List End -->
                
                
                <!-- Footer Start -->
        @include('include.footer')
    </body>
</html>
