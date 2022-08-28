@extends('admin.master')

@section('content')
    <div class="row">

    </div>
@endsection


@section('bread')
    <div class="row mb-2">
        <div class="col-sm-12">
            <div class="lockscreen-wrapper">
                <div class="lockscreen-logo ">
                    <a href=""><b>Hello </b>Admin</a>
                </div>

                <div class="lockscreen-name"></div>


                <div class="lockscreen-item mt-5">

                    <div style="margin-left: 110px;" class="lockscreen-image">
                        <img src="{{ asset('adminLTE') }}/dist/img/user1-128x128.jpg" alt="User Image">
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
