<div class="col-lg-3 col-md-6">
    <article class="post-grid mb-5">
        <a class="post-thumb mb-4 d-block" href="{{ route('single-post', ['post_id'=>$post->id]) }}">
            <img src="{{ asset('images/'.$post->image) }}" alt="" class="img-fluid w-100">
        </a>
        <span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">
            <a href="{{ route('category', $post->category->id) }}">{{ $post->category->name }}</a>
        </span>
        <h3 class="post-title mt-1"><a href="{{ route('single-post', ['post_id'=>$post->id]) }}">{{$post->title}}</a></h3>

        <span class="text-muted letter-spacing text-uppercase font-sm">{{ $post->created_at }}</span>

    </article>
</div>