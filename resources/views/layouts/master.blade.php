<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <title>@yield('title')</title>

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

<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>


    {{-- <div id="toaster"></div> --}}

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">

        @yield('sidebar')

        <div class="page-wrapper">
            <div class="content-wrapper">
                @section('header')

                    <header class="main-header" id="header">
                        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                            <!-- Sidebar toggle button -->
                            <button id="sidebar-toggler" class="sidebar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                            </button>

                            <span class="page-title">dashboard</span>

                            <div class="navbar-right ">


                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="/shop" class="mb-1 btn btn-outline-warning btn-pill">Go to customer page</a>
                                    </li>
                                    <!-- User Account -->
                                    <li class="dropdown user-menu">
                                        <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                                            @if (Auth::user()->image != null)
                                                <img src="{{ Auth::user()->image }}" class="user-image rounded-circle"
                                                    alt="User Image" />
                                            @else
                                                <img src="{{ asset('images/avatar.png') }}"
                                                    class="user-image rounded-circle" alt="User Image" />
                                            @endif

                                            <span
                                                class="d-none d-lg-inline-block">{{ Str::ucfirst(Auth::user()->name) }}</span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a class="dropdown-link-item" href="/account">
                                                    <i class="mdi mdi-account-outline"></i>
                                                    <span class="nav-text">My Profile</span>
                                                </a>
                                            </li>

                                            <li class="dropdown-footer">
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                                <a class="dropdown-link-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    <i class="mdi mdi-logout"></i>
                                                    Log Out
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>


                    </header>

                @show

                @yield('content')
            </div>
        </div>

    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>



    <script src="{{ asset('plugins/apexcharts/apexcharts.js') }}"></script>



    <script src="{{ asset('plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>



    <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-us-aea.js') }}"></script>



    <script src="{{ asset('plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('input[name="dateRange"]').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
                jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
            jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
                jQuery(this).val('');
            });
        });
    </script>



    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



    <script src="{{ asset('plugins/toaster/toastr.min.js') }}"></script>



    <script src="{{ asset('js/mono.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/map.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>




    <!--  -->
</body>

</html>
