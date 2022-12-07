@extends('layouts.master')

@section('title', 'Authority management | Stock Management System')

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

                                        @hasanyrole('ADM|DLV')
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
                                        @endhasanyrole
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

                                    <li class='active'>
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
        <div class="card card-default">
            <div class="card-header">
                <h2>Find user</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('user.search') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Search user</label>
                        <input type="text" name="query" value="{{ old('query') }}"
                            class="form-control rounded-pill" id="exampleFormControlInput3"
                            placeholder="Search by email or user names">
                    </div>

                    <div class="form-footer mt-4">
                        <button type="submit" class="btn btn-primary btn-pill">Search</button>
                    </div>
                </form>
            </div>
        </div>
        @if (Session::has('results'))
            <?php $results = Session::get('results'); ?>
            <div class="card card-default">
                <div class="card-header">
                    <h2>Results</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Names</th>
                                <th scope="col">Identity card</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone number</th>
                                <th scope="col">Role</th>
                                <th class="text-center">Update role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $result)
                                <tr>
                                    <td scope="row">1</td>
                                    <td>{{ $result->name }}</td>
                                    <td>{{ $result->ID_NO }}</td>
                                    <td>{{ $result->email }}</td>
                                    <td>{{ $result->phone }}</td>
                                    <td>{{ $result->user_type }}</td>
                                    <th class="text-center" colspan="2">
                                        <form action="{{ route('role.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="email" value="{{ $result->email }}" />
                                            <select class="form-control" id="exampleFormControlSelect12"
                                                name="user_type">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->name }}">
                                                        {{ $role->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-sm btn-primary">Done</button>
                                        </form>

                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif


    @endsection
