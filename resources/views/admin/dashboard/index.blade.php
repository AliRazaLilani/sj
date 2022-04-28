{{-- @extends('adminlte::page', ['iFrameEnabled' => true]) --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   
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
    <link rel="stylesheet" href={{ asset('../vendor/almasaeed2010/adminlte/plugins/bs-stepper/css/bs-stepper.min.css') }}>
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
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })



        })
    </script>
@stop
