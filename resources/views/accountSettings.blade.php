@extends('layouts.master')

@section('title', 'Account settings')

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
                        <li>
                            <a class="sidenav-item-link" href="chat.html">
                                <i class="mdi mdi-wechat"></i>
                                <span class="nav-text">Chat</span>
                            </a>
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
        <!-- Card Profile -->
        <div class="card card-default card-profile">
            <div class="card-header-bg" style="background-image: url(assets/img/user/user-bg-01.jpg)"></div>

            <div class="card-body card-profile-body">
                <div class="profile-avata">
                    @if (Auth::user()->image != null)
                        <img class="user-image rounded-circle" src="{{ Auth::user()->image }}" style="height: 60px"
                            alt="Avata Image" />
                    @else
                        <img class="user-image rounded-circle" src="{{ asset('images/avatar-small.jpg') }}"
                            alt="Avata Image" />
                    @endif
                    <a class="h5 d-block mt-3 mb-2" href="#">{{ Auth::user()->name }}</a>
                    <a class="d-block text-color" href="#">{{ Auth::user()->email }}</a>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-12">
                <!-- Account Settings -->
                <div class="card card-default">
                    <div class="card-header">
                        <h2 class="mb-5">Account Settings</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            @csrf
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstName">Names</label>
                                        <input type="text" name="name" value="{{ Auth::user()->name }}"
                                            class="form-control" id="firstName" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="email">Email</label>
                                <input type="email" value="{{ Auth::user()->email }}" class="form-control"
                                    id="email" disabled />
                            </div>

                            <div class="form-group mb-4">
                                <label for="email">Identity card number</label>
                                <input type="email" value="{{ Auth::user()->ID_NO }}" class="form-control"
                                    id="ID_NO" disabled />
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>

                            <div class="form-group mb-4">
                                <label for="newPassword">New password</label>
                                <input type="password" name="password" class="form-control" id="newPassword" />
                            </div>

                            <div class="form-group mb-4">
                                <label for="conPassword">Confirm password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="conPassword" />
                            </div>

                            <div class="d-flex justify-content-end mt-6">
                                <button type="submit" class="btn btn-primary mb-2 btn-pill">
                                    Update Profile
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
