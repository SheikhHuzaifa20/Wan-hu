@php
     $page = \Illuminate\Support\Facades\DB::table('pages')->where('id', 5)->first();
     $sections = \Illuminate\Support\Facades\DB::table('section')->where('page_id', 5)->get();
@endphp

@extends('layouts.app')
@section('title', 'Dental insurance')

@section('css')

@endsection

@section('content')
     <section class="inner-banner dental-banner" style="background-image: url({{asset($page->image)}})!important;">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12">
                         <div class="main-heading" aos-init aos-animate="" data-aos="fade-left" data-aos-offset="300"
                         data-aos-easing="ease-in-sine" data-aos-duration="1500">
{{--                         <h1>Dental <span class="blue">--}}
{{--                                   <span class="ml6">--}}
{{--                                        <span class="text-wrapper">--}}
{{--                                             <span class="letters">Insurance</span>--}}
{{--                                        </span>--}}
{{--                                   </span>--}}
{{--                              </span>--}}
{{--                         </h1>--}}
                              {!! $page->content !!}
                    </div>
               </div>
          </div>
          </div>
     </section>

     <section class="vision-pg">
          <div class="container">
               <div class="row">
                    <div class="col-lg-3">
                         <div class="main-collaps">
                              <ul class="nav nav-tabs" role="tablist">
                                   <li class="nav-item">
                                        <a class="nav-link " href="{{route('front.health-insurance')}}">Health
                                             Insurance</a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link" href="{{route('front.vision-insurance')}}">Vision
                                             Insurance</a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-3" role="tab">Dental
                                             Insurance</a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link" href="{{route('front.affordable-care-act-aca')}}">Affordable Care
                                             Act</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="talk-insurance">
                              <img src="{{asset('images/circle-phone.png')}}" class="img-fluid" alt="">
                              <h4>Talk to Our <span class="d-block">Insurance Agent</span></h4>
                              <h3><a href="tel:+833-775-1105">833-775-1105</a></h3>
                              <!-- <span class="d-block">
                                        Call to Our Experts</span> -->
                         </div>
                    </div>
                    <div class="col-lg-9">
                         <div class="tabs-show-nav">
                              <div class="tab-content">
                                   <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <div class="tabs-coverage">
                                             <img src="{{asset($sections[0]->value)}}" class="img-fluid mb-5" alt="">
{{--                                             <h2>Dental Plans can help you manage dental costs and benefit your overall--}}
{{--                                                  health!</h2>--}}
{{--                                             <p>The primary purpose of dental insurance is two-fold. It can help individuals--}}
{{--                                                  and families cover the costs of dental care. And knowing you have dental--}}
{{--                                                  insurance coverage encourages regular dental care for better oral health--}}
{{--                                                  and outcomes. </p>--}}

{{--                                             <h2>Why should I have dental insurance?</h2>--}}

