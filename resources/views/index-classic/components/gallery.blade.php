<!-- gallery.blade.php -->
<div class="section mt-5 mb-0 border-bottom-0">
    <div class="container">
        <div class="heading-block text-center m-0">
            <h3>Our Latest Work</h3>
        </div>
    </div>
</div>

<div id="portfolio" class="portfolio row g-0 portfolio-reveal">
    @foreach ($galleryItems as $item)
        <article class="portfolio-item col-6 col-md-4 col-lg-3 pf-media pf-icons">
            <div class="grid-inner">
                <img src="{{ asset($item['url']) }}" alt="{{ $item['alt'] }}">
            </div>
        </article>
    @endforeach
</div>