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



    <section class="inner-book text-center">
        <div class="container">
            <h1>About</h1>
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
                                        <img src="{{ asset('asset/images/farmer-img.pn') }}g" class="img-fluid"
                                            alt="" data-atropos-offset="2">
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
                        <!--<a href="#" class="btn btn-web blue-btn">Learn more</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('js')
@endsection
