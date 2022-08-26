@extends('admin.master')

@section('content')
    <div class="row">

        <div class="container">
            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">اضافه سياره</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('admin.ordercar.store') }}">
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
                                <label for="adress">العنوان</label>
                                <input type="text" value="{{ old('adress') }}" class="form-control" id="text"
                                    name="adress">

                                @error('adress')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="phone">الهاتف</label>
                                <input type="text" value="{{ old('phone') }}" class="form-control" id="text"
                                    name="phone">

                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone2"> هاتف اخر</label>
                                <input type="text" value="{{ old('phone2') }}" class="form-control" id="text"
                                    name="phone2">

                                @error('phone2')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="salary">السعر</label>
                                <input type="number" value="{{ old('salary') }}" class="form-control" id="text"
                                    name="salary">

                                @error('salary')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="usaer_id">المستخدم</label>
                                <select name="user_id" class="custom-select form-control-border" id="exampleSelectBorder">
                                    <option value="0"> اختر </option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"> {{ $user->name }}</option>
                                    @endforeach

                                </select>
                                @error('user_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="car_id">سياره</label>
                                <select name="car_id" class="custom-select form-control-border" id="exampleSelectBorder">
                                    <option value="0"> اختر </option>
                                    @foreach ($cars as $car)
                                        <option value="{{ $car->id }}"> {{ $car->name }}</option>
                                    @endforeach

                                </select>
                                @error('car_id')
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
