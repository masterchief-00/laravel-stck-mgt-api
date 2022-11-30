@extends('layouts.customer')

@section('title', 'Cart')

@section('content')

    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>login</span></li>
                </ul>
            </div>
            <div class=" main-content-area">

                <div class="wrap-iten-in-cart">
                    <h3 class="box-title">Products Name</h3>
                    <ul class="products-cart">
                        <li class="pr-cart-item">
                            <div class="product-image">
                                <figure><img src="{{ asset('customer/images/products/digital_18.jpg') }}" alt=""></figure>
                            </div>
                            <div class="product-name">
                                <a class="link-to-product" href="#">Radiant-360 R6 Wireless Omnidirectional Speaker
                                    [White]</a>
                            </div>
                            <div class="price-field produtc-price">
                                <p class="price">$256.00</p>
                            </div>
                            <div class="quantity">
                                <div class="quantity-input">
                                    <input type="text" name="product-quatity" value="1" data-max="120"
                                        pattern="[0-9]*">
                                    <a class="btn btn-increase" href="#"></a>
                                    <a class="btn btn-reduce" href="#"></a>
                                </div>
                            </div>
                            <div class="price-field sub-total">
                                <p class="price">$256.00</p>
                            </div>
                            <div class="delete">
                                <a href="#" class="btn btn-delete" title="">
                                    <span>Delete from your cart</span>
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </a>
                            </div>
                        </li>
                        <li class="pr-cart-item">
                            <div class="product-image">
                                <figure><img src="{{ asset('customer/images/products/digital_20.jpg') }}" alt=""></figure>
                            </div>
                            <div class="product-name">
                                <a class="link-to-product" href="#">Radiant-360 R6 Wireless Omnidirectional Speaker
                                    [White]</a>
                            </div>
                            <div class="price-field produtc-price">
                                <p class="price">$256.00</p>
                            </div>
                            <div class="quantity">
                                <div class="quantity-input">
                                    <input type="text" name="product-quatity" value="1" data-max="120"
                                        pattern="[0-9]*">
                                    <a class="btn btn-increase" href="#"></a>
                                    <a class="btn btn-reduce" href="#"></a>
                                </div>
                            </div>
                            <div class="price-field sub-total">
                                <p class="price">$256.00</p>
                            </div>
                            <div class="delete">
                                <a href="#" class="btn btn-delete" title="">
                                    <span>Delete from your cart</span>
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="summary">
                    <div class="order-summary">
                        <h4 class="title-box">Order Summary</h4>
                        <p class="summary-info"><span class="title">Subtotal</span><b class="index">$512.00</b></p>
                        <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                        <p class="summary-info total-info "><span class="title">Total</span><b class="index">$512.00</b>
                        </p>
                    </div>
                    <div class="checkout-info">
                       
                        <a class="btn btn-checkout" href="/checkout">Check out</a>
                        <a class="link-to-shop" href="shop.html">Continue Shopping<i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="update-clear">
                        <a class="btn btn-clear" href="#">Clear Shopping Cart</a>
                    </div>
                </div>              

            </div>
            <!--end main content area-->
        </div>
        <!--end container-->

    </main>


@endsection
