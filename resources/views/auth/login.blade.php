<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TES PROGRAMMER</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('/')}}/assets/images/logo/baru.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ url('/')}}/assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center justify-content-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <h2 class="m-b-0 mt-3">Login</h2>
                                    </div>
                                    <form action="{{ url('/login') }}" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <x-template.utils.notif />
                                            </div>
                                        </div>
                                        @if (isset($message))
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @endif
                                        @csrf
                                        <div class="form-group" data-validate="Diperlukan User ID yang valid">
                                            <label class="font-weight-semibold" for="username">Username:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" class="form-control" name="username" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group" data-validate="Diperlukan Password">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                </span>
                                                <button class="btn btn-primary">Log In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="{{ url('/')}}/assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="{{ url('/')}}/assets/js/app.min.js"></script>

</body>

</html>