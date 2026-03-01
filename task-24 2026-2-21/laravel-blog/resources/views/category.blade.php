@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                   <h2 class="lg-title">{{ $category->name }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
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