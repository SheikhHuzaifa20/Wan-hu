@extends('layouts.app')
@section('title', 'VENDORS')

@section('css')

@endsection

@section('content')
     <section class="real-world inner-banner">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12">
                         <div class="shop-stragety">
                              <h2>VENDORS</h2>
                              <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                   been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                                   a galley of type and scrambled it to make a type specimen book.</p> -->
                              <a href="#" class="btn orange-btn org-btn">Sign Up Now</a>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section class="accreditations-logo">
          <div class="container">
               <div class="row">
                    <div class="col-lg-3">
                         <div class="naemt-logo">
                              <a href="https://rhinorescuestore.com/">
                                   <figure>
                                        <img src="{{asset('images/vendors-1.png')}}" class="img-fluid" alt="">
                                   </figure>
                              </a>
                         </div>
                    </div>
                    <div class="col-lg-3">
                         <div class="naemt-logo">
                              <a href="https://fedbizaccess.com/">
                                   <figure>
                                        <img src="{{asset('images/vendors-2.png')}}" class="img-fluid" alt="">
                                   </figure>
                              </a>
                         </div>
                    </div>
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