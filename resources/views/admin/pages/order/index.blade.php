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
                    <h3 class="card-title">جميع طلبات قطع الغيار</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>الاسم</th>
                                <th>الهاتف</th>
                                <th> هاتف اخر</th>
                                <th> السعر</th>
                                <th> قطع الغيار</th>
                                <th>المستخدم</th>
                                <th>العنوان</th>
                                <th>الوقت</th>
                                <th>الضبط</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($orders as $key => $order)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->phone2 }}</td>
                                    <td>{{ $order->salary }}</td>
                                    <td>{{ $order->spare_parts->name }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->adress }}</td>
                                    <td>{{ $order->created_at }}</td>


                                    <td>
                                        <a href="{{ route('admin.order.edit', $order->id) }}"
                                            class="btn btn-outline-info m-2">
                                            <i class="fas fa-highlighter"></i>
                                        </a>



                                        <form action="{{ route('admin.order.delete', $order->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $order->id }}">
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
                                <th>الهاتف</th>
                                <th> هاتف اخر</th>
                                <th> السعر</th>
                                <th> قطع الغيار</th>
                                <th>المستخدم</th>
                                <th>العنوان</th>
                                <th>الوقت</th>
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
