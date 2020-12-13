<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white px-3">
        <a class="navbar-brand" href="{{url('/')}}">Travelgram</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2"><a href="#" class="nav-link active">Home</a></li>
                <li class="nav-item mx-md-2"><a href="#" class="nav-link">Package</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Service</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Flight</a>
                        <a href="#" class="dropdown-item">Hotel</a>
                        <a href="#" class="dropdown-item">Tour</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2"><a href="#" class="nav-link">Testimonial</a></li>
            </ul>

            @guest
            <!--Mobile Button-->
            <form action="" class="form-inline d-sm block d-md-none">
                <button class="btn btn-login my-2 my-sm-0" type="button"
                onclick="event.preventDefault(); location.href='{{url('login')}}';">
                    Login
                </button>
            </form>

            <!--Desktop Button-->
            <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href='{{url('login')}}';">
                    Login
                </button>
            </form>
            @endguest

            @auth
            <!--Mobile Button-->
            <form class="form-inline d-sm block d-md-none" action="{{url('logout')}}"
            method="POST">
                @csrf
                <button class="btn btn-login my-2 my-sm-0" type="submit">
                    Logout
                </button>
            </form>

            <!--Desktop Button-->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}"
            method="POST">
            @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                    Logout
                </button>
            </form>
            @endauth


        </div>
    </nav>
</div>
