@extends('layouts.master')

@section('title', 'Products | Stock Management System')

@section('sidebar')

    <!-- ====================================
                                                                                                                      ——— LEFT SIDEBAR WITH OUT FOOTER
                                                                                                                    ===================================== -->
    <aside class="left-sidebar sidebar-dark" id="left-sidebar">
        <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Mono">
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



                    <li class="has-sub active expand">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#product"
                            aria-expanded="false" aria-controls="product">
                            <i class="mdi mdi-cart"></i>
                            <span class="nav-text">Products</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse show" id="product" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li class="active">
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
                                    <a class="sidenav-item-link" href="email-inbox.html">
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
                                    <a class="sidenav-item-link" href="email-inbox.html">
                                        <span class="nav-text">All jobs</span>

                                    </a>
                                </li>

                                <li>
                                    <a class="sidenav-item-link" href="email-details.html">
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
                        Admin actions
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
                                    <a class="sidenav-item-link" href="email-inbox.html">
                                        <span class="nav-text">All users</span>

                                    </a>
                                </li>

                                <li>
                                    <a class="sidenav-item-link" href="email-details.html">
                                        <span class="nav-text">Add admins</span>

                                    </a>
                                </li>

                                <li>
                                    <a class="sidenav-item-link" href="email-details.html">
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

