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
    <div class="content">
        
        <!-- Basic Examples -->
        <div class="card card-default">
            <div class="card-header">
                <h2>Add new product</h2>
                <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-basic-input" role="button"
                    aria-expanded="false" aria-controls="collapse-basic-input"> </a>


            </div>
            <div class="card-body">
                <div class="collapse" id="collapse-basic-input">
                    <pre class="language-html mb-4">
  <code >
  &lt;form&gt;
    &lt;div class="form-group"&gt;
      &lt;label for="exampleFormControlInput1"&gt;Email address&lt;/label&gt;
      &lt;input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email"&gt;
      &lt;span class="mt-2 d-block"&gt;We'll never share your email with anyone else.&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
      &lt;label for="exampleFormControlPassword"&gt;Password&lt;/label&gt;
      &lt;input type="password" class="form-control" id="exampleFormControlPassword" placeholder="Password"&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
      &lt;label for="exampleFormControlSelect12"&gt;Example select&lt;/label&gt;
      &lt;select class="form-control" id="exampleFormControlSelect12"&gt;
        &lt;option&gt;1&lt;/option&gt;
        &lt;option&gt;2&lt;/option&gt;
        &lt;option&gt;3&lt;/option&gt;
        &lt;option&gt;4&lt;/option&gt;
        &lt;option&gt;5&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
      &lt;label for="exampleFormControl2"&gt;Example multiple select&lt;/label&gt;
      &lt;select multiple class="form-control" id="exampleFormControl2"&gt;
        &lt;option&gt;1&lt;/option&gt;
        &lt;option&gt;2&lt;/option&gt;
        &lt;option&gt;3&lt;/option&gt;
        &lt;option&gt;4&lt;/option&gt;
        &lt;option&gt;5&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
      &lt;label for="exampleFormControlTextarea1"&gt;Example textarea&lt;/label&gt;
      &lt;textarea class="form-control" id="exampleFormControlTextarea1" rows="3"&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
      &lt;label for="exampleFormControlFile1"&gt;Example file input&lt;/label&gt;
      &lt;input type="file" class="form-control-file" id="exampleFormControlFile1"&gt;
    &lt;/div&gt;
    &lt;div class="form-footer mt-6"&gt;
      &lt;button type="submit" class="btn btn-primary btn-pill"&gt;Submit&lt;/button&gt;
      &lt;button type="submit" class="btn btn-light btn-pill"&gt;Cancel&lt;/button&gt;
    &lt;/div&gt;
  &lt;/form&gt;
  
  </code>
            </pre>
                </div>
                <form>
                    <div class="form-group">
                        <label for="Product_name">Product name</label>
                        <input type="text" class="form-control" id="Product_name" placeholder="e.g: HP Printer">
                    </div>

                    <div class="form-group">
                        <label for="SKU">Product SKU</label>
                        <input type="text" class="form-control" id="SKU" placeholder="e.g: EL-PR-HP123">
                    </div>

                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" placeholder="e.g: 23">
                    </div>

                    <div class="form-group">
                        <label for="price">Price per unit</label>
                        <input type="text" class="form-control" id="price" placeholder="e.g: $23">
                    </div>

                    <div class="form-group">
                        <label for="arrivDate">Arrival Date</label>
                        <input type="date" class="form-control" id="arrivDate" placeholder="e.g: 23/04/2020">
                    </div>

                    <div class="form-group">
                        <label for="expDate">Expiry Date</label>
                        <input type="date" class="form-control" id="expDate" placeholder="e.g: 23/04/2020">
                    </div>

                    <div class="form-group">
                        <label for="categories">Product category</label>
                        <select class="form-control" id="categories">
                            <option>Electronics</option>
                            <option>Food & Drinks</option>
                            <option>Clothing</option>
                            <option>Cosmetics</option>
                            <option>Art</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="desc">Product description</label>
                        <textarea class="form-control" id="desc" rows="3"></textarea>
                    </div>



                    <div class="form-group">
                        <label for="image">Product image</label>
                        <input type="file" class="form-control-file" id="image">
                    </div>
                    <div class="form-footer mt-6">
                        <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                        <button type="submit" class="btn btn-light btn-pill">Cancel</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection
