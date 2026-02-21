@props(['name', 'title', 'date', 'image'])
<div class="col-lg-3 col-md-6">
    <article class="post-grid mb-5">
        <a class="post-thumb mb-4 d-block" href="blog-single.html">
            <img src="{{ asset($image) }}" alt="" class="img-fluid w-100">
        </a>
        <span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{ $name }}</span>
        <h3 class="post-title mt-1"><a href="blog-single.html">{{$title}}</a></h3>

        <span class="text-muted letter-spacing text-uppercase font-sm">{{ $date }}</span>

    </article>
</div>