   <!-- HEADING-BANNER START -->
   <div class="heading-banner-area ">
       @foreach ($banners as $banner)
           @if ($banner->id == 2)
               <style>
                   .heading-banner-area {
                       background-image: url('src/banners/{{ $banner->banner }}')
                   }
               </style>
           @endif
       @endforeach
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="heading-banner">
                       <div class="heading-banner-title">
                           <h2>check out</h2>
                       </div>
                       <div class="breadcumbs pb-15">
                           <ul>
                               <li><a href="index.html">Home</a></li>
                               <li>check out</li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- HEADING-BANNER END -->
   <!-- CHECKOUT-AREA START -->
   <div class="shopping-cart-area  pt-80 pb-80">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="shopping-cart">
                       <!-- Nav tabs -->
                       <ul class="cart-page-menu nav row clearfix mb-30">
                           <li><a>shopping cart</a></li>
                           <li><a class="active" href="#check-out" data-bs-toggle="tab">check out</a></li>
                           <li><a>order complete</a></li>
                       </ul>

                       <!-- Tab panes -->
                       <div class="tab-content">
                           <!-- check-out start -->
                           <div class="tab-pane active" id="check-out">
                               {{-- <form action="#"> --}}
                               <form action='{{ url('/checkout.html/order') }}' method="POST">
                                   @csrf
                                   <div class="shop-cart-table check-out-wrap">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <div class="billing-details pr-20">
                                                   <h4 class="title-1 title-border text-uppercase mb-30">billing details
                                                   </h4>
                                                   <input type="text" value="{{ auth()->user()->name }}"
                                                       name="name" required placeholder="Your name here...">
                                                   <input type="text" value="{{ auth()->user()->email }}"
                                                       name="email" required placeholder="Email address here...">
                                                   <input type="text" name="phone"
                                                       value="{{ auth()->user()->phone }}" required
                                                       placeholder="Phone here...">
                                                   <input type="text"
                                                       value="{{ auth()->user()->company }}"placeholder="Company neme here...">
                                                   <select class="custom-select mb-15">
                                                       <option>Contry</option>
                                                       <option>Bangladesh</option>
                                                       <option>United States</option>
                                                       <option>united Kingdom</option>
                                                       <option>Australia</option>
                                                       <option>Canada</option>
                                                   </select>
                                                   <select class="custom-select mb-15">
                                                       <option>State</option>
                                                       <option>Dhaka</option>
                                                       <option>New York</option>
                                                       <option>London</option>
                                                       <option>Melbourne</option>
                                                       <option>Ottawa</option>
                                                   </select>
                                                   <select class="custom-select mb-15">
                                                       <option>Town / City</option>
                                                       <option>Dhaka</option>
                                                       <option>New York</option>
                                                       <option>London</option>
                                                       <option>Melbourne</option>
                                                       <option>Ottawa</option>
                                                   </select>
                                                   <textarea required name="adress" class="custom-textarea" placeholder="Your address here..."></textarea>
                                               </div>
                                           </div>
                                           <div class="col-md-6">

                                               <div class="our-order payment-details mt-60 pr-20">
                                                   <h4 class="title-1 title-border text-uppercase mb-30">our order
                                                   </h4>

                                                   <table>
                                                       <thead>
                                                           <tr>
                                                               <th><strong>Product</strong></th>
                                                               <th class="text-end"><strong>Total</strong></th>
                                                           </tr>
                                                       </thead>
                                                       <tbody>

                                                           @foreach ($cart as $carts)
                                                               <tr>
                                                                   <td>{{ $carts->product_title }}
                                                                       x
                                                                       {{ $carts->quantity }} </td>
                                                                   <input type="text" name="productname[]"
                                                                       value="{{ $carts->product_title }}"
                                                                       id="" hidden>
                                                                   <input type="text" name="quantity[]"
                                                                       value="{{ $carts->quantity }}" id=""
                                                                       hidden>
                                                                   <td class="text-end">${{ $carts->price }}</td>
                                                                   <input type="text" name="price[]"
                                                                       value="{{ $carts->price }}" id=""
                                                                       hidden>
                                                               </tr>
                                                           @endforeach
                                                           <tr>
                                                               <td>Cart Subtotal</td>
                                                               <td class="text-end">${{ $total }}</td>
                                                           </tr>

                                                           <tr>
                                                               <td>Vat</td>
                                                               <td class="text-end">${{ $total * 0.21 }}</td>
                                                           </tr>
                                                           <tr>
                                                               <td>Order Total</td>
                                                               <td class="text-end">${{ $total + $total * 0.21 }}</td>
                                                           </tr>
                                                       </tbody>
                                                   </table>
                                                   <button class="button-one submit-button mt-15"
                                                       data-text="place order" type="submit">order</button>


                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </form>

                               {{-- </form> --}}
                           </div>
                           <!-- check-out end -->
                       </div>

                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- CHECKOUT-AREA END -->