{{--                                             <p>Dental insurance helps individuals afford routine dental check-ups,--}}
{{--                                                  cleanings, and other preventive care, as well as more extensive procedures.--}}
{{--                                                  Many plans cover preventative services such as regular cleanings and--}}
{{--                                                  check-ups at little to no cost. More extensive procedures are covered by--}}
{{--                                                  increasing percentages by staying in the plan over time. Dental plans--}}
{{--                                                  generally have an annual coverage pay out maximum. By spreading the cost of--}}
{{--                                                  dental care over time through premiums, individuals can better manage their--}}
{{--                                                  dental expenses.</p>--}}
                                             {!! $sections[1]->value !!}
                                        </div>
                                        <div class="point-bot">
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset($sections[4]->value)}}" class="img-fluid" alt="">
{{--                                                       <h4>Prevention</h4>--}}
                                                       {!! $sections[2]->value !!}
                                                  </div>
{{--                                                  <div class="financial-discription">--}}
{{--                                                       <p>Tooth decay is the single most common chronic disease in both--}}
{{--                                                            adults and children. Dental insurance makes routine care--}}
{{--                                                            affordable and prevention is always better than cure!! Neglect is far costlier than dental insurance!--}}
{{--                                                       </p>--}}
{{--                                                  </div>--}}
                                                       {!! $sections[3]->value !!}
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset($sections[7]->value)}}" class="img-fluid" alt="">
{{--                                                       <h4>Helps avoid future dental problems</h4>--}}
                                                       {!! $sections[5]->value !!}
                                                  </div>
{{--                                                  <div class="financial-discription">--}}
{{--                                                       <p>Participation in a plan encourages getting routine care allowing--}}
{{--                                                            detection of problems early to help avoid costly procedures such--}}
{{--                                                            as crowns or root canals, not to mention pain!--}}
{{--                                                       </p>--}}
{{--                                                  </div>--}}
                                                       {!! $sections[6]->value !!}
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset($sections[10]->value)}}" class="img-fluid" alt="">
{{--                                                       <h4>Supports overall health</h4>--}}
                                                       {!! $sections[8]->value !!}
                                                  </div>
{{--                                                  <div class="financial-discription">--}}
{{--                                                       <p>Studies show that dental care is not just about having a beautiful--}}
{{--                                                            smile. In the absence of routine preventative care, major health--}}
{{--                                                            problems such as heart disease and diabetes appear more often.--}}
{{--                                                       </p>--}}
{{--                                                  </div>--}}
                                                       {!! $sections[9]->value !!}
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset($sections[13]->value)}}" class="img-fluid" alt="">
{{--                                                       <h4>Confidence</h4>--}}
                                                       {!! $sections[11]->value !!}
                                                  </div>
{{--                                                  <div class="financial-discription">--}}
{{--                                                       <p>While oral health and the management of costs is paramount, regular--}}
{{--                                                            cleanings and care enhance appearance when facing the world. </p>--}}
{{--                                                  </div>--}}
                                                       {!! $sections[12]->value !!}
                                             </div>
                                        </div>
                                   </div>
                                   <div class="tab-pane" id="tabs-2" role="tabpanel">
                                        <div class="tabs-coverage">
                                             <img src="{{asset('images/close-up-boy-dentist.png')}}" class="img-fluid mb-5" alt="">
                                             <h2>Dental Plans can help you manage dental costs and benefit your overall
                                                  health!</h2>
                                             <p>The primary purpose of dental insurance is two-fold. It can help individuals
                                                  and families cover the costs of dental care. And, knowing you have dental
                                                  insurance coverage encourages regular dental care for better oral health
                                                  and outcomes. </p>
                                             <p>Dental insurance helps individuals afford routine dental check-ups,
                                                  cleanings, and other preventive care, as well as more extensive procedures.
                                                  Many plans cover preventative services such as regular cleanings and
                                                  check-ups at little to no cost. More extensive procedures are covered by
                                                  increasing percentages by staying in the plan over time. Dental plans
                                                  generally have an annual coverage pay out maximum. By spreading the cost of
                                                  dental care over time through premiums, individuals can better manage their
                                                  dental expenses.</p>
                                             <h2>Why should I have dental insurance?</h2>
                                             <p>The primary purpose of dental insurance is two-fold. It can help individuals
                                                  and families cover the costs of dental care. And, knowing you have dental
                                                  insurance coverage encourages regular dental care for better oral health
                                                  and outcomes. </p>
                                             <p>Dental insurance helps individuals afford routine dental check-ups,
                                                  cleanings, and other preventive care, as well as more extensive procedures.
                                                  Many plans cover preventative services such as regular cleanings and
                                                  check-ups at little to no cost. More extensive procedures are covered by
                                                  increasing percentages by staying in the plan over time. Dental plans
                                                  generally have an annual coverage pay out maximum. By spreading the cost of
                                                  dental care over time through premiums, individuals can better manage their
                                                  dental expenses.</p>
                                        </div>
                                        <div class="point-bot">
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-5.png')}}" class="img-fluid" alt="">
                                                       <h4>Prevention</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Tooth decay is the single most common chronic disease in both
                                                            adults and children. Dental insurance makes routine care
                                                            affordable and prevention is always better than cure!! Neglect
                                                            far costlier than dental insurance!
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-6.png')}}" class="img-fluid" alt="">
                                                       <h4>Helps avoid future
                                                            dental problems</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Participation in a plan encourages getting routine care allowing
                                                            detection of problems early to help avoid costly procedures such
                                                            as crowns or root canals, not to mention pain!
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-7.png')}}" class="img-fluid" alt="">
                                                       <h4>Supports overall health</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Studies show that dental care is not just about having a beautiful
                                                            smile. In the absence of routine preventative care, major health
                                                            problems such as heart disease and diabetes appear more often.
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-8.png')}}" class="img-fluid" alt="">
                                                       <h4>Confidence</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>While oral health and the management of costs is paramount, regular
                                                            cleanings and care enhance appearance when facing the world. </p>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="tab-pane" id="tabs-3" role="tabpanel">
                                        <div class="tabs-coverage">
                                             <img src="{{asset('images/close-up-boy-dentist.png')}}" class="img-fluid mb-5" alt="">
                                             <h2>Dental Plans can help you manage dental costs and benefit your overall
                                                  health!</h2>
                                             <p>The primary purpose of dental insurance is two-fold. It can help individuals
                                                  and families cover the costs of dental care. And, knowing you have dental
                                                  insurance coverage encourages regular dental care for better oral health
                                                  and outcomes. </p>
                                             <p>Dental insurance helps individuals afford routine dental check-ups,
                                                  cleanings, and other preventive care, as well as more extensive procedures.
                                                  Many plans cover preventative services such as regular cleanings and
                                                  check-ups at little to no cost. More extensive procedures are covered by
                                                  increasing percentages by staying in the plan over time. Dental plans
                                                  generally have an annual coverage pay out maximum. By spreading the cost of
                                                  dental care over time through premiums, individuals can better manage their
                                                  dental expenses.</p>
                                             <h2>Why should I have dental insurance?</h2>
                                             <p>The primary purpose of dental insurance is two-fold. It can help individuals
                                                  and families cover the costs of dental care. And, knowing you have dental
                                                  insurance coverage encourages regular dental care for better oral health
                                                  and outcomes. </p>
                                             <p>Dental insurance helps individuals afford routine dental check-ups,
                                                  cleanings, and other preventive care, as well as more extensive procedures.
                                                  Many plans cover preventative services such as regular cleanings and
                                                  check-ups at little to no cost. More extensive procedures are covered by
                                                  increasing percentages by staying in the plan over time. Dental plans
                                                  generally have an annual coverage pay out maximum. By spreading the cost of
                                                  dental care over time through premiums, individuals can better manage their
                                                  dental expenses.</p>
                                        </div>
                                        <div class="point-bot">
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-5.png')}}" class="img-fluid" alt="">
                                                       <h4>Prevention</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Tooth decay is the single most common chronic disease in both
                                                            adults and children. Dental insurance makes routine care
                                                            affordable and prevention is always better than cure!! Neglect
                                                            far costlier than dental insurance!
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-6.png')}}" class="img-fluid" alt="">
                                                       <h4>Helps avoid future
                                                            dental problems</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Participation in a plan encourages getting routine care allowing
                                                            detection of problems early to help avoid costly procedures such
                                                            as crowns or root canals, not to mention pain!
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-7.png')}}" class="img-fluid" alt="">
                                                       <h4>Supports overall health</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Studies show that dental care is not just about having a beautiful
                                                            smile. In the absence of routine preventative care, major health
                                                            problems such as heart disease and diabetes appear more often.
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-8.png')}}" class="img-fluid" alt="">
                                                       <h4>Confidence</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>While oral health and the management of costs is paramount, regular
                                                            cleanings and care enhance appearance when facing the world. </p>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-12">
                         <div class="amerities-img dental_flex">
                              <img src="{{asset('images/ameritas.png')}}" class="img-fluid" alt="">
                              <img src="{{asset('images/cigna.png')}}" class="img-fluid" alt="">
                              <img src="{{asset('images/allstate.png')}}" class="img-fluid" alt="">
                              <img src="{{asset('images/anthem.png')}}" class="img-fluid" alt="">
                              <img src="{{asset('images/BCBS.png')}}" class="img-fluid" alt="">
                              <img src="{{asset('images/uniterd.png')}}" class="img-fluid" alt="">
                         </div>
                    </div>
               </div>
          </div>
     </section>

     @include('front.call-agent')

@endsection

@section('js')

@endsection
