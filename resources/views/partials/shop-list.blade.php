   <!-- HEADING-BANNER START -->
   <div class="heading-banner-area ">
       {{-- <img class="heading-banner-area" src="{{ $banner->singleProduct }}" alt=""> --}}

       @foreach ($banners as $banner)
           <style>
               .heading-banner-area {
                   background-image: url("{{ $banner->productList }}");
               }
           </style>
       @endforeach
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="heading-banner">
                       <div class="heading-banner-title">
                           <h2>Product List View</h2>
                       </div>
                       <div class="breadcumbs pb-15">
                           <ul>
                               <li><a href="#">Home</a></li>
                               <li>Product list view</li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- HEADING-BANNER END -->
   <!-- PRODUCT-AREA START -->
   <div class="product-area pt-80 pb-80 product-style-2">
       <div class="container">
           <div class="row">
               <div class="col-lg-3 order-2 order-lg-1">
                   <!-- Widget-Search start -->
                   <aside class="widget widget-search mb-30">
                       <form>
                           <input type="text" placeholder="Search here..." />
                           <button type="submit">
                               <i class="zmdi zmdi-search"></i>
                           </button>
                       </form>
                   </aside>
                   <!-- Widget-search end -->
                   <!-- Widget-Categories start -->
                   <aside class="widget widget-categories  mb-30">
                       <div class="widget-title">
                           <h4>Categories</h4>
                       </div>
                       <div id="cat-treeview" class="widget-info product-cat boxscrol2">
                           @foreach ($categories as $category)
                               <ul>
                                   <li><span>{{ $category->name }}</span>
                                   </li>

                               </ul>
                           @endforeach
                       </div>
                   </aside>
                   <!-- Widget-categories end -->
                   <!-- Widget-Size start -->
                   <aside class="widget widget-size mb-30">
                       <div class="widget-title">
                           <h4>Size</h4>
                       </div>
                       <div class="widget-info size-filter clearfix">
                           <ul>
                               @foreach ($sizes as $size)
                                   <li><a href="#">{{ $size->size }}</a></li>
                               @endforeach
                           </ul>
                       </div>
                   </aside>
                   <!-- Widget-Size end -->
               </div>
               <div class="col-lg-9 order-1 order-lg-2">
                   <!-- Shop-Content End -->
                   <div class="shop-content mt-tab-30 mb-30 mb-lg-0">
                       <div class="product-option mb-30 clearfix">
                           <!-- Nav tabs -->
                           <ul class="nav d-block shop-tab">
                               <li><a href="#grid-view" data-bs-toggle="tab"><i class="zmdi zmdi-view-module"></i></a>
                               </li>
                               <li><a class="active" href="#list-view" data-bs-toggle="tab"><i
                                           class="zmdi zmdi-view-list"></i></a></li>
                           </ul>
                       </div>
                       <!-- Tab panes -->
                       <div class="tab-content">
                           <div class="tab-pane" id="grid-view">
                               <div class="row">
                                   @foreach ($products as $product)
                                       <!-- Single-product start -->
                                       <div class="col-lg-4 col-md-6">
                                           <div class="single-product">
                                               <div class="product-img">
                                                   <span class="pro-label new-label">new</span>
                                                   <span class="pro-price-2">$ 56.20</span>
                                                   <a href="single-product.html"><img src="img/product/6.jpg"
                                                           alt="" /></a>
                                               </div>
                                               <div class="product-info clearfix text-center">
                                                   <div class="fix">
                                                       <h4 class="post-title"><a href="#">{{ $product->name }}</a>
                                                       </h4>
                                                   </div>
                                                   <div class="product-action clearfix">
                                                       <a href="#" data-bs-toggle="modal"
                                                           data-bs-target="#productModal" title="Quick View"><i
                                                               class="zmdi zmdi-zoom-in"></i></a>
                                                       <a href="cart.html" data-bs-toggle="tooltip" data-placement="top"
                                                           title="Add To Cart"><i
                                                               class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   @endforeach

                                   <!-- Single-product end -->


                               </div>
                           </div>
                           <div class="tab-pane active" id="list-view">
                               <div class="row shop-list">
                                   <!-- Single-product start -->
                                   @foreach ($products as $product)
                                       <div class="col-lg-12">
                                           <div class="single-product clearfix">
                                               <div class="product-img">
                                                   <span class="pro-label new-label">new</span>
                                                   <span class="pro-price-2">$ 56.20</span>
                                                   <a href="{{ '/product' . '/' . $product->slug }}"><img
                                                           src="img/product/6.jpg" alt="" /></a>
                                               </div>
                                               <div class="product-info">
                                                   <div class="fix">
                                                       <h4 class="post-title floatleft"><a
                                                               href="#">{{ $product->name }}</a></h4>
                                                   </div>
                                                   <div class="fix mb-20">
                                                       <span class="pro-price">$ 56.20</span>
                                                       <span class="old-price font-16px ml-10"><del>$ 96.20</del></span>
                                                   </div>
                                                   <div class="product-description">
                                                       <p>{{ $product->description }}</p>
                                                   </div>
                                                   <div class="clearfix">
                                                       <div class="cart-plus-minus">
                                                           <input type="text" value="02" name="qtybutton"
                                                               class="cart-plus-minus-box">
                                                       </div>
                                                       <div class="product-action clearfix">
                                                           <a href="#" data-bs-toggle="modal"
                                                               data-bs-target="#productModal" title="Quick View"><i
                                                                   class="zmdi zmdi-zoom-in"></i></a>
                                                           <a href="cart.html" data-bs-toggle="tooltip"
                                                               data-placement="top" title="Add To Cart"><i
                                                                   class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   @endforeach

                                   <!-- Single-product end -->


                               </div>
                           </div>
                       </div>
                       <!-- Pagination start -->
                       <div class="shop-pagination  text-center">
                           <div class="pagination">
                               {{ $products->links() }}
                           </div>
                       </div>
                       <!-- Pagination end -->
                   </div>
                   <!-- Shop-Content End -->
               </div>
           </div>
       </div>
   </div>
   <!-- PRODUCT-AREA END -->
