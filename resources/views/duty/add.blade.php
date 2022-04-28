@extends('adminlte::page')

@section('title', 'Dashboard')



@section('content_header')
    <h1>Add Duty Schedule</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Fill in Duty Details</h3>
                    </div>
                    <form action={{ route('duty.store') }} method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- <h4>   </h4> --}}
                            <div class="form-group">
                                <label for="exampleInputBorder">Duty Title <code>*</code></label>
                                <input type="text" required name="title" value="{{ old('title') }}"
                                    class="form-control form-control-border" id="exampleInputBorder"
                                    placeholder="Enter Duty Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputBorderWidth2">Duty Location</label>
                                <code></code></label>
                                <input type="text" name="location" value="{{ old('location') }}"
                                    class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputBorderWidth2">Duty Description</label>
                                <code></code></label>
                                <input type="text" name="description" value="{{ old('description') }}"
                                    class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2"
                                    placeholder="">
                            </div>
                            <!-- Date and time range -->
                            <div class="form-group">
                                <label>Date:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" name="date" class="form-control datetimepicker-input"
                                        data-target="#reservationdate" />
                                    <div class="input-group-append" data-target="#reservationdate"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>From Time:</label>
                                <div class="input-group date" id="reservationtimeOnly" data-target-input="nearest">
                                    <input type="text" name="from_time" class="form-control datetimepicker-input"
                                        data-target="#reservationtimeOnly" />
                                    <div class="input-group-append" data-target="#reservationtimeOnly"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>To Time:</label>
                                <div class="input-group date" id="reservationtimeOnly2" data-target-input="nearest">
                                    <input type="text" name="to_time" class="form-control datetimepicker-input"
                                        data-target="#reservationtimeOnly2" />
                                    <div class="input-group-append" data-target="#reservationtimeOnly2"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Assign Duty Incharge<code> can assign later</code></label>
                                <select name="incharge_user_id" value="{{ old('incharge_user_id') }}"
                                    class="form-control select2" style="width: 100%;">
                                    <option value="1" selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>

                            <div class="card">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
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
    <!-- AdminLTE for demo purposes -->
    <!-- Page specific script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            $('#reservationtimeOnly').datetimepicker({
                timePicker: true,
                datePicker: false,
                timePickerIncrement: 30,
                format: 'hh:mm A'
            })
            $('#reservationtimeOnly2').datetimepicker({
                timePicker: true,
                datePicker: false,
                timePickerIncrement: 30,
                format: 'hh:mm A'
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
    </script>

    {{-- Test Sweetalert2 Plugin --}}

    <script>
        $(document).ready(function() {
            // Read flag from the controller.
            let data = @json($message);
            if (data) {
                Swal.fire(
                    data.title,
                    data.message,
                    data.type
                );
            }
        });
    </script>
@stop
