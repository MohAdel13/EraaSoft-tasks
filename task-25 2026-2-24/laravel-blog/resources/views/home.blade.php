@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="slider mt-4">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
                    @foreach ($trending as $post)
                        <x-home-slider-component :post="$post" />

                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach ($posts as $post)
                            <x-home-blog-card-component :post="$post" />
                        @endforeach
                    </div>
                </div>

                <div class="m-auto">
                    <div class="pagination mt-5 pt-4">
                        <ul class="list-inline ">
                            @for($i = 1; $i <= $posts->lastPage(); $i++)
                                @if($i === $posts->currentPage())
                                    <li class="list-inline-item"><a href="{{ $posts->url($i) }}" class="active">{{ $i }}</a></li>
                                @else
                                    <li class="list-inline-item"><a href="{{ $posts->url($i) }}">{{ $i }}</a></li>
                                @endif
                            @endfor
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection