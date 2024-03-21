<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">

        <a class="navbar-brand" href="/">MyGym Fitness</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a href="#home" class="nav-link smoothScroll">Home</a>
                </li>

                <li class="nav-item">
                    <a href="#about" class="nav-link smoothScroll">About Us</a>
                </li>

                <li class="nav-item">
                    <a href="#class" class="nav-link smoothScroll">Classes</a>
                </li>

                <li class="nav-item">
                    <a href="#schedule" class="nav-link smoothScroll">Schedules</a>
                </li>

                <li class="nav-item">
                    <a href="#contact" class="nav-link smoothScroll">Contact</a>
                </li>
               
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth <li class="nav-item">
                        <a href="{{ url('/admin') }}" class="nav-link smoothScroll">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link smoothScroll">Log in</a>
                    </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link smoothScroll">Register</a>
                        </li>
                        @endif
                    @endauth
                </div>
            @endif

            </ul>

            <ul class="social-icon ml-lg-3">
                <li><a href="https://facebook.com/" class="fa fa-facebook"></a></li>
                <li><a href="https://twitter.com/" class="fa fa-twitter"></a></li>
                <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
            </ul>
        </div>

    </div>
</nav>