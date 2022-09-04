<!-- Banner Start -->

<!-- Banner End -->


<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center">03</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Find Your Car</h1>
        @if (request()->route()->getName() == 'sitlogin.')
            <a href="{{ route('sitlogin.shows') }}" style="margin-left: 41%" class="btn btn-info mb-4 py-2 px-5">Show
                spareparts</a>
        @else
            <a href="{{ route('sit.loginPage') }}" style="margin-left: 41%" class="btn btn-info mb-4 py-2 px-5">login
                Now</a>
        @endif
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    @php
                        $x = explode(' ', $spareparts[0]->image_s);
                    @endphp
                    <img class="img-fluid mb-4" style="height: 200px" src="{{ asset('images/spareparts') . "/$x[0]" }}"
                        alt="">
                    <h4 class="text-uppercase mb-4">{{ $spareparts[0]->name }}</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>

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
                        {{ $spareparts[0]->detilse }}
                    </div>
                    <a class="btn btn-primary px-3" href="">{{ $spareparts[0]->salary }}</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    @php
                        $x = explode(' ', $spareparts[1]->image_s);
                    @endphp
                    <img class="img-fluid mb-4" style="height: 200px" src="{{ asset('images/spareparts') . "/$x[0]" }}"
                        alt="">
                    <h4 class="text-uppercase mb-4">{{ $spareparts[1]->name }}</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>

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
                        {{ $spareparts[1]->detilse }}
                    </div>
                    <a class="btn btn-primary px-3" href="">{{ $spareparts[1]->salary }}</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    @php
                        $x = explode(' ', $spareparts[2]->image_s);
                    @endphp
                    <img class="img-fluid mb-4" style="height: 200px" src="{{ asset('images/spareparts') . "/$x[0]" }}"
                        alt="">
                    <h4 class="text-uppercase mb-4">{{ $spareparts[2]->name }}</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>

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
                        {{ $spareparts[2]->detilse }}
                    </div>
                    <a class="btn btn-primary px-3" href="">{{ $spareparts[2]->salary }}</a>
                </div>
            </div>


            @if (request()->route()->getName() == 'sitlogin.')
                <a href="{{ route('sitlogin.shows') }}" style="margin-left: 41%"
                    class="btn btn-info mt-2 py-2 px-5">Show
                    spareparts</a>
            @else
                <a href="{{ route('sit.loginPage') }}" style="margin-left: 41%"
                    class="btn btn-info mt-2 py-2 px-5">login
                    Now</a>
            @endif
        </div>
    </div>
</div>
<!-- Rent A Car End -->
