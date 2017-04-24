<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ticket Management System</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/simple-sidebar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap.min.css') }}">
        <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/dataTables.bootstrap.min.js') }}"></script>
        <script>
            //button Hide & Insert button
            $(document).ready(function() {
                $(".openpanel").on("click", function() {
                    $("#panel3").collapse('show');
                });
                $(".closepanel").on("click", function() {
                    $("#panel3").collapse('hide');
                });

                /* ensure any open panels are closed before showing selected */
                $('#accordion').on('show.bs.collapse', function () {
                    $('#accordion .in').collapse('hide');
                });
                $('#tickets_table').DataTable();
                $('#users_table').DataTable();
            } );
        </script>
    </head>
    <body style="padding-bottom:100px">
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </body>
</html>
