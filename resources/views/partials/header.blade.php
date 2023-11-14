<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid py-2">
            <a class="navbar-brand" href="/">
                <img class="w-50" src="img/logo1.png" alt="Review Hub Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @auth
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    <a class="nav-link" href="">
                        <div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
        
                                <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill">
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </a>
                    @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</div>
