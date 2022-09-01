<div class="position-relative px-lg-5" style="z-index: 9;">
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
        <a href="" class="navbar-brand">
            <h1 class="text-uppercase text-primary mb-1">Royal Cars</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">

                @if (request()->route()->getName() == 'sitlogin.')
                    <a href="{{ route('sit.logout') }}" class="nav-item nav-link text-danger">Logout</a>

                    <a href="{{ route('sitlogin.') }}" class="nav-item nav-link text-primary">HOME</a>
                    <a href="{{ route('sitlogin.showcar') }}" class="nav-item nav-link text-primary">Show Car</a>
                    <a href="{{ route('sitlogin.shows') }}" class="nav-item nav-link text-primary">Show spareparts</a>
                @elseif (request()->route()->getName() == 'sitlogin.ordersp')
                    <a href="{{ route('sitlogin.') }}" class="nav-item nav-link text-primary">HOME</a>
                    <a href="{{ route('sitlogin.showcar') }}" class="nav-item nav-link text-primary">Show Car</a>
                    <a href="{{ route('sitlogin.shows') }}" class="nav-item nav-link text-primary">Show spareparts</a>
                @elseif (request()->route()->getName() == 'sitlogin.order')
                    <a href="{{ route('sitlogin.') }}" class="nav-item nav-link text-primary">HOME</a>
                    <a href="{{ route('sitlogin.showcar') }}" class="nav-item nav-link text-primary">Show Car</a>
                    <a href="{{ route('sitlogin.shows') }}" class="nav-item nav-link text-primary">Show spareparts</a>
                @elseif (request()->route()->getName() == 'sitlogin.showcar')
                    <a href="{{ route('sitlogin.') }}" class="nav-item nav-link text-primary">HOME</a>
                    <a href="{{ route('sitlogin.showcar') }}" class="nav-item nav-link text-primary">Show Car</a>
                    <a href="{{ route('sitlogin.shows') }}" class="nav-item nav-link text-primary">Show spareparts</a>
                @elseif (request()->route()->getName() == 'sitlogin.shows')
                    <a href="{{ route('sitlogin.') }}" class="nav-item nav-link text-primary">HOME</a>
                    <a href="{{ route('sitlogin.showcar') }}" class="nav-item nav-link text-primary">Show Car</a>
                    <a href="{{ route('sitlogin.shows') }}" class="nav-item nav-link text-primary">Show spareparts</a>
                @elseif (request()->route()->getName() == 'sit')
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">siting</a>
                        <div class="dropdown-menu rounded-0 m-0">

                            <a href="{{ route('sit.loginPage') }}" class="dropdown-item">Log in</a>
                            <a href="{{ route('sit.re') }}" class="dropdown-item">Sing Up</a>

                        </div>
                    </div>
                @endif



            </div>
        </div>
    </nav>
</div>
</div>
<!-- Navbar End -->
