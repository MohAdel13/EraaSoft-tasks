<div class="slider-item">
    <div class="slider-item-content">
        <div class="post-thumb mb-4">
            <a href="{{ route('single-post', ['post_id'=>$post->id]) }}">
                <img src="{{ asset('images/'.$post->image) }}" alt="" class="img-fluid">
            </a>
        </div>

        <div class="slider-post-content">
            <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">
                <a href="{{ route('category', $post->category->id) }}">{{ $post->category->name }}</a>
            </span>
            <h3 class="post-title mt-1"><a href="{{ route('single-post', ['post_id'=>$post->id]) }}">{{ $post->title }}</a>
            </h3>
            <span class=" text-muted  text-capitalize">{{ $post->created_at }}</span>
        </div>
    </div>
</div>