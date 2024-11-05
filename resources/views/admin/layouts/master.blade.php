<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Color Admin | Dashboard V1</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('backend/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/default/app.min.css') }}" rel="stylesheet" />
    <!-- ================== END core-css ================== -->

    <!-- ================== BEGIN page-css ================== -->
    <link href="{{ asset('backend/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/photoswipe/dist/photoswipe.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/plugins/lity/dist/lity.min.css') }}" rel="stylesheet" />
    <!-- ================== END page-css ================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/toastr/toastr.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- BEGIN #loader -->
    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>
    <!-- END #loader -->

    <!-- BEGIN #app -->
    <div id="app" class="app app-header-fixed app-sidebar-fixed ">
        <!-- BEGIN #header -->
        @include('admin.partials.header')
        <!-- END #header -->

        <!-- BEGIN #sidebar -->
        @include('admin.partials.sidebar')
        <!-- END #sidebar -->

        <!-- BEGIN #content -->
        @yield('content')
        <!-- END #content -->

        <!-- BEGIN theme-panel -->
        @include('admin.partials.theme')
        <!-- END theme-panel -->

        <!-- BEGIN scroll-top-btn -->
        @include('admin.partials.scroll_top')
        <!-- END scroll-top-btn -->
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('backend/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/vendor.min.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/js/app.min.js') }}"> type="text/javascript"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    <script src="{{ asset('backend/plugins/gritter/js/jquery.gritter.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.canvaswrapper.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.colorhelpers.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.saturated.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.browser.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.drawSeries.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.uiConstants.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.time.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.resize.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.pie.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.crosshair.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.categories.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.navigate.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.touchNavigate.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.hover.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.touch.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.selection.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.symbol.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/flot/source/jquery.flot.legend.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/jvectormap-next/jquery-jvectormap.min.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/jvectormap-content/world-mill.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"> type="text/javascript"></script>
    <script src="{{ asset('backend/js/demo/dashboard.js') }}"> type="text/javascript"></script>
    <!-- ================== END page-js ================== -->
    <script src="{{ asset('backend/plugins/parsleyjs/dist/parsley.min.js') }}" type="text/javascript"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3" type="text/javascript"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-Y3Q0VGQKY3');
	</script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8dc525fe7f2edd49","version":"2024.10.4","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"4db8c6ef997743fda032d4f73cfeff63","b":1}'
        crossorigin="anonymous"></script>
    <!-- Toastr -->
    <script type="text/javascript" src="{{ asset('backend/vendors/toastr/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/vendors/toastr/config.js') }}"></script>

    {!! Toastr::message() !!}

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
