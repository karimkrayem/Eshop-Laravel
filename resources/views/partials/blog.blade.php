<div class="blog-area blog-2  pt-80 pb-80">
    <div class="container">
        <div class="blog">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-option mb-30 clearfix">
                        <!-- Categories start -->
                        <div class="dropdown floatleft">
                            <button class="option-btn active" data-bs-toggle="dropdown">
                                Categories
                            </button>
                            <div class="dropdown-menu dropdown-width">
                                <!-- Widget-Categories start -->
                                <aside class="widget widget-categories">
                                    <div class="widget-title">
                                        <h4>Categories</h4>
                                    </div>
                                    <div id="cat-treeview" class="widget-info product-cat boxscrol2">
                                        @foreach ($tags as $tag)
                                            <ul>
                                                <li><span>{{ $tag->name }}</span>
                                                </li>

                                            </ul>
                                        @endforeach
                                    </div>
                                </aside>
                                <!-- Widget-categories end -->
                            </div>
                        </div>
                        <!-- Categories end -->
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single-blog start -->
                @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog mb-30">
                            <div class="blog-photo">
                                <a href="#"><img src="{{ $article->src }}" alt="" /></a>
                                <div class="like-share text-center fix">
                                    <a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
                                    <a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="post-meta fix">
                                    <div class="post-date floatleft"><span class="text-dark-red">30</span></div>
                                    <div class="post-year floatleft">
                                        <p class="text-uppercase text-dark-red mb-0">{{ $article->created_at }}</p>
                                        <h4 class="post-title"><a href="#"
                                                tabindex="0">{{ $article->title }}</a>
                                        </h4>
                                    </div>
                                </div>
                                <p>{{ $article->content }}
                                </p>
                                <a href="#" class="button-2 text-dark-red">Read more...</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Single-blog end -->
                <!-- Single-blog start -->

                <div class="row">
                    <div class="col-md-12">
                        <!-- Pagination start -->
                        <div class="shop-pagination  text-center">
                            <div class="pagination">
                                <ul>
                                    <a href=""> {{ $articles->links() }}
                                </ul>
                            </div>
                        </div>
                        <!-- Pagination end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
