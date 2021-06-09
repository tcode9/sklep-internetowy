@extends('site.app')
@section('title', 'Strona główna')

@section('content')
    @csrf
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Strona główna</h2>
        </div>
    </section>
    <div class="container clearfix">
        <h2 class="title-page">Produkty</h2>
    </div>    <div class="owl-carousel owl-theme">
        @foreach($products as $product)
            <div class="item">
                <a href="{{ asset('storage/'.$product->images->first()->full) }}" data-fancybox="">
                    <img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="">
                </a>
            </div>
        @endforeach
    </div>
    <div class="container clearfix">
        <h2 class="title-page">Marki</h2>
    </div>
    <div class="owl-carousel owl-theme">
        @foreach($brands as $brand)
            <div class="item">
                <a href="{{ asset('storage/'.$brand->logo) }}" data-fancybox="">
                    <img src="{{ asset('storage/'.$brand->logo) }}" alt="">
                </a>
            </div>
        @endforeach
    </div>
@stop

