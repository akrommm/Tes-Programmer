<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TES PROGRAMMER</title>

    <!-- page css -->
    <link href="{{ url('/') }}/assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Core css -->
    <link href="{{ url('/') }}/assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <x-template.header />
            <!-- Header END -->

            <!-- Side Nav START -->
            <x-template.sidebar />
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class=" container-fluid pt-4">
                        <div class="row">
                            <div class="col-md-12">
                                <x-template.utils.notif />
                            </div>
                        </div>
                        {{ $slot }}
                    </div><!-- /.container-fluid -->
                </div>

                <!-- Footer START -->
                <x-template.footer />
                <!-- Footer END -->
            </div>
            <!-- Page Container END -->
        </div>


        <!-- Core Vendors JS -->
        <script src="{{ url('/') }}/assets/js/vendors.min.js"></script>

        <!-- page js -->
        <script src="{{ url('/') }}/assets/vendors/select2/select2.min.js"></script>
        <script src="{{ url('/') }}/assets/vendors/chartjs/Chart.min.js"></script>
        <script src="{{ url('/') }}/assets/js/pages/dashboard-default.js"></script>
        <script src="{{ url('/') }}/assets/vendors/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ url('/') }}/assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
        <script src="{{ url('/') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

        <!-- Core JS -->
        <script src="{{ url('/') }}/assets/js/app.min.js"></script>
        <script>
            $('#data-table').DataTable();
        </script>
        <script>
            $('.select2').select2();
        </script>

</body>

</html>