@extends('layouts.master')

@section('title', 'Analytics | Stock Management System')

@section('sidebar')

    <!-- ====================================
                                                                                                                                          ——— LEFT SIDEBAR WITH OUT FOOTER
                                                                                                                                        ===================================== -->
    <aside class="left-sidebar sidebar-dark" id="left-sidebar">
        <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
                <a href="/">
                    <img src="{{ asset('images/logo-new-small.png') }}" alt="Mono">
                    <span class="brand-name">STCK-MGT</span>
                </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">



                    <li>
                        <a class="sidenav-item-link" href="/">
                            <i class="mdi mdi-briefcase-account-outline"></i>
                            <span class="nav-text">Business Dashboard</span>
                        </a>
                    </li>





                    <li class="active">
                        <a class="sidenav-item-link" href="/analytics">
                            <i class="mdi mdi-chart-line"></i>
                            <span class="nav-text">Analytics Dashboard</span>
                        </a>
                    </li>





                    <li class="section-title">
                        User actions
                    </li>





                    <li>
                        <a class="sidenav-item-link" href="chat.html">
                            <i class="mdi mdi-wechat"></i>
                            <span class="nav-text">Chat</span>
                        </a>
                    </li>



                    <li class="has-sub">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#product"
                            aria-expanded="false" aria-controls="product">
                            <i class="mdi mdi-cart"></i>
                            <span class="nav-text">Products</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="product" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li>
                                    <a class="sidenav-item-link" href="/products">
                                        <span class="nav-text">All products</span>

                                    </a>
                                </li>

                                <li>
                                    <a class="sidenav-item-link" href="/products/add">
                                        <span class="nav-text">Add product</span>

                                    </a>
                                </li>


                            </div>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#orders"
                            aria-expanded="false" aria-controls="orders">
                            <i class="mdi mdi-basket"></i>
                            <span class="nav-text">Orders</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="orders" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li>
                                    <a class="sidenav-item-link" href="/orders">
                                        <span class="nav-text">All orders</span>

                                    </a>
                                </li>

                            </div>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                            data-target="#shipping" aria-expanded="false" aria-controls="shipping">
                            <i class="mdi mdi-truck"></i>
                            <span class="nav-text">Shipping</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="shipping" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li>
                                    <a class="sidenav-item-link" href="/jobs">
                                        <span class="nav-text">All jobs</span>

                                    </a>
                                </li>

                                <li>
                                    <a class="sidenav-item-link" href="/jobs/drivers">
                                        <span class="nav-text">All drivers</span>

                                    </a>
                                </li>

                                <li>
                                    <a class="sidenav-item-link" href="/jobs/add_drivers">
                                        <span class="nav-text">Add drivers</span>

                                    </a>
                                </li>


                            </div>
                        </ul>
                    </li>


                    <li class="has-sub">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                            data-target="#category" aria-expanded="false" aria-controls="category">
                            <i class="mdi mdi-folder"></i>
                            <span class="nav-text">Categories</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="category" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li>
                                    <a class="sidenav-item-link" href="/categories">
                                        <span class="nav-text">All categories</span>

                                    </a>
                                </li>

                                <li>
                                    <a class="sidenav-item-link" href="/categories/add_categories">
                                        <span class="nav-text">Add category</span>

                                    </a>
                                </li>


                            </div>
                        </ul>
                    </li>


                    <li class="section-title">
                        Advanced actions
                    </li>

                    <li class="has-sub">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                            data-target="#users" aria-expanded="false" aria-controls="users">
                            <i class="mdi mdi-account"></i>
                            <span class="nav-text">Users</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="users" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li>
                                    <a class="sidenav-item-link" href="/users">
                                        <span class="nav-text">All users</span>

                                    </a>
                                </li>

                                <li>
                                    <a class="sidenav-item-link" href="/users/register_admins">
                                        <span class="nav-text">Add admins</span>

                                    </a>
                                </li>

                                <li>
                                    <a class="sidenav-item-link" href="/users/authority">
                                        <span class="nav-text">User authority</span>

                                    </a>
                                </li>


                            </div>
                        </ul>
                    </li>

                </ul>

            </div>

        </div>
    </aside>

