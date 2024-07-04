<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
        {{-- Data Table --}}
        <link rel="stylesheet" href="{{ asset('plugins/datatables/datatables.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        {{-- SELECT2 --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        {{-- DATE PICKER --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <!-- the fileinput plugin styling CSS file -->
        <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
        <style>
            table.data-table tbody td {
                vertical-align: middle;
            }
            table.data-table thead th {
                text-align: center;
            }
        </style>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            @include('layouts.navbar')

            <!-- Main Sidebar Container -->
            @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                {{-- Alert Messages --}}
                @if(session()->has('message'))
                <div class="p-2 text-center bg-success">
                    {{ session()->get('message') }}
                </div>
                @endif

                <!-- Content Header (Page header) -->
                @include('layouts.header')

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        {{ $slot }}
                    </div><!-- /.container-fluid -->
                </div>
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            @include('layouts.footer')
        </div>

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
        {{-- Price Format --}}
        <script src="{{ asset('plugins/jquery-priceformat/jquery.priceformat.min.js') }}"></script>
        {{-- Data Table --}}
        <script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
        {{-- SELECT2 --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        {{-- DATE PICKER --}}
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        {{-- FILE INPUT --}}
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/buffer.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/filetype.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/piexif.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/sortable.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
        <script>
            $(document).ready(function() {
                new DataTable('table.data-table', {
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json',
                    },
                    "autoWidth": false,
                });
                $('.mySelect2Gender').select2({
                    placeholder: "Jenis Kelamin",
                });
                $('.mySelect2Agama').select2({
                    placeholder: "Agama"
                });
                $('input[name="tanggal_lahir"]').daterangepicker({
                    locale: {
                        "format": "YYYY-MM-DD",
                    },
                    singleDatePicker: true,
                    showDropdowns: true,
                    minYear: 1901,
                    maxYear: parseInt(moment().format('YYYY'),10)
                });
                $("#gambar").fileinput();
            });
        </script>
    </body>
</html>