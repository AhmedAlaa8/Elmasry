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

                {{-- <a href="{{ route('sit.loginPage') }}" class="btn btn-primary rounded"> Log in </a>
                <a href="{{ route('sit.re') }}" class="btn btn-secondary rounded">Sing Up</a> --}}

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
    @php
        
        $spareparts = $spareparts->image_s;
        
        $images = explode(' ', $spareparts);
        
    @endphp

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">

        @include('sit.layouts.nav')

        <div class="container">

            <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Thumbnail Gallery</h1>

            <hr class="mt-2 mb-5">



            <div class="row text-center text-lg-start">
                @foreach ($images as $image)
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="{{ asset('images/spareparts') . '/' . $image }}"
                                alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        @include('sit.layouts.footer')
