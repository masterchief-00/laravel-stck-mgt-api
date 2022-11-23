@extends('layouts.master')

@section('title', 'Add drivers | Stock Management System')

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





                    <li>
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
                                    <a class="sidenav-item-link" href="email-inbox.html">
                                        <span class="nav-text">All categories</span>

                                    </a>
                                </li>

                                <li>
                                    <a class="sidenav-item-link" href="email-details.html">
                                        <span class="nav-text">Add category</span>

                                    </a>
                                </li>


                            </div>
                        </ul>
                    </li>


                    <li class="section-title">
                        Advanced actions
                    </li>

                    <li class="has-sub active expand">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                            data-target="#users" aria-expanded="false" aria-controls="users">
                            <i class="mdi mdi-account"></i>
                            <span class="nav-text">Users</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse show" id="users" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li>
                                    <a class="sidenav-item-link" href="/users">
                                        <span class="nav-text">All users</span>

                                    </a>
                                </li>

                                <li class="active">
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

        <!-- Basic Examples -->
        <div class="card card-default">
            <div class="card-header">
                <h2>Add new admin</h2>


            </div>
            <div class="card-body">
                <div class="collapse" id="collapse-basic-input">

                </div>
                <form>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationServer01">Names</label>
                            <input type="text" class="form-control border-success" id="validationServer01"
                                placeholder="User full names" required>
                            <div class="text-success small mt-1">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationServer02">ID number</label>
                            <input type="text" class="form-control border-info" id="validationServer02"
                                placeholder="Identity card number" required>
                            <div class="text-info small mt-1">
                                We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationServer02">Email</label>
                            <input type="text" class="form-control border-info" id="validationServer02"
                                placeholder="Email" required>
                            <div class="text-info small mt-1">
                                We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationServer02">ID number</label>
                            <input type="text" class="form-control border-info" id="validationServer02"
                                placeholder="Identity card number" required>
                            <div class="text-warning small mt-1">
                                Shucks, check the formatting of that and try again.
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationServer02">Phone number</label>
                            <input type="text" class="form-control border-info" id="validationServer02"
                                placeholder="Phone number" required>
                            <div class="text-warning small mt-1">
                                Shucks, check the formatting of that and try again.
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect12">Role</label>
                                <select class="form-control" id="exampleFormControlSelect12">
                                    <option>Warehouse manager</option>
                                    <option>Shipping manager</option>
                                    <option>Overlord</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">User image</label>
                            <input type="file" class="form-control-file" id="image">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
                    <button class="btn btn-light btn-pill" type="submit">Cancel</button>
                </form>

            </div>
        </div>

    </div>
@endsection
