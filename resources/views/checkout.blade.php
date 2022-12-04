@extends('layouts.customer')

@section('title', 'Checkout')

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
                <div class="wrap-address-billing">
                    <h3 class="box-title">Billing Address</h3>
                    <form action="{{ route('order.checkout') }}" method="POST" name="frm-billing">
                        @csrf
                        <p class="row-in-form">
                            <label for="fname">Names<span>*</span></label>
                            <input id="fname" type="text" name="names" value="{{ Auth::user()->name }}"
                                placeholder="Your names">
                        </p>

                        <p class="row-in-form">
                            <label for="email">Email Addreess:</label>
                            <input id="email" type="email" name="email" value="{{ Auth::user()->email }}"
                                placeholder="Type your email">
                        </p>
                        <p class="row-in-form">
                            <label for="phone">Phone number<span>*</span></label>
                            <input id="phone" type="number" name="phone" value="{{ Auth::user()->phone }}"
                                placeholder="10 digits format">
                        </p>

                        <p class="row-in-form">
                            <label for="country">Province<span>*</span></label>
                            <input id="country" type="text" name="province" value=""
                                placeholder="Nothern province">
                        </p>
                        <p class="row-in-form">
                            <label for="district">District:</label>
                            <input id="district"  type="text" name="district" value="" placeholder="Your district">
                        </p>
                        <input type="hidden" name="total"
                            value="{{ Session::has('order-total') ? session()->get('order-total') : null }}" />
                        <input type="hidden" name="orderItems[]" value="{{ serialize(session()->get('cart')) }}" />
                </div>
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Payment Method</h4>
                        <p class="summary-info"><span class="title">Check / Money order</span></p>
                        <p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="bank" type="radio">
                                <span>Direct Bank Transder</span>
                                <span class="payment-desc">But the majority have suffered alteration in some form, by
                                    injected humour, or randomised words which don't look even slightly believable</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-visa" value="visa" type="radio">
                                <span>visa</span>
                                <span class="payment-desc">There are many variations of passages of Lorem Ipsum
                                    available</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                                <span>Paypal</span>
                                <span class="payment-desc">You can pay with your credit</span>
                                <span class="payment-desc">card if you don't have a paypal account</span>
                            </label>
                        </div>
                        <p class="summary-info grand-total"><span>Grand Total</span> <span
                                class="grand-total-price">${{ Session::has('order-total') ? session()->get('order-total') : '[NOT SET]' }}</span>
                        </p>
                        <button type="submit" href="/thanks" class="btn btn-medium">Place order now</button>
                    </div>
                </div>
                </form>

            </div>
            <!--end main content area-->
        </div>
        <!--end container-->

    </main>

@endsection
