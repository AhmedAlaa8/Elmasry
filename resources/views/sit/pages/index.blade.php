@php
session_start();
if (isset($_SESSION['user'])) {
    header('location:/sitlogin');
    die();
}
@endphp

@include('sit.layouts.head')
@include('sit.layouts.nav')
@include('sit.layouts.carousel')
@include('sit.layouts.about')

@include('sit.layouts.car')
@include('sit.layouts.spareparts')
@include('sit.layouts.tame')


@include('sit.layouts.end')

@include('sit.layouts.footer')
