<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Đa cấp 2018</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        {{--style--}}
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
        <title>Admin Press Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
        <!-- Bootstrap Core CSS -->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="template/css/nprogress.css">
        <!-- morris CSS -->
        <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="template/css/style.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
        <!-- element ui vue -->
        <link rel="stylesheet" href="https://unpkg.com/element-ui@2.4.6/lib/theme-chalk/index.css">
        <link rel="stylesheet" href="template/css/custom.css">
        <link rel="stylesheet" href="template/css/custom_table.css">
    </head>
    <body class="fix-header fix-sidebar card-no-border">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <div id="app">
            <main-app></main-app>
        </div>

        {{--PLUG IN--}}
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <script src="{{asset('js/app.js')}}"></script>

        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="template/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="template/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="template/js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.js"></script>
        <!--Custom JavaScript -->
        <script src="template/js/custom.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <!--sparkline JavaScript -->
        <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!--morris JavaScript -->
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/morrisjs/morris.min.js"></script>
        <!-- Chart JS -->
        <script src="template/js/dashboard1.js"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>

        <script src="template/js/custom_end.js"></script>
        <script>
            $(document).ready(function () {
                $(".fix-header .topbar").stick_in_parent({});
                $('#myTable').DataTable({
                  "scrollX": true,
                  "searching": false,
                  "ordering": false
                });
            })
        </script>
    </body>

</html>