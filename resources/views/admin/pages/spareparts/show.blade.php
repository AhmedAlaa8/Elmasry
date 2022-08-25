@extends('admin.master')

@section('content')
    <div class="row">

        <div class="container">
            <div class="col-md-12">
                @php
                    
                    $spareparts = $spareparts->image_s;
                    $images = explode(' ', $spareparts);
                    
                @endphp
                @foreach ($images as $image)
                    <div class="card card-primary">
                        <div class="col-sm-4">
                            <div class="position-relative p-3 bg-gray" style="height: 180px">
                                <div class="ribbon-wrapper ribbon-xl">
                                    <div class="ribbon bg-danger text-xl">
                                        Ribbon
                                    </div>
                                </div>

                                <img style="width: 200px;height : 150px"
                                    src="{{ asset('images/spareparts') . '/' . $image }}" alt="photo">


                            </div>
                        </div>

                    </div>
                @endforeach
            </div>




        </div>

    </div>
    </div>
    </div>
@endsection


@section('bread')
@endsection
