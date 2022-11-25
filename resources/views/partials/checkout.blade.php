   <!-- HEADING-BANNER START -->
   <div class="heading-banner-area ">
       @foreach ($banners as $banner)
           @if ($banner->id == 2)
               <style>
                   .heading-banner-area {
                       background-image: url({{ $banner->banner }})
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
                               <form action="#">
                                   <div class="shop-cart-table check-out-wrap">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <div class="billing-details pr-20">
                                                   <h4 class="title-1 title-border text-uppercase mb-30">billing details
                                                   </h4>
                                                   <input type="text" placeholder="Your name here...">
                                                   <input type="text" placeholder="Email address here...">
                                                   <input type="text" placeholder="Phone here...">
                                                   <input type="text" placeholder="Company neme here...">
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
                                                   <textarea class="custom-textarea" placeholder="Your address here..."></textarea>
                                               </div>
                                           </div>
                                           <div class="col-md-6">
                                               <div class="our-order payment-details mt-60 pr-20">
                                                   <h4 class="title-1 title-border text-uppercase mb-30">our order</h4>
                                                   <table>
                                                       <thead>
                                                           <tr>
                                                               <th><strong>Product</strong></th>
                                                               <th class="text-end"><strong>Total</strong></th>
                                                           </tr>
                                                       </thead>
                                                       <tbody>
                                                           <tr>
                                                               <td>Dummy Product Name x 2</td>
                                                               <td class="text-end">$86.00</td>
                                                           </tr>
                                                           <tr>
                                                               <td>Dummy Product Name x 1</td>
                                                               <td class="text-end">$69.00</td>
                                                           </tr>
                                                           <tr>
                                                               <td>Cart Subtotal</td>
                                                               <td class="text-end">$155.00</td>
                                                           </tr>
                                                           <tr>
                                                               <td>Shipping and Handing</td>
                                                               <td class="text-end">$15.00</td>
                                                           </tr>
                                                           <tr>
                                                               <td>Vat</td>
                                                               <td class="text-end">$00.00</td>
                                                           </tr>
                                                           <tr>
                                                               <td>Order Total</td>
                                                               <td class="text-end">$170.00</td>
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
                           </div>
                           <!-- check-out end -->
                       </div>

                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- CHECKOUT-AREA END -->