@section('content')

    <!-- Header -->
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
                            <input type="text" autocomplete="off" name="query" id="search-input" class="form-control"
                                placeholder="Search..." />
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
                        <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off"
                            href="javascript:">
                            <i class="mdi mdi-contacts icon"></i>
                        </a>
                    </li>
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
                                                    <img src="images/user/user-sm-02.jpg" alt="User Image">
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
                                                    <img src="images/user/user-sm-03.jpg" alt="User Image">
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
                                                    <img src="images/user/user-sm-01.jpg" alt="User Image">
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
                                                    <img src="images/user/user-sm-03.jpg" alt="User Image">
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
                                                    <img src="images/user/user-sm-02.jpg" alt="User Image">
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
                                                    <img src="images/user/user-sm-04.jpg" alt="User Image">
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
                            <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
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

    <div class="content">

        <!-- Bordered Table -->
        <div class="card card-default">
            <div class="card-header">
                <h2>All products</h2>

                <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-table-bordered" role="button"
                    aria-expanded="false" aria-controls="collapse-table-bordered"> </a>


            </div>
            <div class="card-body">
                <div class="collapse" id="collapse-table-bordered">
                    <pre class="language-html mb-4">
  <code >
  &lt;table class="table table-bordered">
    &lt;thead>
      &lt;tr>
        &lt;th scope="col">#&lt;/th>
        &lt;th scope="col">First&lt;/th>
        &lt;th scope="col">Last&lt;/th>
        &lt;th scope="col">Handle&lt;/th>
        &lt;th class="text-center">Action&lt;/th>
      &lt;/tr>
    &lt;/thead>
    &lt;tbody>
      &lt;tr>
        &lt;td scope="row">1&lt;/td>
        &lt;td>Lucia&lt;/td>
        &lt;td>Christ&lt;/td>
        &lt;td>@Lucia&lt;/td>
        &lt;th class="text-center">
          &lt;a href="#">
            &lt;i class="mdi mdi-open-in-new">&lt;/i>
          &lt;/a>
          &lt;a href="#">
            &lt;i class="mdi mdi-close text-danger">&lt;/i>
          &lt;/a>
  
        &lt;/th>
      &lt;/tr>
      &lt;tr>
        &lt;td scope="row">2&lt;/td>
        &lt;td>Catrin&lt;/td>
        &lt;td>Seidl&lt;/td>
        &lt;td>@catrin&lt;/td>
        &lt;th class="text-center">
          &lt;a href="#">
            &lt;i class="mdi mdi-open-in-new">&lt;/i>
          &lt;/a>
          &lt;a href="#">
            &lt;i class="mdi mdi-close text-danger">&lt;/i>
          &lt;/a>
  
        &lt;/th>
      &lt;/tr>
      &lt;tr>
        &lt;td scope="row">3&lt;/td>
        &lt;td>Lilli&lt;/td>
        &lt;td>Kirsh&lt;/td>
        &lt;td>@lilli&lt;/td>
        &lt;th class="text-center">
          &lt;a href="#">
            &lt;i class="mdi mdi-open-in-new">&lt;/i>
          &lt;/a>
          &lt;a href="#">
            &lt;i class="mdi mdi-close text-danger">&lt;/i>
          &lt;/a>
  
        &lt;/th>
      &lt;/tr>
      &lt;tr>
        &lt;td scope="row">4&lt;/td>
        &lt;td>Else&lt;/td>
        &lt;td>Voigt&lt;/td>
        &lt;td>@voigt&lt;/td>
        &lt;th class="text-center">
          &lt;a href="#">
            &lt;i class="mdi mdi-open-in-new">&lt;/i>
          &lt;/a>
          &lt;a href="#">
            &lt;i class="mdi mdi-close text-danger">&lt;/i>
          &lt;/a>
  
        &lt;/th>
      &lt;/tr>
      &lt;tr>
        &lt;td scope="row">5&lt;/td>
        &lt;td>Ursel&lt;/td>
        &lt;td>Harms&lt;/td>
        &lt;td>@ursel&lt;/td>
        &lt;th class="text-center">
          &lt;a href="#">
            &lt;i class="mdi mdi-open-in-new">&lt;/i>
          &lt;/a>
          &lt;a href="#">
            &lt;i class="mdi mdi-close text-danger">&lt;/i>
          &lt;/a>
  
        &lt;/th>
      &lt;/tr>
      &lt;tr>
        &lt;td scope="row">6&lt;/td>
        &lt;td>Anke&lt;/td>
        &lt;td>Sauter&lt;/td>
        &lt;td>@Anke&lt;/td>
        &lt;th class="text-center">
          &lt;a href="#">
            &lt;i class="mdi mdi-open-in-new">&lt;/i>
          &lt;/a>
          &lt;a href="#">
            &lt;i class="mdi mdi-close text-danger">&lt;/i>
          &lt;/a>
  
        &lt;/th>
      &lt;/tr>
    &lt;/tbody>
  &lt;/table>
  </code>
            </pre>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product name</th>
                            <th scope="col">SKU</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price per unit</th>
                            <th scope="col">Arrival date</th>
                            <th scope="col">Expiry date</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>HP Printer</td>
                            <td>EL-PR-HP234</td>
                            <td>67</td>
                            <td>$670</td>
                            <td>12/06/2020</td>
                            <td>12/08/2025</td>
                            <th class="text-center">
                                <a href="#">
                                    <i class="mdi mdi-open-in-new"></i>
                                </a>
                                <a href="#">
                                    <i class="mdi mdi-close text-danger"></i>
                                </a>

                            </th>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>HP Printer</td>
                            <td>EL-PR-HP234</td>
                            <td>67</td>
                            <td>$670</td>
                            <td>12/06/2020</td>
                            <td>12/08/2025</td>
                            <th class="text-center">
                                <a href="#">
                                    <i class="mdi mdi-open-in-new"></i>
                                </a>
                                <a href="#">
                                    <i class="mdi mdi-close text-danger"></i>
                                </a>

                            </th>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>HP Printer</td>
                            <td>EL-PR-HP234</td>
                            <td>67</td>
                            <td>$670</td>
                            <td>12/06/2020</td>
                            <td>12/08/2025</td>
                            <th class="text-center">
                                <a href="#">
                                    <i class="mdi mdi-open-in-new"></i>
                                </a>
                                <a href="#">
                                    <i class="mdi mdi-close text-danger"></i>
                                </a>

                            </th>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>HP Printer</td>
                            <td>EL-PR-HP234</td>
                            <td>67</td>
                            <td>$670</td>
                            <td>12/06/2020</td>
                            <td>12/08/2025</td>
                            <th class="text-center">
                                <a href="#">
                                    <i class="mdi mdi-open-in-new"></i>
                                </a>
                                <a href="#">
                                    <i class="mdi mdi-close text-danger"></i>
                                </a>

                            </th>
                        </tr>
                        <tr>
                            <td scope="row">5</td>
                            <td>HP Printer</td>
                            <td>EL-PR-HP234</td>
                            <td>67</td>
                            <td>$670</td>
                            <td>12/06/2020</td>
                            <td>12/08/2025</td>
                            <th class="text-center">
                                <a href="#">
                                    <i class="mdi mdi-open-in-new"></i>
                                </a>
                                <a href="#">
                                    <i class="mdi mdi-close text-danger"></i>
                                </a>

                            </th>
                        </tr>
                        <tr>
                            <td scope="row">6</td>
                            <td>HP Printer</td>
                            <td>EL-PR-HP234</td>
                            <td>67</td>
                            <td>$670</td>
                            <td>12/06/2020</td>
                            <td>12/08/2025</td>
                            <th class="text-center">
                                <a href="#">
                                    <i class="mdi mdi-open-in-new"></i>
                                </a>
                                <a href="#">
                                    <i class="mdi mdi-close text-danger"></i>
                                </a>

                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
