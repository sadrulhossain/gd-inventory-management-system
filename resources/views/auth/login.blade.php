<!DOCTYPE html>
<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>@lang('label.LOGIN') | @lang('label.INVENTORY_MANAGEMENT_SYSTEM')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}" />
    <!-- Custom login CSS -->
    <link rel="stylesheet" href="{{asset('assets/layout/css/custom-login.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/config.js')}}"></script>
</head>

<body>
<!-- Content -->
        <div class="container-xxl login-container">
            <div class="authentication-wrapper authentication-basic container-p-y">
                <div class="authentication-inner">
                    <!-- Register -->
                    <div class="card">
                        <div class="card-body">
                            <!-- Logo -->
                            <div class="app-brand justify-content-center">
                                <span class="app-brand-text demo text-body white fw-bolder">
                                    <img src="{{asset('img/logo.png')}}" alt="@lang('albe.APP_NAME_SHORT')"
                                         width="auto" height="100px"/>
                                </span>
                            </div>
                            <!-- /Logo -->

                            {!! Form::open(['url' => route('login'), 'method' => 'POST', 'id' => 'formAuthentication', 'class' => 'mb-3']) !!}
                            @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label white">@lang('label.USERNAME')</label>
                                    {!! Form::text('username', null, ['id' => 'username', 'class' => 'form-control', 'placeholder' => __('label.ENTER_YOUR_USERNAME'), 'autofocus' => 'true']) !!}
                                </div>
                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label white" for="password">@lang('label.PASSWORD')</label>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => '&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;', 'area-describedby' => 'password']) !!}
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-info d-grid w-100" type="submit">@lang('label.SIGN_IN')</button>
                                </div>
                            {!! Form::close() !!}

                            <div class="app-brand justify-content-center">
                                <span class="app-brand-text text-body white">
                                    ©{{date('Y')}} @lang('label.APP_NAME')
                                </span>
                            </div>

                        </div>
                    </div>
                    <!-- /Register -->
                </div>
            </div>
        </div>

<!-- / Content -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
