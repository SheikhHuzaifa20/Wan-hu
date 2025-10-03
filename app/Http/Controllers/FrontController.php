<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function form (Request $request)
    {
        return view('front.form');
    }

    public function learning (Request $request)
    {
        return view('front.learning');
    }

    public function enroll (Request $request)
    {
        return view('front.enroll');
    }

    public function health_insurance (Request $request)
    {
        return view('front.health-insurance');
    }

    public function vision_insurance (Request $request)
    {
        return view('front.vision-insurance');
    }

    public function dental_insurance (Request $request)
    {
        return view('front.dental-insurance');
    }

    public function tactical_paramedic (Request $request)
    {
        return view('front.tactical-paramedic');
    }

    public function tactical_responder (Request $request)
    {
        return view('front.tactical-responder');
    }

    public function fp_c_course (Request $request)
    {
        return view('front.FP-C-course');
    }

    public function cc_c_course (Request $request)
    {
        return view('front.CC-C-course');
    }

    public function cc_c_course_2 (Request $request)
    {
        return view('front.CC-C-course-2');
    }

    public function cc_c_course_3 (Request $request)
    {
        return view('front.CC-C-course-3');
    }

    public function cc_c_course_4 (Request $request)
    {
        return view('front.CC-C-course-4');
    }

    public function cc_c_course_5 (Request $request)
    {
        return view('front.CC-C-course-5');
    }

    public function cc_c_course_6 (Request $request)
    {
        return view('front.CC-C-course-6');
    }

    public function cc_c_course_7 (Request $request)
    {
        return view('front.CC-C-course-7');
    }

    public function tactical_austere_medical (Request $request)
    {
        return view('front.tactical-austere-medical');
    }

    public function tactical_austere_care (Request $request)
    {
        return view('front.tactical-austere-care');
    }

    public function first_responder (Request $request)
    {
        return view('front.first-responder');
    }

    public function gams_stop_the_bleed (Request $request)
    {
        return view('front.gams-stop-the-bleed');
    }

    public function naemt_amls_course (Request $request)
    {
        return view('front.naemt-amls-course');
    }

    public function naemt_phtls_course (Request $request)
    {
        return view('front.naemt-phtls-course');
    }

    public function naemt_tccc_course (Request $request)
    {
        return view('front.naemt-tccc-course');
    }

    public function naemt_tccc_course_1 (Request $request)
    {
        return view('front.naemt-tccc-course-1');
    }

    public function naemt_tccc_course_2 (Request $request)
    {
        return view('front.naemt-tccc-course-2');
    }

    public function naemt_tecc_course (Request $request)
    {
        return view('front.naemt-tecc-course');
    }

    public function naemt_tecc_course_1 (Request $request)
    {
        return view('front.naemt-tecc-course-1');
    }

    public function affordable_care_act_aca (Request $request)
    {
        return view('front.affordable-care-act-(ACA)');
    }

    public function blogs (Request $request)
    {
        return view('front.blogs');
    }

    public function contact (Request $request)
    {
        return view('front.contact');
    }

    public function insurance_services (Request $request)
    {
        return view('front.insurance-services');
    }

    public function about (Request $request)
    {
        return view('front.about');
    }

    public function about_content (Request $request)
    {
        return view('front.about-content');
    }

    public function accreditations (Request $request)
    {
        return view('front.accreditations');
    }

    public function capabilities_statement (Request $request)
    {
        return view('front.capabilities-statement');
    }

    public function checkout (Request $request)
    {
        return view('front.courses');
    }

    public function privacy_policy (Request $request)
    {
        return view('front.privacy-policy');
    }

    public function terms (Request $request)
    {
        return view('front.terms');
    }
}
