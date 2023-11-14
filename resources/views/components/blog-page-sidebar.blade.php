<!--------------------------------------------Sidebar Side------------------------------------->
<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar blog-sidebar">


        <!-- Popular posts -->
        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="widget-inner">
                <div class="sidebar-title">
                    <h4>Popular Post</h4>
                </div>

                @foreach ($recentBlogPosts->take(3) as $post)
                    <div class="post">
                        <figure class="post-thumb">
                            <img loading="lazy" src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}">
                        </figure>
                        <h5 class="text">
                            <a
                                href="{{ route('posts.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                            </h5>
                        <div class="info">In: {{ $post->category->name }}</div>
                        <div class="info">{{ \Carbon\Carbon::parse($post->updated_at)->format('d M Y') }}</div>
                    </div>
                @endforeach


            </div>
        </div>



        <!-- Contact our Experts -->
        <div class="sidebar-widget call-to-widget wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="widget-inner">
                <div class="image-layer" style="background-image:url({{ asset('images/blog-images/side-bar.jpg') }});">
                </div>
                <div class="content">
                    <div class="icon-box"><span class="flaticon-gardener"></span></div>
                    <h5>Let’s Start Your Project <br>Contact Us</h5>

                    <div class="phone"><a href="tel:07503441356">07503 441 356</a></div>
                    <div class="link-box"><a href="/contact" class="theme-btn btn-style-four"><span
                                class="btn-title">Get a Quote <i class="arrow flaticon-play-button-1"></i></span></a>
                    </div>
                </div>
            </div>
        </div>


        <!------------------------------Categories ----------------------->
        <div class="sidebar-widget archives wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="widget-inner">
                <div class="sidebar-title">
                    <h4>Areas we cover</h4>
                </div>
                <ul>
                    <li><a href="/tree-surgeon-halesowen"><span class="ttl">Halesowen</span> </a></li>
                    <li><a href="/tree-surgeon-kidderminster"><span class="ttl">Kidderminster</span> </a></li>
                    <li><a href="/tree-surgeon-worcester"><span class="ttl">Worcester</span> </a></li>
                    <li><a href="/tree-surgeon-bromsgrove"><span class="ttl">Bromsgrove</span> </a></li>
                    <li><a href="/tree-surgeon-stourbridge"><span class="ttl">Stourbridge</span> </a></li>
                    <li><a href="/tree-surgeon-oldbury"><span class="ttl">Oldbury</span> </a></li>
                </ul>
            </div>
        </div>


    </aside>
</div>
<!-------------------------------------------- END Sidebar Side------------------------------------->
