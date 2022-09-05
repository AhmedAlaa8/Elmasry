@extends('admin.master')

@section('content')
    <div class="row">

    </div>
@endsection


@section('bread')
    <div class="row mb-2">
        <div class="col-sm-12">


            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i
                                        class="nav-icon fas fa-store-alt"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">السعر الكلي للبضاعه </span>
                                    <span class="info-box-number">
                                        {{ $store->sum('salary_category') }}
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i
                                        class="nav-icon fas fa-trailer"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">طلبات قطع الغيار</span>
                                    <span class="info-box-number">{{ $orders->count() }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i
                                        class="nav-icon fas fa-car"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">طلبات السيارات</span>
                                    <span class="info-box-number">{{ $ordercars->count() }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">كل الطلبات</span>
                                    <span class="info-box-number">{{ $orders->count() + $ordercars->count() }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
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
