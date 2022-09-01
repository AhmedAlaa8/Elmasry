<!-- Banner Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-banner py-5 px-4 text-center">
            <div class="py-5">
                <h1 class="display-1 text-uppercase text-primary mb-4">50% OFF</h1>
                <h1 class="text-uppercase text-light mb-4">Special Offer For New Members</h1>
                <p class="mb-4">Only for Sunday from 1st Jan to 30th Jan 2045</p>

            </div>
        </div>
    </div>
</div>
<!-- Banner End -->


<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center">02</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Find Your Car</h1>
        @if (request()->route()->getName() == 'sitlogin.')
            <a href="{{ route('sitlogin.showcar') }}" style="margin-left: 41%" class="btn btn-info mb-4 py-2 px-5">Show
                Car</a>
        @else
            <a href="{{ route('sit.loginPage') }}" style="margin-left: 41%" class="btn btn-info mb-4 py-2 px-5">login
                Now</a>
        @endif

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{ asset('sit') }}/img/car-rent-1.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item active mb-4">
                    <img class="img-fluid mb-4" src="{{ asset('sit') }}/img/car-rent-2.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{ asset('sit') }}/img/car-rent-3.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                </div>
            </div>

        </div>
        @if (request()->route()->getName() == 'sitlogin.')
            <a href="{{ route('sitlogin.showcar') }}" style="margin-left: 41%" class="btn btn-info  py-2 px-5">Show
                Car</a>
        @else
            <a href="{{ route('sit.loginPage') }}" style="margin-left: 41%" class="btn btn-info mt-2 py-2 px-5">login
                Now</a>
        @endif
    </div>
</div>
<!-- Rent A Car End -->
