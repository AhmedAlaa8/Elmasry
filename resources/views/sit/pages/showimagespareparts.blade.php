@include('sit.layouts.head')
@php

$spareparts = $spareparts->image_s;

$images = explode(' ', $spareparts);

@endphp
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
