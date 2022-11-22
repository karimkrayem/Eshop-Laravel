       @auth

           <form method="POST" action="{{ route('logout') }}">
               @csrf

               <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                   {{ __('Log Out') }}
               </button>
           </form>
       @endauth
       <!-- SLIDER-BANNER-AREA START -->
       <section class="slider-banner-area clearfix">
           <!-- Sidebar-social-media start -->
           <div class="sidebar-social d-none d-md-block">
               <div class="table">
                   <div class="table-cell">
                       <ul>
                           <li><a href="#" target="_blank" title="Google Plus"><i
                                       class="zmdi zmdi-google-plus"></i></a></li>
                           <li><a href="#" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                           </li>
                           <li><a href="#" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                           </li>
                           <li><a href="#" target="_blank" title="Linkedin"><i class="zmdi zmdi-linkedin"></i></a>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
           <!-- Sidebar-social-media start -->
           <div class="banner-left floatleft">
               <!-- Slider-banner start -->
               <div class="slider-banner">
                   <div class="single-banner banner-1">
                       <a class="banner-thumb" href="#"><img src="img/banner/1.jpg" alt="" /></a>
                       <span class="pro-label new-label">new</span>
                       <span class="price">$50.00</span>
                       <div class="banner-brief">
                           <h2 class="banner-title"><a href="#">Product name</a></h2>
                           <p class="mb-0">Furniture</p>
                       </div>
                       <a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
                   </div>
                   <div class="single-banner banner-2">
                       <a class="banner-thumb" href="#"><img src="img/banner/2.jpg" alt="" /></a>
                       <div class="banner-brief">
                           <h2 class="banner-title"><a href="#">New Product 2021</a></h2>
                           <p class="hidden-md hidden-sm d-none d-md-block">Lorem Ipsum is simply dummy text of the
                               printing and types sate industry. Lorem Ipsum has been the industry.</p>
                           <a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
                       </div>
                   </div>
               </div>
               <!-- Slider-banner end -->
           </div>
           <div class="slider-right floatleft">
               <!-- Slider-area start -->
               <div class="slider-area">
                   <div class="bend niceties preview-2">
                       <div id="ensign-nivoslider" class="slides">
                           <img src="img/slider/slider-1/1.jpg" alt="" title="#slider-direction-1" />
                           <img src="img/slider/slider-1/2.jpg" alt="" title="#slider-direction-2" />
                           <img src="img/slider/slider-1/3.jpg" alt="" title="#slider-direction-3" />
                       </div>
                       <!-- direction 1 -->
                       <div id="slider-direction-1" class="t-cn slider-direction">
                           <div class="slider-progress"></div>
                           <div class="slider-content t-lfl s-tb slider-1">
                               <div class="title-container s-tb-c title-compress">
                                   <div class="layer-1">
                                       <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                           <h2 class="slider-title3 text-uppercase mb-0">welcome to our</h2>
                                       </div>
                                       <div class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                           <h2 class="slider-title1 text-uppercase mb-0">furniture</h2>
                                       </div>
                                       <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.5s">
                                           <h3 class="slider-title2 text-uppercase">gallery 2021</h3>
                                       </div>
                                       <div class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="3.5s">
                                           <a href="#" class="button-one style-2 text-uppercase mt-20"
                                               data-text="Shop now">Shop now</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- direction 2 -->
                       <div id="slider-direction-2" class="slider-direction">
                           <div class="slider-progress"></div>
                           <div class="slider-content t-lfl s-tb slider-1">
                               <div class="title-container s-tb-c title-compress">
                                   <div class="layer-1">
                                       <div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                                           <h2 class="slider-title3 text-uppercase mb-0">welcome to our</h2>
                                       </div>
                                       <div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                           <h2 class="slider-title1 text-uppercase">furniture</h2>
                                       </div>
                                       <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                                           <p class="slider-pro-brief">There are many variations of passages of Lorem
                                               Ipsum available, but the majority have suffered alteration in some form,
                                               by injected humour, or randomised words which don't look even slightly
                                               believable</p>
                                       </div>
                                       <div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
                                           <a href="#" class="button-one style-2 text-uppercase mt-20"
                                               data-text="Shop now">Shop now</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- direction 3 -->
                       <div id="slider-direction-3" class="slider-direction">
                           <div class="slider-progress"></div>
                           <div class="slider-content t-lfl s-tb slider-1">
                               <div class="title-container s-tb-c title-compress">
                                   <div class="layer-1">
                                       <div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                                           <h2 class="slider-title3 text-uppercase mb-0">welcome to our</h2>
                                       </div>
                                       <div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                           <h2 class="slider-title1 text-uppercase mb-0">furniture</h2>
                                       </div>
                                       <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                                           <h3 class="slider-title2 text-uppercase">gallery 2021</h3>
                                       </div>
                                       <div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
                                           <p class="slider-pro-brief">There are many variations of passages of Lorem
                                               Ipsum available, but the majority have suffered alteration in some form,
                                               by injected humour, or randomised words which don't look even slightly
                                               believable</p>
                                       </div>
                                       <div class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="0.5s">
                                           <a href="#" class="button-one style-2 text-uppercase mt-20"
                                               data-text="Shop now">Shop now</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- Slider-area end -->
           </div>
           <!-- Sidebar-social-media start -->
           <div class="sidebar-account d-none d-md-block">
               <div class="table">
                   <div class="table-cell">
                       <ul>
                           <li><a class="search-open" href="#" title="Search"><i
                                       class="zmdi zmdi-search"></i></a></li>
                           <li><a href="#" title="Login"><i class="zmdi zmdi-lock"></i></a>
                               <div class="customer-login text-left">
                                   <form method="POST" action="{{ route('login') }}">
                                       @csrf

                                       <h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
                                       <p class="text-gray">If you have an account with us, Please login!</p>
                                       <input type="text" autofocus placeholder="Email here..."
                                           :value="old('email')" name="email" />
                                       <input type="password" name="password" placeholder="Password" />
                                       <p><a class="text-gray" href="#">Forget your password?</a></p>
                                       <button class="button-one submit-button mt-15" data-text="login"
                                           type="submit">login</button>
                                   </form>
                               </div>
                           </li>
                           <li><a href="my-account.html" title="My-Account"><i class="zmdi zmdi-account"></i></a>
                           </li>
                           <li><a href="wishlist.html" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></li>
                       </ul>
                   </div>
               </div>
           </div>
           <!-- Sidebar-social-media start -->
       </section>
       <!-- End Slider-section -->
       <!-- sidebar-search Start -->
       <div class="sidebar-search animated slideOutUp">
           <div class="table">
               <div class="table-cell">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-8 offset-md-2 p-0">
                               <div class="search-form-wrap">
                                   <button class="close-search"><i class="zmdi zmdi-close"></i></button>
                                   <form action="#">
                                       <input type="text" placeholder="Search here..." />
                                       <button class="search-button" type="submit">
                                           <i class="zmdi zmdi-search"></i>
                                       </button>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- sidebar-search End -->
       <!-- PRODUCT-AREA START -->
       <div class="product-area pt-80 pb-35">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="section-title text-center">
                           <h2 class="title-border">Featured Products</h2>
                       </div>
                       <div class="product-slider style-1 arrow-left-right">
                           <!-- Single-product start -->
                           @foreach ($products as $product)
                               <div class="single-product">
                                   <div class="product-img">
                                       <span class="pro-label new-label">new</span>
                                       <a href="single-product.html"><img src="{{ $product->image }}"
                                               alt="" /></a>
                                       <div class="product-action clearfix">
                                           <a href="#" data-bs-toggle="modal" data-bs-target="#productModal"
                                               title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                           <a href="cart.html" data-bs-toggle="tooltip" data-placement="top"
                                               title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                       </div>
                                   </div>
                                   <div class="product-info clearfix">
                                       <div class="fix">
                                           <h4 class="post-title floatleft"><a href="#">{{ $product->name }}</a>
                                           </h4>
                                           <p class="floatright hidden-sm d-none d-md-block">
                                               {{ $product->category->name }}</p>
                                       </div>
                                       <div class="fix">
                                           <span class="pro-price floatleft">{{ $product->price }}</span>
                                       </div>
                                   </div>

                               </div>
                           @endforeach
                           <!-- Single-product end -->
                           <!-- Single-product start -->

                           <!-- Single-product end -->
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- PRODUCT-AREA END -->

       <!-- PURCHASE-ONLINE-AREA START -->

       <!-- PURCHASE-ONLINE-AREA END -->
       <!-- BLGO-AREA START -->
       <div class="blog-area pt-55">
           <div class="container">
               <!-- Section-title start -->
               <div class="row">
                   <div class="col-lg-12">
                       <div class="section-title text-center">
                           <h2 class="title-border">From The Blog</h2>
                       </div>
                   </div>
               </div>
               <!-- Section-title end -->
               <div class="row">
                   <!-- Single-blog start -->
                   @foreach ($articles as $article)
                       <div class="col-lg-6">
                           <div class="single-blog mt-30">
                               <div class="row">
                                   <div class="col-xl-6 col-md-7">
                                       <div class="blog-info">
                                           <div class="post-meta fix">
                                               <div class="post-date floatleft"><span class="text-dark-red">30</span>
                                               </div>
                                               <div class="post-year floatleft">
                                                   <p class="text-uppercase text-dark-red mb-0">
                                                       {{ $article->created_at }}</p>
                                                   <h4 class="post-title"><a href="#"
                                                           tabindex="0">{{ $article->title }}</a></h4>
                                               </div>
                                           </div>
                                           <div class="like-share fix">
                                               <a href="#"><i class="zmdi zmdi-favorite"></i><span>89
                                                       Like</span></a>
                                               <a href="#"><i class="zmdi zmdi-comments"></i><span>59
                                                       Comments</span></a>
                                               <a href="#"><i class="zmdi zmdi-share"></i><span>29
                                                       Share</span></a>
                                           </div>
                                           <p>{{ $article->content }}</p>
                                           <a href="#" class="button-2 text-dark-red">Read more...</a>
                                       </div>
                                   </div>
                                   <div class="col-xl-6 col-md-5">
                                       <div class="blog-photo">
                                           <a href="#"><img src="{{ $article->src }}" alt="" /></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   @endforeach

                   <!-- Single-blog end -->
                   <!-- Single-blog start -->

                   <!-- Single-blog end -->
               </div>
           </div>
       </div>
       <!-- BLGO-AREA END -->

       <!-- SUBSCRIVE-AREA START -->
       <div class="subscribe-area pt-80">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="subscribe">
                           <form action="#">
                               <input type="text" placeholder="Enter your email address" />
                               <button class="submit-button submit-btn-2 button-one" data-text="subscribe"
                                   type="submit">subscribe</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- SUBSCRIVE-AREA END -->
