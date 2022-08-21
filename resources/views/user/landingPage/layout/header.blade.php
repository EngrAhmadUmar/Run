<header class="header sticky-top bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <div class="navigation navigation-2"> -->
                <div class="navigation">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"><img src="{{ asset('user/images/ezgif.png') }}"
                                loading="lazy" alt="…" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
                            <ul class="navbar-nav landing-nav">

                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#">Home</a>
                                </li> --}}

                                @guest
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                                    </li> --}}

                                    <li class="nav-item mt-3 mt-lg-0">
                                        <a href="{{ route('login') }}"
                                            class="
                                    nav-link
                                    btn btn-primary btn-sm
                                    text-white
                                ">Login</a>
                                    </li>

                                    <li class="nav-item mt-3 mt-lg-0">
                                        <a href="{{ route('register') }}"
                                            class="
                                    nav-link
                                    btn btn-outline-primary btn-sm text-primary
                                ">Register</a>
                                    </li>

                                    <li class="nav-item mt-3 mt-lg-0">
                                        <a href="{{ route('chat') }}"
                                            class="
                                    nav-link
                                    btn btn-primary btn-sm text-white
                                ">Chat
                                            Admin</a>
                                    </li>

                                @endguest

                                @auth
                                    <li class="nav-item mt-3 mt-lg-0">
                                        <a href="{{ route('dashboard') }}"
                                            class="
                                nav-link
                                btn btn-primary btn-sm
                                text-white
                            ">Dashboard</a>
                                    </li>

                                    <li class="nav-item mt-3 mt-lg-0">
                                        <a href="{{ route('chat') }}"
                                            class="
                                    nav-link
                                    btn btn-outline-primary btn-sm text-primary
                                ">Chat
                                            Admin</a>
                                    </li>

                                @endauth

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
