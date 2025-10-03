{{-- @php
     $page = \Illuminate\Support\Facades\DB::table('pages')->where('id', 2)->first();
     $sections = \Illuminate\Support\Facades\DB::table('section')->where('page_id', 2)->get();
@endphp --}}

@extends('layouts.app')
@section('title', 'Terms of Use')

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

<section class="inner-banner" style="background-image: url({{asset('images/terms-of-use.jpg')}})!important;">
    <div class="container">
         <div class="row">
              <div class="col-lg-12">
                   <div class="main-heading" aos-init aos-animate="" data-aos="fade-left" data-aos-offset="300"
                   data-aos-easing="ease-in-sine" data-aos-duration="1500">
                   <h1>Terms of   <span class="blue">
                            <span class="ml6">
                                <span class="text-wrapper">
                                     <span class="letters">Use</span>
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
              <div class="col-lg-9 col-md-12 col-12">
                   <div class="faq">

                        <h2 class="side-heading">Engage Health Insurance LLC Website <span class="blue">Terms of Use:</span></h2>
                        <p class="para-1">Please note that the terms of use set forth here determine whether you are authorized to access and use the website domain, <a href="www.engagehealthinsurance.com">www.engagehealthinsurance.com</a> (Website). </p>

                        <p class="para-1">Please review thoughtfully prior to using the Website. You must be a legal resident of the United States or its territories and at least 18 years of age to access and use this website for health plan enrollment. By accessing and using the Website in any way, including browsing or using any of the forms, tools or services you agree to and are bound by these terms of use. If you do not agree to all of the terms and conditions outlined herein, you do not have authorization to access or use this website.</p>

                        <h2 class="side-heading">Website <span class="blue">Ownership</span></h2>

                        <p class="para-1">This website is owned and operated by <a href="index.php">Engage Health Insurance LLC</a>, a private independent health insurance agency for the purpose of providing general information and introduction to licensed health insurance agents with Engage Health Insurance LLC for assistance in enrolling in ACA Health Insurance Marketplace® plans with Trusted Health Insurance Carriers listed there.  </p>

                        <h2 class="side-heading">Website Purpose <span class="blue">and Use</span></h2>

                        <p class="para-1">Our Website provides tools and services intended to help you shop for and select an ACA health insurance plan, whether by an e-mail or phone call to our office or agents, or via the EDE links provided on such buttons as <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Enroll Now</a>, <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Check Subsidy</a> or <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">See Plans</a> which allow plan display, selection and ultimate self-enrollment if desired. </p>


                        <p class="para-1">The Website asks for contact information and provides questions for the sole purpose of agent follow up for a discussion, health insurance quotation or determination if we can help with the specific request. Such contact information is solely so we can assist you and is never sold or shared. As stated in the Privacy Policy, application data is only for the application itself and the insurance provider who writes the policy based on that data. Use of the site and filling out the site forms gives <a href="index.php">Engage Health Insurance LLC</a> permission to use your provided contact information to reach out with follow up information or news. </p>

                        <p class="para-1">Any information provided on our Website is for general knowledge and no guarantee is made that the information may be outdated or have changed since posting. You are responsible for your own research, decisions and to utilize information posted here as a helpful convenience. Any information provided on this site, phone call or e-mail discussion is not a guarantee of coverage. Any information shared for the purpose of getting a quote is not a commitment to enroll. Access to your Health Insurance Marketplace® records and enrollment will happen after your consent to do so.</p>

                        <p class="para-1"><a href="index.php">Engage Health Insurance LLC</a> is not a provider of health insurance but rather can assist in filling out the Health Insurance Marketplace® application forms with you and review the selection of plans available in your area and according to your stated needs. We do not endorse or recommend the products of the insurance carriers, but rather serve to explain the features of a plan, such as deductibles, co-pays, and what provider services might be offered before a deductible might apply, in order to help you decide the best plan for you.  You should rely upon your own judgment in deciding which of the available plans best suits your needs and budget. </p>

                        <p class="para-1">All insurance plans are subject to the terms, conditions and limitations of the health insurance carrier/provider which you select, apply for, and enroll in. </p>




                        <h2 class="side-heading">Voice/Audio <span class="blue">Recordings</span></h2>

                        <p class="para-1">You consent and agree to audio and voice recordings of conversations and directives made by you during phone conversations with the agents at <a href="index.php">Engage Health Insurance LLC</a>. In the course of working with an agent during the enrollment process you agree that your consent to access your Health Insurance Marketplace® records, to enroll in a plan and attestation to the accuracy of the information you provide for the application will be on a recorded line. Calling <a href="index.php">Engage Health Insurance LLC</a> means you have granted the company permission to record and use this information in connection with your enrollment into a health plan. Any data collected as outlined in Privacy Policy is not sold or shared but is for the express purpose of health plan application. </p>

                        <h2 class="side-heading">State Licensing and Use of the Enhanced Direct <span class="blue">Enrollment Buttons</span></h2>

                        <p class="para-1">Engage Health Insurance LLC is licensed in 23 states and as an independent agent works with many trusted health insurance providers.  The EDE enrollment buttons utilized on the Website with names such as <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Enroll Now</a>, <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Check Subsidy</a>, <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">See or Browse Plans</a>, are designed to sync with the Marketplace and help you browse on your own with a small amount of general information, see the probable subsidy, and proceed to start an application and enroll. The system will allow you to browse and select plans anywhere and for areas Engage doesn’t support currently for enrollment, you will be directed to the entity and phone number where you can enroll in your desired plan. </p>

                        <h2 class="side-heading">Trademarks / <span class="blue">Copyrights</span></h2>

                        <p class="para-1">Any logos, service marks, trademarks used or displayed on the Website belong to their respective owners. These may belong to the Trusted Carriers we partner with and/or references to the Health Insurance Marketplace® or our EDE. </p>

                        <h2 class="side-heading">No unlawful <span class="blue">use</span></h2>

                        <p class="para-1">You may not use the Website for any purpose that is unlawful or prohibited by our terms and conditions.  You may not use the Website in any manner which could damage, overburden, or compromise the Website, it’s server, network or prevent another user’s ability to use the Website. </p>

                        <h2 class="side-heading">Third-Party <span class="blue">Links</span></h2>

                        <p class="para-1">Any links to third-party websites which might be provided are for your convenience and reference only and do not represent an endorsement or recommendation of the third party’s products or services. Nor does <a href="index.php">Engage Health Insurance LLC</a> have any control over the accuracy of content of third-party websites. You may share the link to our website with other consumers if you wish but only insofar as there is no attempt to interfere with website operation or attempt to take data from the website by any means or any attempt to override the security or privacy of such data. </p>

                        <h2 class="side-heading">Disclaimer<span class="blue"></span></h2>

                        <p class="para-1">The information contained on this Website is provided for general informational purposes only. This content is not a recommendation nor does it constitute advice on any specific issue and is provided “as is” without any warranty or guarantee, express or implied, and is subject to change without notice. Your use of the Website is at your own risk and discretion and you assume all liability regarding your use of the Website. Information provided on the website, its forms, and its links are for the purpose of information gathering and assistance in enrolling in an ACA health plan. Govern yourself accordingly.</p>
                        <p class="para-1">Your authorization to use the Website is predicated upon your agreement that neither <a href="index.php">Engage Health Insurance LLC</a> nor any site for which we share links bears any liability whatsoever for decisions you make because of information shared on the Website. </p>

                        <h2 class="side-heading">Governing Jurisdiction for Website - <span class="blue">Florida</span></h2>

                        <p class="para-1">The Website is operated, controlled and updated from inside the United States.  The use of the Website from outside the country may not be appropriate regarding its purpose of assisting in Health Insurance Marketplace® enrollments which must be done from within the US by licensed FFM Certified agents and only US Citizens, US Nationals and those Legally present in the US may participate in these plans.  Your use of our Website from outside the United States means you are responsible for any applicable local laws governing such activity. Research or browsing alone is welcome from anywhere however.  <a href="index.php">Engage Health Insurance LLC</a> is Florida based and as such Website use and access is according to the laws of the State of Florida, USA and not any international entity. The venue for any proceedings regarding use of the Website shall be in the state or federal courts located in Broward County, Florida. </p>

                        <h2 class="side-heading">Our <span class="blue">Mission</span></h2>

                        <p class="para-1">The use of this Website is to offer free assistance for those looking for some help in the enrollment into an <a href="affordable-care-act-(ACA).blade.php">Affordable ACA</a> Health Plan. We are just a phone call or e-mail away.</p>

                        <p class="para-1">We wish to encourage anyone to take advantage of the Affordable Care Act/Obamacare offerings especially if the financial help through subsidy means the difference between having no <a href="health-insurance.blade.php">health insurance</a> at all and having a useful, low cost plan which will be protective and cover essential services that make life easier should unexpected injury or illness befall you.
                            </p>




                   </div>
              </div>

         </div>
    </div>


</section>

@include('front.call-agent')

@endsection

@section('js')

@endsection