@endsection

<!-- Header -->
@section('header')
    <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
            <!-- Sidebar toggle button -->
            <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
            </button>

            <span class="page-title">dashboard</span>

            <div class="navbar-right ">

                <!-- search form -->
                <div class="search-form">
                    <form action="index.html" method="get">
                        <div class="input-group input-group-sm" id="input-group-search">
                            <input type="text" autocomplete="off" name="query" id="search-input"
                                class="form-control" placeholder="Search..." />
                            <div class="input-group-append">
                                <button class="btn" type="button">/</button>
                            </div>
                        </div>
                    </form>
                    <ul class="dropdown-menu dropdown-menu-search">

                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Morbi leo risus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Dapibus ac facilisis in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Porta ac consectetur ac</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Vestibulum at eros</a>
                        </li>

                    </ul>

                </div>

                <ul class="nav navbar-nav">
                    <!-- Offcanvas -->

                    <li class="custom-dropdown">
                        <button class="notify-toggler custom-dropdown-toggler">
                            <i class="mdi mdi-bell-outline icon"></i>
                            <span class="badge badge-xs rounded-circle">21</span>
                        </button>
                        <div class="dropdown-notify">

                            <header>
                                <div class="nav nav-underline" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all"
                                        role="tab" aria-controls="nav-home" aria-selected="true">All (5)</a>
                                    <a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="#message"
                                        role="tab" aria-controls="nav-profile" aria-selected="false">Msgs
                                        (4)</a>
                                    <a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="#other"
                                        role="tab" aria-controls="nav-contact" aria-selected="false">Others
                                        (3)</a>
                                </div>
                            </header>

                            <div class="" data-simplebar style="height: 325px;">
                                <div class="tab-content" id="myTabContent">

                                    <div class="tab-pane fade show active" id="all" role="tabpanel"
                                        aria-labelledby="all-tabs">

                                        <div class="media media-sm bg-warning-10 p-4 mb-0">
                                            <div class="media-sm-wrapper">
                                                <a href="user-profile.html">
                                                    <img src="{{ asset('images/user/user-sm-02.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">John Doe</span>
                                                    <span class="discribe">Extremity sweetness difficult behaviour
                                                        he of. On
                                                        disposal of as landlord horrible. Afraid at highly months do
                                                        things
                                                        on at.</span>
                                                    <span class="time">
                                                        <time>Just now</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media media-sm p-4 bg-light mb-0">
                                            <div class="media-sm-wrapper bg-primary">
                                                <a href="user-profile.html">
                                                    <i class="mdi mdi-calendar-check-outline"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">New event added</span>
                                                    <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                                    <span class="time">
                                                        <time>10 min ago...</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper">
                                                <a href="user-profile.html">
                                                    <img src="{{ asset('images/user/user-sm-03.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">Sagge Hudson</span>
                                                    <span class="discribe">On disposal of as landlord Afraid at
                                                        highly
                                                        months do things on at.</span>
                                                    <span class="time">
                                                        <time>1 hrs ago</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper bg-info-dark">
                                                <a href="user-profile.html">
                                                    <i class="mdi mdi-account-multiple-check"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">Add request</span>
                                                    <span class="discribe">Add Dany Jones as your contact.</span>
                                                    <div class="buttons">
                                                        <a href="#"
                                                            class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                                        <a href="#" class="btn btn-sm shadow-none">delete</a>
                                                    </div>
                                                    <span class="time">
                                                        <time>6 hrs ago</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper bg-info">
                                                <a href="user-profile.html">
                                                    <i class="mdi mdi-playlist-check"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">Task complete</span>
                                                    <span class="discribe">Afraid at highly months do things on
                                                        at.</span>
                                                    <span class="time">
                                                        <time>1 hrs ago</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="message" role="tabpanel"
                                        aria-labelledby="message-tab">

                                        <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper">
                                                <a href="user-profile.html">
                                                    <img src="{{ asset('images/user/user-sm-01.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">Selena Wagner</span>
                                                    <span class="discribe">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit.</span>
                                                    <span class="time">
                                                        <time>15 min ago</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper">
                                                <a href="user-profile.html">
                                                    <img src="{{ asset('images/user/user-sm-03.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">Sagge Hudson</span>
                                                    <span class="discribe">On disposal of as landlord Afraid at
                                                        highly
                                                        months do things on at.</span>
                                                    <span class="time">
                                                        <time>1 hrs ago</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media media-sm bg-warning-10 p-4 mb-0">
                                            <div class="media-sm-wrapper">
                                                <a href="user-profile.html">
                                                    <img src="{{ asset('images/user/user-sm-02.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">John Doe</span>
                                                    <span class="discribe">Extremity sweetness difficult behaviour
                                                        he of.
                                                        On disposal of as landlord horrible. Afraid
                                                        at highly months do things on at.</span>
                                                    <span class="time">
                                                        <time>Just now</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper">
                                                <a href="user-profile.html">
                                                    <img src="{{ asset('images/user/user-sm-04.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">Albrecht Straub</span>
                                                    <span class="discribe"> Beatae quia natus assumenda laboriosam,
                                                        nisi
                                                        perferendis aliquid consectetur expedita non tenetur.</span>
                                                    <span class="time">
                                                        <time>Just now</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="other" role="tabpanel"
                                        aria-labelledby="contact-tab">

                                        <div class="media media-sm p-4 bg-light mb-0">
                                            <div class="media-sm-wrapper bg-primary">
                                                <a href="user-profile.html">
                                                    <i class="mdi mdi-calendar-check-outline"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">New event added</span>
                                                    <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                                    <span class="time">
                                                        <time>10 min ago...</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper bg-info-dark">
                                                <a href="user-profile.html">
                                                    <i class="mdi mdi-account-multiple-check"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">Add request</span>
                                                    <span class="discribe">Add Dany Jones as your contact.</span>
                                                    <div class="buttons">
                                                        <a href="#"
                                                            class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                                        <a href="#" class="btn btn-sm shadow-none">delete</a>
                                                    </div>
                                                    <span class="time">
                                                        <time>6 hrs ago</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper bg-info">
                                                <a href="user-profile.html">
                                                    <i class="mdi mdi-playlist-check"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">Task complete</span>
                                                    <span class="discribe">Afraid at highly months do things on
                                                        at.</span>
                                                    <span class="time">
                                                        <time>1 hrs ago</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <footer class="border-top dropdown-notify-footer">
                                <div class="d-flex justify-content-between align-items-center py-2 px-4">
                                    <span>Last updated 3 min ago</span>
                                    <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
                                </div>
                            </footer>
                        </div>
                    </li>
                    <!-- User Account -->
                    <li class="dropdown user-menu">
                        <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="{{ asset('images/user/user-xs-01.jpg') }}" class="user-image rounded-circle"
                                alt="User Image" />
                            <span class="d-none d-lg-inline-block">John Doe</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a class="dropdown-link-item" href="user-profile.html">
                                    <i class="mdi mdi-account-outline"></i>
                                    <span class="nav-text">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-link-item" href="email-inbox.html">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span class="nav-text">Message</span>
                                    <span class="badge badge-pill badge-primary">24</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-link-item" href="user-activities.html">
                                    <i class="mdi mdi-diamond-stone"></i>
                                    <span class="nav-text">Activitise</span></a>
                            </li>
                            <li>
                                <a class="dropdown-link-item" href="user-account-settings.html">
                                    <i class="mdi mdi-settings"></i>
                                    <span class="nav-text">Account Setting</span>
                                </a>
                            </li>

                            <li class="dropdown-footer">
                                <a class="dropdown-link-item" href="sign-in.html"> <i class="mdi mdi-logout"></i>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>


    </header>
