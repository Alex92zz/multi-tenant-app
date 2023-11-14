        <!-------------------------------------- Projects Section (used to be blog section) -------------------------------------->
        <section class="blog-section" id="blog">
            <div class="left-leaf"><img loading="lazy" src="images/resource/leaf-2.png" alt=" Landscaping service"
                    title=""></div>
            <div class="right-leaf"><img loading="lazy" src="images/resource/leaf-3.png" alt=" Landscaping service"
                    title=""></div>
            <div class="auto-container">
                <div class="upper-box clearfix">
                    <div class="sec-title">
                        <div class="title-icon"><span class="icon"><img loading="lazy" src="images/icons/leaf-two.png"
                                    alt=" Landscaping service" title=""></span></div>
                        <div class="subtitle">News &amp; Updates</div>
                        <h2>Latest Projects</h2>
                    </div>
                </div>

                <div class="blog-posts">
                    <div class="row clearfix">

                        @foreach ($recentProjects as $post)
                            <!--first block-->
                            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="upper">



                                            <a href="{{ route('projects.show', ['slug' => $post->slug]) }}">
                                                <div class="image-box"
                                                    style=" /* Adjust the width as needed */
                                                max-height: 240px; /* Adjust the height as needed */
                                                overflow: hidden;
                                                text-align: center;">
                                                    <img loading="lazy" class="img-fluid" src="{{ asset($post->thumbnail) }}"
                                                        alt=" artificial grass" title="">
                                                </div>
                                            </a>


                                        <div class="info clearfix">
                                            <div class="cat" >
                                                <div>
                                                   {{ $post->category->name }}
                                                </div>
                                            </div>
                                            <div class="date"><span class="icon far fa-calendar"></span>
                                                {{ \Carbon\Carbon::parse($post->updated_at)->format('d M Y') }}
                                            </div>
                                        </div>

                                        <div class="hvr-link theme-btn"><a href="{{ route('projects.show', ['slug' => $post->slug]) }}"><span
                                                    class="flaticon-cross"></span></a>
                                        </div>
                                    </div>
                                    <div class="lower">
                                        <h5><a href="{{ route('projects.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h5>
                                        <div class="posted-by"><span class="icon far fa-user"></span> Peter Winters
                                        </div>
                                        <div class="more-link"><a href="{{ route('projects.show', ['slug' => $post->slug]) }}"><span
                                                    class="icon
                                            flaticon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </section>
        <!-------------------------------------- END of Projects Section -------------------------------------->
