@include('sit.layouts.head')
@include('sit.layouts.nav')

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
        <div class="row">
            @foreach ($cars as $car)
                @php
                    $x = explode(' ', $car->image_car);
                @endphp
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" style="height: 200px"
                            src="{{ asset('images/car/') }}/{{ $x[0] }}" alt="">
                        <h5> <a class="nav-item nav-link text-info " target="_blank"
                                href="{{ route('sitlogin.showimagecar', $car->id) }}">Show image</a></h5>
                        <h4 class="text-uppercase mb-4">{{ $car->name }}</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>{{ $car->type }}</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>AUTO</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span></span>
                            </div>
                        </div>
                        <div class="nav-item nav-link">
                            {{ $car->detilse }}
                        </div>
                        <a class="btn btn-primary px-3"
                            href="{{ route('sitlogin.order', $car->id) }}">{{ $car->salary }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Rent A Car End -->



@include('sit.layouts.footer')
