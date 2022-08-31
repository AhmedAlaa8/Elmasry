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
                @else
                @endif

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cars</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="car.html" class="dropdown-item">Car Listing</a>
                        <a href="detail.html" class="dropdown-item">Car Detail</a>
                        <a href="booking.html" class="dropdown-item">Car Booking</a>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</div>
</div>
<!-- Navbar End -->
