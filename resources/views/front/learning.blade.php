@php
$page = \Illuminate\Support\Facades\DB::table('pages')->where('id', 2)->first();
$sections = \Illuminate\Support\Facades\DB::table('section')->where('page_id', 2)->get();
@endphp

@extends('layouts.app')
@section('title', 'Learning')

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
        color: #2b325b;
        ;
    }
</style>
@endsection

@section('content')

<section class="inner-banner" style="background-image: url({{ asset($page->image) }})!important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-heading" aos-init aos-animate="" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    {{-- <h1>Learning <span class="blue"> --}}
                            {{-- <span class="ml6"> --}}
                                {{-- <span class="text-wrapper"> --}}
                                    {{-- <span class="letters">ACA</span> --}}
                                    {{-- </span> --}}
                                {{-- </span> --}}
                            {{-- </span> --}}
                        {{-- </h1> --}}
                    {!! $page->content !!}
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
                    <h2 class="side-heading gapp">Things to Know About <span class="blue">ACA Health </span>Plan
                        Enrollment</h2>
                    <div id="accordion" class="accordionStyle">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">What is an ACA Health Plan
                                    and its Key Features?</button>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>An ACA health plan, sometimes called a Qualified Health Plan or QHP, is a health
                                        plan that meets the requirements of the Affordable Care Act enacted in 2010. The
                                        ACA was intended to extend health coverage to millions of people more affordably
                                        than ever before, offering better benefits and lowering costs. Access was
                                        expanded through the creation of government health insurance marketplace
                                        exchanges where plans can be selected and compared. ACA plans are now offered
                                        through federal and some state health insurance exchanges for enrollment during
                                        an annual Open Enrollment Period or a Special Enrollment Period thereafter with
                                        qualified life event changes.</p>
                                    <p>There are several key achievements featured in ACA plans:
                                    </p>

                                    <ul>
                                        <li><strong class="p-color-stro">1. Coverage for Essential Health
                                                Benefits: </strong>ACA health plans are required to cover
                                            essential health benefits, including preventive care,
                                            prescription drugs, maternity care, mental health services, and
                                            more. This ensures that individuals have access to a
                                            comprehensive range of medical services.</li>
                                        <li><strong class="p-color-stro">2. Preventive Care Services:
                                            </strong>ACA plans typically cover preventive care services at no
                                            additional cost to the insured individual. This can include
                                            screenings, vaccinations, and counseling aimed at preventing or
                                            detecting health issues early, helping to promote overall
                                            wellness.</li>
                                        <li><strong class="p-color-stro">3. No Denial for Pre-existing
                                                Conditions: </strong>Under the ACA, insurance companies are
                                            prohibited from denying coverage or charging higher premiums
                                            based on pre-existing conditions. This protection ensures that
                                            individuals with health issues can still obtain affordable
                                            coverage.</li>
                                        <li><strong class="p-color-stro">4. Subsidies and Tax Credits:
                                            </strong>Many individuals and families may qualify for subsidies
                                            or tax credits to help lower the cost of their health insurance
                                            premiums. These financial assistance programs are available to
                                            eligible individuals purchasing coverage through the Health
                                            Insurance Marketplaces. This key achievement of ACA plans lowers
                                            the cost of monthly premiums for the insurance plan for the
                                            eligible insured.</li>
                                        <li><strong class="p-color-stro">5. Access to Networks of Providers:
                                            </strong>ACA plans typically offer access to networks of doctors,
                                            specialists, hospitals, and other healthcare providers. Depending
                                            on the plan type (such as HMOs or PPOs), individuals may have
                                            varying degrees of flexibility in choosing their healthcare
                                            providers.</li>
                                        <li><strong class="p-color-stro">6. Cost-sharing Reductions for
                                                Low-Income Individuals:
                                            </strong>For those who qualify based on income, ACA health plans
                                            may offer cost-sharing reductions, which lower out-of-pocket
                                            costs like deductibles, copayments, and coinsurance. This helps
                                            make healthcare more affordable for lower-income individuals and
                                            families.</li>
                                        <li><strong class="p-color-stro">7. Coverage for Dependents:
                                            </strong>ACA plans allow young adults to stay on their parents'
                                            health insurance plans until the age of 26, providing coverage
                                            for those who may be transitioning into the workforce or pursuing
                                            higher education.</li>
                                    </ul>


                                    <p>Ultimately, the "best" ACA health plan for an individual will depend on
                                        factors such as their healthcare needs, budget, preferred providers,
                                        and eligibility for subsidies or other financial assistance. It's
                                        important for individuals to carefully compare plan options and
                                        consider their specific circumstances when selecting a health
                                        insurance plan.</p>

                                    <div class="main-border"></div>

                                    <p>The licensed agents at <a href="index.php">Engage Health Insurance
                                            LLC</a> can help check eligibility, navigate the marketplace
                                        applications, and help select which plan is the most useable for an
                                        individual’s or family’s particular situation. We welcome your
                                        inquiry.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwelve1">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve1" aria-expanded="false"
                                    aria-controls="collapseTwelve1">What kinds of insurance plans will you find
                                    available with ACA?
                                </button>

                            </div>
                            <div id="collapseTwelve1" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <h3>Preferred Provider Organization (PPO) Plans</h3>
                                    <p>With a PPO, most healthcare is provided by a network of providers who are
                                        partnered with the plan and offer a substantial discount off their normal rates.
                                        Members can also receive service from providers outside of the network for a
                                        higher out-of-pocket cost. The major advantages of a PPO are flexibility and
                                        choice; for example, with a PPO you can get specialist visits covered without a
                                        referral from your primary care doctor.</p>

                                    <h3>Health Maintenance Organization (HMO) Plans</h3>

                                    <p>HMOs are a lower cost alternative to PPOs, offering less flexibility but also
                                        lower premiums. Unlike a PPO, HMO members must receive care from doctors,
                                        specialists and hospitals that are within the HMO’s network. It generally won’t
                                        cover out-of-network care except in an emergency. An HMO may require that you
                                        live or work in its service area to be eligible for coverage. With an HMO, you
                                        select a primary care physician, or PCP, who serves as your primary contact for
                                        all of your healthcare needs. In addition to providing general medical care,
                                        your PCP must also be consulted in order to see a specialist. HMOs provide
                                        integrated care and focus on prevention and wellness.</p>

                                    <h3>Exclusive Provider Organization (EPO)</h3>

                                    <p>An EPO health plan is a managed health insurance plan that requires you to see
                                        healthcare providers only within the EPO network. EPO plans won't usually pay
                                        for out-of-network care except in an emergency situation.</p>

                                    <p>EPOs and HMOs are similar. The primary difference between an EPO and an HMO is
                                        that you do not typically have to have a primary care physician when you use an
                                        EPO. An EPO plan also typically has a larger network of providers than an HMO
                                        plan.</p>

                                    <p>EPOs are similar to PPOs in that you don't usually have to get a referral to see
                                        a specialist. However, PPOs tend to be more flexible than EPOs and HMOs since
                                        they give you more options to go out of network.</p>

                                    <h3>Point of Service (POS) Plans</h3>

                                    <p>With Point of Service plans, the subscriber is given a choice of receiving in-net
                                        work care or out of network care. With in-network care the insured receives care
                                        from a particular network of doctors and hospitals which is coordinated by the
                                        PCP or primary care provider. The PCP would provide a referral to see a
                                        specialist. Out-of-network coverage comes into play when the insured sees a
                                        provider who does not participate in the network and the care is not coordinated
                                        by the PCP. The insured pays more for out-of-network care than they would within
                                        the POS network.</p>

                                    <h3>Health Savings Accounts (HSA) Plans</h3>

                                    <p>Health Savings Account Plans allow you to put tax-free money away to cover
                                        healthcare costs. HSA Plans must be combined with a High Deductible Health Plan
                                        (HDHP), which is a plan that offers low premiums in exchange for a high
                                        deductible. HSAs and HDHPs complement each other because the income tax-free
                                        money that you put into your HSA can be used to pay for your deductible, should
                                        you ever require expensive medical care. HSAs are regulated by the IRS, and have
                                        similarities with other investment vehicles; for example, ownership can be
                                        transferred to a spouse tax-free if the account owner dies.</p>

                                    <div class="main-border"></div>

                                    <p>The licensed agents at <a href="index.php">Engage Health Insurance
                                            LLC</a> can help you check your eligibility for a $0 or Low
                                        Premium Plan and help you navigate the enrollment process. Your
                                        inquiry is always welcome!</p>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwelve2">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve2" aria-expanded="false"
                                    aria-controls="collapseTwelve2">Is there a good selection of Trusted,
                                    Quality Insurance Carriers participating in the ACA Marketplace? </button>
                            </div>
                            <div id="collapseTwelve2" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely, there are many trusted health insurance carriers to choose from in
                                        your area and around the country. It gets better every day. Some examples
                                        include;</p>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul>
                                                <li>Aetna</li>
                                                <li>Ambetter</li>
                                                <li>AmeriHealth Caritas</li>
                                                <li>Anthem</li>
                                                <li>Blue Cross Blue Shield</li>
                                                <li>CareSource</li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-4">
                                            <ul>
                                                <li>Cigna</li>
                                                <li>Kaiser Permanente</li>
                                                <li>Molina</li>
                                                <li>Oscar</li>
                                                <li>United Health Care</li>
                                                <li>And many more...</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="main-border"></div>

                                    <p>The licensed agents at <a href="index.php">Engage Health Insurance
                                            LLC</a> can help check eligibility, navigate the marketplace
                                        applications, and help select which plan is the most useable for an
                                        individual’s or family’s particular situation. We welcome your
                                        inquiry.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwelve3">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve3" aria-expanded="false"
                                    aria-controls="collapseTwelve3">What is the significance of the health plan
                                    ‘metal’ categories of Bronze, Silver, Gold and Platinum when choosing a
                                    plan?</button>
                            </div>
                            <div id="collapseTwelve3" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>The health insurance marketplace classifies plans into four tiers named after the
                                        metals: Bronze, Silver, Gold and Platinum. These tier categories are based on
                                        how the insured and the plan split the costs of the health care.</p>

                                    <p><strong>Bronze: </strong> Plans have the lowest monthly premiums but you
                                        will pay more for most routine care yourself. The deductible or amount
                                        you pay before the plan starts paying is high and the copays are 40%
                                        when you receive services. Bronze plans are a good choice if you do
                                        not have chronic conditions and want coverage for emergencies. (A
                                        60/40 plan)</p>

                                    <p>
                                        <strong>Silver: </strong>Plans have a moderate monthly premium and
                                        moderate costs when you need care. Deductibles and coinsurance
                                        requirements are lower. You’ll pay 30% when you receive services. A
                                        silver plan can be cheaper than a bronze plan when you qualify for
                                        cost-sharing if eligible due to income below certain thresholds. You
                                        must pick a silver plan for those extra savings. This is a good choice
                                        if you quality for ‘extra-savings.’ Some ACA silver plans have 0%
                                        deductibles. (A 70/30 Plan)
                                    </p>

                                    <p>
                                        <strong>Gold: </strong>
                                        Plans have higher monthly premiums and low costs when care is needed
                                        and low deductibles. With a gold plan you’ll pay 20% when services are
                                        used. Gold plans can be a good value if you need frequent care as
                                        though the monthly premium cold be more, nearly all other costs would
                                        be covered. (An 80/20 plan)
                                    </p>

                                    <p>
                                        <strong>Platinum: </strong>
                                        Has the highest monthly premium but like the Gold plans could be a
                                        good choice if you use a lot of care. Deductibles are low and the
                                        coinsurance is 10% for services used. (A 90/10 plan)
                                    </p>

                                    <p>
                                        <strong>Note:</strong>
                                        Plans in all of the metal tiers provide free preventative care, and
                                        many offer selected services for free or discounted prices where the
                                        deductible does not apply.
                                    </p>

                                    <div class="main-border"></div>

                                    <p>
                                        The licensed agents at <a href="index.php">Engage Health Insurance</a>
                                        LLC
                                        can help you review the plans and choose one that fits your medical
                                        services needs. Many who qualify for an ACA subsidy due to income
                                        basis can get plans in various metal categories for $0 to very low
                                        monthly premium.
                                    </p>

                                    <div class="set-tire-main">
                                        <i class="fa-sharp fa-solid fa-gears"></i>
                                        <a href="tel:+833-775-1105">Call: 833-775-1105</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" id="headingTwelve4-4">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve4-4" aria-expanded="false"
                                    aria-controls="collapseTwelve4-4">What is a Special Enrollment Period (SEP) in the
                                    Marketplace for ACA Plans?</button>
                            </div>
                            <div id="collapseTwelve4-4" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>A Special Enrollment Period (SEP) provides an opportunity for individuals
                                        experiencing life changes to obtain or adjust their insurance coverage outside
                                        the regular open enrollment period. To be eligible for a Special Enrollment
                                        Period individuals must experience a qualifying life event. These events
                                        include, but are not limited to, getting married or divorced, having a baby or
                                        adopting a child, losing other health coverage (such as employer-sponsored
                                        coverage, Medicaid or losing coverage at age 26 coming off the parent’s plan),
                                        moving to a new area that affects eligibility for Marketplace coverage, gaining
                                        citizenship or experiencing certain changes in income that affect eligibility
                                        for premium tax credits or cost-sharing reductions.</p>

                                    <p>The time frame for SEP enrollment is generally 60 days after the qualifying
                                        event. Some events, such as losing other coverage or gaining a dependent through
                                        birth or adoption, can trigger an SEP retroactively allowing enrollment in
                                        coverage back to the date of the qualifying event. Start dates are usually the
                                        1st of the month following the enrollment date.</p>

                                    <p>Documentation might be required to verify SEP eligibility such as a marriage or
                                        birth certificate or proof of income changes depending on the situation.</p>

                                    <div class="main-border"></div>

                                    <p>The licensed agents at <a href="index.php">Engage Health Insurance LLC</a> can
                                        help check eligibility for the SEP and its triggering event. It is a complex
                                        landscape and we can help navigate the marketplace application, and help select
                                        which plan is the most advantageous for an individual’s or family’s particular
                                        situation. We welcome your inquiry. </p>


                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwelve-mine-1">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve-mine-1" aria-expanded="false"
                                    aria-controls="collapseTwelve-mine-1">Will my ACA Health Insurance
                                    Auto-Renew?</button>
                            </div>
                            <div id="collapseTwelve-mine-1" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes! The information on your health insurance application will be used from year
                                        to year to keep your coverage active. If you have any changes to your household
                                        or income information, it could affect your subsidy assistance and your monthly
                                        premium amount. Before the start of the new coverage year, the Marketplace will
                                        send you a notice explaining your current plan's renewal and any changes in
                                        costs or coverage for the upcoming year. Insurance companies may make changes to
                                        their plans each year, such as adjusting premiums, changing networks, modifying
                                        covered benefits or even not offering a re-enrollment Qualified Health Plan in
                                        the new plan year. It's essential to review this information carefully and
                                        update in order to actively address your new needs and options for coverage.</p>

                                    <p>Marketplace auto-renewals will try and effect renewal into the closest plan based
                                        on the information in the previous year’s application. This is to ensure that
                                        current year enrollees who do not make an active selection by December 15th have
                                        a plan at the start of the year to avoid a coverage gap. </p>

                                    <p>Active re-enrollment, where an applicant updates their application and
                                        plan selection, is always preferred to allow for the most accurate
                                        financial assistance eligibility determination. <a href="index.php">Engage
                                            Health
                                            Insurance LLC</a>, with client auto-renewal permission will
                                        endeavor to
                                        renew into the closest plan for the same $0 or Low Premium amount with
                                        the same carrier so that coverage is not at risk. Your agent will
                                        review with you other selections as well.</p>

                                    <div class="main-border"></div>

                                    <p><a href="index.php">Engage Health Insurance LLC</a> is happy to help with an
                                        active selection
                                        during the renewal process in order to maintain your desired premium
                                        level and keep pace with your changing medical insurance needs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwelve-mine-2">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve-mine-2" aria-expanded="false"
                                    aria-controls="collapseTwelve-mine-2">What are the Open Enrollment Dates
                                    and Deadlines for ACA Health Plans?</button>
                            </div>
                            <div id="collapseTwelve-mine-2" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">

                                    <div class="main-bigbash-div">
                                        <div class="main-calender-div">
                                            <a href="#nov">
                                                <div class="sub-calender-div">
                                                    <span class="color-blue-div"></span>
                                                    <span>NOV <br> 1</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="main-calender-div">
                                            <a href="#dec">
                                                <div class="sub-calender-div">
                                                    <span class="color-blue-div"></span>
                                                    <span>DEC <br> 15</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="main-calender-div">
                                            <a href="#jan-1">
                                                <div class="sub-calender-div">
                                                    <span class="color-blue-div"></span>
                                                    <span>JAN <br> 1</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="main-calender-div">
                                            <a href="#jan-2">
                                                <div class="sub-calender-div">
                                                    <span class="color-blue-div"></span>
                                                    <span>JAN <br> 15</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="main-calender-div">
                                            <a href="#feb">
                                                <div class="sub-calender-div">
                                                    <span class="color-blue-div"></span>
                                                    <span>FEB <br> 1</span>
                                                </div>
                                            </a>
                                        </div>


                                    </div>

                                    <h3 id="nov">November 1:</h3>

                                    <p>Open Enrollment begins for health coverage for the next plan year. This is the
                                        first day consumers can enroll, re-enroll, renew or change health plans through
                                        the Health Insurance Marketplace or their licensed FFM/Exchange Certified Agent
                                        for coverage to start on January 1.</p>

                                    <h3 id="dec">December 15:</h3>

                                    <p>The last day to perform an active renewal of an existing plan before the Health
                                        Insurance Marketplace implements BAR auto-renewals intended to prevent coverage
                                        lapses so new plan year coverage is effective January 1st. Enrollments anytime
                                        in December will be effective January 1st. Active enrollments are encouraged so
                                        information is updated and any changes in circumstances or needs can be
                                        considered in new plan year choices. </p>

                                    <h3 id="jan-1">January 1:</h3>

                                    <p>New plan year coverage starts for those who enrolled in or changed plans by
                                        December 31 and paid their first premium or binder payment as required.</p>

                                    <h3 id="jan-2">January 15:</h3>

                                    <p>The last day of the Open Enrollment Period and the the last day to enroll in or
                                        change health plans for coverage that would become effective on February 1
                                        without an SEP. Enrollments after January 15 until the end of January fall into
                                        a Special Enrollment Period but can be effective February 1. </p>

                                    <h3 id="feb">February 1:</h3>

                                    <p>Coverage effective date for consumers who enrolled in or changed plans after
                                        year’s end through the end of January and paid their first premium or binder
                                        payment as required.</p>


                                    <div class="main-border"></div>


                                    <div class="set-tire-main">
                                        <i class="fa-sharp fa-solid fa-gears"></i>
                                        <p>The licensed agents at <a href="index.php">Engage Health Insurance
                                                LLC</a> can help you check your eligibility for a $0 or Low
                                            Premium Plan and help you navigate the enrollment process. Your
                                            inquiry is always welcome!</p>
                                    </div>




                                    <div class="health-btn">
                                        <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag" class="btn btn-custom">See Plans </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwelve-mine-3">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve-mine-3" aria-expanded="false"
                                    aria-controls="collapseTwelve-mine-3">What is the Open Enrollment Period
                                    (OEP) in the ACA Health Insurance Marketplace?</button>
                            </div>
                            <div id="collapseTwelve-mine-3" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Open enrollment for ACA (Affordable Care Act) health plans is a
                                        designated period during which individuals and families can enroll in,
                                        make changes, renew, or re-enroll in their health insurance coverage
                                        through the Health Insurance Marketplace. This is done on an annual
                                        schedule and allows individuals to sign up for a health insurance plan
                                        or switch to a different one which better meets their needs. This
                                        includes individuals seeking insurance for the first time as well as
                                        those renewing or changing plans.</p>

                                    <p>Open enrollment is yearly with a start and end date which might vary
                                        slightly from year to year but generally is November 1 of a given year
                                        and runs until January 15th of the next year. The federal government
                                        and state-based exchanges announce these dates well in advance. Assuming enrollment by the end of December, the start date would be January 1st to be set for the new year.</p>

                                    <p>A licensed FFM certified health insurance agent or agency such as <a
                                            href="index.php">Engage Health Insurance LLC</a> can help you to
                                        navigate this process. </p>

                                    <div class="main-border"></div>

                                    <p>The licensed agents at <a href="index.php">Engage Health Insurance
                                            LLC</a> can help you check your eligibility for a $0 or Low
                                        Premium Plan and help you navigate the enrollment process. Your
                                        inquiry is always welcome!</p>





                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwelve-mine-4">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve-mine-4" aria-expanded="false"
                                    aria-controls="collapseTwelve-mine-4">Do I have to enroll in health
                                    insurance through the health insurance marketplace?</button>
                            </div>
                            <div id="collapseTwelve-mine-4" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>While you do not have to enroll through the Health Insurance Marketplace to
                                        obtain health insurance, if you are interested in an Advanced Premium Tax
                                        Credit, Subsidy and Financial Assistance to help pay for the plan, then it is
                                        best to utilize the marketplace exchange.</p>

                                    <p>A licensed agent can help navigate the application for marketplace
                                        insurance. You will be prepared to answer questions related to zip
                                        code, family size, household income, and who in the household needs
                                        coverage. Once the information is entered an eligibility determination
                                        will be shown. You would have an idea then of what your subsidy might
                                        be and can review plans for the one that fits you best. </p>

                                    <p>Some questions will be:</p>

                                    <ul>
                                        <li>• Are you filing taxes as a single or married person?</li>
                                        <li>• If married do you file jointly? Married filing separately are
                                            not eligible for subsidy. </li>
                                        <li>• Do you have dependents that you claim on your tax return?</li>
                                        <li>• Does anyone claim you as a dependent on their tax return?</li>
                                        <li>• What is your estimated annual income for the household?</li>
                                        <li>• Do you want to get financial help for your monthly premium?</li>
                                        <li>• What is your citizenship status? </li>
                                    </ul>

                                    <p>ACA plans through the health insurance marketplace are designed to be
                                        affordable and accessible for eligible individuals and families and to
                                        foster preventative care habits and wellness because it is accessible.
                                    </p>

                                    <div class="main-border"></div>

                                    <p>The licensed agents at <a href="index.php">Engage Health Insurance
                                            LLC</a> can help you check your eligibility for a $0 or Low
                                        Premium Plan and help you navigate the enrollment process. Your
                                        inquiry is always welcome!</p>

                                    <div class="health-btn">
                                        <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag" class="btn btn-custom">Browse Plans</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwelve-mine-5">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve-mine-5" aria-expanded="false"
                                    aria-controls="collapseTwelve-mine-5">Can ACA subsidies lower my monthly
                                    premium for health insurance? </button>
                            </div>
                            <div id="collapseTwelve-mine-5" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely! Subsidies or Premium Tax Credits are intended to subsidize the
                                        purchase of health plans offered through federal and state health insurance
                                        exchanges. The amount of the credit is dependent upon the income you report to
                                        the Health Insurance Marketplace on your application. The subsidies are designed
                                        to help individuals who might otherwise not be able to afford the protections of
                                        having health insurance to have access to many great plans.</p>

                                    <p>Premium Tax Credits and Cost-Sharing Reductions are mechanisms for financial help
                                        depending upon your particular circumstances. An Advanced Premium Tax Credit
                                        (APTC) is a financial subsidy paid in advance by the federal government to the
                                        insurance company monthly to lower the monthly premium cost to you. If the
                                        subsidy is equal to or exceeds the plan premium, you may have $0 monthly premium
                                        result. Because these subsidies are based on your estimated annual income for
                                        the year, it is important to have an accurate estimate and to update the system
                                        with any changes. If your estimate is too low you may have to pay back some of
                                        the subsidy help received when the IRS reconciles the tax returns. Conversely,
                                        if the estimate was too high you could receive some additional subsidy in the
                                        form of a tax credit. </p>

                                    <p>Cost-sharing Reductions are discounts that lower the Maximum Out-of-Pocket that
                                        you might pay under a health insurance plan. This can include “extra savings’ on
                                        deductibles and copayments. This type of cost reduction does not have to be
                                        reconciled at the end of the year as they are discounts and not tax credits.
                                        CSR’s are a feature of the Silver plans only. </p>

                                    <div class="main-border"></div>

                                    <p>The licensed agents at <a href="index.php">Engage Health Insurance
                                            LLC</a> can help you check your eligibility for a $0 or Low
                                        Premium Plan and help you navigate the enrollment process. Your
                                        inquiry is always welcome!</p>

                                    <div class="health-btn">
                                        <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag" class="btn btn-custom">Check Eligibility</a>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>


            <div class="col-lg-12">
                <div class="health-btn">
                    <a href="#" class="btn btn-custom" data-toggle="modal" data-target="#exampleModal">Request
                        a
                        Free
                        Quote</a>
                </div>
            </div>
        </div>
    </div>


</section>





@include('front.call-agent')

@endsection

@section('js')

@endsection
