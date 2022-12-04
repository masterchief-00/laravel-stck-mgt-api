@extends('layouts.customer')

@section('title', 'Cart')

@section('content')

    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/shop" class="link">shop</a></li>
                    <li class="item-link"><span>cart</span></li>
                </ul>
            </div>
            <div class=" main-content-area">

                <div class="wrap-iten-in-cart">
                    <h3 class="box-title">Products Name</h3>
                    <ul class="products-cart">
                        @if (session('cart'))
                            @foreach (session('cart') as $id => $details)
                                <li class="pr-cart-item">
                                    <div class="product-image">
                                        @if ($details['image'] != '')
                                            <figure><img src="{{ $details['image'] }}" alt="{{ $details['name'] }}">
                                            </figure>
                                        @else
                                            <figure><img src="{{ asset('images/image-not-available.jpg') }}"
                                                    alt=""></figure>
                                        @endif
                                    </div>
                                    <div class="product-name">
                                        <a class="link-to-product" href="#">{{ $details['name'] }}</a>
                                    </div>
                                    <div class="price-field produtc-price">
                                        <p class="price">Unit price: ${{ $details['unit_price'] }}</p>
                                    </div>
                                    <div class="quantity">
                                        <div class="quantity-input">
                                            <div class="price-field sub-total">
                                                <p class="price">Quantity: {{ $details['quantity'] }}</p>
                                            </div>
                                            {{-- <input type="text" class="product-quantity id-{{ $id }}"
                                                name="product-quatity" value="{{ $details['quantity'] }}"
                                                data-max="{{ $details['max_qty'] }}" pattern="[0-9]*">
                                            <a class="btn btn-increase update-cart" href="#"
                                                data-id="{{ $id }}"></a>
                                            <a class="btn btn-reduce update-cart" href="#"
                                                data-id="{{ $id }}"></a> --}}
                                        </div>
                                    </div>
                                    <div class="price-field sub-total">
                                        <p class="price">Sub-total : ${{ $details['total'] }}</p>
                                    </div>
                                    <div class="delete">
                                        <a href="#" class="btn btn-delete remove-from-cart"
                                            data-id="{{ $id }}">
                                            <span>Delete from your cart</span>
                                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <div class="summary">
                    <div class="order-summary">
                        <?php
                        $total = 0;
                        if (session('cart')) {
                            foreach (session('cart') as $id => $details) {
                                $total += intVal($details['total']);
                            }
                            session()->put('order-total', $total);
                            session()->save();
                        }
                        
                        ?>
                        <h4 class="title-box">Order Summary</h4>
                        <p class="summary-info"><span class="title">Total</span><b class="index">${{ $total }}</b>
                        </p>
                        <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                        </p>
                    </div>
                    <div class="checkout-info">

                        <a class="btn btn-checkout" href="/checkout">Check out</a>
                        <a class="link-to-shop" href="shop.html">Continue Shopping<i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="update-clear">
                        <a class="btn btn-clear" href="/clear-cart">Clear Shopping Cart</a>
                    </div>
                </div>

            </div>
            <!--end main content area-->
        </div>
        <!--end container-->

    </main>


@endsection


@section('scripts')
    <script type="text/javascript">
        $(".update-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            var qty = $('.id-' + ele.attr("data-id")).val();
            qty = parseInt(qty);
            qty += 1;

            $.ajax({
                url: '{{ url('update-cart') }}',
                type: "PUT",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("data-id"),
                    quantity: qty,
                },
                success: function(response) {
                    window.location.reload();
                },
                error: function() {
                    alert('error');
                }
            });
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection
