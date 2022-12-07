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

                    @hasanyrole('ADM|WHS')
                        <li class="active">
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
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#product"
                                    aria-expanded="false" aria-controls="product">
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
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#orders"
                                    aria-expanded="false" aria-controls="orders">
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

                                        @role('DLV')
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
                                        @endrole                                       
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
                    @endrole
                </ul>

            </div>

        </div>
    </aside>

@endsection


@section('content')

    <div class="content">
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
                                <span class="h3 text-white">Total: {{ $user_count }}</span>
                            </div>
                            <div>
                                <span>registered</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-4">

                <div class="card card-default">
                    <div class="card-header">
                        <h2>Products</h2>
                    </div>
                    <div class="card-body">
                        <div class="bg-success d-flex justify-content-between flex-wrap p-5 text-white align-items-lg-end">
                            <div class="d-flex flex-column">
                                <span class="h3 text-white"> Total: {{ $product_count }}</span>
                            </div>
                            <div>
                                <span>registered</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-4">

                <div class="card card-default">
                    <div class="card-header">
                        <h2>Orders</h2>
                    </div>
                    <div class="card-body">
                        <div class="bg-danger d-flex justify-content-between flex-wrap p-5 text-white align-items-lg-end">
                            <div class="d-flex flex-column">
                                <span class="h3 text-white">Total: {{ $order_count }}</span>
                            </div>
                            <div>
                                <span>All combined</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xl-4">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Drivers</h2>
                    </div>
                    <div class="card-body">
                        <div class="bg-primary d-flex justify-content-between flex-wrap p-5 text-white align-items-lg-end">
                            <div class="d-flex flex-column">
                                <span class="h3 text-white">Total: {{ $driver_count }}</span>
                            </div>
                            <div>
                                <span>registered</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">

                <div class="card card-default">
                    <div class="card-header">
                        <h2>Categories</h2>
                    </div>
                    <div class="card-body">
                        <div class="bg-success d-flex justify-content-between flex-wrap p-5 text-white align-items-lg-end">
                            <div class="d-flex flex-column">
                                <span class="h3 text-white"> Total: {{ $category_count }}</span>
                            </div>
                            <div>
                                <span>registered</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-4">

                <div class="card card-default">
                    <div class="card-header">
                        <h2>Approved orders</h2>
                    </div>
                    <div class="card-body">
                        <div class="bg-danger d-flex justify-content-between flex-wrap p-5 text-white align-items-lg-end">
                            <div class="d-flex flex-column">
                                <span class="h3 text-white">Total: {{ $orders_approved_Count }}</span>
                            </div>
                            <div>
                                <span>Approved</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
