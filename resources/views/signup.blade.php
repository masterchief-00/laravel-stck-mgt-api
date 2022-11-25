<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <title>Sign up | Stock Management System</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{ asset('plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('plugins/nprogress/nprogress.css') }}" rel="stylesheet" />




    <link href="{{ asset('plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}"
        rel="stylesheet" />



    <link href="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />



    <link href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />



    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css' rel="stylesheet">



    <link href="{{ asset('plugins/toaster/toastr.min.css') }}" rel="stylesheet" />


    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="{{ asset('css/style.css') }}" />




    <!-- FAVICON -->
    <link href="{{ asset('images/logo-new.png') }}" rel="shortcut icon" />

    <!--
            HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
          -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    <script src="{{ asset('plugins/nprogress/nprogress.js') }}"></script>

</head>

</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5 col-md-10 ">
                    <div class="card card-default mb-0">
                        <div class="card-header pb-0">
                            <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                                <a class="w-auto pl-0" href="/">
                                    <img src="{{ asset('images/LOGO-1.png') }}" alt="logo" style="height: 80px">
                                    {{-- <span class="brand-name text-dark">STOCK MANAGEMENT</span> --}}
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-5 pb-5 pt-0">
                            <h4 class="text-dark text-center mb-5">Sign Up</h4>
                            @if ($errors->any())
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="alert alert-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('user.signup') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="name" class="form-control input-lg" id="name"
                                            aria-describedby="nameHelp" placeholder="Names">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" name="email" class="form-control input-lg" id="email"
                                            aria-describedby="emailHelp" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="phone" class="form-control input-lg" id="phone"
                                            aria-describedby="phoneHelp" placeholder="Phone number">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="ID_NO" class="form-control input-lg" id="id_no"
                                            aria-describedby="idHelp" placeholder="ID card Number">
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input type="password" name="password" class="form-control input-lg" id="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input type="password" name="password_confirmation" class="form-control input-lg" id="cpassword"
                                            placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between mb-3">

                                            <div class="custom-control custom-checkbox mr-3 mb-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">I Agree the terms
                                                    and conditions.</label>
                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-primary btn-pill mb-4">Sign Up</button>

                                        <p>Already have an account?
                                            <a class="text-blue" href="/login">Sign in</a>
                                        </p>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
