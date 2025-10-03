@php
     $page = \Illuminate\Support\Facades\DB::table('pages')->where('id', 2)->first();
     $sections = \Illuminate\Support\Facades\DB::table('section')->where('page_id', 2)->get();
@endphp

@extends('layouts.app')
@section('title', 'Privacy policy')

@section('css')
     <style>
          .card {
               margin-bottom: 16px;
          }
          .faq-sec .main-border {
    border-top: 1px solid #2b325b;
    padding: 0 0 18px 0;
    width: 80%;
    margin: auto;
}
.faq-sec h3 {
    font-size: 1.5rem;
    color: #2b325b;;
}
     </style>
@endsection

@section('content')

     <section class="inner-banner" style="background-image: url({{asset('images/privicy-policy-666.jpg')}})!important;">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12">
                         <div class="main-heading" aos-init aos-animate="" data-aos="fade-left" data-aos-offset="300"
                         data-aos-easing="ease-in-sine" data-aos-duration="1500">
                         <h1>Privacy  <span class="blue">
                                  <span class="ml6">
                                      <span class="text-wrapper">
                                           <span class="letters">Policy</span>
                                        </span>
                                  </span>
                          </span>
                         </h1>

                    </div>
               </div>
          </div>
          </div>
     </section>


     <section class="faq-sec privacy-policy-text">
          <div class="container">
               <div class="row justify-content-around">
                    <div class="col-lg-9">
                         <div class="faq">

                              <h2 class="side-heading gapp">Privacy  <span class="blue">Policy </span></h2>
                              <p class="para-1">This privacy policy applies to visitors to the website of Engage Health Insurance LLC, a privately owned independent health insurance agency which is not the Health Insurance Marketplace or a governmental agency. Our mission is to aid you in selecting the best ACA Marketplace Health Plan for your area, your needs and your budget and in your enrollment into the plan of your choice. </p>

                              <p class="para-1">The sole purpose of this site is to allow customers the opportunity to speak to, text or email a licensed health insurance agent to gather information and make an informed decision on your health plan choice. Buttons are also provided which would allow you the ability to browse marketplace plans on your own or self-enroll where applicable.  </p>

                              <p class="para-1">The purpose of this privacy policy is to disclose to you what happens to the information you choose to share with us for this purpose.</p>

                              <h2 class="side-heading gapp">Types of Information that may be <span class="blue">collected and means</span></h2>

                              <p class="para-1">The type of information requested from you is done via the website online forms. These forms may ask for contact information and what type of health insurance is being sought. Filling out these forms means you agree to licensed agent follow up on your request via email, text, or phone call. It is an expression of your interest in a quote and agent follow up, not an enrollment or a commitment to enroll. </p>

                              <p class="para-1">Our <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Start a Quote</a> series of questions asks for information a customer provides voluntarily to give an agent guidance for an initial quote or follow up on the request. Such personal information might include your name, phone number, email address, street address, gender, zip code, estimated household income, marital status and number of dependents. With this information an agent can do a preliminary quick quote to help determine eligibility for a subsidy to help pay for the plan, or premium amount estimate. </p>

                              <p class="para-1">The site includes opportunities to click on buttons such as <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Check Subsidy</a>, <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">See Plans</a>, or <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Enroll Now</a> that connects with an EDE platform synced with the health insurance marketplace. This will allow you to enter very basic information about yourself, see your possible subsidy, see how the subsidy applies on the plan display, and even self-enroll where applicable. Only the health insurance marketplace and the insurance carrier/provider have the application data you provided or entered. We do not share this. The application is your private data and you must give your consent to the agent to access that application and to become your Agent of Record. </p>

                              <p class="para-1">Any sensitive information collected, such as your social security number, is for the health insurance application only. Personally Identifiable Information is protected, not shared, not sold, and exclusively for your health insurance application. </p>

                              <p class="para-1">Contact information collected via the online forms is used by us to communicate and reach out to you, the customer, not shared or sold to third parties. </p>




                              <h2 class="side-heading gapp">How is your contact information  collected on our  <span class="blue">online forms used?</span></h2>

                              <p class="para-1">Any information you provide for the purpose of contact and a preliminary quotation is not shared with anyone or sold to anyone, just used to follow up your interest in an ACA health plan. We’d retain your contact information as a prospect or client in our customer list in order to send you emails, texts, or phone calls to keep you informed of changes, information you might need or have interest in. </p>

                              <h3>The use of information you share with us:</h3>
                              <ul>
                                   <li>To follow up on your query by email, text, and/or phone call.</li>
                                   <li>To help you fill out your marketplace health insurance application with your consent. </li>
                                   <li>To communicate with you concerning health plan enrollment, CMS or Marketplace requested documents, updates or new carrier plans that might become available. </li>
                                   <li>To send occasional E-mails with general health insurance news, deadlines or changes that might be applicable or of interest.</li>
                                   <li>Sensitive personal information is strictly for your application for health insurance. SSN, for instance, is not retained by us but is only entered on the application itself. </li>
                              </ul>

                              <p class="para-1">Your use of this website, its forms and EDE links, signifies your agreement with this Privacy Policy. Any changes to this policy will be posted here for you and continued use of this site indicates acceptance of those changes. </p>



                         </div>
                    </div>

               </div>
          </div>


     </section>





     @include('front.call-agent')

@endsection

@section('js')

@endsection
