@extends('admin.layouts.auth')

@push('styles')
    <style>
        .show-hide {
            position: absolute;
            right: 20px;
            top: 30px;
            transform: translateY(-50%);
            color: #575757;
            font-size: 18px;
        }
    </style>
@endpush

@section('content')
    <div id="app" class="app">
        <!-- BEGIN login -->
        <div class="login login-v2 fw-bold">
            <!-- BEGIN login-cover -->
            <div class="login-cover">
                <div class="login-cover-img"
                    style="background-image: url({{ asset('backend/img/login-bg/login-bg-17.jpg') }})"
                    data-id="login-cover-image"></div>
                <div class="login-cover-bg"></div>
            </div>
            <!-- END login-cover -->

            <!-- BEGIN login-container -->
            <div class="login-container">
                <!-- BEGIN login-header -->
                <div class="login-header">
                    <div class="brand">
                        <div class="d-flex align-items-center">
                            <span class="logo"></span> <b>Color</b> Admin
                        </div>
                    </div>
                </div>
                <!-- END login-header -->

                <!-- BEGIN login-content -->
                <div class="login-content">
                    <form action="{{ route('admin.postLogin') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-20px">
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control fs-13px h-45px border-0" placeholder="Email Address"
                                id="emailAddress" />
                            <label for="emailAddress" class="d-flex align-items-center text-gray-600 fs-13px">Email
                                Address</label>
                        </div>
                        <div class="form-floating mb-20px">
                            <input type="password" name="password" id="password" class="form-control fs-13px h-45px border-0" placeholder="Password" />
                            <label for="emailAddress"
                                class="d-flex align-items-center text-gray-600 fs-13px">Password</label>
                            <div class="show-hide">
                                <i class="fa fa-eye" id="togglePassword"></i>
                            </div>
                        </div>
                        <div class="form-check mb-20px">
                            <input class="form-check-input border-0" type="checkbox" name="remember_me" value="remember_me" />
                            <label class="form-check-label fs-13px text-gray-500" for="rememberMe">
                                Remember Me
                            </label>
                        </div>
                        <div class="mb-20px">
                            <button type="submit" class="btn btn-theme d-block w-100 h-45px btn-lg">Sign in</button>
                        </div>
                    </form>
                </div>
                <!-- END login-content -->
            </div>
            <!-- END login-container -->
        </div>
        <!-- END login -->

        <!-- BEGIN login-bg -->
        <div class="login-bg-list clearfix">
            <div class="login-bg-list-item active"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="{{ asset('backend/img/login-bg/login-bg-17.jpg') }}"
                    style="background-image: url({{ asset('backend/img/login-bg/login-bg-17.jpg') }})"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg"
                    data-img="{{ asset('backend/img/login-bg/login-bg-16.jpg') }}"
                    style="background-image: url({{ asset('backend/img/login-bg/login-bg-16.jpg') }})"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg"
                    data-img="{{ asset('backend/img/login-bg/login-bg-15.jpg') }}"
                    style="background-image: url({{ asset('backend/img/login-bg/login-bg-15.jpg') }})"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg"
                    data-img="{{ asset('backend/img/login-bg/login-bg-14.jpg') }}"
                    style="background-image: url({{ asset('backend/img/login-bg/login-bg-14.jpg') }})"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg"
                    data-img="{{ asset('backend/img/login-bg/login-bg-13.jpg') }}"
                    style="background-image: url({{ asset('backend/img/login-bg/login-bg-13.jpg') }})"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg"
                    data-img="{{ asset('backend/img/login-bg/login-bg-12.jpg') }}"
                    style="background-image: url({{ asset('backend/img/login-bg/login-bg-12.jpg') }})"></a></div>
        </div>
        <!-- END login-bg -->

        <!-- BEGIN theme-panel -->
        @include('admin.partials.theme')
        <!-- END theme-panel -->

        <!-- BEGIN scroll-top-btn -->
        @include('admin.partials.scroll_top')
        <!-- END scroll-top-btn -->
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            // Lấy thẻ input password
            var passwordField = document.getElementById('password');

            // Kiểm tra trạng thái hiện tại của trường password
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            }
        });
    </script>
@endpush
