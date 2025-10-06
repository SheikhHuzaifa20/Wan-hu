@php
    $page = \Illuminate\Support\Facades\DB::table('pages')->where('id', 33)->first();
    $sections = \Illuminate\Support\Facades\DB::table('section')->where('page_id', 33)->get();
    $banners = \Illuminate\Support\Facades\DB::table('banners')->get();
@endphp

@extends('layouts.app')
@section('title', 'Home')

@section('css')
@endsection

@section('content')

    <section class="hm-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="main-book-sldier">
                        <div class="banner-sliders owl-carousel owl-theme">
                            @foreach ($products as $product)
                                <div class="item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="banner-content">
                                                <h2 class="typingheading">{{ $product->product_title }}</h2>
                                                <!-- <h2>simply dummy text</h2> -->
                                                {!! $product->description !!}
                                                <div class="banner-btn">
                                                    <a href="{{ route('contact') }}"
                                                        class="btn btn-web trns-btn">Contact</a>
                                                    <a href="#bookssec" class="btn btn-web blue-btn">Books</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="banner-books">
                                                <div class="books-wanhu">
                                                    <div class="atropos my-atropos">
                                                        <div class="atropos-scale">
                                                            <div class="atropos-rotate">
                                                                <div class="atropos-inner">
                                                                    <a href="" id="show" class="main-text-1">
                                                                        <img src="{{ $product->image }}" class="img-fluid"
                                                                            alt="" data-atropos-offset="2">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="back-circle">
            <img src="{{ asset('asset/images/banner-circle.png') }}" class="img-fluid" alt="">
        </div>
    </section>
    <section class="books" id="bookssec">
        <div class="sides-animation tractor-img">
            <img src="{{ asset('asset/images/tractor.png') }}" class="img-fluid" alt="">
        </div>
        <div class="sides-animation donkey-img">
            <img src="{{ asset('asset/images/donkey.png') }}" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="book-content">
                        <div class="animate-img right-img">
                            <img src="{{ asset('asset/images/1.png') }}" class="img-fliud" alt="">
                        </div>
                        {!! $sections[7]->value !!}
                        <a href="#reviews" class="btn btn-web blue-btn">More Reviews</a>
                        <div class="animate-img left-img">
                            <img src="{{ asset('asset/images/2.png') }}" class="img-fliud" alt="">
                        </div>
                        <div class="animate-img bird-img">
                            <img src="{{ asset('asset/images/bird.png') }}" class="img-fliud" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="web-books">
                        <h2 class="typingheading">Books</h2>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="book-list box">
                        <a href="{{ route('legend_wanhu') }}" id="show1" class="main-text-2">
                            <div class="book-img">
                                <img src="{{ $legend_wanhu->additional_image }}" class="img-fluid" alt="">
                            </div>
                            <div class="book-name">
                                <h5>
                                    {{ $legend_wanhu->product_title }}
                                </h5>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="book-list box">
                        <a href="{{ route('macabee_brothers') }}" id="show3" class="main-text-3">
                            <div class="book-img">
                                <img src="{{ $macabee_brothers->additional_image }}" class="img-fluid" alt="">
                            </div>
                            <div class="book-name">
                                <h5>
                                    {{ $macabee_brothers->product_title }}
                                </h5>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="book-list box">
                        <a href="{{ route('farmer_dell_jezebell') }}" id="show4" class="main-text-4">
                            <div class="book-img">
                                <img src="{{ $farmer_dell_jezebell->additional_image }}" class="img-fluid" alt="">
                            </div>
                            <div class="book-name">
                                <h5>
                                    {{ $farmer_dell_jezebell->product_title }}
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="book-list box">
                        <a href="{{ route('the_crossing') }}" id="show2" class="main-text-2">
                            <div class="book-img">
                                <img src="{{ $the_crossing->additional_image }}" class="img-fluid" alt="">
                            </div>
                            <div class="book-name">
                                <h5>
                                    {{ $the_crossing->product_title }}
                                    </h6>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-books">
        <div class="sides-animation farmer-img">
            <img src="{{ $sections[1]->value }}" class="img-fluid" alt="">
        </div>
        <div class="sides-animation farmer1-img">
            <img src="{{ $sections[2]->value }}" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wanhu-books">
                        <a href="#" class="btn btn-web blue-btn">Buy this on kindle</a>
                        <div class="atropos my-atropos">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <img src="{{ $page->image }}" class="img-fluid" alt=""
                                            data-atropos-offset="2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-web wth-btn">Buy this on amazon</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="wanhu-books-content">
                        <h3 class="typingheading">{{ $page->name }}</h3>
                        {!! $page->content !!}
                        <a href="about.php" class="btn btn-web blue-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wanhu-video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-wanhu">
                        <video width="100%" height="100%" autoplay="" muted="" loop class="mySwiperVideo">
                            <source src="{{ asset('asset/images/roy-video.mp4') }}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="book-store">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="book-store-logo">
                        <img src="{{ asset('asset/images/store-logo.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new-audibook">
        <div class="sides-animation farmer2-img">
            <img src="{{ $sections[4]->value }}" class="img-fluid" alt="">
        </div>
        <div class="sides-animation farmer3-img">
            <img src="{{ $sections[5]->value }}" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="audibook">
                        <div class="col-lg-12">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="phone-img">
                                        <figure>
                                            <img src="{{ $sections[3]->value }}" class="img-fluid" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="phone-img">
                                        {!! $sections[6]->value !!}
                                        <div class="btn-flux">
                                            <a class="btn btn-web wth-btn">Buy this on audible</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonils" id="reviews">
        <div class="contianer-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="main-testimonial">
                        <h2 class="typingheading">{{ $sections[8]->value }}</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-slides">
                        <div class="happy-client owl-carousel owl-theme">
                            @foreach ($testimonial as $testimonial)
                                {{-- @dd($testimonial) --}}
                                <div class="item">
                                    <div class="main-client">
                                        <img src="{{ asset('asset/images/21.png') }}" class="img-fluid" alt="">
                                        {!! $testimonial->comments !!}
                                        <div class="name-client">
                                            <h6>
                                                {{ $testimonial->name }}
                                                <span class="d-block">{{ $testimonial->designation }}</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js')
@endsection
