@extends('layouts.customer')

@section('title', 'Product details')

@section('content')

    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/shop" class="link">home</a></li>
                    <li class="item-link"><span>detail</span></li>
                </ul>
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <div class="wrap-product-detail">
                        <div class="detail-media">
                            <div class="product-gallery">
                                <ul class="slides">
                                    @if ($product->image != null)
                                        <li data-thumb="{{ $product->image }}">
                                            <img src="{{ $product->image }}" alt="product thumbnail" />
                                        </li>
                                    @else
                                        <li data-thumb="{{ asset('images/image-not-available.jpg') }}">
                                            <img src="{{ asset('images/image-not-available.jpg') }}"
                                                alt="product thumbnail" style="border-radius: 20px" />
                                        </li>
                                    @endif


                                </ul>
                            </div>
                        </div>
                        <div class="detail-info">
                            <h2 class="product-name">{{ $product->name }}</h2>

                            <div class="wrap-price"><span class="product-price">Unit price:
                                    ${{ $product->unit_price }}</span></div>
                            <div class="stock-info in-stock">
                                @if ($product->quantity > 1)
                                    <p class="availability">Availability: <b>In Stock</b></p>
                                @else
                                    <p class="availability">Availability: <b>Out of Stock</b></p>
                                @endif
                            </div>
                            <div class="quantity">
                                <span>Quantity:</span>
                                <div class="quantity-input">
                                    <input type="text" name="product-quatity" value="1"
                                        data-max="{{ $product->quantity }}" pattern="[0-9]*">

                                    <a class="btn btn-reduce" href="#"></a>
                                    <a class="btn btn-increase" href="#"></a>
                                </div>
                            </div>
                            <div class="wrap-butons">
                                <a href="#" class="btn add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                        <div class="advance-info">
                            <div class="tab-control normal">
                                <a href="#description" class="tab-control-item active">description</a>
                            </div>
                            <div class="tab-contents">
                                <div class="tab-content-item active" id="description">
                                    <p>Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no qui,
                                        a t everti meliore erroribus sea. ro cum. Sea ne accusata voluptatibus. Ne cum falli
                                        dolor voluptua, duo ei sonet choro facilisis, labores officiis torquatos cum ei.</p>
                                    <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut, legere
                                        expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his, ius graecis
                                        accommodare te. No eam tota nostrum eque. Est cu nibh clita. Sed an nominavi, et
                                        stituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu
                                        putent habemus voluptua sit, sit cu rationibus scripserit, modus taria . </p>
                                    <p>experian soleat maluisset per. Has eu idque similique, et blandit scriptorem tatibus
                                        mea. Vis quaeque ocurreret ea.cu bus scripserit, modus voluptaria ex per.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--end main products area-->

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget widget-our-services ">
                        <div class="widget-content">
                            <ul class="our-services">

                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Free Shipping</b>
                                            <span class="subtitle">On Oder Over $99</span>
                                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-gift" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Special Offer</b>
                                            <span class="subtitle">Get a gift!</span>
                                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Order Return</b>
                                            <span class="subtitle">Return within 7 days</span>
                                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Categories widget-->

                    <div class="widget mercado-widget widget-product">
                        <h2 class="widget-title">Popular Products</h2>
                        <div class="widget-content">
                            <ul class="products">
                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="{{ asset('customer/images/products/digital_01.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="{{ asset('customer/images/products/digital_17.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="{{ asset('customer/images/products/digital_18.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img
                                                        src="{{ asset('customer/images/products/digital_20.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <!--end sitebar-->

                <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrap-show-advance-info-box style-1 box-in-site">
                        <h3 class="title-box">Related Products</h3>
                        <div class="wrap-products">
                            <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                                data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>
                                @foreach ($related_products as $related_product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="{{ $related_product->name }}">

                                                @if ($related_product->image != null)
                                                    <figure><img src="{{ $related_product->image }}" width="214"
                                                            height="214" alt="{{ $related_product->name }}">
                                                    </figure>
                                                @else
                                                    <figure><img src="{{ asset('images/image-not-available.jpg') }}"
                                                            width="214" height="214"
                                                            alt="{{ $related_product->name }}">
                                                    </figure>
                                                @endif

                                            </a>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#"
                                                class="product-name"><span>{{ $related_product->name }}</span></a>
                                            <div class="wrap-price"><span
                                                    class="product-price">${{ $related_product->unit_price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        <!--End wrap-products-->
                    </div>
                </div>

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>

@endsection
