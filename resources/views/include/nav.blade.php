<div class="wrapper">
    <div class="sidebar">
        <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
            <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="{{asset('assets/img/profile.jpg')}}" alt="Image">
            <h1 class="font-weight-bold">Kate Glover</h1>
            <p class="mb-4">
                Justo stet no accusam stet invidunt sanctus magna clita vero eirmod, sit sit labore dolores lorem. Lorem at sit dolor dolores sed diam justo
            </p>
            <div class="d-flex justify-content-center mb-5">
                <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <a href="" class="btn btn-lg btn-block btn-primary mt-auto">Hire Me</a>
        </div>
        <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
            <i class="fas fa-2x fa-angle-double-right text-primary"></i>
        </div>
    </div>
    <div class="content">
        <!-- Navbar Start -->
        <div class="container p-0">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav m-auto">
                        <a href="{{route('index')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{route('Posts')}}" class="nav-item nav-link">My Blogs</a>
                    
                        <a href="{{route('addPost')}}" class="nav-item nav-link">Add Blog</a>
                        @guest
                        <a href="{{ route('register') }}" class="nav-item nav-link">Sign Up</a>
                        <a href="{{ route('login') }}" class="nav-item nav-link">Sign In</a>
                    @endguest
                    @auth
                    <form method="POST" action="{{ route('logout') }}" class="nav-item nav-link">
                        @csrf
                        <button type="submit" class="btn btn-link nav-item nav-link" style="text-decoration:none;">Logout</button>
                    </form>
                @endauth
                    </div>
                </div>
            </nav>
        </div>