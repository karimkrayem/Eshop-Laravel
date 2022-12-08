<div class="heading-banner-area">

    @foreach ($banners as $banner)
        @if ($banner->id == 9)
            <style>
                .heading-banner-area {
                    background-image: url("{{ $banner->banner }}");
                }
            </style>
        @endif
    @endforeach
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-banner">
                    <div class="heading-banner-title">
                        <h2>Shopping Cart</h2>
                    </div>
                    <div class="breadcumbs pb-15">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HEADING-BANNER END -->
<!-- SHOPPING-CART-AREA START -->
<div class="shopping-cart-area  pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shopping-cart">
                    <!-- Nav tabs -->
                    <ul class="cart-page-menu nav row clearfix mb-30">
                        <li><a class="active" href="#shopping-cart" data-bs-toggle="tab">shopping cart</a></li>
                        <li><a>check out</a></li>
                        <li><a>order complete</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- shopping-cart start -->
                        <div class="tab-pane active" id="shopping-cart">

                            <div class="shop-cart-table">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                                <th class="product-remove">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- {{ dd($carts->id) }} --}}
                                            @forelse ($cart as $carts)
                                                <tr>
                                                    <td class="product-thumbnail  text-left">
                                                        <!-- Single-product start -->
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="single-product.html"><img
                                                                        src="src/products/{{ $images->where('product_id', $carts->product_id)->first()->image }}"
                                                                        alt="" /></a>
                                                            </div>
                                                            <div class="product-info">
                                                                <h4 class="post-title"><a class="text-light-black"
                                                                        href="#">{{ $carts->product_title }}</a>
                                                                </h4>
                                                                <p class="mb-0">Color : Black</p>
                                                                <p class="mb-0">Size : SL</p>
                                                            </div>
                                                        </div>
                                                        <!-- Single-product end -->
                                                    </td>
                                                    <td class="product-price">${{ $carts->price }}</td>
                                                    <td class="product-quantity">
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="{{ $carts->quantity }}"
                                                                name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">$
                                                        {{ $carts->price * $carts->quantity }}</td>


                                                    <form action="/cart/{{ $carts->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')


                                                        <td class="product-remove">
                                                            {{-- <input type="submit" value=""> --}}
                                                            <button type="submit">DELETE</button>
                                                            {{-- <a href="#"></a> --}}
                                                        </td>
                                                    </form>
                                                </tr>
                                            @empty

                                                <div>
                                                    <h4 class="text-center m-5 ">Cart Empty</h4>
                                                </div>
                                            @endforelse



                                        </tbody>
                                    </table>
                                    {{-- @endforelse --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="customer-login mt-30">
                                        <h4 class="title-1 title-border text-uppercase">coupon discount</h4>
                                        <p class="text-gray">Enter your coupon code if you have one!</p>
                                        <input type="text" placeholder="Enter your code here.">
                                        <button type="submit" data-text="apply coupon"
                                            class="button-one submit-button mt-15">apply coupon</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="customer-login payment-details mt-30">
                                        <h4 class="title-1 title-border text-uppercase">payment details</h4>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">Cart Subtotal</td>
                                                    <td class="text-end">${{ $total }}</td>
                                                </tr>

                                                <tr>
                                                    <td class="text-left">Vat</td>
                                                    <td class="text-end">${{ $total * 0.21 }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Order Total</td>
                                                    <td class="text-end">${{ $total + $total * 0.21 }} </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- shopping-cart end -->
                        <!-- check-out end -->
                    </div>
                    {{-- <button type="submit" data-text="proceed-checkout" class="button-one submit-button mt-15">PROCEED
                            CHECK OUT</button> --}}
                    <a href="/checkout.html" data-text="proceed-checkout" class="button-one submit-button mt-15">PROCEED
                        CHECK OUT</a>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- SHOPPING-CART-AREA END -->
