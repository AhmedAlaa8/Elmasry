@extends('admin.master')

@section('content')
    <div class="row">

        <div class="container">
            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">اضافه مستخدم</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('admin.user.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">الاسم</label>
                                <input type="text" value="{{ old('name') }}" class="form-control" id="text"
                                    name="name">

                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">الهاتف</label>
                                <input type="text" value="{{ old('phone') }}" class="form-control" id="phone"
                                    name="phone">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="adress">العنوان</label>
                                <input type="text" value="{{ old('adress') }}" class="form-control" id="adress"
                                    name="adress">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">البريد الالكتروني</label>
                                <input type="email" value="{{ old('email') }}" class="form-control"
                                    id="exampleInputEmail1" name="email">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Password">كلمه السر</label>
                                <input type="password" class="form-control" id="password" name="password">
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Password1">تأكيد كلمه السر</label>
                                <input type="password" class="form-control" id="password1" name="password_confirmation">
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection


@section('bread')
@endsection
