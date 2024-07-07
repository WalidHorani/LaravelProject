<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark"
    style='color:white'>
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style='color:white;'>Navbar</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style='color:white;'>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style='color:white;'>Link</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                @if (Route::has('user.loginForm'))
                    @auth

                        {{-- dashboard button --}}
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link active" style='color:white;'>
                                Dashboard
                            </a>
                        </li>

                    @else

                        {{-- log in button --}}
                        <li class="nav-item">
                            <a href="{{ route('user.loginForm') }}" class="nav-link active" style='color:white;'>
                                Log in
                            </a>
                        </li>

                        @if (Route::has('user.registerForm'))

                            {{-- register button --}}
                            <li class="nav-item">
                                <a href="{{ route('user.registerForm') }}" class="nav-link active" style='color:white;'>
                                    Register
                                </a>
                            </li>

                        @endif
                    @endauth
                @endif

                {{-- lang dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style='color:white'>
                        Lang
                    </a>

                    {{-- dropdown elements --}}
                    <ul class="dropdown-menu">

                        {{-- en option --}}
                        <li><a class="dropdown-item" href="#" style='color:white'>en</a></li>

                        {{-- ar option --}}
                        <li><a class="dropdown-item" href="#" style='color:white'>ar</a></li>
                        
                        {{-- <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>

                </li>

            </ul>
        </div>
    </div>
</nav>
