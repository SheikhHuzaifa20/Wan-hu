@php
     $page = \Illuminate\Support\Facades\DB::table('pages')->where('id', 32)->first();
     $sections = \Illuminate\Support\Facades\DB::table('section')->where('page_id', 32)->get();
@endphp

@extends('layouts.app')
@section('title', 'Accreditation')

@section('css')

@endsection

@section('content')
     <section class="real-world inner-banner" style="background-image: url({{asset($page->image)}})!important;">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12">
{{--                         <div class="shop-stragety">--}}
{{--                              <h2>ACCREDITATIONS</h2>--}}
{{--                              <p>GAMS Accreditations and Subject Matter Experts (SMEs) is what sets us apart from our competition</p>--}}
{{--                              <a href="#" class="btn orange-btn org-btn">Sign Up Now</a>--}}
{{--                         </div>--}}
                         {!! $page->content !!}
                    </div>
               </div>
          </div>
     </section>

     <section class="accreditations-logo">
          <div class="container">
               <div class="row">
                    <div class="col-lg-3">
                         <div class="naemt-logo">
                              <a href="https://www.naemt.org/">
                                   <figure>
                                        <img src="{{asset('images/naemt.png')}}" class="img-fluid" alt="">
                                   </figure>
                              </a>
                         </div>
                    </div>
                    <div class="col-lg-3">
                         <div class="naemt-logo">
                              <a href="https://www.ibscertifications.org/">
                                   <figure>
                                        <img src="{{asset('images/ibsc.png')}}" class="img-fluid" alt="">
                                   </figure>
                              </a>
                         </div>
                    </div>
               </div>
          </div>
     </section>
@endsection

@section('js')

@endsection