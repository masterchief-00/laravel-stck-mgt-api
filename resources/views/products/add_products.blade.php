@extends('layouts.master')

@section('title', 'Add products | Stock Management System')

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



                    <li class="has-sub active expand">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#product"
                            aria-expanded="false" aria-controls="product">
                            <i class="mdi mdi-cart"></i>
                            <span class="nav-text">Products</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse show" id="product" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li>
                                    <a class="sidenav-item-link" href="/products">
                                        <span class="nav-text">All products</span>

                                    </a>
                                </li>

                                <li class="active">
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

@section('content')
    <div class="content">
        @if (session('message'))
            <div class="mb-4 font-medium text-sm text-green-600">
                <label class="btn btn-success">{{ session('message') }}</label>
            </div>
        @endif
        <div class="card card-default">

            <div class="card-header">
                <h2>Add new product</h2>

            </div>
            <div class="card-body">
                <div class="collapse" id="collapse-basic-input">

                </div>
                <form action="{{ route('products.add') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Product_name">Product name</label>
                        <input type="text" name="name" class="form-control" id="Product_name"
                            placeholder="e.g: HP Printer" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="SKU">Product SKU</label>
                        <input type="text" name="SKU" class="form-control" id="SKU"
                            placeholder="e.g: EL-PR-HP123" value="{{ old('SKU') }}">
                    </div>

                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" placeholder="e.g: 23"
                            value="{{ old('quantity') }}">
                    </div>

                    <div class="form-group">
                        <label for="price">Price per unit</label>
                        <input type="text" name="unit_price" class="form-control" id="price"
                            placeholder="e.g: $23" value="{{ old('unit_price') }}">
                    </div>

                    <div class="form-group">
                        <label for="arrivDate">Arrival Date</label>
                        <input type="date" name="arriv_date" class="form-control" id="arrivDate"
                            placeholder="e.g: 23/04/2020" value="{{ old('arriv_date') }}">
                    </div>

                    <div class="form-group">
                        <label for="expDate">Expiry Date</label>
                        <input type="date" name="exp_date" class="form-control" id="expDate"
                            placeholder="e.g: 23/04/2020" value="{{ old('exp_date') }}">
                    </div>

                    <div class="form-group">
                        <label for="categories">Product category</label>
                        <select class="form-control" id="categories" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- <div class="form-group">
                        <label for="desc">Product description</label>
                        <textarea class="form-control" id="desc" rows="3" name="description"></textarea>
                    </div> --}}



                    <div class="form-group">
                        <label for="image">Product image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <div class="form-footer mt-6">
                        <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection
