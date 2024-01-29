

<div class="col-lg-4">
    
    <div class="sidebar">

        <div class=" categories mb-40">
            <div class="title">
                <h5>Our Services</h5>
            </div>
            <div class="">
                <ul class="rest">
                    <li class="mb-10">
                        <a href="../meter-verification">Meter Verification</a>
                    </li>
                    <li class="mb-10">
                        <a href="../electromagnetic-metering-services">Electromagnetic Metering</a>
                        <li class="mb-10">
                        <a href="../meter-xchange">Meter Exchange</a>
                    </li>
                    <li class="mb-10">
                        <a href="../leak-detection-services">Leak Detection Services</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class=" best-sale mb-40">
            <div class="title">
                <h5>Recent Posts</h5>
            </div>

            @foreach ($recentBlogPosts as $recentPost)
            <div class="line-list d-flex mb-10">
                <div>
                    <div class="">
                        <h6>
                            <a href="{{ route('posts.show', ['slug' => $recentPost->slug]) }}">
                                {{ $recentPost->title }}
                            </a>
                        </h6>
                        <p>
                            {{ date('d F Y', strtotime($recentPost->created_at)) }}
                        </p>
                    </div>
                </div>
                <a href="#0" class="over-link"></a>
            </div>
            @endforeach
            
        </div>


    </div>
    
    

</div>