@extends('layouts.master')

@section('title', 'Users | Stock Management System')

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

                    <li class="has-sub active expand">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                            data-target="#users" aria-expanded="false" aria-controls="users">
                            <i class="mdi mdi-account"></i>
                            <span class="nav-text">Users</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse show" id="users" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li class="active">
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

                    @hasanyrole('ADM|WHS')
                        <li>
                            <a class="sidenav-item-link" href="/analytics">
                                <i class="mdi mdi-chart-line"></i>
                                <span class="nav-text">Analytics Dashboard</span>
                            </a>
                        </li>
                    @endhasanyrole


                    @hasanyrole('ADM|WHS|DLV')
                        <li class="section-title">
                            User actions
                        </li>

                        @canany(['product:view', 'product:register', 'product:update', 'product:delete'])
                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#product" aria-expanded="false" aria-controls="product">
                                    <i class="mdi mdi-cart"></i>
                                    <span class="nav-text">Products</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="product" data-parent="#sidebar-menu">
                                    <div class="sub-menu">
                                        @can('product:view')
                                            <li>
                                                <a class="sidenav-item-link" href="/products">
                                                    <span class="nav-text">All products</span>

                                                </a>
                                            </li>
                                        @endcan

                                        @can('product:view')
                                            <li>
                                                <a class="sidenav-item-link" href="/products/add">
                                                    <span class="nav-text">Add product</span>

                                                </a>
                                            </li>
                                        @endcan
                                    </div>
                                </ul>
                            </li>
                        @endcanany

                        @canany(['order:update', 'order:delete', 'order:view', 'order:register'])
                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#orders" aria-expanded="false" aria-controls="orders">
                                    <i class="mdi mdi-basket"></i>
                                    <span class="nav-text">Orders</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="orders" data-parent="#sidebar-menu">
                                    <div class="sub-menu">
                                        @can('order:view')
                                            <li>
                                                <a class="sidenav-item-link" href="/orders">
                                                    <span class="nav-text">All orders</span>
                                                </a>
                                            </li>
                                        @endcan
                                    </div>
                                </ul>
                            </li>
                        @endcanany

                        @canany(['order:update', 'order:delete', 'order:view', 'order:register'])
                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#shipping" aria-expanded="false" aria-controls="shipping">
                                    <i class="mdi mdi-truck"></i>
                                    <span class="nav-text">Shipping</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="shipping" data-parent="#sidebar-menu">
                                    <div class="sub-menu">
                                        @can('job:view')
                                            <li>
                                                <a class="sidenav-item-link" href="/jobs">
                                                    <span class="nav-text">All jobs</span>

                                                </a>
                                            </li>
                                        @endcan

                                        @can('user:view')
                                            <li>
                                                <a class="sidenav-item-link" href="/jobs/drivers">
                                                    <span class="nav-text">All drivers</span>
                                                </a>
                                            </li>
                                        @endcan

                                        @can('user:register')
                                            <li>
                                                <a class="sidenav-item-link" href="/jobs/add_drivers">
                                                    <span class="nav-text">Add drivers</span>

                                                </a>
                                            </li>
                                        @endcan
                                    </div>
                                </ul>
                            </li>
                        @endcanany

                        @canany(['category:register', 'category:view', 'category:delete'])
                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#category" aria-expanded="false" aria-controls="category">
                                    <i class="mdi mdi-folder"></i>
                                    <span class="nav-text">Categories</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="category" data-parent="#sidebar-menu">
                                    <div class="sub-menu">
                                        @can('category:view')
                                            <li>
                                                <a class="sidenav-item-link" href="/categories">
                                                    <span class="nav-text">All categories</span>

                                                </a>
                                            </li>
                                        @endcan

                                        @can('category:register')
                                            <li>
                                                <a class="sidenav-item-link" href="/categories/add_categories">
                                                    <span class="nav-text">Add category</span>

                                                </a>
                                            </li>
                                        @endcan
                                    </div>
                                </ul>
                            </li>
                        @endcanany

                    @endhasanyrole



                    @role('ADM')
                        <li class="section-title">
                            Advanced actions
                        </li>

                        <li class="has-sub expand active">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#users" aria-expanded="false" aria-controls="users">
                                <i class="mdi mdi-account"></i>
                                <span class="nav-text">Users</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse show" id="users" data-parent="#sidebar-menu">
                                <div class="sub-menu">

                                    <li class="active">
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
                    @endrole
                </ul>

            </div>

        </div>
    </aside>

@endsection

@section('content')
    <div class="content">

        <!-- Bordered Table -->
        <div class="card card-default">
            <div class="card-header">
                <h2>All users</h2>


            </div>
            <div class="card-body">
                <div class="collapse" id="collapse-table-bordered">

                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Names</th>
                            <th scope="col">Identity card</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Role</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td scope="row">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->ID_NO }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->user_type }}</td>
                                <th class="text-center">
                                    <a href="#">
                                        <i class="mdi mdi-open-in-new"></i>
                                    </a>
                                    <a href="#">
                                        <i class="mdi mdi-close text-danger"></i>
                                    </a>

                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
