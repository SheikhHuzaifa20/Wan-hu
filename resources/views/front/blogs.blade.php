@php
     $page = \Illuminate\Support\Facades\DB::table('pages')->where('id', 7)->first();
     $sections = \Illuminate\Support\Facades\DB::table('section')->where('page_id', 7)->get();
@endphp

@extends('layouts.app')
@section('title', 'Blog')

@section('css')

@endsection

@section('content')
     <section class="inner-banner blogs-banner" style="background-image: url({{asset($page->image)}})!important;">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12">
                         <div class="main-heading" aos-init aos-animate="" data-aos="fade-left" data-aos-offset="300"
                         data-aos-easing="ease-in-sine" data-aos-duration="1500">
{{--                         <h1>Our <span class="blue">--}}
{{--                                   <span class="ml6">--}}
{{--                                        <span class="text-wrapper">--}}
{{--                                             <span class="letters">Blogs</span>--}}
{{--                                        </span>--}}
{{--                                   </span>--}}
{{--                         </h1>--}}
                              {!! $page->content !!}
                    </div>
               </div>
          </div>
          </div>
     </section>

     <section class="blogs-pg">
          <div class="container">
               <div class="row">
                    <div class="col-lg-9">
                         <div class="blog-dt">
                              <div class="row">
                                   <div class="col-lg-8">
                                        <div class="blog-img">
                                             <img src="{{asset('images/blog-1.png')}}" class="img-fluid" alt="">
                                        </div>
                                   </div>
                                   <div class="col-lg-4">
                                        <div class="play-btn">
                                             <a href="#">
                                                  <img src="{{asset('images/play-btn.png')}}" class="img-fluid" alt="">
                                             </a>
                                             <h5>Guerlain for Bees <span class="d-block">Honey Is Good Your </span>Skin</h5>
                                        </div>
                                        <div class="play-btn">
                                             <a href="#">
                                                  <img src="{{asset('images/play-btn.png')}}" class="img-fluid" alt="">
                                             </a>
                                             <h5>Cheers to 2020! <span class="d-block">Power Outfit for the </span>New Year
                                             </h5>
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="side-blog">
                                             <div class="side-num">
                                                  <p>15<span class="d-block">09</span>19</p>
                                             </div>
                                             <img src="{{asset('images/blog-2.png')}}" class="img-fluid" alt="">
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="healthcare">
                                             <h6>Heathcare</h6>
                                             <h2>Milky Finland Aurora</h2>
                                             <p>Anean sollicitudin, lorem quis bibendu into auctor qaum sagittis sem nibh id
                                                  elit duisa. Vivamus auctor lacus augueu.</p>
                                             <div class="right-arrow">
                                                  <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="side-blog">
                                             <div class="side-num">
                                                  <p>16<span class="d-block">09</span>19</p>
                                             </div>
                                             <img src="{{asset('images/blog-3.png')}}" class="img-fluid" alt="">
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="healthcare">
                                             <h6>Insurance</h6>
                                             <h2>Lorem Lipsum dolor</h2>
                                             <p>Anean sollicitudin, lorem quis bibendu into auctor qaum sagittis sem nibh id
                                                  elit duisa. Vivamus auctor lacus augueu.</p>
                                             <div class="right-arrow">
                                                  <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="side-blog">
                                             <div class="side-num">
                                                  <p>14<span class="d-block">09</span>19</p>
                                             </div>
                                             <img src="{{asset('images/blog-4.png')}}" class="img-fluid" alt="">
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="healthcare">
                                             <h6>Heathcare</h6>
                                             <h2>Lorem Lipsum dolor</h2>
                                             <p>Anean sollicitudin, lorem quis bibendu into auctor qaum sagittis sem nibh id
                                                  elit duisa. Vivamus auctor lacus augueu.</p>
                                             <div class="right-arrow">
                                                  <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-3">
                         <div class="insta-profile">
                              <div class="side-menu">
                                   <img src="{{asset('images/blog-5.png')}}" class="img-fluid" alt="">
                                   <div class="discription-profile">
                                        <h5>Instagram</h5>
                                        <a href="mailto:engagehealthinsurance"><i class="fa-brands fa-instagram"></i>
                                             engagehealthinsurance</a>
                                   </div>
                              </div>
                              <div class="featured-post">
                                   <div class="st-h">
                                        <h2>Featured Posts</h2>
                                   </div>
                                   <ul>
                                        <li>
                                             <figure>
                                                  <span>1</span>
                                                  <img src="{{asset('images/profile.png')}}" class="img-fluid" alt="">
                                             </figure>
                                             <p>Hope To See You in Person</p>
                                        </li>
                                        <li>
                                             <figure>
                                                  <span>2</span>
                                                  <img src="{{asset('images/profile-1.png')}}" class="img-fluid" alt="">
                                             </figure>
                                             <p>Print Mania, Mad for Plaid</p>
                                        </li>
                                        <li>
                                             <figure>
                                                  <span>3</span>
                                                  <img src="{{asset('images/profile-3.png')}}" class="img-fluid" alt="">
                                             </figure>
                                             <p>All Black is Never Bad Idea</p>
                                        </li>
                                   </ul>
                              </div>
                              <div class="cover-img">
                                   <figure>
                                        <img src="{{asset('images/cover.png')}}" class="img-fluid" alt="">
                                   </figure>
                                   <div class="st-h">
                                        <h2>Category</h2>
                                   </div>
                                   <div class="Category-file">
                                        <img src="{{asset('images/category.png')}}" class="img-fluid" alt="">
                                        <div class="health-insure">
                                             <h6>heath insurance</h6>
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