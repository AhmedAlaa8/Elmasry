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
        <div class="container-fluid py-5">
            <div class="container p-5 ">
                <div style="margin-left: 26%">
                    <div class="col-lg-7 mb-2">


                        <div class="shadow-lg p-5 mb-2  bg-body rounded">
                            <form method="post" action="{{ route('sitlogin.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">الاسم</label>
                                        <input type="text" value="{{ old('name') }}" class="form-control"
                                            id="text" name="name">

                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="adress">العنوان</label>
                                        <input type="text" value="{{ old('adress') }}" class="form-control"
                                            id="text" name="adress">

                                        @error('adress')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="phone">الهاتف</label>
                                        <input type="text" value="{{ old('phone') }}" class="form-control"
                                            id="text" name="phone">

                                        @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="phone2"> هاتف اخر</label>
                                        <input type="text" value="{{ old('phone2') }}" class="form-control"
                                            id="text" name="phone2">

                                        @error('phone2')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>








                                    <input type="hidden" value="{{ $car->salary }}" name="salary">
                                    <input type="hidden" value="{{ $car->id }}" name="car_id">
                                    <input type="hidden" value="{{ $user->id }}" name="user_id">






                                </div>


                                <!-- /.card-body -->


                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('sit.layouts.footer')
