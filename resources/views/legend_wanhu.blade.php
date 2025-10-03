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

<!-- Banner -->
<section class="inner-book">
    <div class="container">
        <h1>{{$product->product_title}}</h1>
    </div>
</section>

<section class="inner-book-content wanhu-pg crossing-banner-1">
     <div class="animate-img cart1-img">
        <img src="{{asset("asset/images/wan-caracter3.png")}}" class="img-fliud" alt="">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content">
                    <h2 class="typingheading">{{$product->product_title}}</h2>
                    <!-- <h2>simply dummy text</h2> -->
                    {!!$product->description!!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-books">
                    <div class="books-wanhu">
                        <div class="atropos my-atropos">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <a href="JavaScript:;" id="show" class="main-text-1">
                                            <img src="{{asset($product->image)}}" class="img-fluid" alt=""
                                                data-atropos-offset="2">
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
    <div class="animate-img cart2-img">
        <img src="{{asset("asset/images/wan-caracter4.png")}}" class="img-fliud" alt="">
    </div>
</section>



@endsection

@section('js')
@endsection
