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

                                <li>
                                    <a class="sidenav-item-link" href="/users/register_admins">
                                        <span class="nav-text">Add admins</span>

                                    </a>
                                </li>

                                <li class="active">
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
        <div class="card card-default">
            <div class="card-header">
                <h2>Find user</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Search user</label>
                        <input type="text" class="form-control rounded-pill" id="exampleFormControlInput3"
                            placeholder="Search by email or user names">
                    </div>

                    <div class="form-footer mt-4">
                        <button type="submit" class="btn btn-primary btn-pill">Search</button>
                    </div>
                </form>
            </div>
        </div>
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
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Kalinda Vital</td>
                            <td>1234567890</td>
                            <td>kwizerapacifique19@gmail.com</td>
                            <td>123-456-787</td>
                            <td>USR</td>
                            <th class="text-center">
                                <a href="#">
                                    <i class="mdi mdi-open-in-new" data-toggle="modal" data-target="#userdetails"></i>
                                </a>


                            </th>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Kalinda Vital</td>
                            <td>1234567890</td>
                            <td>kwizerapacifique19@gmail.com</td>
                            <td>123-456-787</td>
                            <td>WHS</td>
                            <th class="text-center">
                                <a href="#">
                                    <i class="mdi mdi-open-in-new" data-toggle="modal" data-target="#userdetails"></i>
                                </a>


                            </th>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Kalinda Vital</td>
                            <td>1234567890</td>
                            <td>kwizerapacifique19@gmail.com</td>
                            <td>123-456-787</td>
                            <td>DLV</td>
                            <th class="text-center">
                                <a href="#">
                                    <i class="mdi mdi-open-in-new" data-toggle="modal" data-target="#userdetails"></i>
                                </a>


                            </th>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>Kalinda Vital</td>
                            <td>1234567890</td>
                            <td>kwizerapacifique19@gmail.com</td>
                            <td>123-456-787</td>
                            <td>DRV</td>
                            <th class="text-center">
                                <a href="#">
                                    <i class="mdi mdi-open-in-new" data-toggle="modal" data-target="#userdetails"></i>
                                </a>

                            </th>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>


        <div class="modal fade" id="userdetails" tabindex="-1" role="dialog" aria-labelledby="userdetails"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle2">User role update</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- Bordered Table -->
                        <div class="card card-default">

                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationServer01">Names</label>
                                            <input type="text" class="form-control border-success"
                                                id="validationServer01" placeholder="User full names"
                                                value="Kalinda Vital" disabled>

                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="validationServer02">Email</label>
                                            <input type="text" class="form-control border-info"
                                                id="validationServer02" placeholder="Email" value="kalinda@gmail.com"
                                                disabled>

                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="validationServer02">Phone number</label>
                                            <input type="text" class="form-control border-info"
                                                id="validationServer02" placeholder="Phone number" value="123456789"
                                                disabled>

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

                                    </div>
                                    <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
                                    <button class="btn btn-light btn-pill" type="submit">Cancel</button>
                                </form>
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        @endsection
