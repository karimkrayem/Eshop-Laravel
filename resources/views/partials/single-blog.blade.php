   <!-- HEADING-BANNER START -->
   <div class="heading-banner-area ">

       @foreach ($banners as $banner)
           @if ($banner->id == 7)
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
                           <h2>Single-Blog</h2>
                       </div>
                       <div class="breadcumbs pb-15">
                           <ul>
                               <li><a href="index.html">Home</a></li>
                               <li>Single-Blog</li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- HEADING-BANNER END -->
   <!-- BLGO-AREA START -->
   <div class="blog-area blog-2 blog-details-area  pt-80 pb-80">
       <div class="container">
           <div class="blog">
               <div class="row">
                   <!-- Single-blog start -->
                   <div class="col-lg-12">
                       <div class="single-blog mb-30">
                           <div class="blog-photo">
                               <a href="#"><img src="{{ $post->src }}" alt="" /></a>
                               <div class="like-share fix">
                                   <a href="#"><i
                                           class="zmdi zmdi-account"></i><span>{{ $post->user->name }}</span></a>
                                   <a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
                                   <a href="#"><i class="zmdi zmdi-comments"></i><span>{{ $numberPost }}
                                           Comments</span></a>
                               </div>
                               <div class="post-date post-date-2">
                                   <span class="text-dark-red">30</span>
                                   <span class="text-dark-red text-uppercase">June</span>
                               </div>
                           </div>
                           <div class="blog-info blog-details-info">
                               <h4 class="post-title post-title-2"><a href="#">{{ $post->title }}</a></h4>
                               <p>{{ $post->content }}</p>
                               <div class="post-share-tag clearfix mt-40">
                                   <div class="post-share floatleft">
                                       <span class="text-uppercase"><strong>Share</strong></span>
                                       <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                       <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                       <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                       <a href="#"><i class="zmdi zmdi-vimeo"></i></a>
                                       <a href="#"><i class="zmdi zmdi-dribbble"></i></a>
                                       <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                   </div>
                                   <div class="post-share post-tag floatright">
                                       <span class="text-uppercase"><strong>tags</strong></span>
                                       <a href="#">Chair</a>
                                       <a href="#">Furniture</a>
                                       <a href="#">Light</a>
                                       <a href="#">Table</a>
                                   </div>
                               </div>
                               <div class="pro-reviews mt-60">

                                   <div class="customer-review mb-60">
                                       <h3 class="tab-title title-border mb-30">Customer comments</h3>

                                       @forelse ($post->comments as $comment)
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
                                                                   <a href="#"><i class="zmdi zmdi-close"></i></a>
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
                                                                   <a href="#"><i class="zmdi zmdi-close"></i></a>
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
                                       <h3 class="tab-title title-border mb-30">Leave your reviw</h3>
                                       <div class="reply-box">
                                           <form method="POST" action="{{ url('comments') }}">
                                               @csrf
                                               <input type="text " class="d-none" name="article_slug"
                                                   value="{{ $post->slug }}">
                                               {{-- <div class="row">
                                                   <div class="col-md-6">
                                                       <input type="text" placeholder="Your name here..."
                                                           name="name" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <input type="text" placeholder="Your email here..."
                                                           name="email" />
                                                   </div>
                                               </div> --}}

                                               @if (session('message'))
                                                   <div class="primary m-5  ">
                                                       {{ session('message') }}
                                                   </div>
                                               @endif
                                               <div class="row">
                                                   <div class="col-md-12">
                                                       {{-- <input type="text" value="{{ $post->slug }}"
                                                           name="" id=""> --}}
                                                       <textarea class="custom-textarea" required name="comment_body" placeholder="Your review here..."></textarea>
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
                       </div>
                   </div>
                   <!-- Single-blog end -->
               </div>
           </div>
       </div>
   </div>
   <!-- BLGO-AREA END -->
