@extends('frontend.theme.layout')
@section('content')
    <!-- Main Content - start -->
    <main>
        <section class="container">


            <ul class="b-crumbs">
                <li>
                    <a href="{{route('trang-chu')}}">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <a href="{{route('bai-viet')}}">
                        Tin tức
                    </a>
                </li>
                <li>
                    <a href="">
                        Tin mới
                    </a>
                </li>
                {{--                <li>--}}
                {{--                    <span>Hic quod maxime deserunt</span>--}}
                {{--                </li>--}}
            </ul>
            <h1 class="main-ttl"><span>{{$blog_detail->blog_title}}</span></h1>
            <!-- Blog Post - start -->
            <div class="post-wrap stylization">
                {{--                <img class="post-img" src="{{asset('public/images/'. $blog_detail->image)}}" alt="">--}}
                <p>{!! $blog_detail->blog_description !!}</p>

                <!-- Slider -->

                <div class="flexslider post-slider" id="post-slider-car">
                    <ul class="slides">
                        <li>
                            <a data-fancybox-group="fancy-img" class="fancy-img" href="img/post/post1.jpg"><img
                                    src="http://placehold.it/1140x450" alt=""></a>
                        </li>
                        <li>
                            <a data-fancybox-group="fancy-img" class="fancy-img" href="img/post/post2.jpg"><img
                                    src="http://placehold.it/1140x450" alt=""></a>
                        </li>
                        <li>
                            <a data-fancybox-group="fancy-img" class="fancy-img" href="img/post/post3.jpg"><img
                                    src="http://placehold.it/1140x450" alt=""></a>
                        </li>
                    </ul>
                </div>


                <!-- Share Links -->
                <div class="post-share-wrap">
                    <ul class="post-share">
                        <li>
                            <a onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[url]=http://allstore-html.real-web.pro','sharer', 'toolbar=0,status=0,width=620,height=280');"
                               data-toggle="tooltip" title="Share on Facebook" href="javascript:">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a onclick="popUp=window.open('http://twitter.com/home?status=Post with Shortcodes http://allstore-html.real-web.pro','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                               data-toggle="tooltip" title="Share on Twitter" href="javascript:;">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a onclick="popUp=window.open('http://vk.com/share.php?url=http://allstore-html.real-web.pro','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                               data-toggle="tooltip" title="Share on VK" href="javascript:;">
                                <i class="fa fa-vk"></i>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tooltip" title="Share on Pinterest"
                               onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=http://allstore-html.real-web.pro&amp;description=AllStore HTML Template&amp;media=http://discover.real-web.pro/wp-content/uploads/2016/09/insect-1130497_1920.jpg','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                               href="javascript:;">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tooltip" title="Share on Google +1" href="javascript:;"
                               onclick="popUp=window.open('https://plus.google.com/share?url=http://allstore-html.real-web.pro','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tooltip" title="Share on Linkedin"
                               onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url=http://allstore-html.real-web.pro&amp;title=AllStore HTML Template','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                               href="javascript:;">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tooltip" title="Share on Tumblr"
                               onclick="popUp=window.open('http://www.tumblr.com/share/link?url=http://allstore-html.real-web.pro&amp;name=AllStore HTML Template&amp;description=Aliquam%2C+consequuntur+laboriosam+minima+neque+nesciunt+quod+repudiandae+rerum+sint.+Accusantium+adipisci+aliquid+architecto+blanditiis+dolorum+excepturi+harum+ipsa%2C+ipsam%2C...','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                               href="javascript:;">
                                <i class="fa fa-tumblr"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="post-info">
                        <li>
                            <time datetime="2016-11-09 22:00:32">09 Nov, 2017</time>
                        </li>
                        <li><a href="blog.html" class="blog-i-categ">News</a></li>
                        <li>Comments: <a href="#">3</a></li>
                    </ul>
                </div>

                <!-- Related Posts -->
                <div class="flexslider post-rel-wrap" id="post-rel-car">
                    <ul class="slides">
                        @foreach($blogs as $blog)
                            <li class="posts-i">
                                <a class="posts-i-img"
                                   href="{{route('blog.detail',$blog->blog_id)}}?{!! $blog->blog_title !!}"><span
                                        style="background: url({{asset('public/images/'. $blog->image)}})"></span></a>
                                <time class="posts-i-date" datetime="2017-01-01 12:19:46">
                                    <span>{{ $blog->created_at->format('d') }}</span> {{ $blog->created_at->format('M') }}
                                </time>
                                <div class="posts-i-info">
                                    <a class="posts-i-ctg" href="blog.html">Articles</a>
                                    <h3 class="posts-i-ttl"><a
                                            href="{{route('blog.detail',$blog->blog_id)}}?{!! $blog->blog_title !!}">{!! $blog->blog_title !!}</a>
                                    </h3>
                                </div>
                            </li>
                        @endforeach
                        <li class="posts-i">
                            <a class="posts-i-img" href="post.html"><span
                                    style="background: url(http://placehold.it/360x203)"></span></a>
                            <time class="posts-i-date" datetime="2017-01-01 12:19:46"><span>05</span> Jan</time>
                            <div class="posts-i-info">
                                <a class="posts-i-ctg" href="blog.html">Reviews</a>
                                <h3 class="posts-i-ttl"><a href="post.html">Excepturi ducimus recusandae</a></h3>
                            </div>
                        </li>
                        <li class="posts-i">
                            <a class="posts-i-img" href="post.html"><span
                                    style="background: url(http://placehold.it/360x224)"></span></a>
                            <time class="posts-i-date" datetime="2017-01-01 12:19:46"><span>17</span> Apr</time>
                            <div class="posts-i-info">
                                <a class="posts-i-ctg" href="blog.html">Reviews</a>
                                <h3 class="posts-i-ttl"><a href="post.html">Consequuntur minus numquam</a></h3>
                            </div>
                        </li>
                        <li class="posts-i">
                            <a class="posts-i-img" href="post.html"><span
                                    style="background: url(http://placehold.it/314x236)"></span></a>
                            <time class="posts-i-date" datetime="2017-01-01 12:19:46"><span>21</span> May</time>
                            <div class="posts-i-info">
                                <a class="posts-i-ctg" href="blog.html">Articles</a>
                                <h3 class="posts-i-ttl"><a href="post.html">Non ex sapiente excepturi</a></h3>
                            </div>
                        </li>
                        <li class="posts-i">
                            <a class="posts-i-img" href="post.html"><span
                                    style="background: url(http://placehold.it/318x236)"></span></a>
                            <time class="posts-i-date" datetime="2017-01-01 12:19:46"><span>24</span> Jan</time>
                            <div class="posts-i-info">
                                <a class="posts-i-ctg" href="blog.html">Articles</a>
                                <h3 class="posts-i-ttl"><a href="post.html">Veritatis officiis</a></h3>
                            </div>
                        </li>
                        <li class="posts-i">
                            <a class="posts-i-img" href="post.html"><span
                                    style="background: url(http://placehold.it/354x236)"></span></a>
                            <time class="posts-i-date" datetime="2017-01-01 12:19:46"><span>08</span> Sep</time>
                            <div class="posts-i-info">
                                <a class="posts-i-ctg" href="blog.html">Reviews</a>
                                <h3 class="posts-i-ttl"><a href="post.html">Ratione magni laudantium</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Blog Post - end -->

            <!-- Related Products - start -->
            <div class="prod-related">
                <h2><span>Sản Phẩm</span></h2>
                <div class="prod-related-car" id="prod-related-car">
                    <ul class="slides">
                        @foreach ( $products->chunk(4) as $chunk)
                            <li class="prod-rel-wrap">
                                @foreach ($chunk as $product)
                                    <div class="prod-rel">
                                        <a href="{{route('shopping.viewProduct', $product->id)}}?chi-tiet-san-pham/{{$product->name}}" class="prod-rel-img">
                                            <img src="{{asset('public/images/'.$product->image)}}"
                                                 alt="Adipisci aperiam commodi">
                                        </a>
                                        <div class="prod-rel-cont">
                                            <h3><a href="{{route('shopping.viewProduct', $product->id)}}?chi-tiet-san-pham/{{$product->name}}">{{$product->name}}</a></h3>
                                            <p class="prod-rel-price">
                                                <b>
                                                    {{ number_format($product->price - $product->discount,'0',',','.')}}
                                                    đ
                                                </b>
                                            </p>
                                            <div class="prod-rel-actions">
                                                <a title="Wishlist" href="{{ url('add/to-wishlist/'.$product->id) }}" class="prod-rel-favorites"><i
                                                        class="fa fa-heart"></i></a>
                                                <a title="Compare" href="#" class="prod-rel-compare"><i
                                                        class="fa fa-bar-chart"></i></a>
                                                <p class="prod-i-addwrap">
                                                    <a title="Add to cart" href="javascripts:"
                                                       onclick="AddCart({{$product->id}})"
                                                       data-text="Add To Cart" class="prod-i-add"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Related Products - end -->

            <!-- Comments - start -->
            <ul class="reviews-list">
                <li class="reviews-i existimg">
                    <div class="reviews-i-img">
                        <img src="http://placehold.it/120x120" alt="Jeni Margie">
                        <div class="reviews-i-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <time datetime="2017-12-21 12:19:46" class="reviews-i-date">21 May 2017</time>
                    </div>
                    <div class="reviews-i-cont">
                        <p>Eveniet nobis minus possimus eius, doloribus ex similique debitis nihil at facere delectus
                            unde, commodi, alias. <br>Eius facilis, dolore officia veritatis, doloribus voluptatem
                            aliquid rem corporis quam officiis at dignissimos dolorum, velit assumenda facere
                            necessitatibus doloremque quos. Laudantium velit architecto ipsum nulla</p>
                        <span class="reviews-i-margin"></span>
                        <h3 class="reviews-i-ttl">Jeni Margie</h3>
                    </div>
                </li>
                <li class="reviews-i existimg">
                    <div class="reviews-i-img">
                        <img src="http://placehold.it/120x120" alt="Brigham Murphy">
                        <div class="reviews-i-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <time datetime="2017-12-21 12:19:46" class="reviews-i-date">12 March 2017</time>
                    </div>
                    <div class="reviews-i-cont">
                        <p>Ipsa doloremque illum animi laborum quo in nemo delectus veritatis, amet numquam doloribus a
                            iure sequi nobis vero facere necessitatibus ipsam dolorem magnam? Tempora ea ratione vel
                            nisi, qui perferendis nulla. <br>Minus sequi iste, nam nobis, excepturi nihil consequuntur
                            reprehenderit ipsam, quam consequatur in. <br>Esse, doloremque consectetur veniam quo ut
                            voluptas necessitatibus quae quis iusto quod optio eligendi distinctio dicta, nihil impedit
                            officia aspernatur tenetur saepe expedita, odio vitae reprehenderit pariatur!</p>
                        <span class="reviews-i-margin"></span>
                        <h3 class="reviews-i-ttl">Brigham Murphy</h3>
                    </div>
                </li>
                <li class="reviews-i existimg">
                    <div class="reviews-i-img">
                        <img src="http://placehold.it/120x120" alt="Barrie Roderick">
                        <div class="reviews-i-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <time datetime="2017-12-21 12:19:46" class="reviews-i-date">07 June 2017</time>
                    </div>
                    <div class="reviews-i-cont">
                        <p>Perferendis recusandae consequuntur quasi, non culpa. Minus porro officiis veniam facilis
                            praesentium expedita doloribus, recusandae aut dolore autem, modi consequuntur rem
                            perferendis dolores quisquam, sequi quas. <br>Iusto et, eius laboriosam beatae, cupiditate
                            officiis! Iure iste, voluptate non accusamus quis, dolor quo quam dolore pariatur enim
                            molestias rerum minima veritatis. <br>Officiis nihil culpa architecto repudiandae magni quo,
                            ipsa nam omnis, laborum minus debitis impedit, alias eum non magnam veritatis animi.</p>
                        <span class="reviews-i-margin"></span>
                        <h3 class="reviews-i-ttl">Barrie Roderick</h3>
                    </div>
                </li>
                <li class="reviews-i existimg">
                    <div class="reviews-i-img">
                        <img src="http://placehold.it/120x120" alt="Edweena Chelsea">
                        <div class="reviews-i-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <time datetime="2017-01-01 12:19:46" class="reviews-i-date">18 March 2017</time>
                    </div>
                    <div class="reviews-i-cont">
                        <p>Corrupti velit, vero esse, aperiam error magni illum quos, accusantium debitis et possimus
                            recusandae tempora ad itaque dolorem veniam non voluptatem impedit iste? Dicta doloremque
                            hic porro aspernatur. Dolores eligendi similique, cumque, eius veritatis recusandae quos
                            dignissimos libero molestias perspiciatis.</p>
                        <span class="reviews-i-margin"></span>
                        <h3 class="reviews-i-ttl">Edweena Chelsea</h3>
                    </div>
                </li>
            </ul>
            <!-- Comments - end -->

            <!-- Comment Form - start -->
            <div class="prod-comment-form post-form">
                <h3>Hãy để lại bình luận của bạn</h3>
                <form method="POST" action="#" style="background-color: white;padding: 20px;">
                    <input type="text" placeholder="Tên của bạn">
                    <input type="text" placeholder="E-mail">
                    <textarea placeholder="Bình luận của bạn"></textarea>
                    <div class="prod-comment-submit">
                        <input type="submit" value="Xác nhận">
                        <div class="prod-rating">
                            <i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i
                                class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i
                                class="fa fa-star-o" title="1"></i>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Comment Form - end -->

        </section>
    </main>
    <!-- Main Content - end -->
@endsection
