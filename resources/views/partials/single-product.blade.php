   <!-- HEADING-BANNER START -->
   <div class="heading-banner-area ">

       @foreach ($banners as $banner)
           @if ($banner->id == 8)
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
                           <h2>Single Product</h2>
                       </div>
                       <div class="breadcumbs pb-15">
                           <ul>
                               <li><a href="index.html">Home</a></li>
                               <li>Single Product</li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- HEADING-BANNER END -->
   <!-- PRODUCT-AREA START -->
   <div class="product-area single-pro-area pt-80 pb-80 product-style-2">
       <div class="container">
           <div class="row shop-list single-pro-info no-sidebar">
               <!-- Single-product start -->
               <div class="col-lg-12">
                   <div class="single-product clearfix">
                       <!-- Single-pro-slider Big-photo start -->
                       <div class="single-pro-slider single-big-photo view-lightbox slider-for">
                           {{-- {{dd(src/products/{{ $images->where('product_id', $post->id)->first()->image )}} --}}
                           <div>
                               <img src="{{ asset('src/products/' . $images->where('product_id', $post->id)->first()->image) }}"
                                   alt="" />
                               <a class="view-full-screen" href="img/single-product/large/1.jpg"
                                   data-lightbox="roadtrip" data-title="My caption">
                                   <i class="zmdi zmdi-zoom-in"></i>
                               </a>
                           </div>
                           <div>
                               <img src="img/single-product/medium/2.jpg" alt="" />
                               <a class="view-full-screen" href="img/single-product/large/2.jpg"
                                   data-lightbox="roadtrip" data-title="My caption">
                                   <i class="zmdi zmdi-zoom-in"></i>
                               </a>
                           </div>
                           <div>
                               <img src="img/single-product/medium/3.jpg" alt="" />
                               <a class="view-full-screen" href="img/single-product/large/3.jpg"
                                   data-lightbox="roadtrip" data-title="My caption">
                                   <i class="zmdi zmdi-zoom-in"></i>
                               </a>
                           </div>
                           <div>
                               <img src="img/single-product/medium/4.jpg" alt="" />
                               <a class="view-full-screen" href="img/single-product/large/4.jpg"
                                   data-lightbox="roadtrip" data-title="My caption">
                                   <i class="zmdi zmdi-zoom-in"></i>
                               </a>
                           </div>
                           <div>
                               <img src="img/single-product/medium/5.jpg" alt="" />
                               <a class="view-full-screen" href="img/single-product/large/5.jpg"
                                   data-lightbox="roadtrip" data-title="My caption">
                                   <i class="zmdi zmdi-zoom-in"></i>
                               </a>
                           </div>
                       </div>
                       <!-- Single-pro-slider Big-photo end -->
                       <div class="product-info">
                           <div class="fix">
                               <h4 class="post-title floatleft">{{ $post->name }}</h4>
                           </div>
                           <div class="fix mb-20">
                               <span class="pro-price">{{ $post->price }}</span>
                           </div>
                           <div class="product-description">
                               <p>{{ $post->description }}</p>
                           </div>
                           <!-- Size start -->
                           <div class="size-filter single-pro-size mb-35 clearfix">
                               <ul>
                                   <li><span class="color-title text-capitalize">size</span></li>
                                   <li><a href="#">{{ $post->size->size }}</a></li>
                               </ul>
                           </div>
                           <!-- Size end -->
                           <div class="clearfix">
                               <div class="cart-plus-minus">
                                   <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                               </div>
                               <div class="product-action clearfix">
                                   <a href="#" data-bs-toggle="modal" data-bs-target="#productModal"
                                       title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                   <a href="cart.html" data-bs-toggle="tooltip" data-placement="top"
                                       title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                               </div>
                           </div>
                           <!-- Single-pro-slider Small-photo start -->

                           <div class="single-pro-slider single-sml-photo slider-nav">
                               @foreach ($images->where('product_id', $post->id) as $image)
                                   <div>
                                       <img src="{{ asset('src/products/' . $image->image) }}" alt="" />
                                   </div>
                               @endforeach

                           </div>
                           <!-- Single-pro-slider Small-photo end -->
                       </div>
                   </div>
               </div>
               <!-- Single-product end -->
           </div>
           <!-- single-product-tab start -->
           <div class="single-pro-tab">
               <div class="row">
                   <div class="col-md-3">
                       <div class="single-pro-tab-menu">
                           <!-- Nav tabs -->
                           <ul class="nav d-block">
                               <li><a href="#description" data-bs-toggle="tab">Description</a></li>
                               <li><a class="active" href="#reviews" data-bs-toggle="tab">Reviews</a></li>
                               <li><a href="#information" data-bs-toggle="tab">Information</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-md-9">
                       <!-- Tab panes -->
                       <div class="tab-content">
                           <div class="tab-pane" id="description">
                               <div class="pro-tab-info pro-description">
                                   <h3 class="tab-title title-border mb-30">{{ $post->name }}</h3>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                       elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                       messages in con sectetur posuere dolor non.</p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                       elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                       messages in con sectetur posuere dolor non.</p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                       elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                       messages in con sectetur posuere dolor non.</p>
                               </div>
                           </div>
                           <div class="tab-pane active" id="reviews">
                               <div class="pro-tab-info pro-reviews">
                                   {{-- <div class="customer-review mb-60">
                                       <h3 class="tab-title title-border mb-30">Customer review</h3>
                                       <ul class="product-comments clearfix">
                                           <li class="mb-30">
                                               <div class="pro-reviewer">
                                                   <img src="img/reviewer/1.jpg" alt="" />
                                               </div>
                                               <div class="pro-reviewer-comment">
                                                   <div class="fix">
                                                       <div class="floatleft mbl-center">
                                                           <h5 class="text-uppercase mb-0"><strong>Gerald
                                                                   Barnes</strong></h5>
                                                           <p class="reply-date">27 Jun, 2021 at 2:30pm</p>
                                                       </div>
                                                       <div class="comment-reply floatright">
                                                           <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                           <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                       </div>
                                                   </div>
                                                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                       elit. Integer accumsan egestas elese ifend. Phasellus a felis at
                                                       est bibendum feugiat ut eget eni Praesent et messages in con
                                                       sectetur posuere dolor non.</p>
                                               </div>
                                           </li>
                                           <li class="threaded-comments">
                                               <div class="pro-reviewer">
                                                   <img src="img/reviewer/1.jpg" alt="" />
                                               </div>
                                               <div class="pro-reviewer-comment">
                                                   <div class="fix">
                                                       <div class="floatleft mbl-center">
                                                           <h5 class="text-uppercase mb-0"><strong>Gerald
                                                                   Barnes</strong></h5>
                                                           <p class="reply-date">27 Jun, 2021 at 2:30pm</p>
                                                       </div>
                                                       <div class="comment-reply floatright">
                                                           <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                           <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                       </div>
                                                   </div>
                                                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                       elit. Integer accumsan egestas elese ifend. Phasellus a felis at
                                                       est bibendum feugiat ut eget eni Praesent et messages in con
                                                       sectetur posuere dolor non.</p>
                                               </div>
                                           </li>
                                       </ul>
                                   </div> --}}
                                   <div class="customer-review mb-60">
                                       <h3 class="tab-title title-border mb-30">Customer comments</h3>

                                       @forelse ($post->reviews as $comment)
                                           @if ($comment->id == 1)
                                               <ul class="product-comments clearfix">
                                                   <li class="w-100 mb-30">
                                                       <div class="pro-reviewer">
                                                           <img src="{{ $comment->user->src }}" alt="" />
                                                       </div>
                                                       <div class="pro-reviewer-comment">
                                                           <div class="fix">
                                                               <div class="floatleft mbl-center">
                                                                   <h5 class="text-uppercase mb-0"><strong>
                                                                           @if ($comment->user)
                                                                               {{ $comment->user->name }}
                                                                           @endif
                                                                       </strong></h5>
                                                                   <p class="reply-date">
                                                                       {{ $comment->created_at->format('d-m-y h-m-s') }}
                                                                   </p>
                                                               </div>
                                                               <div class="comment-reply floatright">
                                                                   <a href="#"><i
                                                                           class="zmdi zmdi-mail-reply"></i></a>
                                                                   <a href="#"><i
                                                                           class="zmdi zmdi-close"></i></a>
                                                               </div>
                                                           </div>
                                                           <p class="mb-0">
                                                               {{ $comment->comment_body }}

                                                           </p>
                                                       </div>
                                                   </li>
                                               @else
                                                   <li class="threaded-comments bg-ba">
                                                       <div class="pro-reviewer">
                                                           <img src="img/reviewer/1.jpg" alt="" />
                                                       </div>
                                                       <div class="pro-reviewer-comment">
                                                           <div class="fix">
                                                               <div class="floatleft mbl-center">
                                                                   <h5 class="text-uppercase mb-0">
                                                                       <strong>{{ $comment->user->name }}</strong>
                                                                   </h5>
                                                                   <p class="reply-date">
                                                                       {{ $comment->created_at->format('d-m-y h-m-s') }}
                                                                       {{-- 27 Jun, 2021 at 2:30pm --}}
                                                                   </p>
                                                               </div>
                                                               <div class="comment-reply floatright">
                                                                   <a href="#"><i
                                                                           class="zmdi zmdi-mail-reply"></i></a>
                                                                   <a href="#"><i
                                                                           class="zmdi zmdi-close"></i></a>
                                                               </div>
                                                           </div>
                                                           <p class="mb-0">
                                                               {{ $comment->comment_body }}
                                                           </p>
                                                       </div>
                                                   </li>
                                               </ul>
                                           @endif
                                       @empty
                                           <h6>No Comments Yet</h6>
                                       @endforelse
                                   </div>

                                   <div class="leave-review">
                                       <h3 class="tab-title title-border mb-30">Leave your review</h3>

                                       <div class="reply-box">
                                           <form action="{{ url('reviews') }}" method="POST">
                                               @csrf
                                               <input type="text" class="d-none" name='product_slug'
                                                   value="{{ $post->slug }}" name="" id="">
                                               {{-- <div class="row">
                                                   <div class="col-md-6">
                                                       <input type="text" placeholder="Your name here..."
                                                           name="name" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <input type="text" placeholder="Subject..."
                                                           name="name" />
                                                   </div>
                                               </div> --}}
                                               @if (session('message'))
                                                   <div class="primary m-5  ">
                                                       {{ session('message') }}
                                                   </div>
                                               @endif

                                               <div class="row">
                                                   <div class="col-md-12">
                                                       <textarea class="custom-textarea" name="comment_body" placeholder="Your review here..."></textarea>
                                                       <button type="submit" data-text="submit review"
                                                           class="button-one submit-button mt-20">submit
                                                           review</button>
                                                   </div>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="tab-pane" id="information">
                               <div class="pro-tab-info pro-information">
                                   <h3 class="tab-title title-border mb-30">Product information</h3>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                       elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                       messages in con sectetur posuere dolor non.</p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                       elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                       messages in con sectetur posuere dolor non.</p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                       elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                       messages in con sectetur posuere dolor non.</p>
                               </div>
                           </div>

                       </div>
                   </div>
               </div>
           </div>
           <!-- single-product-tab end -->
       </div>
   </div>
   <!-- PRODUCT-AREA END -->
