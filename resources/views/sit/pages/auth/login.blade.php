@include('sit.layouts.head')
@include('sit.layouts.nav')
<div class="container-fluid py-5">
    <div class="container p-5 ">
        <div style="margin-left: 26%">
            <div class="col-lg-7 mb-2">


                <div class="shadow-lg p-5 mb-2  bg-body rounded">

                    <p class="fw-bold text-info text-center">مرحبا بك/ي في موقعنا</p>

                    <form action="{{ route('sit.login') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">


                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">

                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>

                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="row">

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sit.layouts.footer')
