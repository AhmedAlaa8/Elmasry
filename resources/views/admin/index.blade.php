@extends('admin.master')

@section('content')
    <div class="row">
        <h1>hello Admin</h1>
    </div>
@endsection


@section('bread')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">الصفحة الرئيسية</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">الرئيسية</li>
            </ol>
        </div>
    </div>
@endsection
