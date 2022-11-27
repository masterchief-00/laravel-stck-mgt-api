@extends('layouts.master')

@section('title', 'Add admin | Stock Management System')

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

@section('content')
    <div class="content">
        @if (session('message'))
            <div class="mb-4 font-medium text-sm text-green-600">
                <label class="btn btn-success">{{ session('message') }}</label>
            </div>
        @endif
        <!-- Basic Examples -->
        <div class="card card-default">
            <div class="card-header">
                <h2>Add new admin</h2>


            </div>
            <div class="card-body">
                <div class="collapse" id="collapse-basic-input">

                </div>
                <form action="{{ route('admin.add') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationServer01">Names</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control border-success" id="validationServer01" placeholder="User full names"
                                required>

                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationServer02">ID number</label>
                            <input type="number" name="ID_NO" value="{{ old('ID_NO') }}"
                                class="form-control border-info" id="validationServer02"
                                placeholder="Identity card number" required>

                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationServer02">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control border-info" id="validationServer02" placeholder="Email" required>

                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="validationServer02">Phone number</label>
                            <input type="number" name="phone" value="{{ old('phone') }}"
                                class="form-control border-info" id="validationServer02" placeholder="Phone number"
                                required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect12">Role</label>
                                <select class="form-control" id="exampleFormControlSelect12" name="user_type">
                                    @foreach ($roles as $role)
                                        @if ($role->name == 'USR')
                                            @continue
                                        @else
                                            <option value="{{ $role->name }}">
                                                {{ $role->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">User image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
                </form>

            </div>
        </div>

    </div>
@endsection
