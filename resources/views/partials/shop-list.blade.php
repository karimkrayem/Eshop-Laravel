   <!-- HEADING-BANNER START -->
   <div class="heading-banner-area ">
       {{-- <img class="heading-banner-area" src="{{ $banner->singleProduct }}" alt=""> --}}

       @foreach ($banners as $banner)
           @if ($banner->id == 6)
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
   <div class="product-area pt-80 product-style-2">
       <div class="container">
           <div class="row">
               <div class="col-lg-3 order-2 order-lg-1">
                   <!-- Widget-Search start -->
                   <aside class="widget widget-search mb-30">
                       <form action="{{ url('search') }}" method="GET">
                           @csrf

                           @if (session('message'))
                               <div class="primary m-5  ">
                                   {{ session('message') }}
                               </div>
                           @endif
                           <input type="search" name="search" placeholder="Search here..." />
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
                           @forelse ($categories as $category)
                               <ul>
                                   <li><a href="/shop-list.html/category/{{ $category->id }}"><span
                                               class="kk-category">{{ $category->name }}</span></a>
                                   </li>

                               </ul>
                           @empty
                               <div>test</div>
                           @endforelse
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
                                   <li><a href="/shop-list.html/size/{{ $size->id }}">{{ $size->size }}</a></li>
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
                                   @forelse ($products as $product)
                                       <!-- Single-product start -->
                                       <div class="col-lg-4 col-md-6">
                                           <div class="single-product">
                                               <div class="product-img">
                                                   <span class="pro-label new-label">new</span>
                                                   <span class="pro-price-2">$ {{ $product->price }}</span>
                                                   <a href="{{ '/product' . '/' . $product->slug }}"><img
                                                           src="src/products/{{ $images->where('product_id', $product->id)->first()->image }}"
                                                           alt="" /></a>
                                               </div>
                                               <div class="product-info clearfix text-center">
                                                   <div class="fix">
                                                       <h4 class="post-title"><a
                                                               href="#">{{ $product->name }}</a>
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

                                   @empty
                                       <h4>No Products Available </h4>
                                   @endforelse

                                   <!-- Single-product end -->
                               </div>
                           </div>
                           <div class="tab-pane active" id="list-view">
                               <div class="row shop-list">
                                   <!-- Single-product start -->
                                   @forelse ($products as $product)
                                       <div class="col-lg-12">
                                           <div class="single-product clearfix">
                                               <div class="product-img">
                                                   <span class="pro-label new-label">new</span>
                                                   <span class="pro-price-2">$ {{ $product->price }}</span>
                                                   <a href="{{ '/product' . '/' . $product->slug }}"><img
                                                           src="src/products/{{ $images->where('product_id', $product->id)->first()->image }}"
                                                           alt="" /></a>
                                               </div>
                                               <div class="product-info">
                                                   <div class="fix">
                                                       <h4 class="post-title floatleft"><a
                                                               href="#">{{ $product->name }}</a></h4>
                                                   </div>
                                                   <div class="fix mb-20">
                                                       <span class="pro-price">$ {{ $product->price }}</span>
                                                       <span class="old-price font-16px ml-10"><del>$ 96.20</del></span>
                                                   </div>
                                                   <div class="product-description">
                                                       <p>{{ $product->description }}</p>
                                                   </div>
                                                   @if ($product->stock > 0)
                                                       <form action="{{ url('addcart', $product->id) }}"
                                                           method="POST">

                                                           @csrf
                                                           <div class="clearfix">
                                                               <div class="cart-plus-minus">

                                                                   <input type="number" max="{{ $product->stock }}"
                                                                       value="1" min="1" name="quantity"
                                                                       class="cart-plus-minus-box">
                                                               </div>
                                                               <div class="product-action clearfix">
                                                                   <a href="#" data-bs-toggle="modal"
                                                                       data-bs-target="#productModal"
                                                                       title="Quick View"><i
                                                                           class="zmdi zmdi-zoom-in"></i></a>

                                                                   {{-- <input type="submit" data-bs-toggle="tooltip"
                                                                       data-placement="top"
                                                                       class="zmdi zmdi-shopping-cart-plus"
                                                                       title="Add To Cart"> --}}
                                                                   <button type="submit"> <i
                                                                           class="zmdi zmdi-shopping-cart-plus"></i></button>
                                                                   {{-- <a href="cart.html" type="submit"
                                                                       data-bs-toggle="tooltip" data-placement="top"
                                                                       title="Add To Cart"><i
                                                                           class="zmdi zmdi-shopping-cart-plus"></i></a>

                                                                   <i class="zmdi zmdi-shopping-cart-plus"> <input
                                                                           type="submit" value=""
                                                                           class="hidden"></i> --}}

                                                               </div>
                                                           </div>
                                                       </form>
                                                   @else
                                                       <span class="cart">OUT OF STOCK</span>
                                                   @endif
                                               </div>
                                           </div>
                                       </div>
                                   @empty
                                       <h4>No Products Available </h4>
                                   @endforelse

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
