@extends('adminlte::page')

@section('title', 'Duty Schedules')

@section('content_header')
    <h1>Duty All</h1>
@stop

@section('content')
   <!-- /.card -->

   <div class="card">
    <div class="card-header">
        <h3 class="card-title">All Duty Schedules</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Duty Title</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>From Time</th>
                    <th>To Time</th>
                    <th>Duty Incharge</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($model as $duty)
                <tr>
                    <td>{{$duty->title}}</td>
                    <td>{{$duty->description}}</td>
                    <td>{{$duty->location}}</td>
                    <td>{{$duty->date}}</td>
                    <td>{{$duty->from_time}}</td>
                    <td>{{$duty->to_time}}</td>
                    <td>{{$duty->incharge_user_id}}</td>
                    <td>{{$duty->status}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Duty Title</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>From Time</th>
                    <th>To Time</th>
                    <th>Duty Incharge</th>
                    <th>Status</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('../vendor/almasaeed2010/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('../vendor/almasaeed2010/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('../vendor/almasaeed2010/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@stop

@section('js')
<!-- jQuery -->/
<!-- Bootstrap 4 -->
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>

<!-- DataTables  & Plugins -->
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/datatables/jquery.dataTables.min.js') }}></script>
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}></script>
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}></script>
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}></script>
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}></script>
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}></script>
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/jszip/jszip.min.js') }}></script>
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/pdfmake/pdfmake.min.js') }}></script>
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/pdfmake/vfs_fonts.js') }}></script>
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}></script>
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}></script>
<script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}></script>
<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
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
   
@stop
