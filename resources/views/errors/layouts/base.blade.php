<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('backend/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}" type="image/x-icon">
    <title>Zono - Premium Admin Template</title>
    <!-- Google font -->
    <link href="{{ asset('backend/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/default/app.min.css') }}" rel="stylesheet" />

    <style>
        .svg-wrraper, .svg-content {
            display: flex;
            justify-content: center;
        }

        .svg-content {
            flex-direction: column;
            align-items: center;
        }

    </style>
</head>

<body>
    @yield('content')

    <!-- latest jquery-->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('backend/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('backend/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('backend/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="{{ asset('backend/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('backend/js/script.js') }}"></script>
    <!-- Plugin used-->
</body>

</html>
