@extends('admin.master')

@section('content')
    <div class="row">

        <div class="container">
            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">اضافه منتج في المخزن</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('admin.store.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name_category">الاسم</label>
                                <input type="text" value="{{ old('name_category') }}" class="form-control" id="text"
                                    name="name_category">

                                @error('name_category')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="salary_category"> السعر</label>
                                <input type="number" value="{{ old('salary_category') }}" class="form-control"
                                    id="salary_category" name="salary_category">
                                @error('salary_category')
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
