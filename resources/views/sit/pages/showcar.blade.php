<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYAL CARS - Car Rental HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('sit') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('sit') }}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('sit') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('sit') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>info@example.com</a>

                </div>
            </div>



            <div class="col-md-6 text-center text-lg-right">


                <a href="{{ route('sit.logout') }}" class="btn btn-danger rounded"> Log out </a>


                <div class="d-inline-flex align-items-center ">

                    <a class="text-body px-3" href="">
                        {{-- <i class="fab fa-facebook-f"></i> --}}
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">

        @include('sit.layouts.nav')

        <!-- Banner Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="bg-banner py-5 px-4 text-center">
                    <div class="py-5">
                        <h1 class="display-1 text-uppercase text-primary mb-4">50% OFF</h1>
                        <h1 class="text-uppercase text-light mb-4">Special Offer For New Members</h1>
                        <p class="mb-4">Only for Sunday from 1st Jan to 30th Jan 2045</p>
                        @if (request()->route()->getName() == 'sitlogin')
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now</a>
                        @else
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now</a>
                        @endif
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
                        <div class="col-lg-4 col-md-6 mb-2">
                            <div class="rent-item mb-4">
                                <img class="img-fluid mb-4" src="{{ asset('sit') }}/img/car-rent-1.png" alt="">
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
                                <a class="btn btn-primary px-3" href="">{{ $car->salary }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Rent A Car End -->



        @include('sit.layouts.footer')
