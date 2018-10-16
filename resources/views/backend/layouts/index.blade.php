<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin UI| @yield('title')</title>
    <base href="{{asset('')}}">
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="https://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="https://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="https://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="https://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="https://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    {{--     <link href="css/lib/font-awesome.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/lib/sweetalert/sweetalert.css">
    {{--     css calender --}}
    <link href="css/lib/calendar/fullcalendar.css" rel="stylesheet" />
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/lib/toastr/toastr.min.css" rel="stylesheet">
    <link href="css/backend/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    {{--     css page --}}  
    <link rel="stylesheet" href="css/backend/body.css">  
    <link href="css/backend/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="css/backend/profile.css">
    <link rel="stylesheet" href="css/backend/stylebox.css">
</head>

<body>
    @include('backend.layouts.menu')
    @include('backend.layouts.header')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                @yield('content')

            </div>
            @include('backend.layouts.footer')
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <script src="js/lib/sweetalert/sweetalert2.all.js"></script>
    {{--  nano scroller --}}
    <script src="js/lib/menubar/sidebar.js"></script>
    {{--  script table --}}
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="js/lib/toastr/toastr.min.js"></script>
    <script src="js/lib/toastr/toastr.init.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
             dom: 'lBfrtip',
             lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
             buttons: ['excel', 'pdf', 'print']
         });
        });
    </script>
    {{-- zoomimage --}}
    @yield('script')
    @yield('script-contact')
    @yield('script-list-admin')
</body>

</html>