@endsection

@section('content')

    <div class="content">

        <!-- Analytics Status -->
        <div class="row justify-content-between mb-25 ">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mini-status">
                            <div class="text-content">
                                <span class="title">my income</span>
                                <span class="status text-primary"><i class="mdi mdi-currency-usd"></i>47,171</span>
                            </div>
                            <div class="chart-content">
                                <div id="status-sm-chart-01"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mini-status">
                            <div class="text-content ">
                                <span class="title">site traffic</span>
                                <span class="status text-success"><i class="mdi mdi-progress-upload"></i>45%</span>
                            </div>
                            <div class="chart-content">
                                <div id="status-sm-chart-02"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mini-status">
                            <div class="text-content">
                                <span class="title">site orders</span>
                                <span class="status text-info"><i class="mdi mdi-cart"></i>2447</span>
                            </div>
                            <div class="chart-content">
                                <div id="status-sm-chart-03"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-xl-end flex-column flex-wrap align-items-lg-end">
                <div id="mini-status-range" class="date-range date-range-lg bg-white">
                    <span class="date-holder text-dark"></span>
                    <i class="mdi mdi-menu-down"></i>
                </div>
                <span class="time-zone">Timezone: (+06:00) Asia - Dhaka</span>
            </div>
        </div>


        <!-- User Sessions Bounce -->
        <div class="row">
            <div class="col-xl-4">

                <!-- User -->
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Users</h2>
                    </div>
                    <div class="card-body">
                        <div class="bg-primary d-flex justify-content-between flex-wrap p-5 text-white align-items-lg-end">
                            <div class="d-flex flex-column">
                                <span class="h3 text-white">325,980</span>
                                <span>vs 275,900 (prev)</span>
                            </div>
                            <div>
                                <span>45%</span>
                                <i class="mdi mdi-arrow-up-bold"></i>
                            </div>
                        </div>
                        <div id="line-chart-1"></div>
                    </div>
                </div>

            </div>
            <div class="col-xl-4">

                <!-- Session -->
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Sessions</h2>
                    </div>
                    <div class="card-body">
                        <div class="bg-success d-flex justify-content-between flex-wrap p-5 text-white align-items-lg-end">
                            <div class="d-flex flex-column">
                                <span class="h3 text-white">7,833</span>
                                <span>vs 7,012 (prev)</span>
                            </div>
                            <div>
                                <span>55%</span>
                                <i class="mdi mdi-arrow-up-bold"></i>
                            </div>
                        </div>
                        <div id="line-chart-2"></div>
                    </div>
                </div>

            </div>
            <div class="col-xl-4">

                <!-- Bounce Rate -->
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Bounce Rate</h2>
                    </div>
                    <div class="card-body">
                        <div class="bg-danger d-flex justify-content-between flex-wrap p-5 text-white align-items-lg-end">
                            <div class="d-flex flex-column">
                                <span class="h3 text-white">67.0%</span>
                                <span>vs 65.21% (prev)</span>
                            </div>
                            <div>
                                <span>7%</span>
                                <i class="mdi mdi-arrow-down-bold"></i>
                            </div>
                        </div>
                        <div id="line-chart-3"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">

                <!-- User Acquisition Statistics -->
                <div class="card card-default" id="user-acquisition">
                    <div class="card-header border-bottom pb-0">
                        <h2>User Acquisition</h2>
                        <ul class="nav nav-underline-active-primary" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#traffic-channel" role="tab"
                                    aria-selected="true">Traffic
                                    Channel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#source-medium" role="tab"
                                    aria-selected="false">Source / Medium </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#referrals" role="tab"
                                    aria-selected="false">Referrals</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div id="barchartlg1"></div>
                    </div>
                    <div class="card-footer d-flex flex-wrap bg-white">
                        <a href="#" class="text-uppercase py-3">Acquisition Report</a>
                    </div>
                </div>

            </div>

            <!-- Sessions by Device -->
            <div class="col-xl-6">

                <!-- Sessions By Device -->
                <div class="card card-default">
                    <div class="card-header border-bottom">
                        <h2 class="mdi mdi-desktop-mac">Sessions by Device</h2>
                    </div>
                    <div class="card-body pt-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div id="donut-chart-1"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="media mb-4">
                                    <i class="display-4 mdi mdi-remote-desktop text-primary mr-3"></i>
                                    <div class="media-body">
                                        <p>Desktop</p>
                                        <p class="h4 my-1 text-dark">45% <span class="text-success">23.5% <i
                                                    class="mdi mdi-arrow-up-bold small"></i></span>
                                        </p>
                                        <p>vs 155,900 (prev)</p>
                                    </div>
                                </div>

                                <div class="media mb-4">
                                    <i class="display-4 mdi mdi-tablet-android text-primary mr-3"></i>
                                    <div class="media-body">
                                        <p>Tablet</p>
                                        <p class="h4 my-1 text-dark">30% <span class="text-success">13.5% <i
                                                    class="mdi mdi-arrow-up-bold small"></i></span>
                                        </p>
                                        <p>vs 187,900 (prev)</p>
                                    </div>
                                </div>

                                <div class="media mb-4">
                                    <i class="display-4 mdi mdi-cellphone-iphone text-primary mr-3"></i>
                                    <div class="media-body">
                                        <p>Mobile</p>
                                        <p class="h4 my-1 text-dark">25% <span class="text-success">35.5% <i
                                                    class="mdi mdi-arrow-up-bold small"></i></span>
                                        </p>
                                        <p>vs 309,900 (prev)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xl-4">

                <!-- Us Vector Map -->
                <div class="card card-default">
                    <div class="card-header">
                        <h2>User Map</h2>
                    </div>
                    <div class="card-body">
                        <div id="us-vector-map-marker"></div>
                        <ul class="list-unstyled mt-4">
                            <li class="d-flex flex-wrap justify-content-between border-top py-2 text-dark">
                                Oregon
                                <span class="text-primary">35</span>
                            </li>
                            <li class="d-flex flex-wrap justify-content-between border-top py-2 text-dark">
                                Indiana
                                <span class="text-success">10</span>
                            </li>
                            <li class="d-flex flex-wrap justify-content-between border-top py-2 text-dark">
                                Colorado
                                <span class="text-danger">25</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-xl-4">

                <!-- Page Views  -->
                <div class="card card-default" id="page-views">
                    <div class="card-header">
                        <h2>Page Views</h2>
                    </div>
                    <div class="card-body py-0" data-simplebar style="height: 392px;">
                        <table class="table table-borderless table-thead-border">
                            <thead>
                                <tr>
                                    <th>Page</th>
                                    <th class="text-right px-3">Page Views</th>
                                    <th class="text-right">Avg Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-primary"><a class="link" href="analytics.html">/analytics.html</a>
                                    </td>
                                    <td class="text-right px-3">521</td>
                                    <td class="text-right">2m:14s</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><a class="link"
                                            href="email-inbox.html">/email-inbox.html</a></td>
                                    <td class="text-right px-3">356</td>
                                    <td class="text-right">2m:23s</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><a class="link"
                                            href="email-compose.html">/email-compose.html</a></td>
                                    <td class="text-right px-3">254</td>
                                    <td class="text-right">2m:2s</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><a class="link"
                                            href="charts-chartjs.html">/charts-chartjs.html</a></td>
                                    <td class="text-right px-3">126</td>
                                    <td class="text-right">1m:15s</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><a class="link" href="profile.html">/profile.html</a></td>
                                    <td class="text-right px-3">50</td>
                                    <td class="text-right">1m:7s</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><a class="link"
                                            href="general-widgets.html">/general-widgets.html</a></td>
                                    <td class="text-right px-3">50</td>
                                    <td class="text-right">2m:35s</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><a class="link" href="card.html">/card.html</a></td>
                                    <td class="text-right px-3">590</td>
                                    <td class="text-right">5m:55s</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><a class="link"
                                            href="email-inbox.html">/email-inbox.html</a></td>
                                    <td class="text-right px-3">29</td>
                                    <td class="text-right">8m:5s</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer bg-white py-4">
                        <a href="#" class="text-uppercase">Audience Overview</a>
                    </div>
                </div>

            </div>
            <div class="col-xl-4">
                <!-- Current Users  -->
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Current Users</h2>
                        <span>Realtime</span>
                    </div>
                    <div class="card-body">
                        <div id="barchartlg2"></div>
                    </div>
                    <div class="card-footer bg-white py-4">
                        <a href="#" class="text-uppercase">Current Users Overview</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
