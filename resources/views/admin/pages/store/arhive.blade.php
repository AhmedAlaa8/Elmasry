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
                    <h3 class="card-title"> المخزن</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>

                                <th>#</th>
                                <th> اسم المنتج</th>

                                <th>السعر</th>

                                <th>الضبط</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($stores as $key => $store)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $store->name_category }}</td>
                                    <td>{{ $store->salary_category }}</td>

                                    <td>

                                        <form action="{{ route('admin.store.restore', $store->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $store->id }}">
                                            <button type="submit" id="restore" class="btn btn-outline-info m-2">
                                                <i class="fas fa-trash-restore"></i>
                                            </button>
                                        </form>

                                        <form action="{{ route('admin.store.trash', $store->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $store->id }}">
                                            <button type="submit" id="trash" class="btn btn-outline-danger ml-2">
                                                {{-- <i class="fas fa-trash"></i> --}}
                                                <i class="far fa-calendar-times"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>
                                    المجموع
                                </td>
                                <td>
                                    =============>
                                </td>
                                <td>
                                    {{ $stores->sum('salary_category') }}
                                </td>
                                <td>

                                </td>
                            </tr>


                        </tbody>


                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th> اسم المنتج</th>

                                <th>السعر</th>

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

    <script>
        $('#trash').click(function() {
            if (confirm('سوف يتم الحذف نهائيا')) {

                return true;

            } else {


                return false;

            }
        })
        $('#restore').click(function() {
            if (confirm('هل تريد الاسترجاع')) {

                return true;

            } else {


                return false;

            }
        })
    </script>
@endsection
