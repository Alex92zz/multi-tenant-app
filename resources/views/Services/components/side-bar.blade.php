<!--Sidebar Side-->
<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar services-sidebar">

        <div class="sidebar-widget services-widget services-list">
            <div class="widget-inner">
                <div class="sidebar-title">
                    <h4>Our Services</h4>
                </div>
                <ul>
                    <li><a href="{{ route('block-paving') }}">Block Paving</a></li>
                    <li><a href="{{ route('turfing') }}">Turfing</a></li>
                    <li><a href="{{ route('fencing') }}">Fencing</a></li>
                    <li><a href="{{ route('tarmac-surfacing') }}">Tarmac Surfacing</a></li>
                </ul>
            </div>
        </div>

        

        <div class="sidebar-widget call-to-widget">
            <div class="widget-inner">
                <div class="image-layer" style="background-image: url('images/turfing-and-wood-wall.webp')"></div>
                <div class="content">
                    <div class="icon-box"><span class="flaticon-gardener"></span></div>
                    <h5>Let’s Start Your Project <br>Contact Experts</h5>
                    <div class="phone"><a href="tel:07503441356">07503 441 356</a></div>
                    <div class="link-box"><a href="#contact" class="theme-btn btn-style-four"><span class="btn-title">Geta Quote <i class="arrow flaticon-play-button-1"></i></span></a></div>
                </div>
            </div>
        </div>


        <!------------------------------ Areas We Cover  ----------------------->
        @if(isset($localSEOPages))
        <div class="sidebar-widget archives wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="widget-inner">
                <div class="sidebar-title">
                    <h4>Areas we cover</h4>
                </div>
                <ul>
                    @foreach($localSEOPages as $localSEO)
                    <li><a href="{{ $localSEO->slug }}"><span class="ttl">{{ $localSEO->location }}</span></a></li>
                @endforeach
                </ul>
            </div>
        </div>
        @endif


    </aside>
</div>