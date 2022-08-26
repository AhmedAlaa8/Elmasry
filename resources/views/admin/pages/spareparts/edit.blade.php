@extends('admin.master')

@section('content')
    <div class="row">

        <div class="container">
            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">تعديل قطع الغيار</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('admin.spare_parts.update', $spareparts->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">الاسم</label>
                                <input type="text" value="{{ $spareparts->name }}" class="form-control" id="text"
                                    name="name">

                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="image">اختر صوره</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" multiple name="image_s[]" value="{{ $spareparts->image_s }}"
                                            class="custom-file-input" id="image">

                                        <label class="custom-file-label" for="image">اختر </label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">تحميل</span>
                                    </div>
                                </div>
                                @error('image_s')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>




                            <div class="form-group">
                                <label for="salary"> السعر</label>
                                <input type="number" value="{{ $spareparts->salary }}" class="form-control" id="salary"
                                    name="salary">
                                @error('salary')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="detilse">تفاصيل</label>
                                <textarea class="form-control" name="detilse" rows="3" placeholder="Enter ...">{{ $spareparts->detilse }}</textarea>
                                @error('detilse')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-check">
                                <input type="checkbox" {{ $spareparts->existing ? 'checked' : '' }} name="existing"
                                    value="1" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">موجود</label>
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
