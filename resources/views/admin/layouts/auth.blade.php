<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Color Admin | Login v2</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('backend/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/default/app.min.css') }}" rel="stylesheet" />
    <!-- ================== END core-css ================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/toastr/toastr.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @stack('styles')
</head>

<body class='pace-top'>
    <!-- BEGIN #loader -->
    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>
    <!-- END #loader -->

    <!-- BEGIN #app -->
    @yield('content')
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('backend/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/vendor.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/app.min.js') }}" type="text/javascript"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    <script src="{{ asset('backend/js/demo/login-v2.demo.js') }}" type="text/javascript"></script>
    <!-- ================== END page-js ================== -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3" type="text/javascript"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-Y3Q0VGQKY3');
	</script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8dc526a399aa84f7","version":"2024.10.4","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"4db8c6ef997743fda032d4f73cfeff63","b":1}'
        crossorigin="anonymous"></script>
    <!-- Toastr -->
    <script type="text/javascript" src="{{ asset('backend/vendors/toastr/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/vendors/toastr/config.js') }}"></script>

    <script>
        // Hiển thị các lỗi validation bằng Toastr
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif

        // Hiển thị thông báo thành công hoặc cảnh báo
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif
    </script>

    @stack('scripts')
</body>

</html>
