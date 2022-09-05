@include('sit.layouts.head')
@include('sit.layouts.nav')
<div class="container-fluid py-5">
    <div class="container p-5 ">
        <div style="margin-left: 26%">
            <div class="col-lg-7 mb-2">

                <h2 style="margin-left: 38%">Order Car</h2>
                <div class="shadow-lg p-5 mb-2  bg-body rounded">
                    <form method="post" action="{{ route('sitlogin.store') }}">
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








                            <input type="hidden" value="{{ $car->salary }}" name="salary">
                            <input type="hidden" value="{{ $car->id }}" name="car_id">
                            <input type="hidden" value="{{ $user->id }}" name="user_id">






                        </div>


                        <!-- /.card-body -->


                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sit.layouts.footer')
