<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid px-4 py-1">
        <a class="navbar-brand fs-2 fw-semibold" href="{{ url('/') }}">¡Supérate! Got Talent</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center justify-content-md-end" id="navbarSupportedContent">
            <div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2 text-center py-2 py-md-0">
                        <a href="{{ url('login') }}">
                            <button class="btn btn-primary skin-color py-0 px-4 fs-5 rounded-4" type="submit">
                                @guest
                                    Log in
                                @endguest
                                @auth
                                    Categories
                                @endauth
                            </button>
                        </a>
                    </li>
                    @auth
                    <li class="nav-item px-2 text-center py-2 py-md-0">
                        <a href="{{ url('profile1') }}">
                            <button class="btn btn-primary skin-color py-0 px-4 fs-5 rounded-4" type="submit">Profile</button>
                        </a>
                    </li>
                    <li class="nav-item px-2 text-center py-2 py-md-0">
                        <a href="{{ url('logout') }}">
                            <button class="btn btn-primary skin-color py-0 px-4 fs-5 rounded-4" type="submit">Log out</button>
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
