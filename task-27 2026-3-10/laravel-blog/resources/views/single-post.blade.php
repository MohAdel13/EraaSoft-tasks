@extends('layouts.main')

@section('title', $post->title)

@section('content')
	<section class="single-block-wrapper section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<div class="single-post">
						<div class="post-header mb-5 text-center">
							<div class="meta-cat">
								<a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"
									href="{{ route('category', ['category_id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
							</div>
							<h2 class="post-title mt-2">
								{{ $post->title }}
							</h2>

							<div class="post-meta">
								<span class="text-uppercase font-sm letter-spacing-1 mr-3">by {{ $post->user->name }}</span>
								<span class="text-uppercase font-sm letter-spacing-1">{{ $post->created_at }}</span>
							</div>
							<div class="post-featured-image mt-5">
								<img src="{{ asset('images/' . $post->image) }}" class="img-fluid w-100" alt="featured-image">
							</div>
						</div>
						<div class="post-body">
							{{ $post->description }}
						</div>
					</div>


					<nav class="post-pagination clearfix border-top border-bottom py-4">
						@if($previous !== null)
						<div class="prev-post">
							<a href="{{ route('single-post', ['post_id'=>$previous->id]) }}">
								<span class="text-uppercase font-sm letter-spacing">Previous</span>
								<h4 class="mt-3"> {{ $previous->title }}</h4>
							</a>
						</div>
						@endif
						@if($next !== null)
						<div class="next-post">
							<a href="{{ route('single-post',['post_id'=>$next->id]) }}">
								<span class="text-uppercase font-sm letter-spacing">Next</span>
								<h4 class="mt-3">{{ $next->title }}</h4>
							</a>
						</div>
						@endif
					</nav>
					<div class="related-posts-block mt-5">
						<h3 class="news-title mb-4 text-center">
							You May Also Like
						</h3>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="post-block-wrapper mb-4 mb-lg-0">
									<a href="blog-single.html">
										<img class="img-fluid" src="images/fashion/img-1.jpg" alt="post-thumbnail" />
									</a>
									<div class="post-content mt-3">
										<h5>
											<a href="blog-single.html">Intel’s new smart glasses actually look good</a>
										</h5>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="post-block-wrapper mb-4 mb-lg-0">
									<a href="blog-single.html">
										<img class="img-fluid" src="images/fashion/img-2.jpg" alt="post-thumbnail" />
									</a>
									<div class="post-content mt-3">
										<h5>
											<a href="blog-single.html">Free Two-Hour Delivery From Whole Foods</a>
										</h5>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="post-block-wrapper">
									<a href="blog-single.html">
										<img class="img-fluid" src="images/fashion/img-3.jpg" alt="post-thumbnail" />
									</a>
									<div class="post-content mt-3">
										<h5>
											<a href="blog-single.html">Snow and Freezing Rain in Paris Forces the</a>
										</h5>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="comment-area my-5">
						<h3 class="mb-4 text-center">{{ $post->comments->count() }} Comments</h3>
						<div class="comment-area-box media">
							@foreach($post->comments as $comment)
							<div class="media-body ml-4">
								<h4 class="mb-0">{{ $comment->name }} </h4>
								<span class="date-comm font-sm text-capitalize text-color"><i class="ti-time mr-2"></i>{{$comment->created_at}}</span>

								<div class="comment-content mt-3">
									<p>{{$comment->content}}</p>
								</div>
								<div class="comment-meta mt-4 mt-lg-0 mt-md-0">
									<a href="#" class="text-underline ">Reply</a>
								</div>
							</div>
							@endforeach
						</div>
					</div>

					<form class="comment-form mb-5 gray-bg p-5" id="comment-form">
						<h3 class="mb-4 text-center">Leave a comment</h3>
						<div class="row">
							<div class="col-lg-12">
								<textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
									placeholder="Comment"></textarea>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control" type="text" name="name" id="name" placeholder="Name:">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
								</div>
							</div>
						</div>

						<input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact"
							value="Submit Message">
					</form>

				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<div class="sidebar-wrap mt-5 mt-lg-0">
							<div class="sidebar-widget about mb-5 text-center p-3">
								<div class="about-author">
									<img src="{{ asset('images/'.$post->user->image) }}" alt="" class="img-fluid">
								</div>
								<h4 class="mb-0 mt-4">{{ $post->user->name }}</h4>
								<p>{{ $post->user->job_title }}</p>
								<p>{{$post->user->bio}}</p>
							</div>

							<div class="sidebar-widget follow mb-5 text-center">
								<h4 class="text-center widget-title">Follow Me</h4>
								<div class="follow-socials">
									<a href="{{ route('home') }}"><i class="ti-facebook"></i></a>
									<a href="{{ route('home') }}"><i class="ti-twitter"></i></a>
									<a href="{{ route('home') }}"><i class="ti-instagram"></i></a>
									<a href="{{ route('home') }}"><i class="ti-youtube"></i></a>
									<a href="{{ route('home') }}"><i class="ti-pinterest"></i></a>
								</div>
							</div>

							<div class="sidebar-widget mb-5 ">
								<h4 class="text-center widget-title">Trending Posts</h4>
								@foreach($trending as $post)
								<div class="sidebar-post-item-big">
									<a href="{{ route('single-post', ['post_id'=>$post->id]) }}"><img src="{{ asset('images/'.$post->image) }}" alt=""
											class="img-fluid"></a>
									<div class="mt-3 media-body">
										<span class="text-muted letter-spacing text-uppercase font-sm">{{$post->created_at}}</span>
										<h4><a href="{{ route('single-post', ['post_id'=>$post->id]) }}">{{$post->title}}</a></h4>
									</div>
								</div>
								@endforeach

							</div>


							<div class="sidebar-widget category mb-5">
								<h4 class="text-center widget-title">Catgeories</h4>
								<ul class="list-unstyled">
									@foreach($categories as $category)
									<li class="align-items-center d-flex justify-content-between">
										<a href="{{ route('category', ['category_id'=>$category->id]) }}">{{ strtoupper($category->name) }}</a>
										<span>{{ $category->posts->count() }}</span>
									</li>
									@endforeach
								</ul>
							</div>
							</div>

							<div class="sidebar-widget sidebar-adv mb-5">
								<a href="#"><img src="images/sidebar-banner3.png" alt="" class="img-fluid w-100"></a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection