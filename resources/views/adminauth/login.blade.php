<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>ADMINISTRATIVE LOGIN || Aura Hearing Care </title>

    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="57x57" href="{!! asset('assets/img/logo/favicon/apple-icon-57x57.png') !!}">
    <link rel="apple-touch-icon" sizes="60x60" href="{!! asset('assets/img/logo/favicon/apple-icon-60x60.png') !!}">
    <link rel="apple-touch-icon" sizes="72x72" href="{!! asset('assets/img/logo/favicon/apple-icon-72x72.png') !!}">
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('assets/img/logo/favicon/apple-icon-76x76.png') !!}">
    <link rel="apple-touch-icon" sizes="114x114" href="{!! asset('assets/img/logo/favicon/apple-icon-114x114.png') !!}">
    <link rel="apple-touch-icon" sizes="120x120" href="{!! asset('assets/img/logo/favicon/apple-icon-120x120.png') !!}">
    <link rel="apple-touch-icon" sizes="144x144" href="{!! asset('assets/img/logo/favicon/apple-icon-144x144.png') !!}">
    <link rel="apple-touch-icon" sizes="152x152" href="{!! asset('assets/img/logo/favicon/apple-icon-152x152.png') !!}">
    <link rel="apple-touch-icon" sizes="180x180" href="{!! asset('assets/img/logo/favicon/apple-icon-180x180.png') !!}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{!! asset('assets/img/logo/favicon/android-icon-192x192.png') !!}">
    <link rel="icon" type="image/png" sizes="32x32" href="{!! asset('assets/img/logo/favicon/favicon-32x32.png') !!}">
    <link rel="icon" type="image/png" sizes="96x96" href="{!! asset('assets/img/logo/favicon/favicon-96x96.png') !!}">
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('assets/img/logo/favicon/favicon-16x16.png') !!}">
    <link rel="manifest" href="{!! asset('assets/img/logo/favicon/manifest.json') !!}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{!! asset('assets/img/logo/favicon/ms-icon-144x144.png') !!}">
    <meta name="theme-color" content="#ffffff">


    <!-- General CSS Files -->
    {{-- <link rel="stylesheet" href="{!! asset('admin/css/app.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('admin/bundles/bootstrap-social/bootstrap-social.css') !!}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{!! asset('admin/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('admin/css/components.css') !!}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{!! asset('admin/css/custom.css') !!}">
    <link rel='shortcut icon' type='image/x-icon' href="{!! asset('admin/img/favicon.ico') !!}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css" integrity="sha512-v8QQ0YQ3H4K6Ic3PJkym91KoeNT5S3PnDKvqnwqFD1oiqIl653crGZplPdU5KKtHjO0QKcQ2aUlQZYjHczkmGw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    {{-- <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4"> --}}
                    <div class="col-md-5 mx-auto">
                        <div class="card">
                            <div class="card-header text-center justify-content-center bg-dark text-light">
                                <h4 class="text-center">Sign in to continue to Infinity Plus 1 CRM</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/image/infinityplus1_logo1.png" alt="" class="mx-auto" alt="logo" height="100px">
                                    </div>
                                </div>
                                <form class="md-float-material form-material needs-validation" id="formLogin"
                                    method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="" for="autoSizingInputGroup">Email</label>
                                        <div class="input-group">
                                          <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                                          <input id="email" type="email"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Your Email Address" required tabindex="1" autofocus>
                                          @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="password">Password</label>
                                        <!-- @if (Route::has('password.request'))
                                            <div class="float-right">
                                                <a href="{{ route('password.request') }}" class="text-small"
                                                    id="password">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                            @endif -->
                                        <div class="input-group">
                                          <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
                                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                          name="password" placeholder="Password" tabindex="2" required>
                                          @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="password" class="control-label">Email</label>
                                        <input id="email" type="email"
                                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email" value="{{ old('email') }}" placeholder="Your Email Address"
                                            required tabindex="1" autofocus>
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <!-- @if (Route::has('password.request'))
                                            <div class="float-right">
                                                <a href="{{ route('password.request') }}" class="text-small"
                                                    id="password">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                            @endif -->
                                        </div>
                                        <input id="password" type="password"
                                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            name="password" placeholder="Password" tabindex="2" required>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div> --}}
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }} checked>
                                            <label class="custom-control-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block btnSubmit"
                                            tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                    <p class="text-center">© 2025 Infinity Plus 1 Pvt Ltd. Crafted with ❤️</p>
                                </form>
                                {{-- <div class="mt-5 text-muted text-left">
                                    <a href="{{ route('index') }}" target="_blank"><i class="fa fa-angle-double-left"
                                            aria-hidden="true"></i> Go to Website </a>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <div class="mt-5 text-muted text-center">
                            Designed & Developed By <a href="https://www.infinityplus1.in" target="_blank">Infinity Plus 1</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="{!! asset('admin/js/app.min.js') !!}"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{!! asset('admin/js/scripts.js') !!}"></script>
    <!-- Custom JS File -->
    <script src="{!! asset('admin/js/custom.js') !!}"></script>
    <script src="{!! asset('admin/js/jquery.validate.min.js') !!}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/fontawesome.min.js" integrity="sha512-j12pXc2gXZL/JZw5Mhi6LC7lkiXL0e2h+9ZWpqhniz0DkDrO01VNlBrG3LkPBn6DgG2b8CDjzJT+lxfocsS1Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script>
        $(document).ready(function () {

            jQuery.validator.addMethod("validate_email", function (value, element) {

                if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
                    return true;
                } else {
                    return false;
                }
            }, "Please enter a valid Email.");

            $("#formLogin").validate({
                rules: {

                    email: {
                        required: true,
                        validate_email: true,
                        remote: "{{ route('check.email') }}"
                    },

                    password: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: "Please Enter Email ID",
                        email: "Please Enter Valid Email",
                        remote: "These credentials do not match our records."
                    },
                    password: {
                        required: "Please Enter Password"
                    },
                },
                submitHandler: function (form) {
                    $('.btnSubmit').attr('disabled', 'disabled');
                    $(".btnSubmit").html('<span class="fa fa-spinner fa-spin"></span> Loading...');
                    form.submit();
                }
            });

        });

    </script> --}}
</body>

</html>
