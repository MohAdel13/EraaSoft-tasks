<div class="col-lg-8 col-md-12">
    <nav class="navbar navbar-expand-lg navigation-2 navigation">
        <a class="navbar-brand text-uppercase d-lg-none" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
            aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul id="menu" class="menu navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('profile.edit') }}" class="nav-link">Profile</a></li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link" style="background:none;border:none;">
                            Log Out
                        </button>
                    </form>
                </li>
            </ul>

            <ul class="list-inline mb-0 d-block d-lg-none">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="ti-twitter"></i></a></li>
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="ti-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="ti-pinterest"></i></a></li>
            </ul>
        </div>
    </nav>
</div>