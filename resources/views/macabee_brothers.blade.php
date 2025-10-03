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

<section class="inner-book-content crossing-banner-4">
    <!--<div class="sides-animation farmer2-img">-->
    <!--    <img src="images/farmer2.png" class="img-fluid" alt="">-->
    <!--</div>-->
    <div class="sides-animation farmer3-img">
        <img src="{{asset("asset/images/macabee-brothers-farmer2.png")}}" class="img-fluid" alt="">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="main-book-sldier">
                    <div class="banner-sliders owl-carousel owl-theme">

                        <div class="item">
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
                                                                <img src="{{asset($product->image)}}" class="img-fluid"
                                                                    alt="" data-atropos-offset="2">
                                                            </a>
                                                            <!-- <div id="hide" class="beast main-after">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h3>The Legend of Wan Hu</h3>
                                                            <p>A timeless fable brought to life in lyrical verse, The Legend of Wan Hu tells the story of a young dreamer determined to touch the skies. Set in a faraway land, it follows Wan Hu’s relentless pursuit of flight. A journey marked by hope, ingenuity, and the courage to chase the impossible. Whether his daring attempt soars or falters, his story endures as a lesson in ambition, the necessity of caution, and the beauty of never giving up.</p>
                                                            <p>With its delicate balance of whimsy and wisdom, this poetic retelling invites readers into a world where dreams stretch beyond the horizon, and imagination has no limits.</p>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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




@endsection

@section('js')
@endsection
