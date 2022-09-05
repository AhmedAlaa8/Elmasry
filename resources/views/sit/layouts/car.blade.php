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
                    <img class="img-fluid mb-4" style="height: 200px" src="{{ asset('sit') }}/img/car-rent-1.png"
                        alt="">
                    <h4 class="text-uppercase mb-4">{{ $cars[0]->name }}</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>{{ $cars[0]->type }}</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>

                        </div>
                    </div>
                    <div class="nav-item nav-link">
                        {{ $cars[0]->detilse }}
                    </div>
                    @if (request()->route()->getName() == 'sitlogin.')
                        <a class="btn btn-primary px-3"
                            href="{{ route('sitlogin.order', $cars[0]->id) }}">{{ $cars[0]->salary }}</a>
                    @else
                        <a href="{{ route('sit.loginPage') }}" class="btn btn-info px-3">login
                            Now</a>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    @php
                        $x = explode(' ', $cars[1]->image_car);
                    @endphp
                    <img class="img-fluid mb-4" style="height: 200px" src="{{ asset('images/car') . "/$x[0]" }}"
                        alt="">
                    <h4 class="text-uppercase mb-4">{{ $cars[1]->name }}</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>{{ $cars[1]->type }}</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>

                        </div>
                    </div>
                    <div class="nav-item nav-link">
                        {{ $cars[1]->detilse }}
                    </div>
                    @if (request()->route()->getName() == 'sitlogin.')
                        <a class="btn btn-primary px-3"
                            href="{{ route('sitlogin.order', $cars[1]->id) }}">{{ $cars[1]->salary }}</a>
                    @else
                        <a href="{{ route('sit.loginPage') }}" class="btn btn-info px-3">login
                            Now</a>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    @php
                        $x = explode(' ', $cars[2]->image_car);
                    @endphp
                    <img class="img-fluid mb-4" style="height: 200px" src="{{ asset('images/car') . "/$x[0]" }}"
                        alt="">
                    <h4 class="text-uppercase mb-4">{{ $cars[2]->name }}</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>{{ $cars[2]->type }}</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>

                        </div>
                    </div>
                    <div class="nav-item nav-link">
                        {{ $cars[2]->detilse }}
                    </div>
                    @if (request()->route()->getName() == 'sitlogin.')
                        <a class="btn btn-primary px-3"
                            href="{{ route('sitlogin.order', $cars[2]->id) }}">{{ $cars[2]->salary }}</a>
                    @else
                        <a href="{{ route('sit.loginPage') }}" class="btn btn-info px-3">login
                            Now</a>
                    @endif
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
