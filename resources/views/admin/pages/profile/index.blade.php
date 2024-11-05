@extends('admin.layouts.master')

@section('content')
    <div id="content" class="app-content p-0">
        <!-- BEGIN profile -->
        <div class="profile">
            <div class="profile-header">
                <!-- BEGIN profile-header-cover -->
                <div class="profile-header-cover"></div>
                <!-- END profile-header-cover -->
                <!-- BEGIN profile-header-content -->
                <div class="profile-header-content">
                    <!-- BEGIN profile-header-img -->
                    <div class="profile-header-img">
                        <img src="{{ asset('backend/img/user/user-13.jpg') }}" alt="" />
                    </div>
                    <!-- END profile-header-img -->
                    <!-- BEGIN profile-header-info -->
                    <div class="profile-header-info">
                        <h4 class="mt-0 mb-1">{{ Auth::guard('admin')->user()->user_name }}</h4>
                        <p class="mb-2">{{ Auth::guard('admin')->user()->full_name }}</p>
                    </div>
                    <!-- END profile-header-info -->
                </div>
                <!-- END profile-header-content -->
                <!-- BEGIN profile-header-tab -->
                <ul class="profile-header-tab nav nav-tabs">
                    <li class="nav-item"><a href="#profile-about" class="nav-link active" data-bs-toggle="tab">Thông tin</a></li>
                    <li class="nav-item"><a href="#profile-photos" class="nav-link" data-bs-toggle="tab">Bộ sưu tập</a></li>
                    <li class="nav-item"><a href="#profile-videos" class="nav-link" data-bs-toggle="tab">Phim ảnh</a></li>
                </ul>
                <!-- END profile-header-tab -->
            </div>
        </div>
        <!-- END profile -->
        <!-- BEGIN profile-content -->
        <div class="profile-content">
            <!-- BEGIN tab-content -->
            <div class="tab-content p-0">
                <!-- BEGIN #profile-about tab -->
                <div class="tab-pane fade show active" id="profile-about">
                    <!-- BEGIN table -->
                    <div class="row">
                        <div class="col-xl-6">
                            <!-- BEGIN panel -->
                            <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                                <!-- BEGIN panel-heading -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Thông tin cá nhân</h4>
                                    <div class="panel-heading-btn">
                                        <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                    </div>
                                </div>
                                <!-- END panel-heading -->
                                <!-- BEGIN panel-body -->
                                <div class="panel-body">
                                    <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="fullname">Tên đầy đủ * :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" id="fullname" name="fullname" value="{{ Auth::guard('admin')->user()->full_name }}" placeholder="Required" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="fullname">Tên người dùng * :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" id="fullname" name="fullname" value="{{ Auth::guard('admin')->user()->user_name }}" placeholder="Required" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="email">Email * :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" id="email" name="email" value="{{ Auth::guard('admin')->user()->email }}" data-parsley-type="email" placeholder="Email" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="phone">Số điện thoại :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" id="phone" name="phone" value="{{ Auth::guard('admin')->user()->phone }}" data-parsley-type="phone" placeholder="Phone" />
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="message">Địa chỉ :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" id="address" name="address" value="{{ Auth::guard('admin')->user()->address }}" data-parsley-type="address" placeholder="Address" />
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="message">Giới tính :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" id="number" name="number" data-parsley-type="number" placeholder="Number" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label form-label">&nbsp;</label>
                                            <div class="col-lg-8">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END panel-body -->
                                <!-- BEGIN hljs-wrapper -->
                                <div class="hljs-wrapper">
                                    <pre><code class="html" data-url="../assets/data/form-validation/code-1.json"></code></pre>
                                </div>
                                <!-- END hljs-wrapper -->
                            </div>
                            <!-- END panel -->
                        </div>

                        <div class="col-xl-6">
                            <!-- BEGIN panel -->
                            <div class="panel panel-inverse" data-sortable-id="form-validation-2">
                                <!-- BEGIN panel-heading -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Thay đổi mật khẩu</h4>
                                    <div class="panel-heading-btn">
                                        <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                    </div>
                                </div>
                                <!-- END panel-heading -->
                                <!-- BEGIN panel-body -->
                                <div class="panel-body">
                                    <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="fullname">Full Name * :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Required" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="email">Email * :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" id="email" name="email" data-parsley-type="email" placeholder="Email" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="website">Website :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="url" id="website" name="website" data-parsley-type="url" placeholder="url" />
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="message">Message (20 chars min, 200 max) :</label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="message" name="message" rows="4" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Range from 20 - 200"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="message">Digits :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" id="digits" name="digits" data-parsley-type="digits" placeholder="Digits" />
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="message">Number :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" id="number" name="number" data-parsley-type="number" placeholder="Number" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label form-label">&nbsp;</label>
                                            <div class="col-lg-8">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END panel-body -->
                                <!-- BEGIN hljs-wrapper -->
                                <div class="hljs-wrapper">
                                    <pre><code class="html" data-url="../assets/data/form-validation/code-1.json"></code></pre>
                                </div>
                                <!-- END hljs-wrapper -->
                            </div>
                            <!-- END panel -->
                        </div>
                    </div>
                    <!-- END table -->
                </div>
                <!-- END #profile-about tab -->
                <!-- BEGIN #profile-photos tab -->
                <div class="tab-pane fade" id="profile-photos">
                    <h4 class="mb-3">Photos (70)</h4>
                    <!-- BEGIN gallery-v2 -->
                    <div class="gallery-v2" id="gallery">
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-1.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-1-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-2.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-2-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-3.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-3-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-4.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-4-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-5.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-5-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-6.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-6-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-7.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-7-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-8.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-8-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-9.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-9-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-10.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-10-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-11.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-11-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-12.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-12-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-13.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-13-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-14.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-14-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-15.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-15-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-16.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-16-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-17.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-17-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-18.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-18-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-19.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-19-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-20.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-20-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-21.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-21-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-22.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-22-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-23.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-23-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-24.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-24-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-25.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-25-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-26.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-26-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-27.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-27-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-28.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-28-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-29.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-29-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-30.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-30-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-31.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-31-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-32.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-32-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-33.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-33-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-34.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-34-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-35.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-35-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-36.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-36-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-37.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-37-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-38.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-38-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-39.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-39-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-40.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-40-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-41.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-41-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-42.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-42-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-43.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-43-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-44.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-44-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-45.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-45-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-46.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-46-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-47.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-47-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-48.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-48-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-49.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-49-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-50.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-50-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-51.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-51-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-52.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-52-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-53.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-53-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-54.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-54-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-55.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-55-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-56.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-56-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-57.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-57-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-58.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-58-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-59.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-59-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-60.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-60-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-61.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-61-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-62.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-62-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-63.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-63-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-64.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-64-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-65.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-65-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-66.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-66-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-67.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-67-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-68.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-68-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-69.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-69-thumb.jpg);"></div>
                            </a>
                        </div>
                        <div class="gallery">
                            <a href="javascript:;" class="ratio ratio-4x3"
                                data-pswp-src="../assets/img/gallery/gallery-70.jpg" data-pswp-width="1200"
                                data-pswp-height="800">
                                <div class="bg-size-cover bg-position-center"
                                    style="background-image: url(../assets/img/gallery/gallery-70-thumb.jpg);"></div>
                            </a>
                        </div>
                    </div>
                    <!-- END gallery-v2 -->
                </div>
                <!-- END #profile-photos tab -->
                <!-- BEGIN #profile-videos tab -->
                <div class="tab-pane fade" id="profile-videos">
                    <h4 class="mb-3">Videos (16)</h4>
                    <!-- BEGIN row -->
                    <div class="row gx-1">
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=RQ5ljyGg-ig" data-lity>
                                <img src="../../../../img.youtube.com/vi/RQ5ljyGg-ig/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=5lWkZ-JaEOc" data-lity>
                                <img src="../../../../img.youtube.com/vi/5lWkZ-JaEOc/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=9ZfN87gSjvI" data-lity>
                                <img src="../../../../img.youtube.com/vi/9ZfN87gSjvI/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=w2H07DRv2_M" data-lity>
                                <img src="../../../../img.youtube.com/vi/w2H07DRv2_M/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=PntG8KEVjR8" data-lity>
                                <img src="../../../../img.youtube.com/vi/PntG8KEVjR8/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=q8kxKvSQ7MI" data-lity>
                                <img src="../../../../img.youtube.com/vi/q8kxKvSQ7MI/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=cutu3Bw4ep4" data-lity>
                                <img src="../../../../img.youtube.com/vi/cutu3Bw4ep4/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=gCspUXGrraM" data-lity>
                                <img src="../../../../img.youtube.com/vi/gCspUXGrraM/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=COtpTM1MpAA" data-lity>
                                <img src="../../../../img.youtube.com/vi/COtpTM1MpAA/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=8NVkGHVOazc" data-lity>
                                <img src="../../../../img.youtube.com/vi/8NVkGHVOazc/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=ZtT3jaTcCsY" data-lity>
                                <img src="../../../../img.youtube.com/vi/ZtT3jaTcCsY/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=Dmw0ucCv8aQ" data-lity>
                                <img src="../../../../img.youtube.com/vi/Dmw0ucCv8aQ/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=r1d7ST2TG2U" data-lity>
                                <img src="../../../../img.youtube.com/vi/r1d7ST2TG2U/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=WUR-XWBcHvs" data-lity>
                                <img src="../../../../img.youtube.com/vi/WUR-XWBcHvs/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=A7sQ8RWj0Cw" data-lity>
                                <img src="../../../../img.youtube.com/vi/A7sQ8RWj0Cw/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-4 mb-1">
                            <a href="https://www.youtube.com/watch?v=IMN2VfiXls4" data-lity>
                                <img src="../../../../img.youtube.com/vi/IMN2VfiXls4/mqdefault.jpg"
                                    class="d-block w-100" />
                            </a>
                        </div>
                        <!-- END col-3 -->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END #profile-videos tab -->
            </div>
            <!-- END tab-content -->
        </div>
        <!-- END profile-content -->
    </div>
@endsection
