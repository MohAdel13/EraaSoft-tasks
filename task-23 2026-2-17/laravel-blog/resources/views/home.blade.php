@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="slider mt-4">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
                    @foreach ($sliderItems as $sliderItem)
                        <x-home-slider-component name="{{ $sliderItem['name'] }}" title="{{ $sliderItem['title'] }}" date="{{ $sliderItem['date'] }}" image="{{ $sliderItem['image'] }}"/>

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
                        @foreach ($blogsItems as $blogsItem)
                            <x-home-blog-cart-component name="{{ $blogsItem['name'] }}" title="{{ $blogsItem['title'] }}" date="{{ $blogsItem['date'] }}" image="{{ $blogsItem['image'] }}"/>
                        @endforeach
                    </div>
                </div>

                <div class="m-auto">
                    <div class="pagination mt-5 pt-4">
                        <ul class="list-inline ">
                            <li class="list-inline-item"><a href="#" class="active">1</a></li>
                            <li class="list-inline-item"><a href="#">2</a></li>
                            <li class="list-inline-item"><a href="#">3</a></li>
                            <li class="list-inline-item"><a href="#" class="prev-posts"><i class="ti-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection