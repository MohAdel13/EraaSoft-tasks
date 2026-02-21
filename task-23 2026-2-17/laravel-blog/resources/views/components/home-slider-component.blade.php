@props(['name', 'title', 'date', 'image'])

<div class="slider-item">
    <div class="slider-item-content">
        <div class="post-thumb mb-4">
            <a href="blog-single.html">
                <img src="{{ asset($image) }}" alt="" class="img-fluid">
            </a>
        </div>

        <div class="slider-post-content">
            <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">{{ $name }}</span>
            <h3 class="post-title mt-1"><a href="blog-single.html">{{ $title }}</a>
            </h3>
            <span class=" text-muted  text-capitalize">{{ $date }}</span>
        </div>
    </div>
</div>