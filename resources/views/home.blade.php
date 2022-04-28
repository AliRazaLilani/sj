{{-- @extends('adminlte::page', ['iFrameEnabled' => true]) --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Trip Dashboard</h1> --}}
@stop

@section('content')
    <div class="card-body">
        <form action={{ route('admin.check') }} method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-md-center">
                <div class="col-md-6 text-center">
                    <div class="form-group">
                        <h2>Select a Trip</h2>
                        <select required name="package_id" class="form-control select2" style="width: 100%;">
                            <option selected></option>
                            <option value="8">Arbaeen 2016 - Iraq</option>
                            <option value="9">Iraq Ziyarat - December 2016</option>
                            <option value="10">Iraq &amp; Iran Ziyarat - April 2017</option>
                            <option value="12">Arafat Ziyarat 2017 - Iraq</option>
                            <option value="13">Arbaeen 2017 - Iraq</option>
                            <option value="14">Wedding</option>
                            <option value="15">Iraq Ziyarat - December 2017</option>
                            <option value="17">Iraq &amp; Iran Ziyarat - April 2018</option>
                            <option value="18">Ladies Ziyarat In Iraq 2018</option>
                            <option value="19">Arbaeen October 2018 Ziyarat</option>
                            <option value="20">Iraq Ziyarat - December 2018</option>
                            <option value="21">Test Trip</option>
                            <option value="22">15th Shabaan in Karbala - April 2019 (Iran - Syria-Iraq</option>
                            <option value="23">Janmohammed-Versi Wedding</option>
                            <option value="24">Arbaeen in Iraq - October 2019</option>
                            <option value="25">Christmas in Iraq - December 2019</option>
                            <option value="26">Test Oct</option>
                            <option value="27">Half Term Egypt Trip - 2020</option>
                            <option value="30">CHRISTMAS IN IRAQ 2020</option>
                            <option value="31">Arbaeen 2021 - Iraq</option>
                            <option value="32">December Ziyarah In Iraq - 2021</option>
                            <option value="37">March Ziyarah - Iraq &amp; Shaam 2022</option>
                            <option value="38">Merali Ziyarah</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-check mr-2"></i>Select</button>
                    <hr>
                    <hr>
                    <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#modal-xl"><i
                            class="fa fa-plus mr-2"></i>Create Trip</button>
                    <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-ban mr-2"></i>Disable / Delete
                        Trip</button>
                    {{-- <button type="button" class="btn btn-primary btn-block"><i class="fa fa-arrow"></i> select</button> --}}
                    {{-- <button type="submit" class="btn btn-primary">Select</button> --}}
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>

    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Trip</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="content">
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Trip Details</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputName">Trip Name</label>
                                            <input type="text" id="trip_name" name="trip_name" class="form-control">
                                        </div>
                                        <!-- Date -->
                                        <div class="form-group">
                                            <label>Trip Reg Deadline:</label>
                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                <input required type="text" class="form-control datetimepicker-input"
                                                    data-target="#reservationdate" />
                                                <div class="input-group-append" data-target="#reservationdate"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Date End --}}

                                        <!-- Date range -->
                                        <div class="form-group">
                                            <label>Trip Date Range:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input required type="text" class="form-control float-right"
                                                    id="reservation">
                                            </div>
                                        </div>
                                        <!-- /.date range -->
                                        <div class="form-group">
                                            <label for="exampleInputFile">Trip BG Cover</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    {{-- <span class="input-group-text">Upload</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Trip Poster</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    {{-- <span class="input-group-text">Upload</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </section>
                    <section class="content">
                        <div class="row justify-content-md-center">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Package Details</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead class="text-center">
                                                <tr>
                                                    <th></th>
                                                    <th>Package Name</th>
                                                    <th>Price</th>
                                                    <th>Seats</th>
                                                    <th>Airline</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @for ($i = 1; $i < 2; $i++)
                                                    <tr>
                                                        <td> <input type="checkbox" name="package_id[{{ $i }}]"
                                                                value="1"> </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="package_name[{{ $i }}]"
                                                                name="package_name[{{ $i }}]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="package_price[{{ $i }}]"
                                                                name="package_price[{{ $i }}]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="package_seats[{{ $i }}]"
                                                                name="package_seats[{{ $i }}]">
                                                        </td>
                                                        <td>
                                                            <select class="form-control"
                                                                id="package_airline[{{ $i }}]"
                                                                name="package_airline[{{ $i }}]">
                                                                <option value="">Select Airline</option>
                                                                <option value="">Airline1</option>
                                                                <option value="">Airline2</option>
                                                                {{-- @foreach ($airlines as $airline)
                                                        <option value="{{$airline->id}}">{{$airline->name}}</option>
                                                        @endforeach --}}
                                                            </select>
                                                        </td>
                                                    </tr>
                                                @endfor
                                            </tbody>
                                            <tfoot>
                                                {{-- button to add rows --}}
                                                    
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <td colspan="5">
                                    <button type="button" onclick="addRow()" class="btn btn-primary"
                                        id="add_row[]">Add Package</button>
                                    <button type="button" onclick="removeRow()" class="btn btn-primary"
                                        id="remove_row[]">Remove Package</button>
                                </td>
                                <!-- /.card -->
                            </div>
                        </div>
                    </section>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@stop

@section('css')
    <link rel="stylesheet" src={{ asset('../vendor/almasaeed2010/adminlte/build/scss/mixins/_custom-forms.scss') }}>
    <link rel="stylesheet"
        href={{ asset('../vendor/almasaeed2010/adminlte/plugins/daterangepicker/daterangepicker.css') }}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ asset('../vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet"
        href={{ asset('../vendor/almasaeed2010/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href={{ asset('../vendor/almasaeed2010/adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href={{ asset('../vendor/almasaeed2010/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}>
    <!-- Select2 -->
    <link rel="stylesheet" href={{ asset('../vendor/almasaeed2010/adminlte/plugins/select2/css/select2.min.css') }}>
    <link rel="stylesheet"
        href={{ asset('../vendor/almasaeed2010/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}>
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href={{ asset('../vendor/almasaeed2010/adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}>
    <!-- BS Stepper -->
    <link rel="stylesheet"
        href={{ asset('../vendor/almasaeed2010/adminlte/plugins/bs-stepper/css/bs-stepper.min.css') }}>
    <!-- dropzonejs -->
    <link rel="stylesheet" href={{ asset('../vendor/almasaeed2010/adminlte/plugins/dropzone/min/dropzone.min.css') }}>
    <!-- Theme style -->
    {{-- <link rel="stylesheet" href="../../dist/css/adminlte.min.css"> --}}
    <link rel="stylesheet" href={{ asset('../vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css') }}>
@stop

@section('js')
    <!-- Select2 -->
    <script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/select2/js/select2.min.js') }}></script>
    <script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/select2/js/select2.full.min.js') }}></script>
    <!-- Bootstrap4 Duallistbox -->
    <script
        src={{ asset('../vendor/almasaeed2010/adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}>
    </script>
    <!-- InputMask -->
    <script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/moment/moment.min.js') }}></script>
    <script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/inputmask/jquery.inputmask.min.js') }}></script>
    <!-- date-range-picker -->
    <script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/daterangepicker/daterangepicker.js') }}></script>
    <!-- bootstrap color picker -->
    <script
        src={{ asset('../vendor/almasaeed2010/adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}>
    </script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src={{ asset('../vendor/almasaeed2010/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}>
    </script>
    <!-- Bootstrap Switch -->
    <script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}>
    </script>
    <!-- BS-Stepper -->
    <script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/bs-stepper/js/bs-stepper.min.js') }}></script>
    <!-- dropzonejs -->
    <script src={{ asset('../vendor/almasaeed2010/adminlte/plugins/dropzone/min/dropzone.min.js') }}></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date range picker
            $('#reservation').daterangepicker();



        });

        // function to add row
        function addRow() {
            @php
            $packages = [
                'id' => '',
                'name' => '',
            ];
            @endphp
            var rowCount = $('#example1 >tbody >tr').length;
            var nextRow = rowCount + 1;
            // debugger;
            '<td> <input type="checkbox" name="package_id[{{ $i }}]" value="1"> </td>'

            var row = '<tr>' +
                '<td> <input type="checkbox" name="package_id['+nextRow+']" value="1"> </td>' +
                '<td><input type="text" name="package_name['+nextRow+']" id="package_name['+nextRow+']" class="form-control"></td>' +
                '<td><input type="text" name="package_price['+nextRow+']" id="package_price['+nextRow+']" class="form-control"></td>' +
                '<td><input type="text" name="package_seats['+nextRow+']" id="package_seats['+nextRow+']" class="form-control"></td>' +
                '<td><select type="text" name="package_airline['+nextRow+']" id="package_airline['+nextRow+']" class="form-control"><option value="">Select Airline</option><option value="">Airline1</option><option value="">Airline2</option></select></td>' +
                '</tr>';
            $('#example1').append(row);
        }

        // function to remove row
        function removeRow() {
            // debugger
            var rowCount = $('#example1 >tbody >tr').length;
            if (rowCount > 1) {
                $('#example1 tr:last').remove();
            }
        }
    </script>
@stop
