@extends('admin.master')


@section('css')
    <link rel="stylesheet" href="{{ asset('adminLTE') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content')
    <div class="row">


        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">جميع السيارات</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>الاسم</th>
                                <th>الموديل</th>
                                <th>اللون</th>
                                <th>صوره</th>
                                <th>السعر</th>
                                <th>التفاصيل</th>
                                <th> الحاله </th>
                                <th>الضبط</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($cars as $key => $car)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $car->name }}</td>
                                    <td>{{ $car->type }}</td>
                                    <td>{{ $car->color }}</td>

                                    @php
                                        $x = explode(' ', $car->image_car);
                                    @endphp
                                    <td><img style="width: 100px ; height:100px"
                                            src="{{ asset('images/car') . '/' . $x[0] }}" alt="">
                                    </td>

                                    <td>{{ $car->salary }}</td>
                                    <td>{{ $car->detilse }}</td>
                                    <td>
                                        @if ($car->existing == 1)
                                            <p class="text-primary">موجود</p>
                                        @else
                                            <p class="text-danger">غيرموجود</p>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ route('admin.car.edit', $car->id) }}" class="btn btn-outline-info m-2">
                                            <i class="fas fa-highlighter"></i>
                                        </a>

                                        <a href="{{ route('admin.car.show', $car->id) }}"
                                            class="btn btn-outline-primary m-2">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <form action="{{ route('admin.car.delete', $car->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $car->id }}">
                                            <button type="submit" class="btn btn-outline-danger ml-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>


                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>الموديل</th>
                                <th>اللون</th>
                                <th>صوره</th>
                                <th>السعر</th>
                                <th>التفاصيل</th>
                                <th>الحاله</th>
                                <th>الضبط</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>


        </div>
    </div>
@endsection


@section('bread')
@endsection

@section('javascript')
    <script src="{{ asset('adminLTE') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('adminLTE') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('adminLTE') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('adminLTE') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('adminLTE') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('adminLTE') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('adminLTE') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('adminLTE') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('adminLTE') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
