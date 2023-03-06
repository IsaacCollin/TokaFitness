<header class="p-3 mb-3 border-bottom bg-light">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/dashboard" class="rounded-circle d-flex align-items-center mb-2 mb-lg-0">
                <img class="bi me-2" src="{{ asset('/img/logo/TF.svg') }}" alt="ToKaFintess logo - TF" role="img"
                    aria-label="TF">
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ url('dashboard') }}" class="nav-link px-2 link-dark">Home</a></li>
                <li><a href="{{ url('social') }}" class="nav-link px-2 link-dark">Social</a></li>
                <li><a href="#" class="nav-link px-2 disabled">Plans</a></li>
                <li><a href="{{ url('health') }}" class="nav-link px-2 link-dark">Health</a>
                </li>
            </ul>
            <div class="dropdown text-end">
                <label class="d-none" for="profile">Profile Dropdown</label>
                <a class="d-block link-dark text-decoration-none dropdown-toggle" id="profile"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user fa-lg"></i>
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="{{ url('subscriptions') }}">Subscriptions</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ url('profile') }}">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ url('signout') }}">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
