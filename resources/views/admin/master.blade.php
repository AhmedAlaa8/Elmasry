@include('admin.layouts.head')
@include('admin.layouts.nav')
@include('admin.layouts.asid')


<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            @yield('bread')

        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            @yield('content')

        </div>
    </section>

</div>
@include('admin.layouts.footer')
