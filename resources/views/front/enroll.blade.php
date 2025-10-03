@extends('layouts.app')
@section('title', 'Enroll')

@section('css')
<style>
    .enroll-ankers li a {
        text-decoration: underline !important;
        color: var(--black-color);
        font-size: 16px;
        font-weight: 500;
        transition: 0.2 ease-in-out;
    }

    .Enroll-banner .main-heading a h1 {
        color: #2b325b;
        text-align: start;
    }

    .Enroll-banner .main-heading a:hover {
        color: #2b325b !important;
    }

    .enroll-ankers li a:hover {
        color: var(--blue-color);
    }
</style>
@endsection

@section('content')
<section class="inner-banner Enroll-banner" style="background-image: url({{asset('images/Enroll-banner.webp')}})!important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-heading text-center" aos-init aos-animate data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag" style="text-decoration: underline !important; color: #000000;">
                        <h1>Shop <span class="d-block">Check Subsidy</span> View Plans <span class="d-block"> Enroll</span>
                        </h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="faq">
                    <h2 class="side-heading gapp">Browse<span class="blue"> Plans</span></h2>
                    <div id="accordion" class="accordionStyle">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">Find the best health plans
                                    for you and your family
                                </button>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">

                                    <p><a class="main-blue-color" href="index.php">Engage Health Insurance LLC</a> represents multiple health insurance carriers for an unbiased approach in helping select the best plan for a client’s particular financial situation and medical needs. Insurance plans and availability do vary from state to state and by zip code within a state. All of the plans in the ACA marketplaces conform to the same Affordable Care Act standards.</p>

                                    <p>While we recommend utilizing the assistance of an experienced, licensed health insurance agent with <a class="main-blue-color" href="index.php">Engage Health Insurance LLC</a> to help you navigate the enrollment process, the state links below will allow you to enter some basic information about yourself to see your potential subsidy amount (the financial help figure), how that subsidy amount is applied to a plan, check eligibility for a zero or low cost plan, browse plans and even self- enroll in many of them. Any state we are currently unable to support enrollment in will give notice of where to call for enrollment into your selected plan at the “start application button “ stage when browsing the plan display. </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" id="headingTwelve2">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve2" aria-expanded="false"
                                    aria-controls="collapseTwelve2">Start by clicking the state & entering the
                                    zip code within your state
                                </button>
                            </div>
                            <div id="collapseTwelve2" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul class="enroll-ankers">
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Alabama</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Arkansas</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Arizona</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Florida</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Georgia</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Iowa</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Indiana</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Kansas</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Louisiana</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Michigan</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Missouri</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Mississippi</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-4">
                                            <ul class="enroll-ankers">
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">North Carolina</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Nebraska</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Ohio</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Oklahoma</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">South Carolina</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Tennessee</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Texas</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Utah</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Virginia</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">West Virginia</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag">Wisconsin</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwelve1">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve1" aria-expanded="false"
                                    aria-controls="collapseTwelve1">Things to keep in mind for the application
                                    when self-enrolling
                                </button>

                            </div>
                            <div id="collapseTwelve1" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">


                                    <ul>
                                        <li>• Use official information as it would appear on your tax return on the
                                            application.
                                        </li>
                                        <li>• Make sure the name entered is the same as on your social security card
                                            and tax return, eg official name not a nickname.
                                        </li>
                                        <li>• Make sure all entries as name, address, emails, SSN, phone numbers are
                                            entered spelled correctly. This is important for communication and to
                                            prevent duplicate applications.
                                        </li>
                                        <li>• Apply as an Individual single filer with or without dependents..or..
                                        </li>
                                        <li>• If Married you must file jointly to be eligible for subsidies or tax
                                            credits on an ACA plan with or without dependents.
                                        </li>
                                        <li>• Make sure you do not have other coverage such as employer health
                                            insurance, VA, Medicaid, Medicare as you are set and not eligible for
                                            ACA coverage or subsidies and could jeopardize your coverage.
                                        </li>
                                        <li>• Income should be within certain guidelines as there is a minimum floor
                                            to enroll in an ACA plan. A single applicant with no dependents for
                                            example would need to earn about 15K in most states and 21K in the
                                            Medicaid expanded states to apply. Otherwise the system will ask you to
                                            see about Medicaid eligibility.
                                        </li>
                                        <li>• Income entered should be accurate but it is an estimation for the
                                            annual period Jan 1 through Dec 31. If you earn less than estimated,
                                            that is ok. If you earn too much more than estimated, be aware you might
                                            have to pay back some of the subsidy received which was based on a
                                            different income figure.
                                        </li>
                                        <li>• If you are enrolling after the Open enrollment period which generally
                                            goes from Nov 1 to Jan 15 (dates can fluctuate slightly year to year),
                                            then you enroll under a special enrollment period. This requires a life
                                            change reason that affects your subsidy or policy needs which must be
                                            selected on the application. The timeframe is generally 60 days from the
                                            life event to do the enrollment. This includes:
                                        </li>
                                        <ul class="padding-ul">
                                            <li>o Loss of coverage</li>
                                            <li>o Moving</li>
                                            <li>o Adding a dependent</li>
                                            <li>o Getting married or divorced</li>
                                            <li>o Income changes</li>
                                        </ul>


                                    </ul>

                                    <p>If in doubt or you have a more complex situation please reach out to your
                                        agent at <a class="main-blue-color" href="index.php">Engage Health Insurance
                                            LLC</a> for assistance with the application at <a
                                            href="tel:+833-775-1105" class="main-blue-color">833-775-1105</a>.
                                        Customer Service can be reached at 954-229-9062 8:30am to 5:00pm EST. This
                                        is an absolutely free service.</p>

                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>


</section>

@include('front.call-agent')

@endsection



@section('js')

@endsection