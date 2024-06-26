@extends('admin.master')

@section('content')
    <div class="row">

        <div class="container">
            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">تعديل علي طلب قطع غيار</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('admin.order.update', $order->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">الاسم</label>
                                <input type="text" value="{{ $order->name }}" class="form-control" id="text"
                                    name="name">

                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="adress">العنوان</label>
                                <input type="text" value="{{ $order->adress }}" class="form-control" id="text"
                                    name="adress">

                                @error('adress')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="phone">الهاتف</label>
                                <input type="text" value="{{ $order->phone }}" class="form-control" id="text"
                                    name="phone">

                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone2"> هاتف اخر</label>
                                <input type="text" value="{{ $order->phone2 }}" class="form-control" id="text"
                                    name="phone2">

                                @error('phone2')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="salary">السعر</label>
                                <input type="number" value="{{ $order->salary }}" class="form-control" id="text"
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
                                        <option value="{{ $user->id }}"
                                            {{ $order->user_id == $user->id ? 'selected' : '' }}> {{ $user->name }}
                                        </option>
                                    @endforeach

                                </select>
                                @error('user_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="usaer_id">قطع الغيار</label>
                                <select name="spare_parts_id" class="custom-select form-control-border"
                                    id="exampleSelectBorder">
                                    <option value="0"> اختر </option>
                                    @foreach ($spareparts as $sparepart)
                                        <option value="{{ $sparepart->id }}"
                                            {{ $order->spare_parts_id == $sparepart->id ? 'selected' : '' }}>
                                            {{ $sparepart->name }}</option>
                                    @endforeach

                                </select>
                                @error('spare_parts_id')
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
